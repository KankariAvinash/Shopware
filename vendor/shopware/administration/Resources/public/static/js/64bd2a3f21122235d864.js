(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[219],{OAA5:function(n,o,s){},ckvZ:function(n,o,s){"use strict";s.r(o);s("hEpA"),o.default={template:'\n{% block sw_extension_domains_modal %}\n<sw-modal\n    class="sw-extension-domains-modal"\n    :title="modalTitle"\n    variant="small"\n    v-on="$listeners"\n>\n\n    \n    {% block sw_extension_domains_modal_description %}\n    <p class="sw-extension-domains-modal__description">\n        {{ $tc(\'sw-extension-store.component.sw-extension-domains-modal.description\') }}\n    </p>\n    {% endblock %}\n\n    \n    {% block sw_extension_domains_modal_list_title %}\n    <h3 class="sw-extension-domains-modal__list-title">\n        {{ $tc(\'sw-extension-store.component.sw-extension-domains-modal.listTitle\') }}\n    </h3>\n    {% endblock %}\n\n    \n    {% block sw_extension_domains_modal_list %}\n    <ul class="sw-extension-domains-modal__list">\n        \n        {% block sw_extension_domains_modal_list_entry %}\n        <li\n            v-for="(domain, i) in domains"\n            :key="`domain-${i}`"\n            class="sw-extension-domains-modal__list-item"\n        >\n            {{ domain }}\n        </li>\n        {% endblock %}\n    </ul>\n    {% endblock %}\n\n    \n    {% block sw_extension_domains_modal_footer %}\n    <template #modal-footer>\n        \n        {% block sw_extension_domains_modal_footer_inner %}\n        <sw-button\n            variant="primary"\n            size="small"\n            @click="close"\n        >\n            {{ $tc(\'global.sw-modal.labelClose\') }}\n        </sw-button>\n        {% endblock %}\n    </template>\n    {% endblock %}\n\n</sw-modal>\n{% endblock %}\n',props:{extensionLabel:{type:String,required:!0},domains:{type:Array,required:!0}},computed:{modalTitle:function(){return this.$t("sw-extension-store.component.sw-extension-domains-modal.modalTitle",{extensionLabel:this.extensionLabel})}},methods:{close:function(){this.$emit("modal-close")}}}},hEpA:function(n,o,s){var e=s("OAA5");e.__esModule&&(e=e.default),"string"==typeof e&&(e=[[n.i,e,""]]),e.locals&&(n.exports=e.locals);(0,s("P8hj").default)("c33bdb58",e,!0,{})}}]);
//# sourceMappingURL=64bd2a3f21122235d864.js.map