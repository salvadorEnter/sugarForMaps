({
    extendsFrom: 'RecordView',

    fechaInicioTemp: "",

    events: {
        'click .record-edit-link-wrapper': 'handleEdit',

    },

    initialize: function (options) {
        self = this;
        this._super("initialize", [options]);

        this.on('render', this.disableparentsfields, this);
        this.on('render', this.noEditStatus,this);
        this.model.on('sync', this.cambioFecha, this);
        this.model.on('sync', this.disablestatus, this);
        this.model.on('sync', this.disableFieldsTime,this);
        this.model.addValidationTask('VaildaFechaMayoraInicial', _.bind(this.validaFechaInicial2, this));
        this.model.on("change:status",_.bind(this.muestracampoResultado, this));
        //this.model.on("change:ca_importe_enganche_c", _.bind(this.calcularPorcientoRI, this));
        //this.model.addValidationTask('ValidaCuentaNoVacia',_.bind(this.ValidaCuentaNoVacia, this));
        //Al dar click mandara a la vista de creacion correspondiente a la minuta 
        this.context.on('button:new_minuta_b:click', this.CreaMinuta,this);
        
        this.context.on('button:getlocation:click', this.GetLocation, this);
        
        this.model.on('sync', this.ValidaCuentNoVacia,this); //Validacion para creación de la minuta
        this.model.on('sync', this.showCheckin, this);
        /*@Jesus Carrillo
            Funcion que pinta de color los paneles relacionados
        */
        this.model.on('sync', this.fulminantcolor, this);
        /*
          * Victor Martinez Lopez 24-08-2018
        */
        this.model.addValidationTask('resultadoCitaRequerido',_.bind(this.resultadoCitaRequerido, this));
        this.model.on('sync',this.enableparentname,this);
    },

    _render: function (options) {
        this._super("_render");
        if (this.model.get('status') == 'Planned') {
            this.$('div[data-name=resultado_c]').hide();

        }
    },

    /**
     * @author Salvador Lopez
     * Se habilita handleEdit, editClicked y cancelClicked para dejar habilitado el campo parent_name y solo se bloquea al
     * dar click en el campo e intentar editar
     * */
    handleEdit: function(e, cell) {
        var target,
            cellData,
            field;

        if (e) { // If result of click event, extract target and cell.
            target = this.$(e.target);
            cell = target.parents('.record-cell');
        }

        if(e.currentTarget.dataset['name']=='parent_name'){

            this.inlineEditMode = false;

        }else{

            cellData = cell.data();
            field = this.getField(cellData.name);

            // Set Editing mode to on.
            this.inlineEditMode = true;

            this.setButtonStates(this.STATE.EDIT);

            this.toggleField(field);

            if (cell.closest('.headerpane').length > 0) {
                this.toggleViewButtons(true);
                this.adjustHeaderpaneFields();
            }

        }


    },
    CreaMinuta:function(){
        var model=App.data.createBean('minut_Minutas');
        model.set('account_id_c', this.model.get('parent_id'));
        model.set('tct_relacionado_con_c', this.model.get('parent_name'));
        model.set('objetivo_c', this.model.get('objetivo_c'));
        model.set('minut_minutas_meetingsmeetings_idb',this.model.get('id'))
        model.set('minut_minutas_meetings_name',this.model.get('name'))
        app.drawer.open({
            layout:'create',
            context:{
            create: true,
            module:'minut_Minutas',
            model:model
       }
    });
  },

  _dispose: function() {
     this._super('_dispose');
   },

    /*editClicked: function() {

        this._super("editClicked");
        this.$('[data-name="parent_name"]').attr('style', '');
        this.setButtonStates(this.STATE.EDIT);
        this.action = 'edit';
        this.toggleEdit(true);
        this.setRoute('edit');

    },*/

    cancelClicked: function() {

        this._super("cancelClicked");

        this.$('[data-name="parent_name"]').attr('style', '');

        this.setButtonStates(this.STATE.VIEW);
        this.action = 'detail';
        this.handleCancel();
        this.clearValidationErrors(this.editableFields);
        this.setRoute();
        this.unsetContextAction();
    },

    cambioFecha: function () {
        this.fechaInicioTemp = Date.parse(this.model.get("date_start"));
        console.log("Fechas: " + this.fechaInicioTemp);
    },

    /*Solo será visible el resultado cuando el estado se Realizada o No Realizada
    * Victor Martinez Lopez 23-8-2018
    * */
    muestracampoResultado:function () {
        if(this.model.get('status')=='Held'|| this.model.get('status')=='Not Held'){
            this.$('div[data-name=resultado_c]').show();
        } if (this.model.get('status') == 'Planned') {
            this.$('div[data-name=resultado_c]').hide();
        }
    },

    /*Victor Martinez Lopez
    *25-09-2018
    *El campo parent_name se habilita cuando esta vacio
    */
    enableparentname:function(){
    if (this.model.get('parent_name') !=='' && this.model.get('parent_name')!==undefined){
            var self = this;
            self.noEditFields.push('parent_name');
        }
        else {
        this.$('[data-name="parent_name"]').attr('style', '');
        this.setButtonStates(this.STATE.EDIT);
        this.action = 'edit';
        this.toggleEdit(true);
        this.setRoute('edit');
        }
    },

    /* @F. Javier G. Solar
     * Valida que la Fecha Inicial no sea menor que la actual
     * 14/08/2018
     */

    validaFechaInicial2: function (fields, errors, callback) {

        // FECHA ACTUAL
        var dateActual = new Date();
        var d1 = dateActual.getDate();
        var m1 = dateActual.getMonth() + 1;
        var y1 = dateActual.getFullYear();
        var dateActualFormat = [m1, d1, y1].join('/');
        var fechaActual = Date.parse(dateActualFormat);

        // FECHA INICIO ANTES DE CAMBIAR
        var dateInicioTmp = new Date(this.fechaInicioTemp);
        var d = dateInicioTmp.getDate();
        var m = dateInicioTmp.getMonth() + 1;
        var y = dateInicioTmp.getFullYear();
        var fechaCompletaTmp = [m, d, y].join('/');
        var fechaInicioTmp = Date.parse(fechaCompletaTmp);

        // FECHA INICIO EN CAMPO
        var dateInicio = new Date(this.model.get("date_start"));
        var d = dateInicio.getDate();
        var m = dateInicio.getMonth() + 1;
        var y = dateInicio.getFullYear();
        var fechaCompleta = [m, d, y].join('/');
        var fechaInicioNueva = Date.parse(fechaCompleta);

        if (fechaInicioTmp != fechaInicioNueva) {
            if (fechaInicioTmp < fechaActual) {
                if (fechaInicioNueva >= fechaInicioTmp) {
                    console.log("Guarda por opcion 1");
                }
                else {
                    app.alert.show("Fecha no valida", {
                        level: "error",
                        title: "No puedes guardar una reunion con fecha menor a la que se habia establecido",
                        autoClose: false
                    });

                    app.error.errorName2Keys['custom_message_date_init0'] = 'No puedes guardar una reunion con fecha menor a la que se habia establecido';
                    errors['date_start'] = errors['date_start'] || {};
                    errors['date_start'].custom_message_date_init0 = true;
                }

            //    callback(null, fields, errors);
            }
            if (fechaInicioTmp >= fechaActual) {
                if (fechaInicioNueva >= fechaActual) {
                    console.log("Guarda por opcion 2")
                }
                else {
                    app.alert.show("Fecha no valida", {
                        level: "error",
                        title: "No puedes agendar reuniones con fecha menor al d&Iacutea de hoy",
                        autoClose: false
                    });

                    app.error.errorName2Keys['custom_message_date_init1'] = 'No puedes agendar reuniones con fecha menor al d&Iacutea de hoy';
                    errors['date_start'] = errors['date_start'] || {};
                    errors['date_start'].custom_message_date_init1 = true;
                }

               // callback(null, fields, errors);
            }
        }
        callback(null, fields, errors);

    },
    /* @Salvador Lopez Y Adrian Arauz
    Oculta los campos relacionados
    */
    disableparentsfields: function () {

        //this.$('[data-name="parent_name"]').attr('style', 'pointer-events:none;');

        //Elimina ícono de lápiz para editar parent_name*
        $('[data-name="parent_name"]').find('.fa-pencil').remove();
        },
        
        /*Victor Martinez Lopez
        *El estado no es editable de manera directa al dar click, solo cuando se presiona el boton editar
        */
    noEditStatus:function (){
        $('[data-name="status"]').find('.fa-pencil').remove();
        $('.record-edit-link-wrapper[data-name=status]').remove();
    },
    /*Victor Martinez López
    * Duración y recordatorios no son editables cuando la reunión esta como realizada
    * */
    disableFieldsTime: function(){
        $('.record-edit-link-wrapper[data-name=duration]').remove();
        $('.record-edit-link-wrapper[data-name=reminders]').remove();
        if (this.model.get('objetivo_c')=='' ){
            this.$("[data-name='objetivo_c']").prop("enable", true);
        }else {
            $('.record-edit-link-wrapper[data-name=objetivo_c]').remove();
        }
        if(this.model.get('resultado_c')==''){
            this.$("[data-name='resultado_c']").prop("enable", true);
        }else{
            $('.record-edit-link-wrapper[data-name=resultado_c]').remove();
        }
    },


    /*@Jesus Carrillo
    Deshabilita campo status dependiendo de diferentes criterios
     */
    disablestatus:function () {
        if(Date.parse(this.model.get('date_end'))>Date.now() || app.user.attributes.id!=this.model.get('assigned_user_id')){
   
            $('span[data-name=status]').css("pointer-events", "none");
        }else{
            $('span[data-name=status]').css("pointer-events", "auto");
        }
    },

    /*@Jesus Carrillo
        Funcion que pinta de color los paneles relacionados
    */
    fulminantcolor: function () {
        $( '#space' ).remove();
        $('.control-group').before('<div id="space" style="background-color:#000042"><br></div>');
        $('.control-group').css("background-color", "#e5e5e5");
        $('.a11y-wrapper').css("background-color", "#e5e5e5");
        //$('.a11y-wrapper').css("background-color", "#c6d9ff");
    },

    /*El resultado es requerido solo cuando se resultado es realizada o no realizada
    * Victor Martinez Lopez 24-08-2018
    * */
    resultadoCitaRequerido:function (fields, errors, callback) {
      if(this.model.get('status')=='Held' || this.model.get('status')=='Not Held'){
        if (this.model.get('resultado_c')=='') {
          app.error.errorName2Keys['requerido_obj'] = 'El resultado de la cita es requerido';
          errors['resultado_c'] = errors['resultado_c'] || {};
          errors['resultado_c'].requerido_obj = true;
          errors['resultado_c'].required = true;
        }
      }
      callback(null, fields, errors);
    },

    /*Victor Martinez Lopez 23-10-2018
    *Función para obtener la latitud y longitud(coordenadas) y transformar a una dirección
    */
    GetLocation: function (){
        self=this;
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(this.showPosition);
        }else {
            alert("No se pudo encontrar tu ubicacion");
        }
        var today= new Date();
        self.model.set('check_in_time_c', today);
        self.model.save();
    },
    
    showPosition:function(position) {
        self.model.set('check_in_longitude_c', position.coords.longitude);
        self.model.set('check_in_latitude_c',position.coords.latitude);
        self.model.save();
        self.render();
        app.alert.show('alert_check-in_success', {
                level: 'success',
                messages: 'Check-in Existoso',
            });
        },
 
    /*Victor Martinez Lopez 22-10-2018
    El boton de Check-in solo será visible una ocasion para guardar datos 
    y cuando el usuario asignado sea igual la ususario loggeado Pendiente de terminar
    */
    showCheckin:function(){
        var myField=this.getField("check_in1");
    if (this.model.get('assigned_user_id')==app.user.attributes.id && (this.model.get('check_in_latitude_c')=='' || this.model.get('check_in_latitude_c')==null)){
        //$('[name="check_in"]').eq(0).show();
        myField.listenTo(myField, "render", function () {
                myField.show();
                console.log("field being rendered as: " + myField.tplName);
            });
    }   else   {
        //$('[name="check_in"]').eq(0).hide();
        myField.listenTo(myField, "render", function () {
                myField.hide();
                console.log("field being rendered as: " + myField.tplName);
            });
        }

    },
    //Heredar el objetivo y el resultado a la minuta y cambiar y una etiqueta de la minuta a la cuenta
    /*El boton de creación de la minuta solo será visible cuando la reunión tenga una cuenta
    *La fecha de termino sea igual a la fecha actual y el usuario asignado sea el usuario loggeado
     */
    ValidaCuentNoVacia: function () {
        //Obtención de la fecha actual
        var dateActual = new Date();
        var d1 = dateActual.getDate();
        var m1 = dateActual.getMonth() + 1;
        var y1 = dateActual.getFullYear();
        var dateActualFormat = [m1, d1, y1].join('/');
        var fechaActual = Date.parse(dateActualFormat);

        // Fecha termino en campo 
        var dateend = new Date(this.model.get("date_end"));
        var d = dateend.getDate();
        var m = dateend.getMonth() + 1;
        var y = dateend.getFullYear();
        var fechaCompleta = [m, d, y].join('/');
        var fechaendnew = Date.parse(fechaCompleta);

        var myField = this.getField("new_minuta");
        if (this.model.get('parent_name')!='' && app.user.attributes.id==this.model.get('assigned_user_id') 
            && fechaActual==fechaendnew && this.model.get('status')=='Planned'){
            myField.listenTo(myField, "render", function () {
                myField.show();
                console.log("field being rendered as: " + myField.tplName);
            });
        }

        else { 
            myField.listenTo(myField, "render", function () {
                myField.hide();
                console.log("field being rendered as: " + myField.tplName);
            });
        }
    },
})