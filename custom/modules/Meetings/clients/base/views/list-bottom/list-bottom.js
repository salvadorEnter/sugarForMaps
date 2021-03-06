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
 * @class View.Views.Base.ListBottomView
 * @alias SUGAR.App.view.views.BaseListBottomView
 * @extends View.View
 */
({
    CoordenadasB:[],
    events: {
        'click [data-action="show-more"]': 'showMoreRecords'
    },

    initialize: function(options) {
        this._super('initialize', [options]);
        // This component should always have a `list` action.
        this.action = 'list';
        //this.context.Coordenadas=[];
        /**
         * Label key used for {@link #showMoreLabel}.
         *
         * You can define it in metadata under `label` property. Defaults to
         * `TPL_SHOW_MORE_MODULE`.
         *
         * @type {string}
         * @private
         */
        this._showMoreLabel = this.meta && this.meta.label || 'TPL_SHOW_MORE_MODULE';
        this._initPagination();
        this.Reunion=[];
        this.nameReunion=[];
        this.cuentaUsuario;
    },

    /**
     * Initialize pagination component in order to react the show more link.
     * @private
     */
    _initPagination: function() {
        this.paginationComponent = _.find(this.layout._components, function(component) {
            return _.contains(component.plugins, 'Pagination');
        }, this);
    },

    /**
     * Retrieving the next page records by pagination plugin.
     *
     * Please see the {@link app.plugins.Pagination#getNextPagination}
     * for detail.
     */
    showMoreRecords: function() {
        if (!this.paginationComponent) {
            return;
        }
        var options = {};
        options.success = _.bind(function() {
            this.layout.trigger('list:paginate:success');
            // FIXME: This should trigger on `this.collection` instead of
            // `this.context`. Will be fixed as part of SC-2605.
            this.context.trigger('paginate');
            this.render();
            this.getCoordenadas(this.collection.models);
            this.initMapa();
        }, this);
        this.paginationComponent.getNextPagination(options);

        this.render();
    },
    /*list-bottom*/
    getCoordenadas:function(modelos){
        window.Coordenadas=[];
        this.Reunion=[];
        this.nameReunion=[];
        if (modelos.length>0){
            for(var i=0;i<modelos.length;i++){
                if((modelos[i].attributes.check_in_latitude_c!="" && modelos[i].attributes.check_in_latitude_c!=undefined) && (modelos[i].attributes.check_in_longitude_c!="" && modelos[i].attributes.check_in_longitude_c!=undefined)){
                    window.Coordenadas.push({lat:parseFloat(modelos[i].attributes.check_in_latitude_c),lng:parseFloat(modelos[i].attributes.check_in_longitude_c)});
                    this.Reunion.push(this.collection.models[i].attributes.id);
                    this.nameReunion.push({'id':this.collection.models[i].attributes.id,
                                           'name':this.collection.models[i].attributes.name,
                                           'status':this.collection.models[i].attributes.status,
                                           'date_start':this.collection.models[i].attributes.date_start,
                                           'date_end':this.collection.models[i].attributes.date_end});    
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

    initMapa:function(){
        var self=this;
        var bounds= new google.maps.LatLngBounds();
        //var contenido=$('#contenido');
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 19.4326018, lng: -99.13320490000001}
            });
        if(window.Coordenadas.length>0){
            var infowindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById('map'), {
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: ['roadmap', 'terrain']
                }
            });
            for(var i=0;i<window.Coordenadas.length;i++){
                var mylocation=window.Coordenadas[i];
                var markers=new google.maps.Marker({
                    position:mylocation,
                    map:map,
                    title:this.Reunion[i],
                    clickable:true
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
                loc = new google.maps.LatLng(parseFloat(markers.position.lat()),parseFloat (markers.position.lng()));
                bounds.extend(loc);
            }
            map.fitBounds(bounds);       // auto-zoom
            map.panToBounds(bounds);     // auto-center
        }
    },
    /**
     * Assign proper label for 'show more' link.
     * Label should be "More <module name>...".
     */
    setShowMoreLabel: function() {
        var model = this.collection.at(0);
        var module = model ? model.module : this.context.get('module');
        var context = {
            count: this.collection.length,
            offset: this.collection.next_offset >= 0
        };
        if (module) {
            context.module = new Handlebars.SafeString(app.lang.getModuleName(module, {plural: true}).toLowerCase());
        }

        /**
         * Label used in the template to display Show more message.
         *
         * By default it will display "More {module}...".
         *
         * @type {string}
         * @private
         */
        this.showMoreLabel = app.lang.get(this._showMoreLabel, module, context);
    },

    /**
     * Reset previous collection handlers and
     * bind the listeners for new collection.
     */
    onCollectionChange: function() {
        var prevCollection = this.context.previous('collection');
        if (prevCollection) {
            prevCollection.off(null, null, this);
        }
        this.collection = this.context.get('collection');
        this.collection.on('add remove reset', this.render, this);
        this.render();
    },

    /**
     * @inheritdoc
     */
    _renderHtml: function() {
        this.setShowMoreLabel();
        this._super('_renderHtml');
        //this.initMapa();
    },

    /**
     * @inheritdoc
     *
     * Bind listeners for collection updates.
     * The pagination link synchronizes its visibility with the collection's
     * status.
     */
    bindDataChange: function() {
        this.context.on('change:collection', this.onCollectionChange, this);
        this.collection.on('add remove reset', this.render, this);
    },

    /**
     * @inheritdoc
     *
     * Add dashlet placeholder's class in order to handle the custom css style.
     */
    show: function() {
        this._super('show');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.addClass('pagination');
    },

    /**
     * @inheritdoc
     *
     * Remove pagination custom CSS class on dashlet placeholder.
     */
    hide: function() {
        this._super('hide');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.removeClass('pagination');
    }
})
