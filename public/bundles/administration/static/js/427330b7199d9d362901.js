(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[224],{"/IR+":function(e,n,o){var t=o("rHkh");t.__esModule&&(t=t.default),"string"==typeof t&&(t=[[e.i,t,""]]),t.locals&&(e.exports=t.locals);(0,o("P8hj").default)("55437d71",t,!0,{})},"VtP/":function(e,n,o){"use strict";o.r(n);o("/IR+"),n.default={template:'\n{% block sw_extension_removal_modal %}\n<sw-modal\n    class="sw-extension-removal-modal"\n    :title="title"\n    variant="small"\n    @modal-close="emitClose"\n>\n    \n    {% block sw_extension_removal_modal_content %}\n    <template #default>\n        \n        {% block sw_installed_extension_card_removal_content_modal_body %}\n        <p>\n            {{ $tc(\'sw-extension-store.component.sw-extension-removal-modal.description\') }}\n        </p>\n\n        <p class="sw-extension-removal-modal__bold-paragraph">\n            {{ alert }}\n        </p>\n        {% endblock %}\n    </template>\n\n    <template #modal-footer>\n        \n        {% block sw_extension_removal_modal_footer %}\n        \n        {% block sw_extension_removal_modal_footer_cancel %}\n        <sw-button\n            size="small"\n            :disabled="isLoading"\n            @click="emitClose"\n        >\n            {{ $tc(\'global.default.cancel\') }}\n        </sw-button>\n        {% endblock %}\n\n        \n        {% block sw_extension_removal_modal_footer_deactivate %}\n        <sw-button\n            variant="danger"\n            size="small"\n            :is-loading="isLoading"\n            @click="emitRemoval"\n        >\n            {{ btnLabel }}\n        </sw-button>\n        {% endblock %}\n        {% endblock %}\n    </template>\n    {% endblock %}\n</sw-modal>\n{% endblock %}\n',props:{extensionName:{type:String,required:!0},isLicensed:{type:Boolean,required:!0},isLoading:{type:Boolean,required:!0}},computed:{title:function(){return this.isLicensed?this.$t("sw-extension-store.component.sw-extension-removal-modal.titleCancel",{extensionName:this.extensionName}):this.$t("sw-extension-store.component.sw-extension-removal-modal.titleRemove",{extensionName:this.extensionName})},alert:function(){return this.isLicensed?this.$tc("sw-extension-store.component.sw-extension-removal-modal.alertCancel"):this.$tc("sw-extension-store.component.sw-extension-removal-modal.alertRemove")},btnLabel:function(){return this.isLicensed?this.$tc("sw-extension-store.component.sw-extension-removal-modal.labelCancel"):this.$tc("sw-extension-store.component.sw-extension-removal-modal.labelRemove")}},methods:{emitClose:function(){this.isLoading||this.$emit("modal-close")},emitRemoval:function(){this.$emit("remove-extension")}}}},rHkh:function(e,n,o){}}]);
//# sourceMappingURL=427330b7199d9d362901.js.map