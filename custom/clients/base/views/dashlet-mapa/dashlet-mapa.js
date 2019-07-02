({
	plugins:['Dashlet'],
	events:{
		'click #buscarCuentas': 'loadData',
        'click #buscarCuentas':'CuentasEnMapa',
        'mouseover .linkcuenta':'IconoIdent',
        'mouseout .linkcuenta':'IconOriginal',
	},
	tipoRegistro:null,
    coordenadas:[],
    nombre:[],
    Cuenta:[],
    infoObjeto:[],
    nombref:null,
    tipof:null,
    telefonof:null,
    marcadores:[],

	initialize: function (options) {
        //Inicializa campo custom
        this.tipoRegistro=App.lang.getAppListStrings('tipo_registro_list');//Lo mas reciente 9:00
        self = this;
        this._super('initialize', [options]);
        this.cuentas = {};
        this.cuentas.records = [];
        //Carga datos:
        //Creación
        this.loadData();
        //Registro
        //this.model.on('sync', this.loadData, this);
        //this.IconoIdent();
    },

    _render: function (fields, errors, callback) {
        this._super("_render");
        if (this.coordenadas.length>0){
        	//var marcadores=[];

        	var final=this.coordenadas[this.coordenadas.length-1];
            //var test={lat:19.4236252 , lng:-99.16308609999999};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: final
            });
            var image = {
            url: 'https://i.ibb.co/Vq7fyMg/office29.png',
            size: new google.maps.Size(30, 30), //50,50 20 32
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 32)
            };
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            var infowindow = new google.maps.InfoWindow();

            for(var i=0;i<this.coordenadas.length;i++){
                var mylocation=this.coordenadas[i];
                var nombreCuenta=this.nombre[i];
                var nameCuentaObj=this.Cuenta[i].nombre;
                var idCuentaObj=this.Cuenta[i].id;
                var markers = new google.maps.Marker({
                    position: mylocation,
                    map: map,
                    icon: image,
                    shape: shape,
                    title: idCuentaObj,
                    clickable:true
                	});
                var context=this;
            	google.maps.event.addListener(markers, 'click', (function (markers, i) {
		            return function () {
		                infowindow.setContent('<p><a href="#Accounts/'+markers.title+'"target="_blank">'+context.cuentas.records[i].name+'</a></p>'+
		                	'<p>'+context.cuentas.records[i].tipodepersona_c+'</p>'+
		                	'<p>'+context.cuentas.records[i].tipo_registro_c+'</p>'+
		                	'<p>'+context.cuentas.records[i].phone_office+'</p>');
		                infowindow.open(map, markers);
		            	}

	        		})(markers, i)); 
            	context.marcadores.push(markers);
            	console.log("El valor del arreglo es"+ context.marcadores[i]);
                }
            this.paginacion();
            $('.datos').css({ 'width':'2000px', 'height':'20px' });
            //this.IconoIdent();
 		}
        else{
            this.loadData();
        }
 		$('.datos').css({ 'width':'2000px', 'height':'20px' });
    	this.coordenadas=[];
        this.nombre=[];
        this.Cuenta=[];
	},
	
	paginacion:function(){
		$(document).ready(function() {
	    	var table=$('#registros').removeAttr('width').DataTable({
	        	"pagingType": "full_numbers",
		        scrollY:"300px",
		        scrollX:true,
		        scrollCollapse:true,
		        paging:true,
		        /*
		        columnDefs: [
		            { 
		            	width: auto, targets: "_all"
		            }
		        ],*/
		        fixedColumns: true,
	    		"lengthMenu": [ [20], [20] ],
	    		language:{
	    			"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
					},
					"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
	    		}
	    		/*
    		 	columnDefs: [{
    		 		width: auto,
    		 		targets: "_all" 
	        	}],*/
	    	});
		});
		$('.dataTables_filter').hide();
		$('.dataTables_length').hide();
		//$('.datos').css({ 'width':'auto'});
	},

	IconoIdent:function(ev){
		console.log('Esta seleccionando una cuenta');
		var cuenta=ev.currentTarget.getAttribute('data-id');
		for(var i=0; i<this.marcadores.length;i++){
			if(this.marcadores[i].title==cuenta){
				console.log('Se hizo match con: '+cuenta+' '+this.marcadores[i].title)
				this.marcadores[i].setIcon({
					url: 'https://i.ibb.co/PG4ddMz/Edificio-Red26x46.png',
            		size: new google.maps.Size(22, 40), //50,50 20 32
            		origin: new google.maps.Point(0, 0),
            		anchor: new google.maps.Point(0, 32)
				});
			}
		}
    },

    IconOriginal:function(ev){
    	console.log('El cursor esta fuera');
    	var cuenta=ev.currentTarget.getAttribute('data-id');
		for(var i=0; i<this.marcadores.length;i++){
			if(this.marcadores[i].title==cuenta){
				//console.log('Se hizo match con: '+cuenta+' '+this.marcadores[i].title)
				this.marcadores[i].setIcon({
					url: 'https://i.ibb.co/Vq7fyMg/office29.png',
            		size: new google.maps.Size(30, 30), //50,50 20 32
            		origin: new google.maps.Point(0, 0),
            		anchor: new google.maps.Point(0, 32)
				});
			}
		}
    },
	
	initMapa:function(){
		var test={lat:19.4236252 , lng:-99.16308609999999};
		var map = new google.maps.Map(document.getElementById('map'), {
	        zoom: 7,
	        center:test
        });
	},

    cargarRegistros:function(){
        cuentas = "";
        var filtros ="";
        var self = this;
        console.log("Si funciona");
        var nombre=$('#nombre').val();
        var tipo=$('.tipo').val();
        var telefono=$('#telefono').val();
        var longitud= this.model.get('longitud_c'); 
        var latitud=this.model.get('latitud_c');        
        
        if(nombre!=""){
            filtros=filtros+'filter[0][name][$equals]='+nombre;
        }
        if(tipo!=""){
            filtros=filtros+'&filter[1][tipo_registro_c][$equals]='+tipo;
        }
        if(telefono!=""){
            filtros=filtros+'&filter[2][phone_office][$equals]='+telefono;
        }

        filtros=filtros+'&filter[3][longitud_c][$not_equals]=""';
        filtros=filtros+'&filter[4][latitud_c][$not_equals]=""';
        filtros=filtros+'&fields=name,tipodepersona_c,tipo_registro_c,phone_office,longitud_c,latitud_c&max_num=-1';        
        app.alert.show('carga_mapa', {
            level: 'process',
            title: 'Por favor espere',
        });
        var cuentas_url = app.api.buildURL('Accounts?'+filtros,
            null, null, null);
                app.api.call('GET', cuentas_url, {}, {
                    success: function (data) {
                        self.cuentas = data;
                        for(var i=0; i<self.cuentas.records.length; i++){
                                console.log("Las coordenadas son:"+self.cuentas.records[i].latitud_c+self.cuentas.records[i].longitud_c);
                                self.coordenadas.push({lat:parseFloat(self.cuentas.records[i].latitud_c), lng:parseFloat(self.cuentas.records[i].longitud_c)}); 
                                self.Cuenta.push({'id':self.cuentas.records[i].id,
                                                         'nombre':self.cuentas.records[i].name
                                                });
                                app.alert.dismiss('carga_mapa');
                            }
                        _.extend(this, self.cuentas);
                        self.render();
                        $('.datos').css({ 'width':'2000px', 'height':'20px' });
                    },
                    error: function (e) {
                        throw e;
                    }
                });
    },
    loadData:function(){
    	this.cargarRegistros();
    },
    
    CuentasEnMapa:function(){
    	var filtros ="";
        var self = this;
        console.log("Si funciona");
        var nombre=$('#nombre').val();
        var tipo=$('.tipo').val();
        var telefono=$('#telefono').val();
        var longitud= this.model.get('longitud_c'); 
        var latitud=this.model.get('latitud_c');
        event.preventDefault();
        if(nombre==""&&tipo==""&&telefono==""){
        	this.loadData();
        }
        else if(nombre!="" || nombre!=null || tipo!="" || tipo!=null || telefono!="" || telefono!=null){//else
    		try {
                if(nombre!=""){
		    		filtros=filtros+'filter[0][name][$contains]='+nombre;
		    	}
		    	if(tipo!=""){
		    		filtros=filtros+'&filter[1][tipo_registro_c][$equals]='+tipo;
		    	}
		    	if(telefono!=""){
		    		filtros=filtros+'&filter[2][phone_office][$contains]='+telefono;
		    	}

        		filtros=filtros+'&filter[3][longitud_c][$not_equals]=""';
        		filtros=filtros+'&filter[4][latitud_c][$not_equals]=""';
                filtros=filtros+'&fields=name,tipodepersona_c,tipo_registro_c,phone_office,longitud_c,latitud_c&max_num=20';
                app.alert.show('carga_mapa', {
			    level: 'process',
			    title: 'Por favor espere',
				});
                var cuentas_url = app.api.buildURL('Accounts?'+filtros,
                    null, null, null);
                        app.api.call('GET', cuentas_url, {}, {
                            success: function (data) {
                                self.cuentas = data;
                                for(var i=0; i<self.cuentas.records.length; i++){
                                    console.log("Las coordenadas son:"+self.cuentas.records[i].latitud_c+self.cuentas.records[i].longitud_c);
                                       self.coordenadas.push({lat:parseFloat(self.cuentas.records[i].latitud_c), lng:parseFloat(self.cuentas.records[i].longitud_c)}); 
                                       self.Cuenta.push({'id':self.cuentas.records[i].id,
                                   						 'nombre':self.cuentas.records[i].name
                                   		});
                                    self.nombre.push(self.cuentas.records[i].name);
  	                                app.alert.dismiss('carga_mapa');
                                }
                                _.extend(this, self.cuentas);               
                                self.render();
                                $('.datos').css({ 'width':'2000px', 'height':'20px' });
                            },
                            error: function (e) {
                                throw e;
                            }
                        });
                    }
            catch(e) {
                console.log(e);
            }
        }
    },
})