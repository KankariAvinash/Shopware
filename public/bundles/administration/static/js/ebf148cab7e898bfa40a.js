(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[42],{VFBH:function(e,t,n){"use strict";n.r(t);var o=n("7yzw"),r=n.n(o),a=n("92Mt"),i=n.n(a),l=(n("dn4L"),Shopware),s=l.Mixin,d=l.Context;t.default={template:'\n{% block sw_media_modal_move %}\n<sw-modal\n    variant="default"\n    class="sw-media-modal-move"\n    :title="$tc(\'global.sw-media-modal-move.titleModal\', itemsToMove.length, { mediaName: mediaNameFilter(itemsToMove[0]), count: itemsToMove.length }) "\n    @modal-close="closeMoveModal"\n>\n\n    \n    {% block sw_media_modal_body %}\n    \n    {% block sw_media_modal_move_breadcrumbs %}\n    <div class="sw-media-modal-move-folder-breadcrumbs">\n        <img\n            :src="assetFilter(\'/administration/static/img/media/multicolor-folder-thumbnail.svg\')"\n            class="sw-media-modal-move__folder-icon"\n            alt="Folder thumbnail"\n        >\n\n        <button\n            v-if="parentFolder && parentFolder.id !== targetFolder.id"\n            class="sw-media-modal-move__breadcrumb-btn --parent"\n            @click="onSelection(parentFolder)"\n        >\n            <sw-icon\n                class="sw-media-folder-content__switch-button"\n                name="regular-chevron-right-xs"\n                size="10px"\n            />\n            {{ parentFolder.name }}\n        </button>\n\n        <button\n            v-if="displayFolder && displayFolder.id !== targetFolder.id"\n            class="sw-media-modal-move__breadcrumb-btn"\n            @click="onSelection(displayFolder)"\n        >\n            <sw-icon\n                class="sw-media-folder-content__switch-button"\n                name="regular-chevron-right-xs"\n                size="10px"\n            />\n            {{ displayFolder.name }}\n        </button>\n\n        <button\n            v-if="targetFolder"\n            class="sw-media-modal-move__breadcrumb-btn --target"\n            @click="onSelection(targetFolder)"\n        >\n            <sw-icon\n                class="sw-media-folder-content__switch-button"\n                name="regular-chevron-right-xs"\n                size="10px"\n            />\n            {{ targetFolder.name }}\n        </button>\n    </div>\n    {% endblock %}\n    <sw-media-folder-content\n        :start-folder-id="displayFolderId"\n        :selected-id="targetFolderId"\n        @selected="onSelection"\n    />\n    {% endblock %}\n\n    \n    {% block sw_media_modal_footer %}\n    <template #modal-footer>\n        \n        {% block sw_media_modal_move_cancel_button %}\n        <sw-button\n            size="small"\n            @click="closeMoveModal"\n        >\n            {{ $tc(\'global.default.cancel\') }}\n        </sw-button>\n        {% endblock %}\n\n        \n        {% block sw_media_modal_move_confirm_button %}\n        <sw-button\n            class="sw-media-modal-move__confirm"\n            size="small"\n            variant="primary"\n            :disabled="isMoveDisabled"\n            @click="moveSelection"\n        >\n            {{ $tc(\'global.sw-media-modal-move.buttonMove\') }}\n        </sw-button>\n        {% endblock %}\n    </template>\n    {% endblock %}\n</sw-modal>\n{% endblock %}\n',inject:["repositoryFactory"],provide:function(){return{filterItems:this.isNotPartOfItemsToMove}},mixins:[s.getByName("notification")],props:{itemsToMove:{required:!0,type:Array,validator:function(e){return e.length>0}}},data:function(){return{targetFolder:null,parentFolder:null,displayFolder:null,displayFolderId:null}},computed:{mediaRepository:function(){return this.repositoryFactory.create("media")},mediaFolderRepository:function(){return this.repositoryFactory.create("media_folder")},mediaNameFilter:function(){return function(e){return"media"===e.getEntityName()?"".concat(e.fileName,".").concat(e.fileExtension):e.name}},targetFolderId:function(){return this.targetFolder?this.targetFolder.id:null},rootFolderName:function(){return this.$tc("sw-media.index.rootFolderName")},isMoveDisabled:function(){return this.startFolderId===this.targetFolderId},startFolderId:function(){var e=this.itemsToMove[0];return"media"===e.getEntityName()?e.mediaFolderId:e.parentId},assetFilter:function(){return Shopware.Filter.getByName("asset")}},watch:{displayFolder:function(e){this.displayFolderId=e.id,this.updateParentFolder(e)}},mounted:function(){this.mountedComponent()},methods:{mountedComponent:function(){var e=this;return r()(i.a.mark((function t(){var n;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(e.displayFolder={id:null,name:e.rootFolderName},e.targetFolder={id:null,name:e.rootFolderName},!e.startFolderId){t.next=8;break}return t.next=5,e.mediaFolderRepository.get(e.startFolderId,d.api);case 5:n=t.sent,e.displayFolder=n,e.targetFolder=n;case 8:case"end":return t.stop()}}),t)})))()},closeMoveModal:function(){this.$emit("media-move-modal-close")},isNotPartOfItemsToMove:function(e){return!this.itemsToMove.some((function(t){return t.id===e.id}))},updateParentFolder:function(e){var t=this;return r()(i.a.mark((function n(){return i.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:if(null!==e.id){n.next=4;break}t.parentFolder=null,n.next=11;break;case 4:if(null!==e.parentId){n.next=8;break}t.parentFolder={id:null,name:t.rootFolderName},n.next=11;break;case 8:return n.next=10,t.mediaFolderRepository.get(e.parentId,d.api);case 10:t.parentFolder=n.sent;case 11:case"end":return n.stop()}}),n)})))()},onSelection:function(e){this.targetFolder=e,e.children?e.children.filter(this.isNotPartOfItemsToMove).length>0&&(this.displayFolder=e):(null===e.id||e.childCount>0)&&(this.displayFolder=e)},_moveSelection:function(e){var t=this;return r()(i.a.mark((function n(){return i.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return e.isLoading=!0,e.parentId=t.targetFolder.id||null,n.prev=2,n.next=5,t.mediaFolderRepository.save(e,d.api);case 5:return t.createNotificationSuccess({title:t.$root.$tc("global.default.success"),message:t.$root.$tc("global.sw-media-modal-move.notification.successSingle.message",1,{mediaName:t.mediaNameFilter(e)})}),n.abrupt("return",e.id);case 9:return n.prev=9,n.t0=n.catch(2),t.createNotificationError({title:t.$root.$tc("global.default.error"),message:t.$root.$tc("global.sw-media-modal-move.notification.errorSingle.message",1,{mediaName:t.mediaNameFilter(e)})}),n.abrupt("return",null);case 13:return n.prev=13,e.isLoading=!1,n.finish(13);case 16:case"end":return n.stop()}}),n,null,[[2,9,13,16]])})))()},moveSelection:function(){var e=this;return r()(i.a.mark((function t(){var n,o,a;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return n=[],t.prev=1,o=e.itemsToMove.filter((function(e){return"media_folder"===e.getEntityName()})),a=e.itemsToMove.filter((function(e){return"media"===e.getEntityName()})),t.next=6,Promise.all(o.map(function(){var t=r()(i.a.mark((function t(n){return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e._moveSelection(n);case 2:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}()));case 6:return t.next=8,Promise.all(a.map(function(){var t=r()(i.a.mark((function t(o){var r;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return(r=o).mediaFolderId=e.targetFolder.id||null,t.t0=n,t.next=5,e.mediaRepository.save(r,d.api);case 5:t.t1=t.sent,t.t0.push.call(t.t0,t.t1);case 7:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}()));case 8:e.createNotificationSuccess({title:e.$root.$tc("global.default.success"),message:e.$root.$tc("global.sw-media-modal-move.notification.successOverall.message")}),e.$emit("media-move-modal-items-move",n),t.next=15;break;case 12:t.prev=12,t.t0=t.catch(1),e.createNotificationError({title:e.$root.$tc("global.default.error"),message:e.$root.$tc("global.sw-media-modal-move.notification.errorOverall.message")});case 15:case"end":return t.stop()}}),t,null,[[1,12]])})))()}}}},dn4L:function(e,t,n){var o=n("hok/");o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);(0,n("P8hj").default)("3cd29b56",o,!0,{})},"hok/":function(e,t,n){}}]);
//# sourceMappingURL=ebf148cab7e898bfa40a.js.map