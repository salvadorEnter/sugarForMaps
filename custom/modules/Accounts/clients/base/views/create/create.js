
/**
 * Created by Jorge on 6/16/2015.
 */
({
    extendsFrom: 'CreateView',
    /**
     * @author bdekoning@levementum.com
     * @date 6/9/15
     * @brief Override for handleCancel to ensure the account_telefonos attribute is properly reverted
     *
     * @override
     */

    checkInVentas:function (evt) {
        var enteros=this.checkmoneyint(evt);
        var decimales=this.checkmoneydec(evt);
        $.fn.selectRange = function(start, end) {
            if(!end) end = start;
            return this.each(function() {
                if (this.setSelectionRange) {
                    this.focus();
                    this.setSelectionRange(start, end);
                } else if (this.createTextRange) {
                    var range = this.createTextRange();
                    range.collapse(true);
                    range.moveEnd('character', end);
                    range.moveStart('character', start);
                    range.select();
                }
            });
        };//funcion para posicionar cursor

        (function ($, undefined) {
            $.fn.getCursorPosition = function() {
                var el = $(this).get(0);
                var pos = [];
                if('selectionStart' in el) {
                    pos = [el.selectionStart,el.selectionEnd];
                } else if('selection' in document) {
                    el.focus();
                    var Sel = document.selection.createRange();
                    var SelLength = document.selection.createRange().text.length;
                    Sel.moveStart('character', -el.value.length);
                    pos = Sel.text.length - SelLength;
                }
                return pos;
            }
        })(jQuery); //funcion para obtener cursor
        var cursor=$(evt.handleObj.selector).getCursorPosition();//setear cursor


        if (enteros == "false" && decimales == "false") {
            if(cursor[0]==cursor[1]) {
                return false;
            }
        }else if (typeof enteros == "number" && decimales == "false") {
            if (cursor[0] < enteros) {
                $(evt.handleObj.selector).selectRange(cursor[0], cursor[1]);
            } else {
                $(evt.handleObj.selector).selectRange(enteros);
            }
        }

    },

    checkmoneyint: function (evt) {
        if (!evt) return;
        var $input = this.$(evt.currentTarget);
        var digitos = $input.val().split('.');
        if($input.val().includes('.')) {
            var justnum = /[\d]+/;
        }else{
            var justnum = /[\d.]+/;
        }
        var justint = /^[\d]{0,14}$/;

        if((justnum.test(evt.key))==false && evt.key!="Backspace" && evt.key!="Tab" && evt.key!="ArrowLeft" && evt.key!="ArrowRight"){
            app.alert.show('error_dinero', {
                level: 'error',
                autoClose: true,
                messages: 'El campo no acepta caracteres especiales.'
            });
            return "false";
        }

        if(typeof digitos[0]!="undefined") {
            if (justint.test(digitos[0]) == false && evt.key != "Backspace" && evt.key != "Tab" && evt.key != "ArrowLeft" && evt.key != "ArrowRight") {
                console.log('no se cumplen enteros')
                if(!$input.val().includes('.')) {
                    $input.val($input.val()+'.')
                }
                return "false";

            } else {
                return digitos[0].length;
            }
        }
    },

    checkmoneydec: function (evt) {
        if (!evt) return;
        var $input = this.$(evt.currentTarget);
        var digitos = $input.val().split('.');
        if($input.val().includes('.')) {
            var justnum = /[\d]+/;
        }else{
            var justnum = /[\d.]+/;
        }
        var justdec = /^[\d]{0,1}$/;

        if((justnum.test(evt.key))==false && evt.key!="Backspace" && evt.key!="Tab" && evt.key!="ArrowLeft" && evt.key!="ArrowRight"){
            app.alert.show('error_dinero', {
                level: 'error',
                autoClose: true,
                messages: 'El campo no acepta caracteres especiales.'
            });
            return "false";
        }
        if(typeof digitos[1]!="undefined") {
            if (justdec.test(digitos[1]) == false && evt.key != "Backspace" && evt.key != "Tab" && evt.key != "ArrowLeft" && evt.key != "ArrowRight") {
                console.log('no se cumplen dec')
                return "false";
            } else {
                return "true";
            }
        }
    },


    handleCancel: function () {
        var account_telefonos = this.model._previousAttributes.account_telefonos;
        var account_direcciones = this.model._previousAttributes.account_direcciones;
        this._super("handleCancel");
        this.model.set("account_telefonos", account_telefonos);
        this.model.set("account_direcciones", account_direcciones);
        this.model._previousAttributes.account_telefonos = account_telefonos;
        this.model._previousAttributes.account_direcciones = account_direcciones;


        $('.select2-choices').css('border-color', '');
    },


    /*
     bindDataChange: function () {
     this._super("bindDataChange");
     //var self = this;
     this.model.on("change:tipodepersona_c", _.bind(function () {
     if(this.model._previousAttributes.tipodepersona_c == 'Persona Fisica'){
     if(this.model.get('tipodepersona_c') == 'Persona Moral'){
     this.model.set('tipodepersona_c','Persona Fisica');
     }
     }
     if(this.model._previousAttributes.tipodepersona_c == 'Persona Fisica con Actividad Empresarial'){
     if(this.model.get('tipodepersona_c') == 'Persona Moral'){
     this.model.set('tipodepersona_c','Persona Fisica con Actividad Empresarial');
     }
     }
     if(this.model._previousAttributes.tipodepersona_c == 'Persona Moral'){
     if(this.model.get('tipodepersona_c') == 'Persona Fisica' || this.model.get('tipodepersona_c') == 'Persona Fisica con Actividad Empresarial'){
     this.model.set('tipodepersona_c','Persona Moral');
     }
     }
     }, this));
     },
     */

    _render: function (fields, errors, callback) {
        this._super("_render");

        $('div[data-name=accounts_tct_pld]').find('div.record-label').addClass('hide');
        $('[data-name=tct_nuevo_pld_c]').hide(); //Oculta campo tct_nuevo_pld_c

       //Oculta campo Lead no viable en la creacion de cuentas
        $('[data-name="tct_noviable"]').hide();
        /*
         * @author Salvador Lopez
         * Ocultar panel de fideicomiso y ocultar paneles de Peps para Persona Moral
         * (Se asume que valor por default para tipo de persona es "Persona F�sica")
         * */
        this.$("li.tab.LBL_RECORDVIEW_PANEL2").hide();

        //Oculta Peps de Persona Moral
        this.$("[data-panelname='LBL_RECORDVIEW_PANEL7']").hide();
        this.$("[data-panelname='LBL_RECORDVIEW_PANEL6']").hide();
        this.$("[data-panelname='LBL_RECORDVIEW_PANEL9']").hide();

        //Ocultar Div "Prospecto Contactado"
        $('div[data-name=tct_prospecto_contactado_chk_c]').hide();

        /* @author F. Javier Garcia S. 10/07/2018
         Agregar dependencia al panel NPS, para ser visible si "Tipo de Cuenta" es "Cliente".
         */
        this.$("[data-panelname='LBL_RECORDVIEW_PANEL10']").hide();


        /*
         AF: 11/01/18
         Merge create-create-actions.js
         */
        /** BEGIN CUSTOMIZATION: jgarcia@levementum.com 8/26/2015 Description: When Pais or Profesion field is changed, Recalculate the Riesgo */
        this._doValidateProfesionRisk();
        /* END CUSTOMIZATION */

        /*
         * @author Carlos Zaragoza ortiz
         * Ocultar campo de estatus Activo/Inactivo en creaci�n de personas
         * */
        this.$('div[data-name=estatus_persona_c]').hide();

        if (this.model.dataFetched) {
            this.model.on("change:tipo_registro_c", _.bind(function () {
                // Carlos Zaragoza: Se elimina el campo por defaiult de tipo de proveedor del registro pero sies proveedor, se selecciona bienes por default
                // if(this.model.get('tipo_registro_c') == 'Proveedor'){
                //     this.model.set('tipo_proveedor_c', '1');
                // }
                app.api.call("read", app.api.buildURL("Accounts/" + this.model.get("id") + "/link/rel_relaciones_accounts_1", null, null, {
                    fields: name,
                }), null, {
                    success: _.bind(function (data) {

                        if (data.records.length > 0) {
                            var ContacFlag = false;
                            $(data.records).each(function (index, value) {

                                if ($.inArray("Contacto", value.relaciones_activas) > -1) {
                                    //YES IS A CONTACT!!!!
                                    ContacFlag = true;
                                }
                            });
                            if (this.model._syncedAttributes.tipo_registro_c != 'Cliente') {
                                if (ContacFlag == false) {
                                    app.alert.show("Validar Relacion", {
                                        level: "error",
                                        title: "Debe capturar al menos un contacto.",
                                        autoClose: false
                                    });

                                    this.model.set('tipo_registro_c', 'Prospecto');
                                    errors['account_contacts'] = errors['account_contacts'] || {};
                                }
                            }
                        }
                        if (data.records.length <= 0) {
                            if (this.model._syncedAttributes.tipo_registro_c != 'Cliente') {

                                app.alert.show("Validar Relacion", {
                                    level: "error",
                                    title: "Debe capturar al menos un contacto.",
                                    autoClose: false
                                });
                                this.model.set('tipo_registro_c', 'Prospecto');
                                errors['account_contacts'] = errors['account_contacts'] || {};
                            }
                        }
                    }, this)
                });
            }, this));

            /** BEGIN CUSTOMIZATION: jgarcia@levementum.com 6/12/2015 Description: Check for an existing RFC*/
            var fields = ["primernombre_c", "segundonombre_c", "apellidopaterno_c", "apellidomaterno_c", 'rfc_c'];
            this.model.on("change:rfc_c", _.bind(function () {
                var RFC = this.model.get('rfc_c');
                app.api.call("read", app.api.buildURL("Accounts/", null, null, {
                    fields: fields.join(','),
                    max_num: 5,
                    "filter": [
                        {
                            "rfc_c": RFC,
                            "id": {
                                $not_equals: this.model.id,
                            }
                        }
                    ]
                }), null, {
                    success: _.bind(function (data) {
                        if (data.records.length > 0) {

                            app.alert.show("DuplicateCheck", {
                                level: "error",
                                title: "El RFC ingresado ya Existe.",
                                autoClose: false
                            });

                            this.model.set("rfc_c", '');
                        }

                    }, this)
                });
            }, this));

            console.log($('.existingAddress').val());
        }

        //Hide Vista360
        this._hideVista360();
        //this.model.set("tipo_registro_c", 'Cliente');
        //this.model.set("tipo_registro_c", 'Prospecto');
        //callback(null, fields, errors);

        /* @author F. Javier Garcia S. 10/07/2018
         "El tipo de cuenta ""Proveedor"" s�lo podr� ser seleccionado por los roles
         de Compras y el BackOffice de CA"
         */
        if (App.user.attributes.tct_altaproveedor_chk_c) {

            this.model.set("tipo_registro_c", 'Proveedor');

        }

        if (App.user.attributes.tct_alta_clientes_chk_c) {

            this.model.set("tipo_registro_c", 'Cliente');

        }


        //VM 14/09/2018
        this.checkProveedor();

        this.mostrarpaneldirec();

    },

    initialize: function (options) {
        self = this;
        this._super("initialize", [options]);

        //Hide panels
        this.model.on('change:tct_fedeicomiso_chk_c', this._hideFideicomiso, this);
        this.model.on('change:tipodepersona_c', this._hidePeps, this);
        this.model.on("change:tipo_registro_c", this._hideGuardar, this);

        //add validation tasks
        this.model.addValidationTask('checkaccdatestatements', _.bind(this.checkaccdatestatements, this));
        this.model.addValidationTask('check_email_telefono', _.bind(this._doValidateEmailTelefono, this));
        //@Jesus Carrillo
        this.model.addValidationTask('check_telefonos', _.bind(this.validatelefonosexisting, this));
        this.model.addValidationTask('check_direcciones', _.bind(this.validadireccexisting, this));
        this.model.addValidationTask('check_rfc', _.bind(this._doValidateRFC, this));
        this.model.on('change:pais_nacimiento_c', this.validaExtranjerosRFC, this);
        //this.model.on('change:rfc_c',this.validaFechaNacimientoDesdeRFC, this);
        this.model.on('change:account_telefonos', this.setPhoneOffice, this);

        //Se mete expresion regular para limitar el funcionamiento del campo email .
        //Adrian Arauz 12-/09/2018
        this.model.addValidationTask('change:email', _.bind(this.expmail, this));

        //Valida que el campo Alta Cedente este check en el perfil del usuario. Adrian Arauz 20/09/2018
        this.model.addValidationTask('check_alta_cedente', _.bind(this.validacedente, this));


        /*
         AF: 11/01/18
         Merge create-create-actions.js
         */
        //add validation tasks
        this.model.addValidationTask('check_fecha_de_nacimiento', _.bind(this._doValidateMayoriadeEdad, this));
        this.model.addValidationTask('check_account_direcciones', _.bind(this._doValidateDireccion, this));
        //this.model.addValidationTask('check_Tiene_Contactos', _.bind(this._doValidateTieneContactos, this));
        this.model.addValidationTask('check_1900_year', _.bind(this.fechaMenor1900, this));
        this.model.addValidationTask('fechadenacimiento_c', _.bind(this.doValidateDateNac, this));
        this.model.addValidationTask('fechaconstitutiva_c', _.bind(this.doValidateDateCons, this));
        this.model.addValidationTask('check_info', _.bind(this.doValidateInfoReq, this));
        //this.model.addValidationTask('tipo_proveedor', _.bind(this.tipoProveedor_check,this));
        //this.model.addValidationTask('check_formato_curp_c', _.bind(this.ValidaFormatoCURP, this));
        this.model.addValidationTask('camposnumericosPLDFF',_.bind(this.validacantidades, this));

        /* F. Javier G. Solar
                OBS299 Validar que las Direcciones no se repitan 21/11/2018
             */

        this.model.addValidationTask('validate_Direccion_Duplicada', _.bind(this._direccionDuplicada, this));

        /**
         * @author Carlos Zaragoza Ortiz
         * @date 16-10-2015
         * UNIFIN TASK: Modificar el riesgo en caso de seleccionar "PEP" en cuestionario de PLD
         * */
        this.model.addValidationTask('verificaRiesgoPep', _.bind(this.cambiaRiesgodePersona, this));
        /**
         * @author Carlos Zaragoza Ortiz
         * @date 16-10-2015
         * UNIFIN TASK: Al ser proveedor debe solicitar como obligatorio el tipo de proveedor
         * */
        this.model.addValidationTask('tipo_proveedor_requerido', _.bind(this.validaProveedorRequerido, this));
        /* END */

        //this.model.on('change:tipo_registro_c', this._ShowDireccionesTipoRegistro, this);
        //this.model.on('change:estatus_c', this._ShowDireccionesTipoRegistro, this);
        this.model.on('change:tipodepersona_c', this._ActualizaEtiquetas, this);
        this.model.on('change:origendelprospecto_c', this.changeLabelMarketing, this);

        //this.model.on('change:fechadenacimiento_c', this._doGenera_RFC_CURP, this);
        //this.model.on('change:fechaconstitutiva_c', this._doGenera_RFC_CURP, this);
        //this.model.on('change:razonsocial_c', this._doGenera_RFC_CURP, this);
        //this.model.on('change:primernombre_c', this._doGenera_RFC_CURP, this);
        //this.model.on('change:apellidopaterno_c', this._doGenera_RFC_CURP, this);
        //this.model.on('change:apellidomaterno_c', this._doGenera_RFC_CURP, this);

        //this.model.on('change:genero_c', this._doGeneraCURP, this);
        //this.model.on('change:pais_nacimiento_c', this._doGeneraCURP, this);
        //this.model.on('change:estado_nacimiento_c', this._doGeneraCURP, this);

        this.model.addValidationTask('valida_potencial',_.bind(this.validapotencial, this));

        this.model.addValidationTask('valida_requeridos',_.bind(this.valida_requeridos, this));


        /*Validacion de campos requeridos en el cuestionario PLD y sus productos
        * Adrian Arauz 23/01/2019
        * */
        //this.model.addValidationTask('RequeridosPLD', _.bind(this.validaRequeridosPLD, this));
        this.model.addValidationTask('guardaProductosPLD', _.bind(this.saveProdPLD, this));
        /*Funcion para validar los campos ventas anuales y activo fijo al editar una cuenta de tipo
        * Integración de Expediente
        * Adrian Arauz 4/10/2018
        * */

        this.model.on('change:profesion_c', this._doValidateProfesionRisk, this);
        this.model.on('change:pais_nacimiento_c', this._doValidateProfesionRisk, this);
        //this.model.on('change:pais_nacimiento_c',this.validaExtranjerosRFC, this);

        //this.model.on('change:rfc_c',this.validaFechaNacimientoDesdeRFC, this);

        /*
         AF - 26/12/17
         Ajuste: Ocultar campo dependiente de multiselect "�Instrumento monetario con el que espera realizar los pagos?"
         */
        this.model.on('change:tct_inst_monetario_c', this.changeInstMonetario, this);

        this.events['keydown input[name=primernombre_c]'] = 'checkTextOnly';
        this.events['keydown input[name=segundonombre_c]'] = 'checkTextOnly';
        this.events['keydown input[name=apellidomaterno_c]'] = 'checkTextOnly';
        this.events['keydown input[name=apellidopaterno_c]'] = 'checkTextOnly';

        this.events['keydown input[name=rfc_c]'] = 'checkTextAndNumRFC';
        this.events['keydown input[name=ifepasaporte_c]'] = 'checkTextAndNum';

        this.events['click a[name=generar_rfc_c]'] = '_doGenera_RFC_CURP';
        this.events['click a[name=generar_curp_c]'] = '_doGeneraCURP';
        this.events['keydown [name=ctpldnoseriefiel_c]'] = 'keyDownNewExtension';
        this.events['keydown [name=tct_cpld_pregunta_u2_txf_c]'] = 'keyDownNewExtension';
        this.events['keydown [name=tct_cpld_pregunta_u4_txf_c]'] = 'keyDownNewExtension';
        //this.events['keydown [name=ctpldnoseriefiel_c]'] = 'checkInVentas';
        this.events['keydown [name=tct_cpld_pregunta_u2_txf_c]'] = 'checkInVentas';
        this.events['keydown [name=tct_cpld_pregunta_u4_txf_c]'] = 'checkInVentas';
        //Funcion para validar que no hayan direcciones repetidas al momento de darle en el check

        /* hay que traer el campo del usaurio
         * PREOMOTORES POR DEFAULT
         LEASING:
         9 - Sin Gestor
         SinGestor
         569246c7-da62-4664-ef2a-5628f649537e
         CREDIT:
         ADRIANA GAYOSSO CRUZ
         agayosso
         7a83c151-6fc3-dc2b-b3a0-562a60aa3b74
         FACTORAJE:
         //ANGEL TAMARIZ GALINDO
         //angel.tamariz
         //3f232cae-4ee1-c9b0-266d-562a600fa9d7
         Maria de Lourdes Campos Toca
         lcampos
         a04540fc-e608-56a7-ad47-562a6078519d
         */


        var usuario = app.data.createBean('Users', {id: this.model.get('assigned_user_id')});
        usuario.fetch({
            success: _.bind(function (modelo) {
                var contains = function (needle) {
                    // Per spec, the way to identify NaN is that it is not equal to itself
                    var findNaN = needle !== needle;
                    var indexOf;

                    if (!findNaN && typeof Array.prototype.indexOf === 'function') {
                        indexOf = Array.prototype.indexOf;
                    } else {
                        indexOf = function (needle) {
                            var i = -1, index = -1;

                            for (i = 0; i < this.length; i++) {
                                var item = this[i];

                                if ((findNaN && item !== item) || item === needle) {
                                    index = i;
                                    break;
                                }
                            }

                            return index;
                        };
                    }

                    return indexOf.call(this, needle) > -1;
                };
                /** Modificaci�n a Multiproducto para promotores por default
                 * Carlos Zaragoza
                 * Enero 25, 2016 10:15 AM
                 * */
                if (contains.call(modelo.get('productos_c'), "1")) {
                    this.model.set('promotorleasing_c', modelo.get('name'));
                    this.model.set('user_id_c', modelo.get('id'));
                } else {
                    this.model.set('promotorleasing_c', '9 - Sin Gestor');
                    this.model.set('user_id_c', '569246c7-da62-4664-ef2a-5628f649537e');
                }
                if (contains.call(modelo.get('productos_c'), "4")) {
                    this.model.set('promotorfactoraje_c', modelo.get('name'));
                    this.model.set('user_id1_c', modelo.get('id'));
                } else {
                    this.model.set('promotorfactoraje_c', '9 - Sin Gestor');
                    this.model.set('user_id1_c', '569246c7-da62-4664-ef2a-5628f649537e');
                }
                if (contains.call(modelo.get('productos_c'), "3")) {
                    this.model.set('promotorcredit_c', modelo.get('name'));
                    this.model.set('user_id2_c', modelo.get('id'));
                } else {
                    this.model.set('promotorcredit_c', '9 - Sin Gestor');
                    this.model.set('user_id2_c', '569246c7-da62-4664-ef2a-5628f649537e');
                }
                if (contains.call(modelo.get('productos_c'), "1") == false && contains.call(modelo.get('productos_c'), "3") == false && contains.call(modelo.get('productos_c'), "4") == false) {
                    this.model.set('promotorleasing_c', '9 - Sin Gestor');
                    this.model.set('user_id_c', '569246c7-da62-4664-ef2a-5628f649537e');
                    this.model.set('promotorfactoraje_c', '9 - Sin Gestor');
                    this.model.set('user_id1_c', '569246c7-da62-4664-ef2a-5628f649537e');
                    this.model.set('promotorcredit_c', '9 - Sin Gestor');
                    this.model.set('user_id2_c', '569246c7-da62-4664-ef2a-5628f649537e');
                }
            }, this)
        });

        /** BEGIN CUSTOMIZATION: jgarcia@levementum.com 7/14/2015 Description: Cuando estamos en el modulo de Personas, no queremos que se muestre la opcion Persona para el tipo de registro */
        var new_options = app.lang.getAppListStrings('tipo_registro_list');

        if (App.user.attributes.tct_alta_cd_chk_c != 1) {
            Object.keys(new_options).forEach(function (key) {
                if (key == "Persona") {
                    delete new_options[key];
                }
            });
        }


        //eliminar Lead
        /*
        var checkrol = 0;
        for (var i = 0; i < App.user.attributes.roles.length; i++) {
            if (App.user.attributes.roles[i] == "Planeacion y Estrategia Comercial") {
                checkrol++;
            }
        }
        Object.keys(new_options).forEach(function (key) {
            if (key == "Lead" && checkrol > 0) {
                delete new_options[key];
            }
        });
        */
        //fin

        /* @author: Salvador Lopez
        * Se establecen opciones dependiendo los valores de Alta Proveedor y Alta Cliente del usuario firmado
        *
        * */

        //Establecer únicamente las opciones de Cliente y Proveedor cuando el usuario tenga las dos casillas seleccionadas
        if (App.user.attributes.tct_alta_clientes_chk_c == 1 && App.user.attributes.tct_altaproveedor_chk_c == 1 ) {
            Object.keys(new_options).forEach(function (key) {
                if (key != "Cliente" && key != "Proveedor") {
                    delete new_options[key];
                }
            });
        }else if(App.user.attributes.tct_alta_clientes_chk_c == 1) {

            Object.keys(new_options).forEach(function (key) {
                if (key != "Cliente") {
                    delete new_options[key];
                }
            });
        }else if(App.user.attributes.tct_altaproveedor_chk_c==1) {

            Object.keys(new_options).forEach(function (key) {
                if (key != "Proveedor") {
                    delete new_options[key];
                }
            });
        }
        //En otro caso, solo mostrar Lead
        else{
            Object.keys(new_options).forEach(function (key) {
                if (key != "Lead") {
                    delete new_options[key];
                }
            });
        }
        if (App.user.attributes.tct_alta_cd_chk_c == true){
            new_options["Persona"]="Persona";
        }

        this.model.fields['tipo_registro_c'].options = new_options;

        this.model.on('change:name', this.cleanName, this);
        /*
         //Ocultar Div "Prospecto Contactado"
         this.$('div[data-name=tct_prospecto_contactado_chk_c]').hide();
         */


        this.events['keydown [name=ventas_anuales_c]'] = 'checkInVentas';
        this.events['keydown [name=activo_fijo_c]'] = 'checkInVentas';
        this.events['keydown [name=tct_prom_cheques_cur_c]'] = 'checkInVentas';
        this.events['keydown [name=tct_depositos_promedio_c]'] = 'checkInVentas';
        //this.events['keydown [name=ctpldnoseriefiel_c]'] = 'checkInVentas';


    },

    /** BEGIN CUSTOMIZATION:
     * Salvador Lopez 19/01/2018
     * Descripci�n: Funci�n que oculta o muestra panel de fideicomiso dependiendo el valor de check �Es Fideicomisio? */

    _hideFideicomiso: function (fields, errors, callback) {
        if (this.model.get('tct_fedeicomiso_chk_c')) {
            //Muestra

            this.$("li.tab.LBL_RECORDVIEW_PANEL2").show();

        } else {
            //Oculta
            this.$("li.tab.LBL_RECORDVIEW_PANEL2").hide();
        }
    },


    /* F. Javier G. Solar
      OBS299 Validar que las Direcciones no se repitan 21/11/2018
   */
    _direccionDuplicada: function (fields, errors, callback) {

        /* SE VALIDA DIRECTAMENTE DE LOS ELEMENTOS DEL HTML POR LA COMPLEJIDAD DE
        OBETENER LAS DESDRIPCIONES DE LOS COMBOS*/

        var objDirecciones = $('.control-group.direccion')
        var concatDirecciones = [];
        var strDireccionTemp = "";
        for (var i = 0; i < objDirecciones.length-1; i++) {
            strDireccionTemp = objDirecciones.eq(i).find('.existingCalle').val() +
                objDirecciones.eq(i).find('.existingNumExt').val() +
                objDirecciones.eq(i).find('.existingNumInt').val() +
                objDirecciones.eq(i).find('select.existingColoniaTemp option:selected').text() +
                objDirecciones.eq(i).find('select.existingMunicipioTemp option:selected').text() +
                objDirecciones.eq(i).find('select.existingEstadoTemp option:selected').text() +
                objDirecciones.eq(i).find('select.existingCiudadTemp option:selected').text() +
                objDirecciones.eq(i).find('#existingPostalInput').val();

            concatDirecciones.push(strDireccionTemp.replace(/\s/g, "").toUpperCase());

        }

        // validamos  el arreglo generado
        var existe = false;
        for (var j = 0; j < concatDirecciones.length; j++) {
            for (var k = j + 1; k < concatDirecciones.length; k++) {

                if (concatDirecciones[j] == concatDirecciones[k]) {
                    existe = true;
                }
            }

        }

        if(existe)
        {
            app.alert.show('Direcci\u00F3n', {
                level: 'error',
                autoClose: false,
                messages: 'Existe una o mas direcciones repetidas'
            });
            var messages1= 'Existe una o mas direcciones repetidas';
            errors['xd'] = errors['xd'] || {};
            // errors['xd'].messages1 = true;
            errors['xd'].required = true;
        }

        callback(null, fields, errors);
    },

    /** BEGIN CUSTOMIZATION:
     * Salvador Lopez 19/01/2018
     * Descripci�n: Funci�n que oculta o muestra paneles de Peps seg�n sea el valor de Tipo de Persona*/

    _hideVista360: function () {

        //TabNav
        $("#drawers li.tab").removeClass('active');
        $('#drawers li.tab.panel_body').addClass("active");
        $('#drawers li.tab.LBL_RECORDVIEW_PANEL8').hide();

        //Tabcontent
        $("#drawers div.tab-content").children()[0].classList.remove('active');
        $("#drawers div.tab-content").children()[1].classList.add('active');
        $("#drawers div.tab-content").children()[1].classList.remove('fade');

        //Oculta campo Muestra panel
        $("div[data-name='show_panel_c']").hide();
        // Se oculta el boton de mas opciones en las petañas de cuentas(record)
        $('.nav-tabs li a.dropdown-toggle').hide();
    },

    _hidePeps: function (fields, errors, callback) {

        if (this.model.get('tipodepersona_c') == "Persona Fisica" ||
            this.model.get('tipodepersona_c') == "Persona Fisica con Actividad Empresarial") {
            //Muestra Peps de Persona F�sica
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL4']").show();
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL5']").show();
            //Oculta Peps de Persona Moral
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL7']").hide();
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL6']").hide();
            //Oculta Propietario Real
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL9']").hide();

        } else {
            //Oculta Peps de Persona F�sica
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL4']").hide();
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL5']").hide();
            //Muestra Peps de Persona Moral
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL7']").show();
            this.$("[data-panelname='LBL_RECORDVIEW_PANEL6']").show();
            //Muestra Propietario Real
            if (this.model.get('tipo_registro_c') == "Cliente") {
                this.$("[data-panelname='LBL_RECORDVIEW_PANEL9']").show();
            }
        }
    },

    _hideGuardar: function (fields, errors, callback) {
        var tipo = this.model.get('tipo_registro_c');
        var puesto = app.user.get('puestousuario_c');
        if ((tipo == "Prospecto" || tipo == "Cliente" || tipo == "Lead") && (puesto == 6 || puesto == 12 || puesto == 17)) {
            $('[name="save_button"]').hide();
        }
        else {
            $('[name="save_button"]').show();
        }
    },

    _doValidateEmailTelefono: function (fields, errors, callback) {
        if (this.model.get('tipo_registro_c') !== 'Persona' || this.model.get('tipo_registro_c') !== 'Proveedor') {
            if (_.isEmpty(this.model.get('email')) && _.isEmpty(this.model.get('account_telefonos')) ) {
                app.alert.show("Correo requerido", {
                    level: "error",
                    title: "Al menos un correo electr\u00F3nico o un tel\u00E9fono es requerido.",
                    autoClose: false
                });
                errors['email'] = errors['email'] || {};
                errors['email'].required = true;
                errors['account_telefonos'] = errors['account_telefonos'] || {};
                errors['account_telefonos'].required = true;
            }
        }
        callback(null, fields, errors);
    },
    /*Victor Martinez Lopez 12-09-2018
    *La casilla proveedor se debe mantener activa al crear un proveedor
    * */
    checkProveedor:function(){
        if(this.model.get('tipo_registro_c')=='Proveedor'){
            this.$('[data-name="esproveedor_c"]').attr('style', 'pointer-events:none;');
        }
    },
    //funcion que muestra siempre el panel de direcciones a la hora de crear una cuenta. Adrian Arauz 28/09/2018.
    mostrarpaneldirec: function () {
        $('.record-panel[data-panelname="LBL_RECORDVIEW_PANEL15"]').children().eq(0).removeClass('panel-inactive');
        $('.record-panel[data-panelname="LBL_RECORDVIEW_PANEL15"]').children().eq(0).addClass('panel-active');
        $('.record-panel[data-panelname="LBL_RECORDVIEW_PANEL15"]').children().eq(1).addClass('panel-active').removeClass('hide');

    },

//@Jesus Carrillo
    validatelefonosexisting: function (fields, errors, callback) {
            var expreg =/^[0-9]{8,13}$/;
            var cont=0;
            var coincidencia=0;
            var phones=this.model.get('account_telefonos');
            $('.existingTelephono').each(function () {
                if(!expreg.test($(this).val())){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                //funcion
                var cont=0;
                var coincidencia=0;
                for (var i =0; i < $(this).val().length; i++) {
                    if($(this).val().charAt(0)==$(this).val().charAt(i)){
                        cont++;
                    }
                }
                if(cont==$(this).val().length){
                        app.alert.show('numero_repetido1234', {
                        level: 'error',
                        autoClose: true,
                        messages: 'Tel\u00E9fono Inv\u00E1lido caracter repetido'
                        });
                    errors['repetido'] = errors['Tel\u00E9fono Inv\u00E1lido,un mismo n\u00FA ha sido repetido varias veces'] || {};
                    errors['repetido'].required = true;
                    $(this).css('border-color', 'red');
                    callback(null, fields, errors);
                } else {
                    for(var i=0;i<phones.length;i++){
                        if($(this).val()==phones[i].telefono){
                            coincidencia++;
                        }
                    }
                    if(coincidencia>1){
                        $(this).css('border-color', 'red');
                        app.alert.show('error_sametelefono', {
                            level: 'error',
                            autoClose: true,
                            messages: 'Este n\u00FAmero telef\u00F3nico ya existe, favor de corregir.'
                        });
                        errors['repetido'] = errors['Este n\u00FAmero telef\u00F3nico ya existe, favor de corregir.'] || {};
                        errors['repetido'].required = true;
                        $(this).css('border-color', 'red');
                        callback(null, fields, errors);
                    }
                    else
                    {
                        $(this).css('border-color', '');
                    }
                }
            }
            });
            $('.existingPais').each(function () {
                if($(this).val()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });
            $('.existingTipotelefono').each(function () {
                if($(this).val()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });
            $('.existingEstatus').each(function () {
                if($(this).val()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });
            if(cont>0){
                errors['existingtelefono'] = errors['existingtelefono'] || {};
                errors['existingtelefono'].required = true;
                app.alert.show('error_modultel', {
                    level: 'error',
                    autoClose: true,
                    messages: 'Favor de llenar los campos se\u00F1alados.'
                });
            }
            callback(null, fields, errors);
    },

    validadireccexisting: function (fields, errors, callback) {
            var cont=0;

            $('.existingIndicador').each(function (index) {
                if($(this).val()==''){
                    cont++;
                    $('#s2id_existingMulti1 ul.select2-choices').eq(index).css('border-color', 'red');
                }else{
                    $('#s2id_existingMulti1 ul.select2-choices').eq(index).css('border-color', '');
                }
            });
            $('.existingPostal').each(function () {
                if($(this).val()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });

            $('.existingColoniaTemp').each(function () {
                if($(this).val()=='1'){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });

            $('.existingCalle').each(function () {
                if($(this).val().trim()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });
            $('.existingNumExt').each(function () {
                if($(this).val().trim()==''){
                    cont++;
                    $(this).css('border-color', 'red');
                }else{
                    $(this).css('border-color', '');
                }
            });

            if(cont>0){
                errors['existingdirec'] = errors['existingdirec'] || {};
                errors['existingdirec'].required = true;
                app.alert.show('error_moduldirec', {
                    level: 'error',
                    autoClose: false,
                    messages: 'Favor de llenar los campos se\u00F1alados.'
                });
            }
        callback(null, fields, errors);
    },

    _doValidateRFC: function (fields, errors, callback) {
        if (this.model.get('rfc_c') && (this.model.get('rfc_c')!='XXXX010101XXX' && this.model.get('rfc_c')!='XXX010101XXX')) {
            var fields = ["primernombre_c", "segundonombre_c", "apellidopaterno_c", "apellidomaterno_c", 'rfc_c'];
            var RFC = this.model.get('rfc_c');
            app.api.call("read", app.api.buildURL("Accounts/", null, null, {
                fields: fields.join(','),
                max_num: 5,
                "filter": [
                    {
                        "rfc_c": RFC,
                        "id": {
                            $not_equals: this.model.id,
                        }
                    }
                ]
            }), null, {
                success: _.bind(function (data) {
                    if (data.records.length > 0) {

                        app.alert.show("DuplicateCheck", {
                            level: "error",
                            title: "El RFC ingresado ya Existe.",
                            autoClose: false
                        });

                        this.model.set("rfc_c", '');

                        errors['rfc_c'] = errors['rfc_c'] || {};
                        errors['rfc_c'].required = true;

                    }
//                callback(null, fields, errors);
                }, this)
            });
        }

        RFC = this.model.get('rfc_c');
        if (RFC != '' && RFC != null && (RFC != 'XXX010101XXX' && RFC != 'XXXX010101XXX')) {
            //étodo que tiene la función de validar el rfc
            RFC = RFC.toUpperCase().trim();
            var expReg = "";
            if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                expReg =  /^([A-Z\u00D1&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
            } else {
                expReg =  /^([A-ZÑ\u00D1&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
            }
            if (!RFC.match(expReg)) {
                app.alert.show("RFC incorrecto", {
                    level: "error",
                    title: "El RFC no tiene un formato correcto.",
                    autoClose: false
                });
                errors['rfc_c'] = errors['rfc_c'] || {};
                errors['rfc_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    validaExtranjerosRFC: function () {
        if ((this.model.get('pais_nacimiento_c') != 2 && this.model.get('pais_nacimiento_c') != "") && (this.model.get('tipo_registro_c') != 'Prospecto' && this.model.get('tipo_registro_c') != 'Persona')) {
            this.model.set('rfc_c', 'XXX010101XXX');
        }
        if (this.model.get('tipo_registro_c') == 'Prospecto' && this.model.get('estatus_c') == 'Interesado' && this.model.get('pais_nacimiento_c') != 2) {
            this.model.set('rfc_c', 'XXX010101XXX');
        }

//        callback(null, fields, errors);
    },

    validaFechaNacimientoDesdeRFC: function () {
        //this._doValidateRFC();
        var RFC = this.model.get('rfc_c');
        if (RFC != '' && RFC != null && RFC != 'XXX010101XXX') {
            console.log(this.model.get('rfc_c'));
            var expReg = "";
            var tipoControl = "";
            var fecha = "";
            if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                tipoControl = 'fechadenacimiento_c';
                expReg = "[A-Z&]{4}[0-9]{6}[A-Z0-9]{3}";
                fecha = new Date(RFC.substring(6, 8) + "-" + RFC.substring(8, 10) + "-" + RFC.substring(4, 6));
            } else {
                tipoControl = 'fechaconstitutiva_c';
                expReg = "[A-Z&]{3}[0-9]{6}[A-Z0-9]{3}";
                fecha = new Date(RFC.substring(5, 7) + "-" + RFC.substring(7, 9) + "-" + RFC.substring(3, 5));
            }
            if (!RFC.match(expReg)) {
                app.alert.show("RFC incorrecto", {
                    level: "error",
                    title: "El RFC no tiene un formato correcto para ser evaluado",
                    autoClose: true
                });
            } else {
                var fechaFormateada = fecha.getFullYear() + "-" + (fecha.getMonth() < 10 ? "0" + (fecha.getMonth() + 1) : fecha.getMonth() + 1) + "-" + (fecha.getDate() < 10 ? "0" + fecha.getDate() : fecha.getDate());
                this.model.set(tipoControl, fechaFormateada);
            }


        }
//        callback(null, fields, errors);
    },

    setButtonStates: function (state) {
        this._super("setButtonStates", [state]);
        var $saveButtonEl = this.buttons[this.saveButtonName];
        if ($saveButtonEl) {
            switch (state) {
                case this.STATE.CREATE:
                case this.STATE.SELECT:
                    $saveButtonEl.getFieldElement().text(app.lang.get('LBL_SAVE_BUTTON_LABEL', this.module));
                    break;
                case this.STATE.DUPLICATE:
                    $saveButtonEl.getFieldElement().text(app.lang.get('LBL_IGNORE_DUPLICATE_AND_SAVE', this.module)).hide();
                    //OCULTANDO BOT�N CON JQUERY
                    $('[name="duplicate_button"]').hide();
                    break;
            }
        }
    },

    delegateButtonEvents: function () {
        this._super("delegateButtonEvents");
        this.context.on('button:cotizador_button:click', this.cotizadorClicked, this);
        this.context.on('button:expediente_button:click', this.expedienteClicked, this);
    },


    changeInstMonetario: function () {
        //console.log("Cambio de Inst monetario");
        var instMonetario = this.model.get('tct_inst_monetario_c');
        if (instMonetario.includes("Otro")) {
            this.model.set('imotro_c', true);
            //this.$('[data-name="imotrodesc_c"]').show();
        } else {
            this.model.set('imotro_c', false);
            //this.$('[data-name="imotrodesc_c"]').hide();
        }
    },

    _ActualizaEtiquetas: function () {
        if (this.model.get('tipodepersona_c') != 'Persona Moral' && $("div[data-name='pais_nacimiento_c']").length > 0) {
            this.$("div.record-label[data-name='pais_nacimiento_c']").text("Pa\u00EDs de nacimiento");
        } else {
            this.$("div.record-label[data-name='pais_nacimiento_c']").text("Pa\u00EDs de constituci\u00F3n");
        }

        if (this.model.get('tipodepersona_c') != 'Persona Moral' && $("div[data-name='estado_nacimiento_c']").length > 0) {
            this.$("div.record-label[data-name='estado_nacimiento_c']").text("Estado de nacimiento");
        } else {
            this.$("div.record-label[data-name='estado_nacimiento_c']").text("Estado de constituci\u00F3n");
        }
    },

    _doGeneraCURP: function () {
        if (this.model.get('tipodepersona_c') != 'Persona Moral') {
            //Valida que se tenga la informaci�n requerida para generar la CURP
            if (this.model.get('fechadenacimiento_c') != null && this.model.get('genero_c') != null && this.model.get('genero_c') != ''
                && this.model.get('primernombre_c') != null && this.model.get('apellidopaterno_c') != null && this.model.get('apellidomaterno_c') != null
                && this.model.get('pais_nacimiento_c') != null && this.model.get('estado_nacimiento_c') != null && this.model.get('estado_nacimiento_c') != "1") {
                var firmoParams = {
                    'fechadenacimiento': this.model.get('fechadenacimiento_c'),
                    'primernombre': this.model.get('primernombre_c'),
                    'apellidoP': this.model.get('apellidopaterno_c'),
                    'apellidoM': this.model.get('apellidomaterno_c'),
                    'genero': this.model.get('genero_c'),
                    'pais': this.model.get('pais_nacimiento_c'),
                    'estado': this.model.get('estado_nacimiento_c'),
                    'tipodepersona': this.model.get('tipodepersona_c')
                };
                var dnbProfileUrl = app.api.buildURL("Accounts/GenerarCURP", '', {}, {});
                if (this.model.get('pais_nacimiento_c') == 2) {
                    app.api.call("create", dnbProfileUrl, {curpdata: firmoParams}, {
                        success: _.bind(function (data) {
                            if (data['UNI2_UTL_002_CreaCurpPersonaResult']['resultado']) {
                                this.model.set('curp_c', data['UNI2_UTL_002_CreaCurpPersonaResult']['curp']);
                            }
                        }, this)
                    });
                } else {
                    this.model.set('curp_c', '');
                }
            } else {
                var necesarios = "";  //Se habilita variable para concatenar campos faltantes para generar el CURP
                //Adrian Arauz 10/09/2018
                if (this.model.get('fechadenacimiento_c') == "" || this.model.get('fechadenacimiento_c') == null) {
                    necesarios = necesarios + '<b>Fecha de Nacimiento<br></b>';
                }
                if (this.model.get('genero_c') == "" || this.model.get('genero_c') == null) {
                    necesarios = necesarios + '<b>G\u00E9nero</b><br>';
                }
                if (this.model.get('primernombre_c') == "" || this.model.get('primernombre_c') == null) {
                    necesarios = necesarios + '<b>Primer Nombre</b><br>';
                }
                if (this.model.get('apellidopaterno_c') == "" || this.model.get('apellidopaterno_c') == null) {
                    necesarios = necesarios + '<b>Apellido Paterno</b><br>';
                }
                if (this.model.get('apellidomaterno_c') == "" || this.model.get('apellidomaterno_c') == null) {
                    necesarios = necesarios + '<b>Apellido Materno</b><br>';
                }
                if (this.model.get('pais_nacimiento_c') == "" || this.model.get('pais_nacimiento_c') == null) {
                    necesarios = necesarios + '<b>Pa\u00EDs de Nacimiento</b><br>';
                }

                if (this.model.get('estado_nacimiento_c') == "" || this.model.get('estado_nacimiento_c') == null || this.model.get('estado_nacimiento_c') == "1") {
                    necesarios = necesarios + '<b>Estado de Nacimiento</b><br>';
                }

                else (necesarios != "")
                {
                    console.log("Confirma necesarios");
                    app.alert.show("Generar CURP", {
                        level: "error",
                        title: "Faltan los siguientes datos para poder generar el CURP: <br>" + necesarios,
                        autoClose: false
                    });
                }
            }
        }
    },

    _doValidateTieneContactos: function (fields, errors, callback) {
        if (this.model.get('tipodepersona_c') == 'Persona Moral' &&
            (/*this.model.get('tipo_registro_c') == "Cliente" || this.model.get('estatus_c') == "Interesado"
             || */this.model.get('tipo_registro_c') == "Prospecto" )) {
            if (_.isEmpty(this.model.get('account_contacts'))) {
                app.alert.show("Persona sin contactos registrados", {
                    level: "error",
                    title: "Debe registrar al menos un contacto.",
                    autoClose: false
                });
                errors['account_contacts'] = errors['account_contacts'] || {};
                errors['account_contacts'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    ValidaFormatoCURP: function (fields, errors, callback) {
        if (this.model.get('tipodepersona_c') != 'Persona Moral') {
            var CURP = this.model.get('curp_c');
            if (CURP != '' && CURP != null) {
                CURP = CURP.toUpperCase().trim();

                if (!CURP.match("[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]?[0-9]?")) {
                    app.alert.show("CURP incorrecto", {
                        level: "error",
                        title: "El CURP no tiene un formato correcto.",
                        autoClose: false
                    });
                    errors['curp_c'] = errors['curp_c'] || {};
                    errors['curp_c'].required = true;
                }
            }
        }
        callback(null, fields, errors);
    },

    /*_ShowDireccionesTipoRegistro: function(){
     if(this.model.get('tipo_registro_c') == "Cliente" || this.model.get('estatus_c') == "Interesado"){
     this.$("div[data-name='account_direcciones']").show();
     }else{
     this.$("div[data-name='account_direcciones']").hide();
     }
     // Carlos Zaragoza: Se elimina el campo por defaiult de tipo de proveedor del registro pero sies proveedor, se selecciona bienes por default
     if(this.model.get('tipo_registro_c') == 'Proveedor'){
     this.model.set('tipo_proveedor_c', '1');
     }
     },*/

    _doValidateDireccion: function (fields, errors, callback) {
        if (this.model.get('tipo_registro_c') == "Cliente" || this.model.get('tipo_registro_c') == "Proveedor" || this.model.get('tipo_registro_c') == "Prospecto" || this.model.get('esproveedor_c')==true) {
            if (_.isEmpty(this.model.get('account_direcciones'))) {
                //errors[$(".addDireccion")] = errors['account_direcciones'] || {};
                //errors[$(".addDireccion")].required = true;
                errors['account_direcciones'] = errors['account_direcciones'] || {};
                errors['account_direcciones'].required = true;

                $('.direcciondashlet').css('border-color', 'red');
                app.alert.show("Direccion requerida", {
                    level: "error",
                    title: "Al menos una direcci\u00F3n es requerida.",
                    autoClose: false
                });
            } else {
                //Valdaci�n Nacional
                if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                    var nacional = 0;
                    console.log('Validacion Dir.Nacional');
                    console.log(direcciones);
                    var direcciones = this.model.get('account_direcciones');
                    for (i = 0; i < direcciones.length; i++) {
                        if (direcciones[i].pais == 2) {
                            nacional = 1;
                        }
                    }
                    //Valida variable nacional
                    if (nacional != 1) {
                        console.log('Dir. Nacional requerida');
                        errors[$(".addDireccion")] = errors['account_direcciones'] || {};
                        errors[$(".addDireccion")].required = true;

                        $('.direcciondashlet').css('border-color', 'red');
                        app.alert.show("Direccion nacional requerida", {
                            level: "error",
                            title: "Al menos una direcci\u00F3n nacional es requerida.",
                            autoClose: false
                        });
                    }
                }
            }
        }
        callback(null, fields, errors);
    },

    _doValidateMayoriadeEdad: function (fields, errors, callback) {
        if (this.model.get('tipodepersona_c') != 'Persona Moral' && this.model.get('fechadenacimiento_c') != "") {
            var nacimiento = new Date(this.model.get("fechadenacimiento_c"));
            var enteredAge = this.getAge(nacimiento);
            if (enteredAge < 18) {
                app.alert.show("fechaDeNacimientoCheck", {
                    level: "error",
                    title: "Persona debe de ser mayor de 18 a\u00F1os.",  //update
                    autoClose: false
                });
                errors['fechadenacimiento_c'] = errors['fechadenacimiento_c'] || {};
                errors['fechadenacimiento_c'].required = true;
            }
        }

        callback(null, fields, errors);
    },

    getAge: function (DOB) {
        var today = new Date();
        var birthDate = new Date(DOB);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    },

    _doValidateWSRFC: function () {
        var firmoParams = {
            'fechadenacimiento': this.model.get("fechadenacimiento_c"),
            'primernombre': this.model.get("primernombre_c"),
            'apellidoP': this.model.get("apellidopaterno_c"),
            'apellidoM': this.model.get("apellidomaterno_c"),
            'genero': this.model.get("genero_c"),
            'pais': this.model.get("pais_nacimiento_c"),
            'estado': this.model.get("estado_nacimiento_c"),
            'razonsocial': this.model.get("razonsocial_c"),
            'tipodepersona': this.model.get("tipodepersona_c"),
            'fechaconstitutiva': this.model.get("fechaconstitutiva_c")
        };

        var dnbProfileUrl = app.api.buildURL("Accounts/ValidarRFC", '', {}, {});
        app.api.call("create", dnbProfileUrl, {rfcdata: firmoParams}, {
            success: _.bind(function (data) {
                if (data != null) {
                    var rfc = this.model.get('rfc_c');
                    //Obtiene el resultado del WS dependiendo del regimen de la persona
                    if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                        var rfc_SinHomoclave = (data['UNI2_CTE_02_CreaRfcPersonaFisicaResult']['resultado'] ?
                            data['UNI2_CTE_02_CreaRfcPersonaFisicaResult']['rfcGenerado'] : "" );
                        var rfc_local = (data['UNI2_CTE_02_CreaRfcPersonaFisicaResult']['resultado'] ?
                            data['UNI2_CTE_02_CreaRfcPersonaFisicaResult']['rfcGenerado'] + data['UNI2_CTE_02_CreaRfcPersonaFisicaResult']['homoClaveDV'] : "" );
                    } else if (this.model.get("tipodepersona_c") == 'Persona Moral') {
                        var rfc_SinHomoclave = (data['UNI2_CTE_03_CreaRfcPersonaMoralResult']['resultado'] ?
                            data['UNI2_CTE_03_CreaRfcPersonaMoralResult']['rfcGenerado'] : "");
                        var rfc_local = (data['UNI2_CTE_03_CreaRfcPersonaMoralResult']['resultado'] ?
                            data['UNI2_CTE_03_CreaRfcPersonaMoralResult']['rfcGenerado'] + data['UNI2_CTE_03_CreaRfcPersonaMoralResult']['homoClaveDV'] : "");
                    }

                    if (rfc != "" && rfc != null) {
                        rfc = (this.model.get("tipodepersona_c") != 'Persona Moral' ? rfc.substring(0, 10) : rfc.substring(0, 9));
                        if (rfc != rfc_SinHomoclave) {
                            app.alert.show("Validar RFC", {
                                level: "confirmation",
                                messages: "El RFC calculado es diferente al escrito, �Desea reemplazarlo?",
                                autoClose: false,
                                onConfirm: function () {
                                    console.log("*** JSR *** el rfc se remplazo con �xito CONFIRMED");
                                    self.model.set("rfc_c", rfc_local);
                                },
                                onCancel: function () {
                                    console.log("*** JSR *** no se modific� el RFC");
                                    //alert("Cancelled!");
                                }
                            });
                        } else {
                            app.alert.show("RFC correcto", {
                                level: "error",
                                title: "El RFC capturado actualmente es correcto",
                                autoClose: true
                            });
                        }
                    } else {
                        console.log("*** JSR *** el rfc est� vacio");
                        this.model.set("rfc_c", rfc_local);
                    }
                }
            }, this)
        });
        //callback(null, fields, errors);
    },

    _doGenera_RFC_CURP: function () {
        if (this.model.get('pais_nacimiento_c') != 2 && this.model.get('pais_nacimiento_c') != '' && this.model.get('pais_nacimiento_c') != null
            && (this.model.get('tipo_registro_c') != 'Prospecto' || this.model.get('estatus_c') != 'Interesado')) {
            if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                this.model.set('rfc_c', 'XXXX010101XXX');
            } else {
                this.model.set('rfc_c', 'XXX010101XXX');
            }
        } else {
            if (this.model.get('tipodepersona_c') != 'Persona Moral') {
                if (this.model.get('fechadenacimiento_c') != null && this.model.get('fechadenacimiento_c') != '' && this.model.get('primernombre_c') != null && this.model.get('primernombre_c') != ''
                    && this.model.get('apellidopaterno_c') != null  && this.model.get('apellidopaterno_c') != '' && this.model.get('apellidomaterno_c') != null && this.model.get('apellidomaterno_c') != '') {
                    this._doValidateWSRFC();
                } else {
                    var faltantes = "";
                    console.log('Valida campos para RFC');
                    if (this.model.get('fechadenacimiento_c') == "" || this.model.get('fechadenacimiento_c') == null) {
                        faltantes = faltantes + '<b>Fecha de Nacimiento<br></b>';
                    }
                    if (this.model.get('primernombre_c') == "" || this.model.get('primernombre_c') == null) {
                        faltantes = faltantes + '<b>Primer Nombre<br></b>';
                    }
                    if (this.model.get('apellidopaterno_c') == "" || this.model.get('apellidopaterno_c') == null) {
                        faltantes = faltantes + '<b>Apellido Paterno<br></b>';
                    }
                    if (this.model.get('apellidomaterno_c') == "" || this.model.get('apellidomaterno_c') == null) {
                        faltantes = faltantes + '<b>Apellido Materno<br></b>';
                    }

                        else (faltantes != "")
                        app.alert.show("Generar RFC", {
                            level: "error",
                            title: "Faltan los siguientes datos para poder generar el RFC: <br>" + faltantes,
                            autoClose: true
                        });
                    }
                  }
            else
                {
                    if ((this.model.get('razonsocial_c') != null && this.model.get('razonsocial_c')!="") && (this.model.get('fechaconstitutiva_c') != null && this.model.get('fechaconstitutiva_c') !="" )) {
                        this._doValidateWSRFC();
                    } else {
                        var falta = "";
                        console.log('Entra P Moral RFC');
                        if (this.model.get('fechaconstitutiva_c') == "" || this.model.get('fechaconstitutiva_c') == null) {
                            falta = falta + '<b>Fecha Constitutiva<br></b>';
                        }
                        /*if (this.model.get('nombre_comercial_c') == "" || this.model.get('nombre_comercial_c') == null) {
                            falta = falta + '<b>Nombre Comercial<br></b>';
                        }*/
                        if (this.model.get('razonsocial_c') == "" || this.model.get('razonsocial_c') == null) {
                            falta = falta + '<b>Raz\u00F3n Social<br></b>';
                        }
                        app.alert.show("Generar RFC", {
                            level: "error",
                            title: "Faltan los siguientes datos para poder generar el RFC: <br>" + falta,
                            autoClose: true
                        });
                    }
                }
            }

    },

    //No aceptar numeros, solo letras (a-z), puntos(.) y comas(,)
    checkTextOnly: function (evt) {
        //console.log(evt.keyCode);
        if ($.inArray(evt.keyCode, [9, 16, 17, 110, 188, 190, 45, 33, 36, 46, 35, 34, 8, 9, 20, 16, 17, 37, 40, 39, 38, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 16, 32, 192]) < 0) {
            if (evt.keyCode != 186) {
                app.alert.show("Caracter Invalido", {
                    level: "error",
                    title: "Solo texto es permitido en este campo.",
                    autoClose: true
                });
                return false;
            }
        }
    },

    checkTextAndNum: function (evt) {
        //console.log(evt.keyCode);
        if ($.inArray(evt.keyCode, [110, 45, 33, 36, 46, 35, 34, 8, 9, 20, 16, 17, 37, 40, 39, 38, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 16, 32, 192, 186, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105]) < 0) {
            app.alert.show("Caracter Invalido", {
                level: "error",
                title: "Caracter Inv\u00E1lido.",
                autoClose: true
            });
            return false;
        }
    },

    //No aceptar caracteres especiales incluyendo puntos(.) y comas(,)
    checkTextAndNumRFC: function (evt) {
        if ($.inArray(evt.keyCode, [45, 33, 36, 46, 35, 34, 8, 9, 20, 16, 17, 37, 40, 39, 38, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 16, 32, 192, 186, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105]) < 0) {
            app.alert.show("Caracter Invalido", {
                level: "error",
                title: "Caracter Inv\u00E1lido.",
                autoClose: true
            });
            return false;
        }
    },

    /** BEGIN CUSTOMIZATION: jgarcia@levementum.com 8/26/2015 Description: When Pais or Profesion field is changed, Recalculate the Riesgo */
    _doValidateProfesionRisk: function () {
        var riskCounter = 0;
        if (this.model.get("lista_negra_c") == "0" || this.model.get("pep_c") == "0") {
            if (!_.isEmpty(this.model.get("pais_nacimiento_c"))) {
                app.api.call("read", app.api.buildURL("dire_Pais/", null, null, {
                    fields: "altoriesgo",
                    "filter": [
                        {
                            "id": this.model.get("pais_nacimiento_c")
                        }
                    ]
                }), null, {
                    success: _.bind(function (data) {
                        if (data.records.length > 0) {
                            if (data.records[0].altoriesgo == true) {
                                riskCounter++;
                            }
                        }
                        if (!_.isEmpty(this.model.get("profesion_c"))) {
                            var profesionActual = this.model.get("profesion_c");
                            var profesiones_de_riesgo = app.lang.getAppListStrings('profesion_riesgo_list');
                            Object.keys(profesiones_de_riesgo).forEach(function (key) {
                                if (key == profesionActual) {
                                    riskCounter++;
                                }
                            });
                        }
                        if (riskCounter > 0) {
                            this.model.set("riesgo_c", "Alto");
                        } else {
                            this.model.set("riesgo_c", "Bajo");
                        }
                    }, this)
                });
            }
        }
    },

    fechaMenor1900: function (fields, errors, callback) {
        var nacimiento = new Date(this.model.get("fechadenacimiento_c"));
        var year = nacimiento.getFullYear();
        if (year <= 1900) {
            app.alert.show("fechaDeNacimientoCheck", {
                level: "error",
                title: "La fecha de nacimiento no puede ser menor a 1900",
                autoClose: false
            });
            errors['fechadenacimiento_c'] = errors['fechadenacimiento_c'] || {};
            errors['fechadenacimiento_c'].required = true;
        }


        callback(null, fields, errors);
    },

    doValidateDateNac: function (fields, errors, callback) {
        /* if  date not empty, then check with today date and return error */
        if (!_.isEmpty(this.model.get('fechadenacimiento_c')) && this.model.get('tipodepersona_c')!='Persona Moral') {

            var fecnac_date = this.model.get('fechadenacimiento_c');
            var today_date = new Date().toISOString().slice(0,10);

            if (fecnac_date >= today_date) {

                app.alert.show("fechaDeNacimientoValidate", {
                    level: "error",
                    title: "La fecha de nacimiento no puede ser mayor o igual al d\u00EDa de hoy",
                    autoClose: false
                });
                errors['fechadenacimiento_c'] = errors['fechadenacimiento_c'] || {};
                //errors['fechaapertura'] = 'La fecha de apertura no puede ser posterior al d�a de hoy' || {};
                errors['fechadenacimiento_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    doValidateDateCons: function (fields, errors, callback) {
        /* if  date not empty, then check with today date and return error */
        if (!_.isEmpty(this.model.get('fechaconstitutiva_c')) && this.model.get('tipodepersona_c')=='Persona Moral') {

            var feccons_date = this.model.get('fechaconstitutiva_c');
            var today_date = new Date().toISOString().slice(0,10);

            if (feccons_date > today_date) {

                app.alert.show("fechaDeConsValidate", {
                    level: "error",
                    title: "La fecha constitutiva no puede ser mayor al d\u00EDa de hoy",
                    autoClose: false
                });

                errors['fechaconstitutiva_c'] = errors['fechaconstitutiva_c'] || {};
                //errors['fechaapertura'] = 'La fecha de apertura no puede ser posterior al d�a de hoy' || {};
                errors['fechaconstitutiva_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    /**
     * @author Carlos Zaragoza Ortiz
     * @date 16-10-2015
     * Al ser proveedor debe solicitar como obligatorio el tipo de proveedor
     * @type function
     * */
    validaProveedorRequerido: function (fields, errors, callback) {
        if (this.model.get('tipo_registro_c') == 'Proveedor' || this.model.get('esproveedor_c')==true) {
            this.model.set("esproveedor_c", true);
            var tipoProveedor = new String(this.model.get('tipo_proveedor_c'));
            if (tipoProveedor.length == 0) {
                /*app.alert.show("Proveedor Requerido", {
                    level: "error",
                    title: "Debe seleccionar un tipo de proveedor al menos",
                    autoClose: false
                });*/
                errors['tipo_proveedor_c'] = errors['tipo_proveedor_c'] || {};
                errors['tipo_proveedor_c'].required = true;
            }
            if(this.model.get('tct_macro_sector_ddw_c')==''|| this.model.get('tct_macro_sector_ddw_c')==null){
                /*app.alert.show("Macro sector requerido", {
                    level: "error",
                    title: "El campo macro sector es requerido",
                    autoClose: false
                });*/
                errors['tct_macro_sector_ddw_c'] = errors['tct_macro_sector_ddw_c'] || {};
                errors['tct_macro_sector_ddw_c'].required = true;
            }
            if(this.model.get('rfc_c')==''|| this.model.get('rfc_c')==null){
                /*app.alert.show("RFC requerido", {
                    level: "error",
                    title: "El campo RFC es requerido",
                    autoClose: false
                });*/
                errors['rfc_c'] = errors['rfc_c'] || {};
                errors['rfc_c'].required = true;
            }
            if(this.model.get('tipodepersona_c')!='Persona Moral'){
                /*app.alert.show("Fecha de nacimiento requerida", {
                    level: "error",
                    title: "El campo fecha de nacimiento es requerido",
                    autoClose: false
                });*/
                if(this.model.get('fechadenacimiento_c')==''|| this.model.get('fechadenacimiento_c')==null){
                  errors['fechadenacimiento_c'] = errors['fechadenacimiento_c'] || {};
                  errors['fechadenacimiento_c'].required = true;
                }

                /*app.alert.show("Pais de nacimiento requerido", {
                    level: "error",
                    title: "El campo pa\u00EDs de nacimiento es requerido",
                    autoClose: false
                });*/
                if(this.model.get('pais_nacimiento_c')==''|| this.model.get('pais_nacimiento_c')==null){
                  errors['pais_nacimiento_c'] = errors['pais_nacimiento_c'] || {};
                  errors['pais_nacimiento_c'].required = true;
                }
                if(this.model.get('estado_nacimiento_c') == "" || this.model.get('estado_nacimiento_c') == null) {
                    errors['estado_nacimiento_c'] = errors['estado_nacimiento_c'] || {};
                    errors['estado_nacimiento_c'].required = true;
                }
                /*app.alert.show("Estado civil requerido", {
                    level: "error",
                    //title: "El campo estado civil es requerido",
                    autoClose: false
                });*/
                if(this.model.get('estadocivil_c')==''|| this.model.get('estadocivil_c')==null){
                  errors['estadocivil_c'] = errors['estadocivil_c'] || {};
                  errors['estadocivil_c'].required = true;
                }

                /*app.alert.show("Profesion requerido", {
                    level: "error",
                    title: "El campo profesi\u00F3n es requerido",
                    autoClose: false
                });*/
                if(this.model.get('profesion_c')==''|| this.model.get('profesion_c')==null){
                  errors['profesion_c'] = errors['profesion_c'] || {};
                  errors['profesion_c'].required = true;
                }
            }
            else{
                /*app.alert.show("Pais de constitucion", {
                    level: "error",
                    title: "El campo pa\u00EDs de constituci\u00F3n es requerido",
                    autoClose: false
                });*/
                if(this.model.get('pais_nacimiento_c')==''|| this.model.get('pais_nacimiento_c')==null){
                  errors['pais_nacimiento_c'] = errors['pais_nacimiento_c'] || {};
                  errors['pais_nacimiento_c'].required = true;
                }
                if(this.model.get('estado_nacimiento_c') == "" || this.model.get('estado_nacimiento_c') == null) {
                    errors['estado_nacimiento_c'] = errors['estado_nacimiento_c'] || {};
                    errors['estado_nacimiento_c'].required = true;
                }
                if(this.model.get('fechaconstitutiva_c')==''|| this.model.get('fechaconstitutiva_c')==null){
                    errors['fechaconstitutiva_c'] = errors['fechaconstitutiva_c'] || {};
                    errors['fechaconstitutiva_c'].required = true;
                }
            }
        }
        callback(null, fields, errors);
    },
    /* END */
    /*tipoProveedor_check: function(fields, errors, callback){
        if(this.model.get('esproveedor_c')==true){

            app.alert.show("Proveedor Requerido", {
                    level: "error",
                    title: "Debe seleccionar un un tipo de proveedor al menos",
                    autoClose: false
                });
             errors['tipo_proveedor_c'] = errors['tipo_proveedor_c'] || {};
                errors['tipo_proveedor_c'].required = true;
        }
        callback(null, fields,errors);
    },*/
    /**
     * @author Salvador Lopez Balleza
     * @date 13/03/2018
     * Establecer campo phone_office con la misma informaci�n que el campo personalizado account_telefonos
     * */
    setPhoneOffice: function () {

        if (!_.isEmpty(this.model.get('account_telefonos'))) {
            var telefono = this.model.get('account_telefonos');
            for (var i = 0; i < telefono.length; i++) {
                if (telefono[i].principal) {
                   //if (telefono[i].pais!='52'){
                    //this.model.set('phone_office', "base" + telefono[i].pais + " " + telefono[i].telefono);
                      //      }else{
                    this.model.set('phone_office', "" + telefono[i].telefono);
                    //}

                }
            }
        }
    },
    /**
     * @author Carlos Zaragoza Ortiz
     * @date 16-10-2015
     * UNIFIN TASK: Modificar el riesgo en caso de seleccionar "PEP" en cuestionario de PLD
     * */
    cambiaRiesgodePersona: function (fields, errors, callback) {
        var riesgo = this.model.get('ctpldpoliticamenteexpuesto_c') == true ? 'Alto' : 'Bajo';
        this.model.set("riesgo_c", riesgo);
        console.log(this.model.get('ctpldpoliticamenteexpuesto_c'));
        console.log(this.model.get('riesgo_c'));
        callback(null, fields, errors);
    },

    cleanName: function () {
        var original_name = this.model.get("name");

        var list_check = app.lang.getAppListStrings('validacion_duplicados_list');
        var simbolos = app.lang.getAppListStrings('validacion_simbolos_list');

        var clean_name_split = [];
        clean_name_split = original_name.split(" ");
        _.each(clean_name_split, function (value, key) {
            _.each(simbolos, function (simbolo, index) {
                var clean_value = value.split(simbolo).join('');
                if (clean_value != value) {
                    clean_name_split[key] = clean_value;
                }
            });
        });

        _.each(clean_name_split, function (value, key) {
            _.each(list_check, function (index, nomenclatura) {
                var upper_value = value.toUpperCase();
                if (upper_value == nomenclatura) {
                    var clean_value = upper_value.replace(nomenclatura, "");
                    clean_name_split[key] = clean_value;
                }
            });
        });

        var clean_name = "";
        _.each(clean_name_split, function (value, key) {
            clean_name += value;
        });

        clean_name = clean_name.toUpperCase();
        this.model.set("clean_name", clean_name);
    },

    changeLabelMarketing: function () {
        console.log("Cambio de Origen");
        if (this.model.get('origendelprospecto_c') == 'Mercadotecnia') {
            console.log("Se eligio Mecadotecnia");
            this.$("div.record-label[data-name='evento_marketing_c']").text("Detalle marketing");
        }
        if (this.model.get('origendelprospecto_c') == 'Eventos Mercadotecnia') {
            console.log("Se eligio Eventos Mecadotecnia");
            this.$("div.record-label[data-name='evento_marketing_c']").text("Evento marketing");
        }
    },

    doValidateInfoReq: function (fields, errors, callback) {
        if (this.model.get('origendelprospecto_c') == 'Prospeccion propia') {
            var metodoProspeccion = new String(this.model.get('metodo_prospeccion_c'));
            if (metodoProspeccion.length == 0 || this.model.get('metodo_prospeccion_c') == null) {
                /*app.alert.show("Metodo de Prospeccion Requerido", {
                    level: "error",
                    title: "Debe indicar el metodo de prospecci\u00F3n",
                    autoClose: false
                });*/
                errors['metodo_prospeccion_c'] = errors['metodo_prospeccion_c'] || {};
                errors['metodo_prospeccion_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },
    //Funcion que valida el contenido ingresado en el campo del Email
    expmail: function (fields, errors, callback){
        if (this.model.get('email') != null && this.model.get('email') !="") {

            var input = (this.model.get('email'));
            var expresion = /^\S+@\S+\.\S+[$%&|<>#]?$/;
            var cumple = true;

            for (i=0; i< input.length; i++) {

                if (expresion.test(input[i].email_address)== false) {
                    cumple = false;

                }
            }

                if (cumple == false) {
                    app.alert.show('Error al validar email', {
                        level: 'error',
                        autoClose: true,
                        messages: '<b>Formato de email incorrecto.</b>'
                    })
                    errors['email'] = errors['email'] || {};
                    errors['email'].required = true;
                }
        }

        callback(null, fields, errors);
    },

    validacedente: function (fields, errors, callback) {

        if ( this.model.get('cedente_factor_c') == true || this.model.get('deudor_factor_c') == true  ) {


            var value = this.model.get('account_direcciones');
            var totalindicadores = "";


            for (i = 0; i < value.length; i++) {
                console.log("Valida Cedente");
                var valorecupera = this._getIndicador(value[i].indicador);
                totalindicadores = totalindicadores + "," + valorecupera;

            }

            var arregloindicadores = [];
            if (value == "" || value == null) {
                arregloindicadores = [0];

            } else {
                arregloindicadores = totalindicadores.split(",");

            }

            var direccionesfaltantes = "";

            if (arregloindicadores.indexOf("1") == -1) {
                direccionesfaltantes = direccionesfaltantes + 'Correspondencia<br>';
            }
            if (arregloindicadores.indexOf("2") == -1) {
                direccionesfaltantes = direccionesfaltantes + 'Fiscal<br>';
            }
            if (arregloindicadores.indexOf("4") == -1) {
                direccionesfaltantes = direccionesfaltantes + 'Entrega de Bienes<br>';
            }

            if (direccionesfaltantes != "") {
                //Funcionalidad de pintar en rojo el borde del campo indicador en caso de estar vacio y de la direccion añadida
                //Adrian Arauz 25/09/2018.
                $('.select2-choices').css('border-color', 'red');
                $('.select2-choices').eq(0).css('border-color', '');



                app.alert.show('Error al validar Direcciones', {
                    level: 'error',
                    autoClose: false,
                    messages: 'Debe tener las siguientes direcciones: <br><b>' + direccionesfaltantes + '</b>'
                })
                errors['account_direcciones_c'] = errors['account_direcciones_c'] || {};
                errors['account_direcciones_c'].required = true;

            }
            else {
                $('.select2-choices').css('border-color', '');

            }

            //Validar campos adionales
            if (this.model.get('tipo_registro_c') == 'Persona') {
                if (this.model.get('rfc_c') == "" || this.model.get('rfc_c') == null) {
                    errors['rfc_c'] = errors['rfc_c'] || {};
                    errors['rfc_c'].required = true;
                }
                if (this.model.get('pais_nacimiento_c') == "" || this.model.get('pais_nacimiento_c') == null) {
                    errors['pais_nacimiento_c'] = errors['pais_nacimiento_c'] || {};
                    errors['pais_nacimiento_c'].required = true;
                }
                if (this.model.get('estado_nacimiento_c') == "" || this.model.get('estado_nacimiento_c') == null) {
                    errors['estado_nacimiento_c'] = errors['estado_nacimiento_c'] || {};
                    errors['estado_nacimiento_c'].required = true;
                }

                if (this.model.get('tipodepersona_c') == 'Persona Moral') {
                    if (this.model.get('tct_macro_sector_ddw_c') == "" || this.model.get('tct_macro_sector_ddw_c') == null) {
                        errors['tct_macro_sector_ddw_c'] = errors['tct_macro_sector_ddw_c'] || {};
                        errors['tct_macro_sector_ddw_c'].required = true;
                    }
                    if (this.model.get('fechaconstitutiva_c') == "" || this.model.get('fechaconstitutiva_c') == null) {
                        errors['fechaconstitutiva_c'] = errors['fechaconstitutiva_c'] || {};
                        errors['fechaconstitutiva_c'].required = true;
                    }
                } else {

                    if (this.model.get('curp_c') == "" || this.model.get('curp_c') == null) {
                        errors['curp_c'] = errors['curp_c'] || {};
                        errors['curp_c'].required = true;
                    }
                   if (this.model.get('apellidomaterno_c') == "" || this.model.get('apellidomaterno_c') == null) {
                        errors['apellidomaterno_c'] = errors['apellidomaterno_c'] || {};
                        errors['apellidomaterno_c'].required = true;
                    }
                    if (this.model.get('fechadenacimiento_c') == "" || this.model.get('fechadenacimiento_c') == null) {
                        errors['fechadenacimiento_c'] = errors['fechadenacimiento_c'] || {};
                        errors['fechadenacimiento_c'].required = true;
                    }
                    if (this.model.get('genero_c') == "" || this.model.get('genero_c') == null) {
                        errors['genero_c'] = errors['genero_c'] || {};
                        errors['genero_c'].required = true;
                    }

                    if (this.model.get('tct_macro_sector_ddw_c') == "" || this.model.get('tct_macro_sector_ddw_c') == null) {
                        errors['tct_macro_sector_ddw_c'] = errors['tct_macro_sector_ddw_c'] || {};
                        errors['tct_macro_sector_ddw_c'].required = true;
                    }

                }
            }
        }

        callback(null, fields, errors);
    },

    _getIndicador: function(idSelected, valuesSelected) {

        //variable con resultado
        var result = null;

        //Arma objeto de mapeo
        var dir_indicador_map_list = app.lang.getAppListStrings('dir_indicador_map_list');

        var element = {};
        var object = [];
        var values = [];

        for(var key in dir_indicador_map_list) {
            var element = {};
            element.id = key;
            values = dir_indicador_map_list[key].split(",");
            element.values = values;
            object.push(element);
        }

        //Recupera arreglo de valores por id
        if(idSelected){
            for(var i=0; i<object.length; i++) {
                if ((object[i].id) == idSelected) {
                    result = object[i].values;
                }
            }
            console.log(result);
        }

        //Recupera id por valores
        if(valuesSelected){
            result = [];
            for(var i=0; i<object.length; i++) {
                if (object[i].values.length == valuesSelected.length) {
                    //Ordena arreglos y compara
                    valuesSelected.sort();
                    object[i].values.sort();
                    var tempVal = true;
                    for(var j=0; j<valuesSelected.length; j++) {
                        if(valuesSelected[j] != object[i].values[j]){
                            tempVal = false;
                        }
                    }
                    if( tempVal == true){
                        result[0] = object[i].id;
                    }

                }
            }

            console.log(result);
        }

        return result;
    },

    validapotencial: function(fields, errors, callback) {

        if ((this.model.get('tipo_registro_c') == 'Prospecto' && this.model.get('subtipo_cuenta_c') == 'Integracion de Expediente') || this.model.get('tipo_registro_c') == 'Cliente'  ) {
            if (this.model.get('ventas_anuales_c') == undefined || this.model.get('ventas_anuales_c') == "" || (Number(this.model.get('ventas_anuales_c')) <= 0 ))  {
                errors['ventas_anuales_c'] = "Este campo debe tener un valor mayor a 0.";
                errors['ventas_anuales_c'].required = true;
            }
            if (this.model.get('activo_fijo_c') == undefined || this.model.get('activo_fijo_c') == "" || (Number(this.model.get('activo_fijo_c')) <= 0 ))  {
                errors['activo_fijo_c'] = "Este campo debe tener un valor mayor a 0.";
                errors['activo_fijo_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    valida_requeridos: function(fields, errors, callback) {
        var campos = "";
        _.each(errors, function(value, key) {
            _.each(this.model.fields, function(field) {
                if(_.isEqual(field.name,key)) {
                    if(field.vname) {
                        if(field.vname == 'LBL_PAIS_NACIMIENTO_C' && this.model.get('tipodepersona_c') == 'Persona Moral')
                        {
                          campos = campos + '<b>País de constitución</b><br>';
                        }
                        else
                        {
                          if(field.vname == 'LBL_ESTADO_NACIMIENTO' && this.model.get('tipodepersona_c') == 'Persona Moral')
                          {
                            campos = campos + '<b>Estado de constitución</b><br>';
                          }
                          else
                          {
                            campos = campos + '<b>' + app.lang.get(field.vname, "Accounts") + '</b><br>';
                          }
                        }
                    }
          		  }
       	    }, this);
        }, this);
        if(campos) {
            app.alert.show("Campos Requeridos", {
                level: "error",
                messages: "Hace falta completar la siguiente información en la <b>Cuenta:</b><br>" + campos,
                autoClose: false
            });
        }
        callback(null, fields, errors);
    },

    checkaccdatestatements:function(fields, errors, callback){
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
            dd = '0'+dd
        }
        if(mm<10) {
            mm = '0'+mm
        }
        today = yyyy+'-'+mm+'-'+dd;

        this.obj_dates = JSON.parse(this.model.get('tct_dates_acc_statements_c'));
        var c=0;
        for (let elem in this.obj_dates) {
            if(this.obj_dates[elem].trim()==""){
                $('#'+elem).css('border-color', 'red');
                c++;
            }
        }
        if(c>0){
            app.alert.show("empty_date", {
                level: "error",
                title: "Existen fechas de los estados de cuenta <b>vac\u00EDas</b>, favor de verificar",
                autoClose: false
            });

            errors['empty_date'] = errors['empty_date'] || {};
            errors['empty_date'].required = true;
        }
        callback(null,fields,errors);
    },

    validaRequeridosPLD: function (fields, errors, callback){
        var faltantesAP = "";
        var faltantesFF = "";
        var faltantesCA = "";
        var tipoCuenta = this.model.get('tipo_registro_c');
        if (tipoCuenta == 'Cliente') {
          //Valida campos para AP
          if (App.user.attributes.tipodeproducto_c == '1') {
              //Pregunta: campo2ddw-ap
             /* if($('.campo2ddw-ap').select2('val') == '' && this.model.get('tipodepersona_c') != 'Persona Moral'){
                  $('.campo2ddw-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('select.campo2ddw-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo2ddw-ap').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo3rel-ap
              if($('.campo3rel-ap')[0]['innerText'] == '' && this.model.get('tipodepersona_c') != 'Persona Moral' && $('.campo2ddw-ap').select2('val')=='2'){
                  $('.campo3rel-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('.campo3rel-ap')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo3rel-ap').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo4ddw-ap
             /* if($('.campo4ddw-ap').select2('val') == ''){
                  $('.campo4ddw-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('select.campo4ddw-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo4ddw-ap').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo5rel-ap
              if($('.campo5rel-ap')[0]['innerText'] == '' && $('.campo4ddw-ap').select2('val')=='2'){
                  $('.campo5rel-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('.campo5rel-ap')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo5rel-ap').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo7ddw-ap
             /* if($('.campo7ddw-ap').select2('val') == '' && this.model.get('tipodepersona_c') == 'Persona Moral'){
                  $('.campo7ddw-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('select.campo7ddw-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo7ddw-ap').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo9ddw-ap
              if($('.campo9ddw-ap').select2('val') == '' && this.model.get('tipodepersona_c') == 'Persona Moral'){
                  $('.campo9ddw-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('select.campo9ddw-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo9ddw-ap').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo6ddw-ap
              if($('.campo6ddw-ap').select2('val') == ''){
                  $('.campo6ddw-ap').find('.select2-choice').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('select.campo6ddw-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo6ddw-ap').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo17txt-ap
              if($('.campo17txt-ap').val() == '' && $('.campo14chk-ap')[0].checked){
                  $('.campo17txt-ap').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('.campo17txt-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo17txt-ap').css('border-color','');
              }
              //Pregunta: campo26txt-ap
              if($('.campo26txt-ap').val() == '' && $('.campo11ddw-ap').select2('val')=='No' ){
                  $('.campo26txt-ap').css('border-color','red');
                  faltantesAP = faltantesAP + '<b>- '+$('.campo26txt-ap')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo26txt-ap').css('border-color','');
              }
          }
          //Valida campos para FF
          if (App.user.attributes.tipodeproducto_c == '4') {
              //Pregunta: campo2ddw-ff
              /*if($('.campo2ddw-ff').select2('val') == '' && this.model.get('tipodepersona_c') != 'Persona Moral'){
                  $('.campo2ddw-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('select.campo2ddw-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo2ddw-ff').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo3rel-ff
              if($('.campo3rel-ff')[0]['innerText'] == '' && this.model.get('tipodepersona_c') != 'Persona Moral' && $('.campo2ddw-ff').select2('val')=='2'){
                  $('.campo3rel-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('.campo3rel-ff')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo3rel-ff').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo4ddw-ff
             /* if($('.campo4ddw-ff').select2('val') == ''){
                  $('.campo4ddw-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('select.campo4ddw-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo4ddw-ff').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo5rel-ff
              if($('.campo5rel-ff')[0]['innerText'] == '' && $('.campo4ddw-ff').select2('val')=='2'){
                  $('.campo5rel-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('.campo5rel-ff')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo5rel-ff').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo21ddw-ff
             /* if($('.campo21ddw-ff').select2('val') == ''){
                  $('.campo21ddw-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('select.campo21ddw-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo21ddw-ff').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo24ddw-ff
              if($('.campo24ddw-ff').select2('val') == ''){
                  $('.campo24ddw-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('select.campo24ddw-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo24ddw-ff').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo6ddw-ff
              if($('.campo6ddw-ff').select2('val') == ''){
                  $('.campo6ddw-ff').find('.select2-choice').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('select.campo6ddw-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo6ddw-ff').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo17txt-ff
              if($('.campo17txt-ff').val() == '' && $('.campo14chk-ff')[0].checked){
                  $('.campo17txt-ff').css('border-color','red');
                  faltantesFF = faltantesFF + '<b>- '+$('.campo17txt-ff')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo17txt-ff').css('border-color','');
              }
          }
          //Valida campos para CA
          if (App.user.attributes.tipodeproducto_c == '3') {
              //Pregunta: campo2ddw-ca
             /* if($('.campo2ddw-ca').select2('val') == '' && this.model.get('tipodepersona_c') != 'Persona Moral'){
                  $('.campo2ddw-ca').find('.select2-choice').css('border-color','red');
                  faltantesCA = faltantesCA + '<b>- '+$('select.campo2ddw-ca')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo2ddw-ca').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo3rel-ca
              if($('.campo3rel-ca')[0]['innerText'] == '' && this.model.get('tipodepersona_c') != 'Persona Moral' && $('.campo2ddw-ca').select2('val')=='2'){
                  $('.campo3rel-ca').find('.select2-choice').css('border-color','red');
                  faltantesCA = faltantesCA + '<b>- '+$('.campo3rel-ca')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo3rel-ca').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo4ddw-ca
             /* if($('.campo4ddw-ca').select2('val') == ''){
                  $('.campo4ddw-ca').find('.select2-choice').css('border-color','red');
                  faltantesCA = faltantesCA + '<b>- '+$('select.campo4ddw-ca')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo4ddw-ca').find('.select2-choice').css('border-color','');
              }*/
              //Pregunta: campo5rel-ca
              if($('.campo5rel-ca')[0]['innerText'] == '' && $('.campo4ddw-ca').select2('val')=='2'){
                  $('.campo5rel-ca').find('.select2-choice').css('border-color','red');
                  faltantesCA = faltantesCA + '<b>- '+$('.campo5rel-ca')[1].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo5rel-ca').find('.select2-choice').css('border-color','');
              }
              //Pregunta: campo6ddw-ca
             /* if($('.campo6ddw-ca').select2('val') == ''){
                  $('.campo6ddw-ca').find('.select2-choice').css('border-color','red');
                  faltantesCA = faltantesCA + '<b>- '+$('select.campo6ddw-ca')[0].getAttribute('data-name')+'<br></b>';
              }else{
                  $('.campo6ddw-ca').find('.select2-choice').css('border-color','');
              }*/
          }

          //Genera alertas
          if(faltantesAP != ""){
              errors['PreguntasAP'] = "";
              errors['PreguntasAP'].required = true;
              app.alert.show("faltantesAP", {
                  level: "error",
                  title: "PLD Arrendamiento puro - Faltan las siguientes preguntas por contestar: <br>" + faltantesAP
              });
          }

          if(faltantesFF != ""){
              errors['PreguntasFF'] = "";
              errors['PreguntasFF'].required = true;
              app.alert.show("faltantesFF", {
                  level: "error",
                  title: "PLD Factoraje financiero - Faltan las siguientes preguntas por contestar: <br>" + faltantesFF
              });
          }

          if(faltantesCA != ""){
              errors['PreguntasCA'] = "";
              errors['PreguntasCA'].required = true;
              app.alert.show("faltantesCA", {
                  level: "error",
                  title: "PLD Crédito automotriz - Faltan las siguientes preguntas por contestar: <br>" + faltantesCA
              });
          }
        }

        callback(null, fields, errors);
    },

    saveProdPLD:function (fields, errors, callback) {
        if (this.model.get('tipo_registro_c') != 'Persona') {
          // Actualizar modelo de pld.ProductosPLD
          var ProductosPLD = {
              'arrendamientoPuro' : {
              },
              'factorajeFinanciero' : {
              },
              'creditoAutomotriz' : {
              },
              'creditoSimple' : {
              }
          };
          // ProductosPLD.arrendamientoPuro.campo1 = $('.campo1txt-ap').val();
          ProductosPLD.arrendamientoPuro.campo2 = $('.campo2ddw-ap').select2('val');
          ProductosPLD.arrendamientoPuro.campo3 = $('.campo3rel-ap')[0]['innerText'];
          ProductosPLD.arrendamientoPuro.campo3_id = $('.campo3rel-ap').select2('val');
          ProductosPLD.arrendamientoPuro.campo4 = $('.campo4ddw-ap').select2('val');
          ProductosPLD.arrendamientoPuro.campo5 = $('.campo5rel-ap')[0]['innerText'];
          ProductosPLD.arrendamientoPuro.campo5_id = $('.campo5rel-ap').select2('val');
          ProductosPLD.arrendamientoPuro.campo6 = $('.campo6ddw-ap').select2('val');
          // ProductosPLD.arrendamientoPuro.campo7 = $('.campo7ddw-ap').select2('val');
          // ProductosPLD.arrendamientoPuro.campo8 = $('.campo8txt-ap').val();
          // ProductosPLD.arrendamientoPuro.campo9 = $('.campo9ddw-ap').select2('val');
          // ProductosPLD.arrendamientoPuro.campo10 = $('.campo10txt-ap').val();
          ProductosPLD.arrendamientoPuro.campo11 = $('.campo11ddw-ap').select2('val');
          //ProductosPLD.arrendamientoPuro.campo13 = $('.campo13chk-ap')[0].checked;
          ProductosPLD.arrendamientoPuro.campo14 = $('.campo14chk-ap')[0].checked;
          ProductosPLD.arrendamientoPuro.campo16 = $('.campo16ddw-ap').select2('val').toString();
          ProductosPLD.arrendamientoPuro.campo17 = $('.campo17txt-ap').val();
          ProductosPLD.arrendamientoPuro.campo25 = $('.campo25ddw-ap').select2('val');
          ProductosPLD.arrendamientoPuro.campo26 = $('.campo26txt-ap').val();
          // ProductosPLD.factorajeFinanciero.campo1 = $('.campo1txt-ff').val();
          ProductosPLD.factorajeFinanciero.campo2 = $('.campo2ddw-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo3 = $('.campo3rel-ff').val();
          ProductosPLD.factorajeFinanciero.campo3_id = $('.campo3rel-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo4 = $('.campo4ddw-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo5 = $('.campo5rel-ff').val();
          ProductosPLD.factorajeFinanciero.campo5_id = $('.campo5rel-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo21 = $('.campo21ddw-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo22 = $('.campo22int-ff').val();
          ProductosPLD.factorajeFinanciero.campo23 = $('.campo23dec-ff').val();
          ProductosPLD.factorajeFinanciero.campo16 = $('.campo16ddw-ff').select2('val').toString();
          ProductosPLD.factorajeFinanciero.campo17 = $('.campo17txt-ff').val();
          ProductosPLD.factorajeFinanciero.campo14 = $('.campo14chk-ff')[0].checked;
          ProductosPLD.factorajeFinanciero.campo24 = $('.campo24ddw-ff').select2('val');
          ProductosPLD.factorajeFinanciero.campo6 = $('.campo6ddw-ff').select2('val');
          //  ProductosPLD.creditoAutomotriz.campo1 = $('.campo1txt-ca').val();
          ProductosPLD.creditoAutomotriz.campo2 = $('.campo2ddw-ca').select2('val');
          ProductosPLD.creditoAutomotriz.campo3 = $('.campo3rel-ca').val();
          ProductosPLD.creditoAutomotriz.campo3_id = $('.campo3rel-ca').select2('val');
          ProductosPLD.creditoAutomotriz.campo4 = $('.campo4ddw-ca').select2('val');
          ProductosPLD.creditoAutomotriz.campo5 = $('.campo5rel-ca').val();
          ProductosPLD.creditoAutomotriz.campo5_id = $('.campo5rel-ca').select2('val');
          ProductosPLD.creditoAutomotriz.campo6 = $('.campo6ddw-ca').select2('val');
          // ProductosPLD.creditoSimple.campo1 = $('.campo1txt-cs').val();
          ProductosPLD.creditoSimple.campo2 = $('.campo2ddw-cs').select2('val');
          ProductosPLD.creditoSimple.campo3 = $('.campo3rel-cs').val();
          ProductosPLD.creditoSimple.campo3_id = $('.campo3rel-cs').select2('val');
          ProductosPLD.creditoSimple.campo4 = $('.campo4ddw-cs').select2('val');
          ProductosPLD.creditoSimple.campo5 = $('.campo5rel-cs').val();
          ProductosPLD.creditoSimple.campo5_id = $('.campo5rel-cs').select2('val');
          ProductosPLD.creditoSimple.campo18 = $('.campo18ddw-cs').select2('val').toString();
          ProductosPLD.creditoSimple.campo19 = $('.campo19txt-cs').val();
          ProductosPLD.creditoSimple.campo14 = $('.campo14chk-cs')[0].checked;
          ProductosPLD.creditoSimple.campo20 = $('.campo20ddw-cs').select2('val');
          ProductosPLD.creditoSimple.campo6 = $('.campo6ddw-cs').select2('val');

          if ($.isEmptyObject(errors))
          {
            this.model.set('tct_nuevo_pld_c', JSON.stringify(ProductosPLD));
          }
        }

        callback(null,fields,errors);
    },

    keyDownNewExtension: function (evt) {
        if (!evt) return;
        if(!this.validanumeros(evt)){
            return false;
        }
    },
    validanumeros:function(evt){
        if($.inArray(evt.keyCode,[110,188,45,33,36,35,34,8,9,20,16,17,37,40,39,38,16,49,50,51,52,53,54,55,56,57,48,96,97,98,99,100,101,102,103,104,105]) < 0) {
            app.alert.show("Caracter Invalido", {
                level: "error",
                title: "Solo n\u00FAmeros son permitidos en este campo.",
                autoClose: true
            });
            return false;

        }else{
            return true;
        }
    },

    validacantidades: function (fields, errors, callback){
        if ($('.campo23dec-ff').val() != "" && $('.campo23dec-ff').val() != undefined &&  $('.campo23dec-ff').val() <= 0 ) {
                    app.alert.show("Valor Invalido", {
                        level: "error",
                        title: "Solo n\u00FAmeros son permitidos en este campo.",
                        autoClose: true
                    });
                errors['campo23dec-ff'] = "El campo Número de pagos no debe tener un valor mayor a 0.";
                errors['campo23dec-ff'].required = true;
            }
        if ($('.campo22int-ff').val() != "" && $('.campo22int-ff').val() != undefined &&  $('.campo22int-ff').val() <= 0 ) {
            app.alert.show("Valor Invalido", {
                level: "error",
                title: "Solo n\u00FAmeros son permitidos en este campo.",
                autoClose: true
            });
            errors['campo22int-ff'] = "El campo Monto total aproximado no debe tener un valor mayor a 0.";
            errors['campo22int-ff'].required = true;
        }

            callback(null,fields,errors);
    },
})
