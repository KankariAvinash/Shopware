(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[576],{MKap:function(e,n,t){"use strict";t.r(n);var r=t("CsSd"),o=t.n(r);function i(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function d(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?i(Object(t),!0).forEach((function(n){o()(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):i(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var a=Shopware.Component.getComponentHelper(),s=a.mapGetters,c=a.mapState;n.default={template:'\n{% block sw_order_detail_documents %}\n<div>\n    \n    {% block sw_order_detail_documents_card %}\n    {# v-show is used here as underlying components influence the loading state and v-if would destroy this behaviour #}\n    <sw-order-document-card\n        v-show="!isLoading"\n        {% if VUE2 %}\n        class="sw-order-detail-base__document-grid"\n        {% endif %}\n        :order="order"\n        @document-save="saveAndReload"\n        @update-loading="onUpdateLoading"\n    />\n    {% endblock %}\n</div>\n{% endblock %}\n',computed:d(d({},s("swOrderDetail",["isLoading"])),c("swOrderDetail",["order","versionContext"])),methods:{saveAndReload:function(){this.$emit("save-and-reload")},onUpdateLoading:function(e){this.$emit("update-loading",e)}}}}}]);
//# sourceMappingURL=574bc97f92e212b2cb7d.js.map