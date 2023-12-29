(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[577],{J7Vs:function(e,t,n){"use strict";n.r(t);var r=n("CsSd"),i=n.n(r);function a(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function d(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?a(Object(n),!0).forEach((function(t){i()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var o=Shopware,s=o.Utils,l=o.Mixin,c=s.format,u=s.array,m=Shopware.Component.getComponentHelper(),p=m.mapGetters,_=m.mapState,g=Shopware.Utils.object.cloneDeep;t.default={template:'\n{% block sw_order_detail_general %}\n<div class="sw-order-detail-general">\n    \n    {% block sw_order_detail_general_info_card %}\n    <sw-card\n        class="sw-order-detail-base__general-info"\n        position-identifier="sw-order-detail-general-info"\n        :title="$tc(\'sw-order.detailBase.cardTitleGeneralInfo\')"\n    >\n        \n        {% block sw_order_detail_general_info %}\n        <sw-order-general-info\n            ref="swOrderGeneralInfo"\n            :order="order"\n            @save-edits="onSaveEdits"\n        />\n        {% endblock %}\n    </sw-card>\n    {% endblock %}\n\n    \n    {% block sw_order_detail_general_line_items_card %}\n    <sw-extension-component-section\n        position-identifier="sw-order-detail-base-line-items__before"\n    />\n\n    <sw-card\n        class="sw-order-detail-general__line-item-grid-card"\n        position-identifier="sw-order-detail-general-line-items"\n        :title="$tc(\'sw-order.detailBase.cardTitleLineItems\')"\n    >\n\n        \n        {% block sw_order_detail_general_line_items_card_rows %}\n        <template #grid>\n            <sw-container type="row">\n                \n                {% block sw_order_detail_general_line_items_grid %}\n                <sw-order-line-items-grid\n                    ref="sw-order-line-item-grid"\n                    :order="order"\n                    :context="versionContext"\n                    :editable="acl.can(\'order.editor\')"\n                    @item-delete="recalculateAndReload"\n                    @item-edit="recalculateAndReload"\n                    @existing-item-edit="saveAndRecalculate"\n                    @item-cancel="recalculateAndReload"\n                />\n                {% endblock %}\n\n                \n                {% block sw_order_detail_general_line_items_summary %}\n                <sw-card-section\n                    divider="top"\n                    slim\n                >\n                    <sw-description-list\n                        class="sw-order-detail__summary"\n                        grid="1fr 1fr"\n                    >\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_entries %}\n                        \n                        {% block sw_order_detail_general_line_items_summary_amount %}\n                        <dt>{{ $tc(\'sw-order.detailBase.summaryLabelAmount\') }}</dt>\n                        <dd>{{ currencyFilter(order.positionPrice, currency.translated.shortName, order.totalRounding.decimals) }}</dd>\n                        {% endblock %}\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_shipping_cost %}\n                        <template v-if="delivery">\n                            <dt>{{ $tc(\'sw-order.detailBase.summaryLabelShippingCosts\') }}</dt>\n                            <dd>\n                                <sw-order-saveable-field\n                                    v-tooltip="{\n                                        showDelay: 300,\n                                        message: shippingCostsDetail,\n                                        disabled: taxStatus === \'tax-free\'\n                                    }"\n                                    type="number"\n                                    :editable="acl.can(\'order.editor\')"\n                                    :value="delivery.shippingCosts.totalPrice"\n                                    @value-change="onShippingChargeEdited"\n                                >\n                                    {{ currencyFilter(delivery.shippingCosts.totalPrice, currency.translated.shortName, order.totalRounding.decimals) }}\n                                </sw-order-saveable-field>\n                            </dd>\n                        </template>\n\n                        <template\n                            v-for="(delivery, index) in deliveryDiscounts"\n                            {% if VUE3 %}\n                            :key="index"\n                            {% endif %}\n                        >\n                            <dt\n                                {% if VUE2 %}\n                                :key="`delivery-discount-dt-${index}`"\n                                {% endif %}\n                            >\n                                {{ $tc(\'sw-order.detailBase.discountLabelShippingCosts\') }}\n                            </dt>\n                            <dd\n                                {% if VUE2 %}\n                                :key="`delivery-discount-dd-${index}`"\n                                {% endif %}\n                            >\n                                {{ currencyFilter(delivery.shippingCosts.totalPrice, currency.translated.shortName, order.totalRounding.decimals) }}\n                            </dd>\n                        </template>\n                        {% endblock %}\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_amount_without_tax %}\n                        <template v-if="taxStatus !== \'tax-free\'">\n                            <dt><strong>{{ $tc(\'sw-order.detailBase.summaryLabelAmountWithoutTaxes\') }}</strong></dt>\n                            <dd><strong>{{ currencyFilter(order.amountNet, currency.translated.shortName, order.totalRounding.decimals) }}</strong></dd>\n                        </template>\n                        {% endblock %}\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_taxes %}\n                        <template v-if="taxStatus !== \'tax-free\'">\n                            <template\n                                v-for="(calculatedTax, index) in sortedCalculatedTaxes"\n                                {% if VUE3 %}\n                                :key="index"\n                                {% endif %}\n                            >\n                                <dt\n                                    {% if VUE2 %}\n                                    :key="`sorted-calculated-taxes-dt-${index}`"\n                                    {% endif %}\n                                >\n                                    {{ $tc(\'sw-order.detailBase.summaryLabelTaxes\', 1, { taxRate: calculatedTax.taxRate }) }}\n                                </dt>\n                                <dd\n                                    {% if VUE2 %}\n                                    :key="`sorted-calculated-taxes-dd-${index}`"\n                                    {% endif %}\n                                >\n                                    {{ currencyFilter(calculatedTax.tax, currency.translated.shortName, order.totalRounding.decimals) }}\n                                </dd>\n                            </template>\n                        </template>\n                        {% endblock %}\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_amount_total %}\n                        <template v-if="taxStatus !== \'tax-free\'">\n                            <dt><strong>{{ $tc(\'sw-order.detailBase.summaryLabelAmountTotal\') }}</strong></dt>\n                            <dd><strong>{{ currencyFilter(orderTotal, currency.shortName, order.totalRounding.decimals) }}</strong></dd>\n                            <template v-if="displayRounded">\n                                <dt><strong>{{ $tc(\'sw-order.detailBase.summaryLabelAmountTotalRounded\') }}</strong></dt>\n                                <dd><strong>{{ currencyFilter(order.price.totalPrice, currency.shortName, order.totalRounding.decimals) }}</strong></dd>\n                            </template>\n                        </template>\n                        {% endblock %}\n\n                        \n                        {% block sw_order_detail_general_line_items_summary_amount_free_tax %}\n                        <template v-if="taxStatus === \'tax-free\'">\n                            <dt><strong>{{ $tc(\'sw-order.detailBase.summaryLabelAmount\') }}</strong></dt>\n                            <dd><strong>{{ currencyFilter(order.price.totalPrice, currency.translated.shortName, order.totalRounding.decimals) }}</strong></dd>\n                        </template>\n                        {% endblock %}\n                    {% endblock %}\n                    </sw-description-list>\n                </sw-card-section>\n                {% endblock %}\n            </sw-container>\n        </template>\n        {% endblock %}\n    </sw-card>\n\n    <sw-extension-component-section\n        position-identifier="sw-order-detail-base-line-items__after"\n    />\n    {% endblock %}\n</div>\n{% endblock %}\n',inject:["acl"],mixins:[l.getByName("notification")],props:{orderId:{type:String,required:!0},isSaveSuccessful:{type:Boolean,required:!0}},computed:d(d(d({},p("swOrderDetail",["isLoading"])),_("swOrderDetail",["order","versionContext"])),{},{delivery:function(){return this.order.deliveries[0]},deliveryDiscounts:function(){return u.slice(this.order.deliveries,1)||[]},shippingCostsDetail:function(){var e=this,t=this.sortByTaxRate(g(this.order.shippingCosts.calculatedTaxes)),n="".concat(t.map((function(t){return"".concat(e.$tc("sw-order.detailBase.shippingCostsTax",0,{taxRate:t.taxRate,tax:c.currency(t.tax,e.order.currency.shortName)}))})).join("<br>"));return"".concat(this.$tc("sw-order.detailBase.tax"),"<br>").concat(n)},sortedCalculatedTaxes:function(){return this.sortByTaxRate(g(this.order.price.calculatedTaxes)).filter((function(e){return 0!==e.tax}))},taxStatus:function(){return this.order.price.taxStatus},displayRounded:function(){return.01!==this.order.totalRounding.interval||this.order.totalRounding.decimals!==this.order.itemRounding.decimals},orderTotal:function(){return this.displayRounded?this.order.price.rawTotal:this.order.price.totalPrice},currency:function(){return this.order.currency},currencyFilter:function(){return Shopware.Filter.getByName("currency")}}),methods:{sortByTaxRate:function(e){return e.sort((function(e,t){return e.taxRate-t.taxRate}))},onShippingChargeEdited:function(e){this.delivery.shippingCosts.unitPrice=e,this.delivery.shippingCosts.totalPrice=e,this.saveAndRecalculate()},saveAndRecalculate:function(){this.$emit("save-and-recalculate")},onSaveEdits:function(){this.$emit("save-edits")},recalculateAndReload:function(){this.$emit("recalculate-and-reload")}}}}}]);
//# sourceMappingURL=5fe7ce68f88832e3960c.js.map