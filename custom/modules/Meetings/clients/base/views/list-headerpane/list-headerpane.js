/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Base.ListHeaderpaneView
 * @alias SUGAR.App.view.views.BaseListHeaderpaneView
 * @extends View.Views.Base.HeaderpaneView
 */

({
    extendsFrom: 'HeaderpaneView',
    initialize: function (options) {
    this._super('initialize', [options]);

    app.shortcuts.register('List:Headerpane:Create', 'a', function () {
      var $createButton = this.$('a[name=create_button]');
      if ($createButton.is(':visible') && !$createButton.hasClass('disabled')) {
        $createButton.get(0).click();
      }
    },this);
    this.events['click .tabla'] = 'hideMapa';
    this.events['click .mapatabla'] = 'ShowMapTable';
    this.events['click .mapa']='showMapa';
    this.Reunion=[];
    this.nameReunion=[];
    this.cuentaUsuario;
    //this.buttonsMaps();
    },
     _render: function (fields, errors, callback) {
        this._super("_render");
        this.hideMapa();
    },
    showMapa:function(){
        this.render();
        this.getCoordenadas();
        this.initMap();
        $('.flex-list-view').hide()
        $('[data-action="show-more"]').hide();
        $('#map').show()
        var height=$(document).innerHeight();
        var width=$(document).innerWidth();
        $('#map').height(height);
        $('#map').width(width);
        $('#over_map').show();
        //$('#plan').attr("disabled", true);
        //this.render();
    },
    //list-headeprane
    getCoordenadas:function(){
        console.log("Entro a la funcion getCoordenadas de list-Headerpane");
        this.Reunion=[];
        this.nameReunion=[];
        window.Coordenadas=[];
        if (this.collection.models.length>0){
            for(var i=0;i<this.collection.models.length;i++){
                if((this.collection.models[i].attributes.check_in_latitude_c!="" && this.collection.models[i].attributes.check_in_latitude_c!=undefined) && (this.collection.models[i].attributes.check_in_longitude_c!="" && this.collection.models[i].attributes.check_in_longitude_c!=undefined)){
                    window.Coordenadas.push({lat:parseFloat(this.collection.models[i].attributes.check_in_latitude_c),lng:parseFloat(this.collection.models[i].attributes.check_in_longitude_c)});
                    this.Reunion.push(this.collection.models[i].attributes.id);
                    this.nameReunion.push({'id':this.collection.models[i].attributes.id,
                                           'name':this.collection.models[i].attributes.name,
                                           'status':this.collection.models[i].attributes.status,
                                           'date_start':this.collection.models[i].attributes.date_start,
                                           'date_end':this.collection.models[i].attributes.date_end});
                    console.log("El valor de Coordenadas es:"+this.Coordenadas);   
                }
            }
        }
    },

    search:function(key,nameReunion){
        for(var i=0;i<nameReunion.length;i++){
            if(nameReunion[i].id===key){
            return nameReunion[i];
            }
        }
    },
    /*
    buttonsMaps:function(controlDiv, map){
        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        //controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Center Map';
        //controlUI.appendChild(controlText);

    },*/
    initMap:function() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var self=this;
        var bounds= new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 19.4326018, lng: -99.13320490000001}
            });
        if(window.Coordenadas.length>0){
            var infowindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById('map'), {
            mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: ['roadmap', 'terrain']
                }
            });
            directionsDisplay.setMap(map);
            //document.getElementById('inicio');
            //document.getElementById('fin');
            /*
            var centerControlDiv = document.createElement('div');
            var centerControl = new CenterControl(centerControlDiv, map);
            centerControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);*/
            for(var i=0;i<window.Coordenadas.length;i++){
                var mylocation=window.Coordenadas[i];
                var markers=new google.maps.Marker({
                    position:mylocation,
                    map:map,
                    title:this.Reunion[i],
                    clickable:true,
                });
                google.maps.event.addListener(markers, 'click', (function (markers, i) {
                    return function () {
                        var cuentas_url=app.api.buildURL('GetAccountsMeetings/'+markers.title,null,null,null);
                        app.api.call('GET',cuentas_url,{},{
                            success:function(data){
                            self.cuentaUsuario=data;
                            var contenido='<div class="container" style="width:300px; height:200px;">'+
                                            '<ul class="nav nav-tabs">'+
                                                '<li class="active">'+
                                                    '<a data-toggle="tab" href="#home">'+
                                                        'Reunión'+
                                                    '</a>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<a data-toggle="tab" href="#menu1">'+
                                                        'Cuenta'+
                                                    '</a>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<a data-toggle="tab" href="#menu2">'+
                                                        'Usuario'+
                                                    '</a>'+
                                                '</li>'+
                                            '</ul>'+
                                            '<div class="tab-content">'+
                                                '<div id="home" class="tab-pane fade in active">'+
                                                    '<p><a href="#Meetings/'+ObjReunion.id+'"target="_blank">'+ObjReunion.name+'</a></p>'+
                                                    '<p>Estado:'+App.lang.getAppListStrings('meeting_status_dom')[ObjReunion.status]+'</p>'+
                                                    '<p>Fecha Inicio:'+ObjReunion.date_start+'</p>'+
                                                    '<p>Fecha Fin:'+ObjReunion.date_end+'</p>'+
                                                '</div>'+
                                                '<div id="menu1" class="tab-pane fade">'+
                                                    '<p>Nombre</p>'+
                                                    '<p>Tipo Cuenta:</p>'+
                                                    '<p>Tipo de Persona</p>'+
                                                '</div>'+
                                                '<div id="menu2" class="tab-pane fade">'+
                                                    '<p>Nombre de Usuario</p>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>';
                            infowindow.setContent(contenido);
                            infowindow.open(map, markers);
                            },
                        });
                        var ObjReunion=self.search(markers.title, self.nameReunion);  
                    }
                })(markers, i));
                loc = new google.maps.LatLng(parseFloat(markers.position.lat()), parseFloat(markers.position.lng()));
                bounds.extend(loc);
            }
            map.fitBounds(bounds);       // auto-zoom
            map.panToBounds(bounds);
            this.context.trigger('refresh:count');
            // auto-center
                //location.reload();
        }
    },

    hideMapa:function(){
        $('#map').hide();
        $('.flex-list-view').show()
        $('[data-action="show-more"]').show();
        console.log("Se va a ocultar el mapa");
        $('#over_map').hide();
    },

    ShowMapTable:function(){
        this.render();
        this.getCoordenadas();
        this.initMap();
        $('#map').show();
        $('.flex-list-view').show()
        $('[data-action="show-more"]').show();
        console.log("Mapa y tabla son visualizados");
        $('#map').css({'width':'1360px','height':'300px'});
        $('#over_map').show();
        //$('#plan').attr("disabled", true);
        //this.render();
    },
    /*
    bindDataChange:function(){
        this._super("bindDataChange");
    },*/
});