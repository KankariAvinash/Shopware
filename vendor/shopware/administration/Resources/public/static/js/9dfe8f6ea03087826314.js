(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[405],{Bygj:function(t,n,e){},Elt1:function(t,n,e){var s=e("Bygj");s.__esModule&&(s=s.default),"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);(0,e("P8hj").default)("e2938aca",s,!0,{})},yuKd:function(t,n,e){"use strict";e.r(n);var s=e("6lmj"),o=e.n(s),a=(e("Elt1"),Shopware.Utils.array.uniqBy),c=function(t,n){t.style.visibility=n.value?"visible":"hidden",t.style.position=n.value?"static":"absolute",t.style.top=n.value?"auto":"0",t.style.left=n.value?"auto":"0",t.style.bottom=n.value?"auto":"0",t.style.right=n.value?"auto":"0",t.style.transform=n.value?"translateX(0)":"translateX(100%)"};n.default={template:'\n{% block sw_sales_channel_products_assignment_modal %}\n<sw-modal\n    class="sw-sales-channel-products-assignment-modal"\n    :title="$tc(\'sw-sales-channel.detail.productAssignmentModal.title\')"\n    @modal-close="onCloseModal"\n>\n    <template #default>\n        \n        {% block sw_sales_channel_products_assignment_modal_tabs %}\n        <sw-tabs\n            class="sw-sales-channel-products-assignment-modal__tabs"\n            position-identifier="sw-sales-channel-products-assignment-modal"\n            default-item="singleProducts"\n        >\n            <template #default="{ active }">\n                \n                {% block sw_sales_channel_products_assignment_modal_tabs_single_products %}\n                <sw-tabs-item\n                    name="singleProducts"\n                    :title="$tc(\'sw-sales-channel.detail.productAssignmentModal.singleProducts\')"\n                    :active-tab="active"\n                >\n                    {{ $tc(\'sw-sales-channel.detail.productAssignmentModal.singleProducts\') }}\n                </sw-tabs-item>\n                {% endblock %}\n\n                \n                {% block sw_sales_channel_products_assignment_modal_tabs_categories %}\n                <sw-tabs-item\n                    name="categories"\n                    :title="$tc(\'sw-sales-channel.detail.productAssignmentModal.categories.title\')"\n                    :active-tab="active"\n                >\n                    {{ $tc(\'sw-sales-channel.detail.productAssignmentModal.categories.title\') }}\n                </sw-tabs-item>\n                {% endblock %}\n\n                \n                {% block sw_sales_channel_products_assignment_modal_tab_dynamic_product_groups %}\n                <sw-tabs-item\n                    name="dynamicProductGroups"\n                    :title="$tc(\'sw-sales-channel.detail.productAssignmentModal.dynamicProductGroups.title\')"\n                    :active-tab="active"\n                >\n                    {{ $tc(\'sw-sales-channel.detail.productAssignmentModal.dynamicProductGroups.title\') }}\n                </sw-tabs-item>\n                {% endblock %}\n            </template>\n\n            <template #content="{ active }">\n                <div\n                    class="sw-sales-channel-products-assignment-modal__content"\n                    :height="tabContentHeight"\n                >\n                    \n                    {% block sw_sales_channel_products_assignment_modal_tab_content_single_products %}\n                    <sw-sales-channel-products-assignment-single-products\n                        ref="product"\n                        v-hide="active === \'singleProducts\'"\n                        :sales-channel="salesChannel"\n                        :container-style="productContainerStyle"\n                        @selection-change="onChangeSelection"\n                    />\n                    {% endblock %}\n\n                    \n                    {% block sw_sales_channel_products_assignment_modal_tab_content_categories %}\n                    <sw-sales-channel-product-assignment-categories\n                        ref="category"\n                        v-hide="active === \'categories\'"\n                        :sales-channel="salesChannel"\n                        :container-style="categoryContainerStyle"\n                        @selection-change="onChangeSelection"\n                        @product-loading="setProductLoading"\n                    />\n                    {% endblock %}\n\n                    \n                    {% block sw_sales_channel_products_assignment_modal_tab_content_dynamic_product_groups %}\n                    <sw-sales-channel-products-assignment-dynamic-product-groups\n                        ref="productGroup"\n                        v-hide="active === \'dynamicProductGroups\'"\n                        :sales-channel="salesChannel"\n                        :container-style="productGroupContainerStyle"\n                        @selection-change="onChangeSelection"\n                        @product-loading="setProductLoading"\n                    />\n                    {% endblock %}\n                </div>\n            </template>\n        </sw-tabs>\n        {% endblock %}\n    </template>\n\n    <template #modal-footer>\n        \n        {% block sw_sales_channel_products_assignment_modal_footer_cancel %}\n        <sw-button\n            size="small"\n            @click="onCloseModal"\n        >\n            {{ $tc(\'global.default.cancel\') }}\n        </sw-button>\n        {% endblock %}\n\n        \n        {% block sw_sales_channel_products_assignment_modal_footer_submit %}\n        <sw-button\n            size="small"\n            variant="primary"\n            :is-loading="isAssignProductLoading || isProductLoading"\n            @click="onAddProducts"\n        >\n            {{ $tc(\'sw-sales-channel.detail.products.buttonAddProducts\', productCount, { productCount: productCount }) }}\n        </sw-button>\n        {% endblock %}\n    </template>\n</sw-modal>\n{% endblock %}\n',directives:{hide:{bind:c,update:c}},props:{salesChannel:{type:Object,required:!0},isAssignProductLoading:{type:Boolean,required:!0}},data:function(){return{singleProducts:[],categoryProducts:[],groupProducts:[],isProductLoading:!1,tabContentHeight:"600px",productContainerStyle:{display:"grid",placeItems:"stretch"},categoryContainerStyle:{display:"grid",placeItems:"stretch"},productGroupContainerStyle:{display:"grid",placeItems:"stretch"}}},computed:{productCount:function(){return this.products.length},products:function(){return a([].concat(o()(this.singleProducts),o()(this.categoryProducts),o()(this.groupProducts)),"id")}},mounted:function(){this.mountedComponent()},methods:{mountedComponent:function(){this.getProductContainerStyle(),this.getCategoryContainerStyle(),this.getProductGroupContainerStyle()},getProductContainerStyle:function(){var t,n,e="".concat(null===(t=this.$refs.product.$refs)||void 0===t||null===(n=t.cardSectionSecondary)||void 0===n?void 0:n.$el.offsetHeight,"px");this.$set(this.productContainerStyle,"grid-template-rows","auto calc(\n                ".concat(this.tabContentHeight," - ").concat(e,"\n            )"))},getCategoryContainerStyle:function(){var t,n,e,s,o="".concat(null===(t=this.$refs.category.$refs)||void 0===t||null===(n=t.alert)||void 0===n?void 0:n.$el.offsetHeight,"px"),a="".concat(null===(e=this.$refs.category.$refs)||void 0===e||null===(s=e.cardSectionSecondary)||void 0===s?void 0:s.$el.offsetHeight,"px");this.$set(this.categoryContainerStyle,"grid-template-rows","auto calc(\n                ".concat(this.tabContentHeight," - (").concat("20px"," + ").concat(o," + ").concat(a,")\n            )"))},getProductGroupContainerStyle:function(){var t,n,e,s,o="".concat(null===(t=this.$refs.productGroup.$refs)||void 0===t||null===(n=t.alert)||void 0===n?void 0:n.$el.offsetHeight,"px"),a="".concat(null===(e=this.$refs.productGroup.$refs)||void 0===e||null===(s=e.cardSectionSecondary)||void 0===s?void 0:s.$el.offsetHeight,"px");this.$set(this.productGroupContainerStyle,"grid-template-rows","auto calc(\n                ".concat(this.tabContentHeight," - (").concat("20px"," + ").concat(o," + ").concat(a,")\n            )"))},onChangeSelection:function(t,n){this[n]=t},onCloseModal:function(){this.$emit("modal-close")},onAddProducts:function(){this.$emit("products-add",this.products)},setProductLoading:function(t){this.isProductLoading=t}}}}}]);
//# sourceMappingURL=9dfe8f6ea03087826314.js.map