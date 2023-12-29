(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[461],{"+x7S":function(e,n,t){var a=t("othA");a.__esModule&&(a=a.default),"string"==typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);(0,t("P8hj").default)("5cc27389",a,!0,{})},othA:function(e,n,t){},sjMA:function(e,n,t){"use strict";t.r(n);var a=t("CsSd"),s=t.n(a);t("+x7S");function i(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);n&&(a=a.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,a)}return t}var r=Shopware,c=r.Context,l=r.Mixin,o=Shopware.Data.Criteria;n.default={template:'\n{% block sw_settings_search_searchable_content %}\n<sw-card\n    class="sw-settings-search-searchable-content"\n    position-identifier="sw-settings-search-searchable-content"\n    :title="$tc(\'sw-settings-search.generalTab.labelSearchableContent\')"\n>\n    \n    {% block sw_settings_search_searchable_content_title %}\n    <span class="sw-field sw-settings-search__searchable-content-title">\n        {{ $tc(\'sw-settings-search.generalTab.textDescriptionSearchableContent\') }}\n    </span>\n    {% endblock %}\n\n    \n    {% block sw_settings_search_searchable_actions %}\n    <sw-container\n        class="sw-field"\n        columns="repeat(auto-fit, minmax(100px, 1fr))"\n        align="center"\n        gap="0px 30px"\n    >\n        <div class="sw-settings-search__searchable-content-button-group">\n            \n            {% block sw_settings_search_searchable_add_item %}\n            <sw-button\n                v-if="defaultTab !== tabNames.generalTab"\n                class="sw-settings-search__searchable-content-add-button"\n                variant="ghost"\n                size="small"\n                :disabled="!acl.can(\'product_search_config.creator\')"\n                @click="onAddNewConfig"\n            >\n                {{ $tc(\'sw-settings-search.generalTab.buttonAddContent\') }}\n            </sw-button>\n            {% endblock %}\n\n            \n            {% block sw_settings_search_searchable_reset_default %}\n            <sw-button\n                v-if="defaultTab !== tabNames.customTab"\n                class="sw-settings-search__searchable-content-reset-button"\n                size="small"\n                :disabled="isEnabledReset || !acl.can(\'product_search_config.editor\')"\n                @click="onResetToDefault"\n            >\n                {{ $tc(\'sw-settings-search.generalTab.buttonResetDefault\') }}\n            </sw-button>\n            {% endblock %}\n        </div>\n\n        \n        {% block sw_settings_search_searchable_show_example %}\n        \n        {% block sw_settings_search_searchable_show_example_link %}\n        <div class="sw-settings-search__searchable-content-link-text">\n\n            \n            {% block sw_settings_search_searchable_show_example_link_element %}\n            \n            <a\n                class="sw-settings-search__searchable-content-show-example-link"\n                role="button"\n                tabindex="0"\n                @click="onShowExampleModal"\n            >\n                {{ $tc(\'sw-settings-search.generalTab.linkExample\') }}\n                <sw-icon\n                    name="regular-long-arrow-right"\n                    small\n                />\n            </a>\n            {% endblock %}\n\n            <router-link\n                v-if="!storefrontEsEnable"\n                :to="{ name: \'sw.settings.search.index.liveSearch\' }"\n                class="sw-settings-search__searchable-content-rebuild-link"\n            >\n                {{ $tc(\'sw-settings-search.liveSearchTab.linkRebuildSearchIndex\') }}\n                <sw-icon\n                    name="regular-long-arrow-right"\n                    small\n                />\n            </router-link>\n        </div>\n        {% endblock %}\n\n        \n        {% block sw_settings_search_searchable_show_example_modal %}\n        <sw-settings-search-example-modal\n            v-if="showExampleModal"\n            @modal-close="onCloseExampleModal"\n        />\n        {% endblock %}\n        {% endblock %}\n    </sw-container>\n    {% endblock %}\n\n    \n    {% block sw_settings_search_searchable_content_tabs %}\n    <sw-tabs\n        :default-item="defaultTab"\n        position-identifier="sw-settings-search-searchable-content"\n    >\n        <template #default="{ active }">\n            \n            {% block sw_settings_search_searchable_content_general_tab_title %}\n            <sw-tabs-item\n                v-bind="$props"\n                class="sw-settings-search__searchable-content-tab-title"\n                :name="tabNames.generalTab"\n                :active-tab="active"\n                @click="onChangeTab(tabNames.generalTab)"\n            >\n                {{ $tc(\'sw-settings-search.generalTab.labelGeneralTab\') }}\n            </sw-tabs-item>\n            {% endblock %}\n\n            <sw-tabs-item\n                v-if="!storefrontEsEnable"\n                v-bind="$props"\n                class="sw-settings-search__searchable-content-tab-title"\n                :name="tabNames.customTab"\n                :active-tab="active"\n                @click="onChangeTab(tabNames.customTab)"\n            >\n                {{ $tc(\'sw-settings-search.generalTab.labelCustomFieldsTab\') }}\n            </sw-tabs-item>\n        </template>\n\n        <template #content="{ active }">\n            \n            {% block sw_settings_search_searchable_content_general_tab_item %}\n            <sw-settings-search-searchable-content-general\n                v-if="active === tabNames.generalTab"\n                :is-empty="isListEmpty"\n                :is-loading="isLoading"\n                :columns="getProductSearchFieldColumns"\n                :repository="productSearchFieldRepository"\n                :search-configs="searchConfigFields"\n                :field-configs="fieldConfigs"\n                @data-load="loadData"\n                @config-save="saveConfig"\n            />\n            {% endblock %}\n\n            <sw-settings-search-searchable-content-customfields\n                v-if="active === tabNames.customTab && !storefrontEsEnable"\n                :is-empty="isListEmpty"\n                :is-loading="isLoading"\n                :columns="getProductSearchFieldColumns"\n                :repository="productSearchFieldRepository"\n                :search-configs="searchConfigFields"\n                @data-load="loadData"\n                @config-add="onAddNewConfig"\n                @config-save="saveConfig"\n                @config-delete="deleteConfig"\n            />\n        </template>\n    </sw-tabs>\n    {% endblock %}\n</sw-card>\n{% endblock %}\n',inject:["repositoryFactory","acl"],mixins:[l.getByName("notification")],props:{searchConfigId:{type:String,required:!0},productSearchConfigs:{type:Object,required:!1,default:function(){return null}}},data:function(){return{showExampleModal:!1,defaultTab:"general",tabNames:{generalTab:"general",customTab:"customfields"},isLoading:!1,isEnabledReset:!0,searchConfigFields:[],fieldConfigs:[{label:this.$tc("sw-settings-search.generalTab.configFields.name"),value:"name",defaultConfigs:{searchable:!0,ranking:700,tokenize:!0}},{label:this.$tc("sw-settings-search.generalTab.configFields.description"),value:"description",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.productNumber"),value:"productNumber",defaultConfigs:{searchable:!0,ranking:1e3,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.manufacturerNumber"),value:"manufacturerNumber",defaultConfigs:{searchable:!0,ranking:500,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.ean"),value:"ean",defaultConfigs:{searchable:!0,ranking:500,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.customSearchKeywords"),value:"customSearchKeywords",defaultConfigs:{searchable:!0,ranking:800,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.manufacturerName"),value:"manufacturer.name",defaultConfigs:{searchable:!0,ranking:500,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.manufacturerCustomFields"),value:"manufacturer.customFields",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.categoriesName"),value:"categories.name",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.categoriesCustomFields"),value:"categories.customFields",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.tagsName"),value:"tags.name",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.metaTitle"),value:"metaTitle",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.metaDescription"),value:"metaDescription",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.propertiesValue"),value:"properties.name",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}},{label:this.$tc("sw-settings-search.generalTab.configFields.variantValue"),value:"options.name",defaultConfigs:{searchable:!1,ranking:0,tokenize:!1}}]}},computed:{productSearchFieldRepository:function(){return this.repositoryFactory.create("product_search_config_field")},productSearchFieldCriteria:function(){var e=new o(1,25);return e.addFilter(o.equals("searchConfigId",this.searchConfigId)),e.addSorting(o.sort("field","ESC")),this.defaultTab===this.tabNames.generalTab?e.addFilter(o.equals("customFieldId",null)):e.addFilter(o.not("AND",[o.equals("customFieldId",null)])),e},isListEmpty:function(){return!this.searchConfigFields||!this.searchConfigFields.length},getProductSearchFieldColumns:function(){return[{property:"field",label:"sw-settings-search.generalTab.list.columnContent",inlineEdit:"string",sortable:!0,width:"250px"},{property:"searchable",label:"sw-settings-search.generalTab.list.columnSearchable",align:"center",inlineEdit:"string",sortable:!0},{property:"ranking",inlineEdit:"number",label:"sw-settings-search.generalTab.list.columnRankingPoints",align:"center",sortable:!0},{property:"tokenize",inlineEdit:"string",label:"sw-settings-search.generalTab.list.columnSplitKeywords",align:"center",sortable:!0}]},storefrontEsEnable:function(){var e;return null!==(e=c.app.storefrontEsEnable)&&void 0!==e&&e}},watch:{searchConfigId:function(){this.loadData()},productSearchConfigs:function(){this.loadData()}},methods:{onShowExampleModal:function(){this.showExampleModal=!0},onCloseExampleModal:function(){this.showExampleModal=!1},onAddNewConfig:function(){var e=this.createNewConfigItem();this.searchConfigFields.unshift(e),this.$emit("edit-change",!0)},createNewConfigItem:function(){var e=this.productSearchFieldRepository.create();return e.searchConfigId=this.searchConfigId,e.searchable=!1,e.ranking=0,e.field="",e.tokenize=!1,e},getConfigFieldDefault:function(e){var n=this.fieldConfigs.find((function(n){return n.value===e}));return n?function(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?i(Object(t),!0).forEach((function(n){s()(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):i(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}({},n.defaultConfigs):{ranking:0,searchable:!1,tokenize:!1}},onResetToDefault:function(){var e=this,n=this.defaultTab===this.tabNames.generalTab;this.searchConfigFields.forEach((function(t){return t.ranking=n?e.getConfigFieldDefault(t.field).ranking:0,t.searchable=!!n&&e.getConfigFieldDefault(t.field).searchable,t.tokenize=!!n&&e.getConfigFieldDefault(t.field).tokenize,t})),this.saveConfig()},onChangeTab:function(e){this.defaultTab=e,this.loadData()},loadData:function(){this.getProductSearchFieldsList()},getProductSearchFieldsList:function(){var e=this;this.isLoading=!0;var n=this.productSearchFieldCriteria;this.productSearchFieldRepository.search(n).then((function(n){e.total=n.total,e.isEnabledReset=!n.total,e.searchConfigFields=n})).catch((function(){e.createNotificationError({message:e.$tc("sw-settings-search.notification.loadError")})})).finally((function(){e.isLoading=!1}))},saveConfig:function(){var e=this;this.isLoading=!0,this.productSearchFieldRepository.saveAll(this.searchConfigFields).then((function(){e.createNotificationSuccess({message:e.$tc("sw-settings-search.notification.saveSuccess")}),e.$emit("edit-change",!1)})).catch((function(){e.createNotificationError({message:e.$tc("sw-settings-search.notification.saveError")})})).finally((function(){e.isLoading=!1,e.loadData()}))},deleteConfig:function(e){var n=this;e&&(this.isLoading=!0,this.productSearchFieldRepository.delete(e).then((function(){n.createNotificationSuccess({message:n.$tc("sw-settings-search.notification.saveSuccess")})})).catch((function(){n.createNotificationError({message:n.$tc("sw-settings-search.notification.saveError")})})).finally((function(){n.isLoading=!1,n.loadData()})))}}}}}]);
//# sourceMappingURL=255d615c3f830ff2c46e.js.map