(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[348],{OZO9:function(e,t,n){},PDOx:function(e,t,n){"use strict";n.r(t);var a=n("CsSd"),r=n.n(a);n("QIIc");function i(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,a)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?i(Object(n),!0).forEach((function(t){r()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var o=Shopware.Context,s=Shopware.Data.Criteria;t.default={template:'\n{% block sw_product_stream_modal_preview %}\n<sw-modal\n    class="sw-product-stream-modal-preview"\n    :title="`${$tc(\'sw-product-stream.previewModal.title\')} (${total || 0})`"\n    :is-loading="isLoading"\n    variant="full"\n    @modal-close="closeModal"\n>\n    \n    {% block sw_product_stream_modal_preview_content %}\n    <div class="sw-product-stream-modal-preview__content">\n        \n        {% block sw_product_stream_modal_preview_content_header %}\n        <sw-container class="sw-product-stream-modal-preview__content-header">\n            \n            {% block sw_product_stream_modal_preview_search_field_label %}\n            <sw-label class="sw-product-stream-modal-preview__search-field-label">\n                \n                {% block sw_product_stream_modal_preview_search_field %}\n                <sw-simple-search-field\n                    class="sw-product-stream-modal-preview__search-field"\n                    variant="form"\n                    :value="searchTerm"\n                    :delay="750"\n                    @search-term-change="onSearchTermChange"\n                />\n                {% endblock %}\n            </sw-label>\n            {% endblock %}\n            \n            {% block sw_product_stream_modal_preview_sales_channel_field_label %}\n            <sw-label class="sw-product-stream-modal-preview__sales-channel-field-label">\n                \n                {% block sw_product_stream_modal_preview_sales_channel_field %}\n                <sw-entity-single-select\n                    {% if VUE3 %}\n                    v-model:value="selectedSalesChannel"\n                    {% else %}\n                    v-model="selectedSalesChannel"\n                    {% endif %}\n                    :disabled="isLoading"\n                    entity="sales_channel"\n                    class="sw-product-stream-modal-preview__sales-channel-field"\n                    :label="$tc(\'sw-settings.system-config.labelSalesChannelSelect\')"\n                    {% if VUE3 %}\n                    @update:value="onSalesChannelChange"\n                    {% else %}\n                    @change="onSalesChannelChange"\n                    {% endif %}\n                />\n                {% endblock %}\n            </sw-label>\n            {% endblock %}\n        </sw-container>\n        {% endblock %}\n\n        \n        {% block sw_product_stream_modal_preview_grid %}\n        <sw-data-grid\n            v-if="total"\n            :data-source="products"\n            :columns="productColumns"\n            :show-selection="false"\n            :show-actions="false"\n            :show-previews="true"\n            :is-loading="isLoading"\n            full-page\n        >\n\n            <template #column-name="{ item, column }">\n                \n                {% block sw_product_stream_modal_preview_grid_column_name %}\n                <router-link :to="{ name: column.routerLink, params: { id: item.id } }">\n                    <sw-product-variant-info :variations="item.variation">\n                        {{ item.name || item.translated.name }}\n                    </sw-product-variant-info>\n                </router-link>\n                {% endblock %}\n            </template>\n\n            <template #column-active="{ item }">\n                \n                {% block sw_product_stream_modal_preview_grid_column_active %}\n                <sw-data-grid-column-boolean\n                    :value="item.active"\n                    :is-inline-edit="false"\n                />\n                {% endblock %}\n            </template>\n\n            <template #column-price="{ item }">\n                \n                {% block sw_product_stream_modal_preview_grid_column_price %}\n                {{ currencyFilter(getPriceForDefaultCurrency(item).unitPrice, \'EUR\') }}\n                {% endblock %}\n            </template>\n\n            <template #column-stock="{ item }">\n                \n                {% block sw_product_stream_modal_preview_grid_column_stock %}\n                {{ item.stock }}\n                <sw-color-badge :variant="stockColorVariantFilter(item.stock)" />\n                {% endblock %}\n            </template>\n\n            <template #pagination>\n                \n                {% block sw_product_stream_modal_preview_grid_pagination %}\n                <sw-pagination\n                    v-bind="{ total, page, limit }"\n                    :total-visible="7"\n                    :auto-hide="false"\n                    @page-change="onPageChange"\n                />\n                {% endblock %}\n            </template>\n        </sw-data-grid>\n        {% endblock %}\n\n        \n        {% block sw_product_stream_modal_preview_empty_state %}\n        <sw-empty-state\n            v-if="!total && !isLoading"\n            :absolute="false"\n            :title="$tc(\'sw-product-stream.previewModal.empty\')"\n        />\n        {% endblock %}\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_product_stream_modal_preview_footer %}\n    <template #modal-footer>\n        \n        {% block sw_product_stream_modal_preview_close_button %}\n        <sw-button\n            class="sw-product-stream-modal-preview__close-action"\n            variant="primary"\n            @click.prevent="closeModal"\n        >\n            {{ $tc(\'sw-product-stream.previewModal.close\') }}\n        </sw-button>\n        {% endblock %}\n    </template>\n    {% endblock %}\n</sw-modal>\n{% endblock %}\n',inject:["repositoryFactory","productStreamPreviewService"],props:{filters:{type:Array,required:!0}},data:function(){return{products:[],selectedSalesChannel:null,searchTerm:"",page:1,total:!1,limit:25,isLoading:!1}},computed:{salesChannelRepository:function(){return this.repositoryFactory.create("sales_channel")},salesChannelCriteria:function(){var e=new s(1,1);return e.addSorting(s.sort("type.iconName","ASC")),e},previewCriteria:function(){var e=new s(this.page,this.limit);return e.setTerm(this.searchTerm),e},productColumns:function(){return[{property:"name",label:this.$tc("sw-product-stream.filter.values.product"),type:"text",routerLink:"sw.product.detail"},{property:"manufacturer.name",label:this.$tc("sw-product-stream.filter.values.manufacturerId")},{property:"active",label:this.$tc("sw-product-stream.filter.values.active"),align:"center",type:"bool"},{property:"price",label:this.$tc("sw-product-stream.filter.values.price")},{property:"stock",label:this.$tc("sw-product-stream.filter.values.stock"),align:"right"}]},currencyFilter:function(){return Shopware.Filter.getByName("currency")},stockColorVariantFilter:function(){return Shopware.Filter.getByName("stockColorVariant")}},created:function(){this.createdComponent()},methods:{onSearchTermChange:function(e){var t=this;this.searchTerm=e,this.page=1,this.isLoading=!0,this.loadEntityData().then((function(){t.isLoading=!1}))},onSalesChannelChange:function(){var e=this;this.page=1,this.isLoading=!0,this.loadEntityData().then((function(){e.isLoading=!1}))},createdComponent:function(){var e=this;return this.isLoading=!0,this.loadSalesChannels().then((function(){return e.loadEntityData()})).finally((function(){e.isLoading=!1}))},loadEntityData:function(){var e=this;return!!this.selectedSalesChannel&&this.productStreamPreviewService.preview(this.selectedSalesChannel,this.previewCriteria,this.mapFiltersForSearch(this.filters),{"sw-currency-id":o.app.systemCurrencyId,"sw-inheritance":!0}).then((function(t){e.products=Object.values(t.elements),e.total=t.total}))},loadSalesChannels:function(){var e=this;return this.salesChannelRepository.searchIds(this.salesChannelCriteria).then((function(t){var n=t.data;e.selectedSalesChannel=n.at(0)}))},mapFiltersForSearch:function(e){var t=this;return e.map((function(e){var n=e.field,a=e.type,r=e.operator,i=e.value,o=e.parameters,s=e.queries,c={field:n,type:a,operator:r,value:i,parameters:o,queries:t.mapFiltersForSearch(s)};return"id"===n||"product.id"===n?{type:"multi",field:null,operator:"OR",value:null,parameters:null,queries:[c,l(l({},c),{field:"parentId"})]}:c}))},closeModal:function(){this.$emit("modal-close")},getPriceForDefaultCurrency:function(e){var t=e.calculatedCheapestPrice,n=e.calculatedPrice;return e.calculatedPrices.length>0&&(n=e.calculatedPrices[e.calculatedPrices.length-1]),t.unitPrice!==n.unitPrice?n:t},onPageChange:function(e){var t=this,n=e.page,a=void 0===n?1:n,r=e.limit,i=void 0===r?25:r;this.isLoading=!0,this.page=a,this.limit=i,this.loadEntityData().then((function(){t.isLoading=!1}))}}}},QIIc:function(e,t,n){var a=n("OZO9");a.__esModule&&(a=a.default),"string"==typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);(0,n("P8hj").default)("f1fcffaa",a,!0,{})}}]);
//# sourceMappingURL=2651ea921d1a5d71a692.js.map