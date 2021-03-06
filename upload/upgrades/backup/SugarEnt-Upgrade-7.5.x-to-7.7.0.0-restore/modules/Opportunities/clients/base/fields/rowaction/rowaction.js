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
({
    extendsFrom: "RowactionField",
    
    /**
     * {@inheritdoc}
     */
    initialize: function(options) {
        this.plugins = _.clone(this.plugins) || [];
        this.plugins.push('DisableDelete');
        this._super("initialize", [options]);

        //Redraw dropdown on change
        this.model.on("change:closed_revenue_line_items", function(){
            this.render();
            //clean up visible buttons
            if(_.isFunction(this.view.initButtons)) {
                this.view.initButtons();
            }
            if(_.isFunction(this.view.setButtonStates)) {
                this.view.setButtonStates(this.view.STATE.VIEW);
            }
        }, this);
    }
})
