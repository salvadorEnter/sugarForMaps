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
(function(app){app.events.on("app:sync:complete",function(){if(!app.data.getModelClasses()['Contacts']){return;}
var contactsClass=app.data.getBeanClass("Contacts");contactsClass.prototype._doValidatePortalName=function(fields,errors,callback){var self=this,skip=false;if(_.isUndefined(this.get("id"))){if(!this.has("portal_name")||this.get("portal_name")===""){skip=true;}}else{if(_.isUndefined(this.changedAttributes(this.getSynced())["portal_name"])){skip=true;}}
if(skip){callback(null,fields,errors);return;}
var currentName=self.get("portal_name");var alertOptions={title:app.lang.get("LBL_VALIDATING"),level:"process"};app.alert.show('validation',alertOptions);app.api.records('read','Contacts',null,{filter:[{portal_name:currentName}]},{success:function(data){if(data.records&&data.records.length>0){if(data.records.length>1||data.records[0].id!=self.get("id")){errors['portal_name']={ERR_EXISTING_PORTAL_USERNAME:''};}}},error:function(){errors['portal_name']={ERR_PORTAL_NAME_CHECK:''};},complete:function(){app.alert.dismiss('validation');callback(null,fields,errors);}});return;};contactsClass.prototype.initialize=function(options){app.data.beanModel.prototype.initialize.call(this,options);this.addValidationTask('portal_name_unique',_.bind(this._doValidatePortalName,this));};});})(SUGAR.App);