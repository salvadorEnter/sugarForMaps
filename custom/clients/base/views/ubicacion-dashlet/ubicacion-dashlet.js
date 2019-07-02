({
	
    plugins:['Dashlet'],
	events:{
		'click #buscarCuentas': 'loadData',
        //'click #buscarCuentas':'Valida',
        'click #buscarCuentas':'prueba'
	},
    coordenadas:[],
    markers:[],
    //nombre:[],
    
	initialize: function (options) {
        //Inicializa campo custom
        self = this;
        this._super('initialize', [options]);

        this.cuentas = {};
        this.cuentas.records = [];

        //Carga datos:
        //Creación
        this.loadData();
        //Registro
        this.model.on('sync', this.loadData, this);
    },
     
    loadData:function(){
    	cuentas = "";
    	var filtros ="";
        var self = this;
        console.log("Si funciona");
        var nombre=$('#nombre').val();
        var tipo=$('#tipo').val();
        var telefono=$('#telefono').val();        
        try {
	    	if(nombre!=""){
        		filtros=filtros+'filter[0][name][$equals]='+nombre;
        	}
        	if(tipo!=""){
        		filtros=filtros+'&filter[1][tipo_registro_c][$equals]='+tipo;
        	}
        	if(telefono!=""){
        		filtros=filtros+'&filter[2][phone_office][$equals]='+telefono;
        	}
        	filtros=filtros+'&fields=name,tipo_registro_c,phone_office,longitud_c,latitud_c&max_num=20';
        	var cuentas_url = app.api.buildURL('Accounts?'+filtros,
            	null, null, null);
         			app.api.call('GET', cuentas_url, {}, {
                        success: function (data) {
                            self.cuentas = data;
                            _.extend(this, self.cuentas);
                            self.render();
                        },
                        error: function (e) {
                            throw e;
                        }
                    });
                }
		catch(e) {
            console.log(e);
        }        
    },
    
    _render: function (fields, errors, callback) {
        this._super("_render");
        //this.muestraMapa();
        //this.muestraMapa();
        //self.tipo_List = app.lang.getAppListStrings('');
        //$('select.Tipo').select2();
        //if (this.coordenadas.length>0){
                /*
                var directionsDisplay,
                    directionsService;
                var directionsService = new google.maps.DirectionsService();
                    directionsDisplay = new google.maps.DirectionsRenderer();*/
                    /*
                var test={lat:19.4236252 , lng:-99.16308609999999};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 4,
                  center: test
                });

                var image = {
                url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                size: new google.maps.Size(20, 32),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(0, 32)
                };
                var shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: 'poly'
                    };

            for(var i=0;i<this.coordenadas.length;i++){
                var mylocation=this.coordenadas[i];
                //var nombreCuenta=this.nombre[i];
                //for (var x=0;x<this.name.length;x++){
                //var nombre=this.name[x];
                /*
                self.markers.push(new google.maps.Marker({
                    position:{lat:self.coordenadas[i].lat,lng:self.coordenadas[i].lng},
                    map:map,
                    icon:image,
                    shape:shape
                }));*//*
                    var markers = new google.maps.Marker({
                        position: mylocation,
                        map: map,
                        icon: image,
                        shape: shape
                        //title: nombreCuenta,
                        //'<a href="#Accounts/{{id}}" target="_blank">{{name}}</a>',
                        //zIndex:mylocation[3]
                    });
                //}
            }
        }
        else{
            this.muestraMapa();
        }
        this.coordenadas=[];
        //this.nombre=[];*/
    },
    
    muestraMapa:function(){
        //var test=this.coordenadas[this.coordenadas.length-1];
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 52.520, lng: 13.410}
        });
    },

    /*
    prueba:function(){
        //self.render();
        cuentas = "";
        var filtros ="";
        var self = this;
        console.log("Si funciona");
        var nombre=$('#nombre').val();
        var tipo=$('#tipo').val();
        var telefono=$('#telefono').val();
        /*
        if($('#nombre').val()=="" || $('#nombre').valvar test=this.coordenadas[this.coordenadas.length-1]()==null || $('#tipo').val()=="" || $('#tipo').val()==null || $('#telefono').val()=="" || $('#telefono').val()==null){
            app.alert.show("campos_vacios", {
                    level: "error",
                    title: "Al menos un campo debe de tener valores",
                    autoClose: false
                });
            //errors['campos_vacios'] = errors['campos_vacios'] || {};
            errors['campos_vacios'].required = true;
            return;
        }*/
        /*
            try {
                if(nombre!=""){
                    filtros=filtros+'filter[0][name][$equals]='+nombre;
                }
                if(tipo!=""){
                    filtros=filtros+'&filter[1][tipo_registro_c][$equals]='+tipo;
                }
                if(telefono!=""){
                    filtros=filtros+'&filter[2][phone_office][$equals]='+telefono;
                }
                filtros=filtros+'&fields=name,tipo_registro_c,phone_office,longitud_c,latitud_c&max_num=20';
                var cuentas_url = app.api.buildURL('Accounts?'+filtros,
                    null, null, null);
                        app.api.call('GET', cuentas_url, {}, {
                            success: function (data) {
                                self.cuentas = data;
                                for(var i=0; i<self.cuentas.records.length; i++){
                                    //self.name.push(self.cuentas.records[i].name);
                                    console.log("Las coordenadas son:"+self.cuentas.records[i].latitud_c+self.cuentas.records[i].longitud_c);
                                    if(self.cuentas.records[i].latitud_c!='' && self.cuentas.records[i].longitud_c!=''){
                                       self.coordenadas.push({lat:parseFloat(self.cuentas.records[i].latitud_c), lng:parseFloat(self.cuentas.records[i].longitud_c)}); 
                                    }
                                    //self.nombre.push(self.cuentas.records[i].name);
                                }
                                /*
                                var test={lat:19.4236252 , lng:-99.16308609999999};
                                
                                var directionsDisplay,
                                    directionsService;
                                var directionsService = new google.maps.DirectionsService();
                                    directionsDisplay = new google.maps.DirectionsRenderer();
                                var map = new google.maps.Map(document.getElementById('map'), {
                                  zoom: 4,
                                  center: test
                                });

                                var image = {
                                url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                                size: new google.maps.Size(20, 32),
                                origin: new google.maps.Point(0, 0),
                                anchor: new google.maps.Point(0, 32)
                                };
                                var shape = {
                                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                                    type: 'poly'
                                    };

                                for(var i=0;i<self.coordenadas.length;i++){
                                    var mylocation=self.coordenadas[i];
                                    
                                    self.markers.push(new google.maps.Marker({
                                        position:{lat:self.coordenadas[i].lat,lng:self.coordenadas[i].lng},
                                        map:map,
                                        icon:image,
                                        shape:shape
                                    }));
                                    var markers = new google.maps.Marker({
                                        position: mylocation,
                                        map: map,
                                        icon: image,
                                        shape: shape,
                                        //title: mylocation[0],
                                        //zIndex:mylocation[3]
                                      });
                                    }*/
                                //_.extend(this, self.cuentas);
                                /*
                                self.render();
                            },
                            error: function (e) {
                                throw e;
                            }
                        });
                    }
            catch(e) {
                console.log(e);
            }
        
        //self.render();
    },*/      
})