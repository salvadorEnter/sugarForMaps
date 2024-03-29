({
    extendsFrom: 'CreateView',

    initialize: function (options) {
        self = this;
        this._super("initialize", [options]);
        this.on('render',this.disableparentsfields,this);
        this.model.addValidationTask('checkdate', _.bind(this.checkdate, this));
    },

    _render: function () {
        this._super("_render");


    },



    /* @Alvador Lopez Y Adrian Arauz
    Oculta los campos relacionados
    */
    disableparentsfields:function () {
        if(this.createMode){//Evalua si es la vista de creacion
            if(this.model.get('parent_id')!=undefined){
                this.$('[data-name="parent_name"]').attr('style','pointer-events:none;')
            }
        }
    },

    checkdate: function (fields, errors, callback) {
        var temp1=this.model.get('date_start');
        var temp3=this.model.get('date_due');
        if(temp1!=null && temp1!=undefined && temp3!=null && temp3!=undefined) {
            var temp2 = temp1.split('T');
            var start_date = temp2[0];
            var temp4 = temp3.split('T');
            var due_date = temp4[0];
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + '-' + mm + '-' + dd;

            if (start_date < today) {
                app.alert.show("start_invalid", {
                    level: "error",
                    title: "La fecha de inicio no puede ser menor al d\u00EDa de hoy",
                    autoClose: false
                });
                errors['date_start'] = errors['date_start'] || {};
                errors['date_start'].datetime = true;
            }
            if (due_date < today) {
                app.alert.show("due_invalid", {
                    level: "error",
                    title: "La fecha de vencimiento no puede ser menor al d\u00EDa de hoy",
                    autoClose: false
                });
                errors['date_due'] = errors['date_due'] || {};
                errors['date_due'].datetime = true;
            }
        }
        callback(null,fields,errors);
    },

})