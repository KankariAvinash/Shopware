(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[551],{SAYN:function(e,n,t){"use strict";t.r(n);var o=t("CsSd"),l=t.n(o);function a(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);n&&(o=o.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,o)}return t}function s(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?a(Object(t),!0).forEach((function(n){l()(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):a(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var r=Shopware,c=r.Component,i=r.Mixin,u=Shopware.Classes.ShopwareError,d=c.getComponentHelper().mapState;n.default={template:'<sw-modal\n    class="sw-flow-grant-download-access-modal"\n    :title="$tc(\'sw-flow.modals.downloadAccess.titleSetDownloadAccess\')"\n    :closable="false"\n    @modal-close="onClose"\n>\n    <div class="sw-flow-grant-download-access-modal__content">\n        <sw-single-select\n            {% if VUE3 %}\n            v-model:value="value"\n            {% else %}\n            v-model="value"\n            {% endif %}\n            class="sw-flow-grant-download-access-modal__value-field"\n            required\n            :label="$tc(\'sw-flow.modals.downloadAccess.labelValueField\')"\n            :placeholder="$tc(\'sw-flow.modals.downloadAccess.placeholderValueField\')"\n            :error="valueError"\n            :options="valueOptions"\n        />\n    </div>\n\n    <template #modal-footer>\n        <sw-button\n            class="sw-flow-grant-download-access-modal__cancel-button"\n            size="small"\n            @click="onClose"\n        >\n            {{ $tc(\'global.default.cancel\') }}\n        </sw-button>\n\n        <sw-button\n            class="sw-flow-grant-download-access-modal__save-button"\n            variant="primary"\n            size="small"\n            @click="onSave"\n        >\n            {{ $tc(\'sw-flow.modals.buttonSaveAction\') }}\n        </sw-button>\n    </template>\n</sw-modal>\n',mixins:[i.getByName("placeholder"),i.getByName("notification")],props:{sequence:{type:Object,required:!0},action:{type:String,required:!1,default:null}},data:function(){return{value:null,valueError:null}},computed:s({valueOptions:function(){return[{value:!0,label:"".concat(this.$tc("sw-flow.modals.downloadAccess.options.grant"))},{value:!1,label:"".concat(this.$tc("sw-flow.modals.downloadAccess.options.revoke"))}]}},d("swFlowState",["triggerEvent","triggerActions"])),watch:{value:function(e){e&&this.valueError&&(this.valueError=null)}},created:function(){this.createdComponent()},methods:{createdComponent:function(){var e=this.sequence.config;this.value=null==e?void 0:e.value},getConfig:function(){return{value:this.value}},fieldError:function(e){return"boolean"!=typeof e?new u({code:"c1051bb4-d103-4f74-8988-acbcafc7fdc3"}):null},onSave:function(){if(this.valueError=this.fieldError(this.value),!this.valueError){var e=this.getConfig(),n=s(s({},this.sequence),{},{config:e});this.$emit("process-finish",n),this.onClose()}},onClose:function(){this.valueError=null,this.$emit("modal-close")}}}}}]);
//# sourceMappingURL=1339ac034d849de9abfb.js.map