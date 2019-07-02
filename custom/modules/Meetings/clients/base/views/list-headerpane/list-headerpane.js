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
    },
     _render: function (fields, errors, callback) {
        this._super("_render");
        this.hideMapa();
    },

    showMapa:function(){
        this.render();
        this.initMap();
        $('.flex-list-view').hide()
        $('[data-action="show-more"]').hide();
        $('#map').show()
        var height=$(document).innerHeight();
        var width=$(document).innerWidth();
        $('#map').height(height);
        $('#map').width(width);
    },

    initMap:function() {
        var bounds= new google.maps.LatLngBounds();
        if(window.Coordenadas.length>0){
            var final=window.Coordenadas[window.Coordenadas.length-1];
            var map = new google.maps.Map(document.getElementById('map'), {
            //zoom: 7,
            //center: {lat: 19.4326018, lng: -99.13320490000001}
            });
            for(var i=0;i<window.Coordenadas.length;i++){
                var mylocation=window.Coordenadas[i];
                var markers=new google.maps.Marker({
                    position:mylocation,
                    map:map
                });
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
    },

    ShowMapTable:function(){
        this.render();
        this.initMap();
        $('#map').show();
        $('.flex-list-view').show()
        $('[data-action="show-more"]').show();
        console.log("Mapa y tabla son visualizados");
        $('#map').css({'width':'1360px','height':'300px'});
    },
    /*
    bindDataChange:function(){
        this._super("bindDataChange");
    },*/
});