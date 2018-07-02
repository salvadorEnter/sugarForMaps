<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
 //Sidecar Lite: no jQuery
$buildFiles = array(
    'sidecar.lite' => array(
        # The real deal
        'lib/sugarapi/sugarapi.js',
        'src/app.js',
        'src/utils/utils.js',
        'src/utils/date.js',
        'src/utils/file.js',
        'src/utils/math.js',
        'src/utils/currency.js',
        'src/core/before-event.js',
        'src/core/cache.js',
        'src/core/events.js',
        'src/core/error.js',
        'src/view/template.js',
        'src/core/context.js',
        'src/core/controller.js',
        'src/core/router.js',
        'src/core/language.js',
        'src/core/metadata-manager.js',
        'src/core/acl.js',
        'src/core/user.js',
        'src/core/plugin-manager.js',
        'src/utils/logger.js',
        'src/data/bean.js',
        'src/data/bean-collection.js',
        'src/data/mixed-bean-collection.js',
        'src/data/data-manager.js',
        'src/data/validation.js',
        'src/view/hbs-helpers.js',
        'src/view/view-manager.js',
        'src/view/component.js',
        'src/view/view.js',
        'src/view/field.js',
        'src/view/layout.js',
        'src/view/alert.js',
        'src/view/tutorial.js',
        'lib/sugaranalytics/sugaranalytics.js',
        'lib/sugaranalytics/googleanalyticsconnector.js',
        'lib/sugar/sugar.searchahead.js',
        'lib/sugar/sugar.timeago.js',
        'lib/sugar/sugar.liverelativedate.js',
        'lib/sugar/sugar.ajaxcallInprogress.js',
        'lib/sugaraccessibility/sugaraccessibility.js',
        'lib/sugaraccessibility/click.js',
        'lib/sugaraccessibility/label.js',
        'lib/mousetrap/mousetrap.min.js',
        'src/utils/shortcuts.js',
    ),
);

//full sidecar stub
$buildFiles['sidecar'] = array(
        # Libraries
        'lib/handlebars/handlebars.js',
        'lib/jquery/jquery.min.js',
        'lib/jquery-ui/js/jquery-ui-1.8.18.custom.min.js',
        'lib/backbone/underscore.js',
        'lib/backbone/backbone.js',
        'lib/stash/stash.js',
        'lib/async/async.js',
        'lib/jquery/jquery.iframe.transport.js',
        'lib/jquery/jquery.tinymce.js',
        'lib/php-js/version_compare.js',
        'lib/momentjs/min/moment.min.js',
        );

//combine the two to build out the full Sidecar.js
$buildFiles['sidecar'] = array_merge($buildFiles['sidecar'], $buildFiles['sidecar.lite']);
