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
({extendsFrom:'ForecastdetailsView',selectedUserId:'',currentTP:undefined,modelTP:undefined,rliCollection:undefined,closedWonIds:[],includedIds:[],includedIdsInTP:[],salesStageWon:[],commitStagesInIncludedTotal:[],initialize:function(options){this.selectedUserId=app.user.get('id');this._super('initialize',[options]);var config=app.metadata.getModule('Forecasts','config')||{};this.salesStageWon=config.sales_stage_won||['Closed Won'];var forecastRanges=config.forecast_ranges||[];this.modelTP=new Backbone.Model();if(forecastRanges=='show_custom_buckets'){var ranges=config[forecastRanges+'_ranges']||[];_.each(ranges,function(value,key){if(!_.isUndefined(value.in_included_total)&&value.in_included_total){this.commitStagesInIncludedTotal.push(key);}});}else{this.commitStagesInIncludedTotal.push('include');}},getProjectedURL:function(){var method=this.shouldRollup?"progressManager":"progressRep",url='Forecasts/'+this.model.get('selectedTimePeriod')+'/'+method+'/'+this.selectedUserId,params={};if(this.shouldRollup){params={target_quota:(this.showTargetQuota)?1:0};}
return app.api.buildURL(url,'create',null,params);},renderSubDetails:function(){var subEl=this.$el.find('.forecast-details');if(subEl&&subEl.hasClass('block-footer')){subEl.removeClass('block-footer');}
if(this.currentModule!='Opportunities'||(this.currentModule=='Opportunities'&&this.model.get('selectedTimePeriod'))){this._super('renderSubDetails');}else{subEl.addClass('block-footer');subEl.html(app.lang.get('LBL_NO_DATA_AVAILABLE'));}},bindDataChange:function(){if(this.meta.config||!this.isForecastSetup){return;}
this.closedWonIds=[];this.includedIds=[];this.includedIdsInTP=[];var ctx=this.context.parent||this.context,ctxMdl=ctx.get('model');ctxMdl.on('sync',function(model){this.fetchNewTPByDate(model.get('date_closed'),undefined,true);},this);if(this.currentModule=='Opportunities'){this.rliCollection=app.utils.getSubpanelCollection(ctx,'RevenueLineItems');if(this.rliCollection){this.processRLICollection(this.rliCollection);this.rliCollection.on('reset',this.processRLICollection,this);this.rliCollection.on('change:likely_case change:best_case change:worst_case change:amount',this.processCases,this);this.rliCollection.on('change:sales_stage',this.processSalesStage,this);this.rliCollection.on('change:commit_stage',this.processCommitStage,this);this.rliCollection.on('change:date_closed',this.checkFetchNewTPByDate,this);ctx.on('editablelist:cancel',function(a,b,c){this.loadData();},this);this.modelTP.on('change',function(model){var rliModel;this.includedIdsInTP=[];_.each(this.includedIds,function(id){rliModel=this.rliCollection.get(id);if(this.isDateInTimePeriod(rliModel.get('date_closed'),this.modelTP.toJSON())){this.includedIdsInTP.push(rliModel.get('id'));}},this);},this);}}else if(this.currentModule=='RevenueLineItems'){this.initClosedWonIds(ctxMdl);ctxMdl.on('change:likely_case change:best_case change:worst_case change:amount',this.processCases,this);ctxMdl.on('change:sales_stage',this.processSalesStage,this);ctxMdl.on('change:commit_stage',this.processCommitStage,this);this.context.parent.on('button:cancel_button:click',function(model,date){var ctx=this.context.parent||this.context,ctxModel=ctx.get('model'),options={beforeParseData:_.bind(this.addModelTotalsToServerData,this,ctxModel)};this.loadData(options);},this);ctxMdl.on('change:date_closed',this.checkFetchNewTPByDate,this);ctxMdl.on('sync',function(model){if(_.has(ctxMdl.attributes,'lhsData')){ctxMdl.set({lhsData:{best:model.get('best_case'),likely:model.get('likely_case'),worst:model.get('worst_case')}});}},this);if(!_.has(ctxMdl.attributes,'lhsData')){ctxMdl.set({lhsData:{best:ctxMdl.get('best_case'),likely:ctxMdl.get('likely_case'),worst:ctxMdl.get('worst_case')}});}
if(_.contains(this.closedWonIds,ctxMdl.get('id'))){this.processSalesStage(ctxMdl);}}},handleNewDataFromServer:function(data){if(this.currentModule=='RevenueLineItems'&&this.context&&_.isUndefined(data.parsedData)){var mdl=this.context.parent.get('model')||this.context.get('model'),lhsData=mdl.get('lhsData');if(lhsData.likely!=mdl.get('likely_case')){data.amount=data.amount-(lhsData.likely-mdl.get('likely_case'));}
if(lhsData.best!=mdl.get('best_case')){data.best_case=data.best_case-(lhsData.best-mdl.get('best_case'));}
if(lhsData.worst!=mdl.get('worst_case')){data.worst_case=data.worst_case-(lhsData.worst-mdl.get('worst_case'));}}
this.calculateData(this.mapAllTheThings(data,false));},processRLICollection:function(collection){this.oldTotals.models=new Backbone.Model();_.each(this.rliCollection.models,function(model){this.oldTotals.models.set(model.get('id'),{likely:model.get('likely_case'),best:model.get('best_case'),worst:model.get('worst_case')});this.initClosedWonIds(model);},this);if(collection){this.loadData();}},unbindData:function(){if(this.context.parent){this.context.parent.off(null,null,this);if(this.context.parent.get('model')){this.context.parent.get('model').off(null,null,this);}}
if(this.context){this.context.off(null,null,this);if(this.context.get('model')){this.context.get('model').off(null,null,this);}}
if(this.currentModule=='Opportunities'&&this.rliCollection){this.rliCollection.off(null,null,this);this.rliCollection=undefined;}
app.view.View.prototype.unbindData.call(this);},processCases:function(model){if(!_.isUndefined(model)&&(app.user.get('id')==model.get('assigned_user_id'))&&_.contains(this.includedIds,model.get('id'))){var data=_.clone(model.toJSON()),diff=0,old=0,totals={};if(this.currentModule=='Opportunities'){data.likely_case=(!_.isUndefined(data.amount))?data.amount:data.likely_case;totals=this.getOldTotalFromCollectionById(model.get('id'));}else{totals=this.oldTotals;}
if(_.has(model.changed,'likely_case')||_.has(model.changed,'amount')){data.likely_case=(_.isNaN(Number(data.likely_case))||_.isEqual(data.likely_case,''))?0:data.likely_case;old=data.likely_case;diff=app.math.sub(data.likely_case,totals.likely);data.likely_case=app.math.add(this.likelyTotal,diff);totals.likely=old;}else{data.likely_case=this.likelyTotal;}
if(_.has(model.changed,'best_case')){data.best_case=(_.isNaN(Number(data.best_case))||_.isEqual(data.best_case,''))?0:data.best_case;old=data.best_case;diff=app.math.sub(data.best_case,totals.best);data.best_case=app.math.add(this.bestTotal,diff);totals.best=old;}else{data.best_case=this.bestTotal;}
if(_.has(model.changed,'worst_case')){data.worst_case=(_.isNaN(Number(data.worst_case))||_.isEqual(data.worst_case,''))?0:data.worst_case;old=data.worst_case;diff=app.math.sub(data.worst_case,totals.worst);data.worst_case=app.math.add(this.worstTotal,diff);totals.worst=old;}else{data.worst_case=this.worstTotal;}
if(this.currentModule=='Opportunities'){this.setOldTotalFromCollectionById(model.get('id'),totals);}else{this.oldTotals=totals;}
return this.calculateData(this.mapAllTheThings(data,true));}},initClosedWonIds:function(model){var ss=model.get('sales_stage'),cs=model.get('commit_stage'),id=model.get('id');if(_.contains(this.salesStageWon,ss)&&_.contains(this.commitStagesInIncludedTotal,cs)&&!_.contains(this.closedWonIds,id)){this.closedWonIds.push(id);}
if(_.contains(this.commitStagesInIncludedTotal,cs)&&!_.contains(this.includedIds,id)){this.includedIds.push(id);}},processSalesStage:function(model){var shouldBeIncluded=false,updatedData=false,ss=model.get('sales_stage'),cs=model.get('commit_stage'),id=model.get('id');if(_.contains(this.salesStageWon,ss)&&_.contains(this.commitStagesInIncludedTotal,cs)){shouldBeIncluded=true;}
if(_.contains(this.closedWonIds,id)&&!shouldBeIncluded){this.closedWonIds=_.without(this.closedWonIds,id);this.serverData.set({closed_amount:app.math.sub(this.serverData.get('closed_amount'),model.get('likely_case'))});updatedData=true;}else if(!_.contains(this.closedWonIds,id)&&shouldBeIncluded){this.closedWonIds.push(id);this.serverData.set({closed_amount:app.math.add(this.serverData.get('closed_amount'),model.get('likely_case'))});updatedData=true;}
if(updatedData){this.calculateData(this.serverData.toJSON());}},processCommitStage:function(model){var shouldBeIncluded=false,updatedData=false,cs=model.get('commit_stage'),id=model.get('id');if(_.contains(this.commitStagesInIncludedTotal,cs)){shouldBeIncluded=true;}
if(_.contains(this.includedIds,id)&&!shouldBeIncluded){this.includedIds=_.without(this.includedIds,id);this.serverData.set({likely:app.math.sub(this.serverData.get('likely'),model.get('likely_case')),best:app.math.sub(this.serverData.get('best'),model.get('best_case')),worst:app.math.sub(this.serverData.get('worst'),model.get('worst_case'))});updatedData=true;}else if(!_.contains(this.includedIds,id)&&shouldBeIncluded){this.includedIds.push(id);this.serverData.set({likely:app.math.add(this.serverData.get('likely'),model.get('likely_case')),best:app.math.add(this.serverData.get('best'),model.get('best_case')),worst:app.math.add(this.serverData.get('worst'),model.get('worst_case'))});updatedData=true;}
if(updatedData){this.calculateData(this.serverData.toJSON());}},checkFetchNewTPByDate:function(model){var newDate=model.get('date_closed'),shouldFetch=false,inTimePeriod=this.isDateInTimePeriod(newDate,this.modelTP.toJSON()),options={},inOpps=(this.currentModule=='Opportunities'),modelId=model.get('id');if(!inOpps){shouldFetch=true;if(!inTimePeriod){options.beforeParseData=_.bind(this.addModelTotalsToServerData,this,model);}}else{var alreadyInTP=_.contains(this.includedIdsInTP,modelId),newTotals;if(inTimePeriod){if(!alreadyInTP){this.includedIdsInTP.push(modelId);shouldFetch=true;options.beforeParseData=_.bind(this.addModelTotalsToServerData,this,model);}}else{if(app.date(newDate).isAfter(this.modelTP.get('end_date'))){shouldFetch=true;options.beforeParseData=_.bind(this.addModelTotalsToServerData,this,model);}else if(app.date(newDate).isBefore(this.modelTP.get('start_date'))){if(alreadyInTP){var isLastRLIInTP=(this.includedIdsInTP.length===1&&this.includedIdsInTP[0]===modelId);if(isLastRLIInTP){shouldFetch=true;options.beforeParseData=_.bind(this.addModelTotalsToServerData,this,model);}else{newTotals=this.removeModelTotalsFromServerData(model,this.serverData.toJSON());this.calculateData(this.mapAllTheThings(newTotals));}}else{newDate=this.modelTP.get('start_date');shouldFetch=true;}}
if(alreadyInTP){this.includedIdsInTP=_.without(this.includedIdsInTP,modelId);}}}
if(shouldFetch){this.fetchNewTPByDate(newDate,options);}},fetchNewTPByDate:function(date,options,updateModelTP){app.api.call('GET',app.api.buildURL('TimePeriods/'+date),null,{success:_.bind(function(data){if(this.model){if(updateModelTP){this.modelTP.set(_.clone(data));}
this.currentTP=data;this.model.set({selectedTimePeriod:data.id},{silent:true});this.loadData(options);}},this)});},addModelTotalsToServerData:function(model,data){if(!_.contains(data.includedIdsInLikelyTotal,model.get('id'))){data.amount=app.math.add(data.amount,model.get('likely_case'));data.best_case=app.math.add(data.best_case,model.get('best_case'));data.worst_case=app.math.add(data.worst_case,model.get('worst_case'));}
return data;},removeModelTotalsFromServerData:function(model,data){data.amount=app.math.sub(data.amount,model.get('likely_case'));data.best_case=app.math.sub(data.best_case,model.get('best_case'));data.worst_case=app.math.sub(data.worst_case,model.get('worst_case'));return data;},getInitData:function(options){var ctx=this.context.parent||this.context,ctxModel=ctx.get('model'),date=ctxModel.get('date_closed');this.selectedUser.id=ctxModel.get('assigned_user_id');this.oldTotals=_.extend(this.oldTotals,{best:ctxModel.get('best_case'),likely:ctxModel.get('likely_case')||ctxModel.get('amount'),worst:ctxModel.get('worst_case')});if(!_.isEmpty(date)){app.api.call('GET',app.api.buildURL('TimePeriods/'+date),null,{success:_.bind(function(data){if(this.model){this.initDataLoaded=true;this.modelTP.set(_.clone(data));this.currentTP=data;this.model.set({selectedTimePeriod:data.id},{silent:true});this.loadData();}},this),complete:options?options.complete:null});}else{var d=new Date(),month=(d.getUTCMonth().toString().length==1)?'0'+d.getUTCMonth():d.getUTCMonth(),day=(d.getUTCDate().toString().length==1)?'0'+d.getUTCDate():d.getUTCDate()
date=d.getFullYear()+'-'+month+'-'+day;this.initDataLoaded=true;this.fetchNewTPByDate(date);}},isDateInTimePeriod:function(date,timePeriod){var inTimePeriod=false;if(app.date(date).isBetween(timePeriod.start_date,timePeriod.end_date)){inTimePeriod=true;}
return inTimePeriod;}})