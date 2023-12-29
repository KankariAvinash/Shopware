(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[60],{Fy75:function(e,a,n){var t=n("bMnM");t.__esModule&&(t=t.default),"string"==typeof t&&(t=[[e.i,t,""]]),t.locals&&(e.exports=t.locals);(0,n("P8hj").default)("95ed546c",t,!0,{})},bMnM:function(e,a,n){},uZxT:function(e,a,n){"use strict";n.r(a);n("Fy75"),a.default={template:'\n{% block sw_category_layout_card %}\n<sw-card\n    class="sw-category-layout-card"\n    position-identifier="sw-category-layout"\n    :title="$tc(\'sw-category.base.cms.title\')"\n    :is-loading="isLoading"\n>\n    <div class="sw-category-layout-card__base-layout">\n\n        \n        {% block sw_category_detail_layout_preview %}\n        <div\n            class="sw-category-layout-card__preview"\n            role="button"\n            tabindex="0"\n            @click="openLayoutModal"\n            @keydown.enter="openLayoutModal"\n        >\n            <sw-cms-list-item\n                :page="cmsPage"\n                :disabled="!acl.can(\'category.editor\')"\n                active\n            />\n        </div>\n        {% endblock %}\n\n        \n        {% block sw_category_detail_layout_modal %}\n        <sw-cms-layout-modal\n            v-if="showLayoutSelectionModal"\n            :cms-page-types="pageTypes"\n            :headline="headline"\n            :pre-selection="cmsPage"\n            @modal-layout-select="onLayoutSelect"\n            @modal-close="closeLayoutModal"\n        />\n        {% endblock %}\n\n        \n        {% block sw_category_detail_layout_desc %}\n        <div class="sw-category-layout-card__desc">\n\n            \n            {% block sw_category_detail_layout_desc_info %}\n            <div class="sw-category-layout-card__desc-info">\n\n                \n                {% block sw_category_detail_layout_desc_info_headline %}\n                <div\n                    class="sw-category-layout-card__desc-headline"\n                    :class="{ \'is--empty\': !cmsPage }"\n                >\n                    {{ cmsPage ? cmsPage.name : $tc(\'sw-category.base.cms.defaultTitle\') }}\n                </div>\n                {% endblock %}\n\n                \n                {% block sw_category_detail_layout_desc_info_subheadline %}\n                <div\n                    class="sw-category-layout-card__desc-subheadline"\n                    :class="{ \'is--empty\': !cmsPage }"\n                >\n                    {{ pageTypeTitle }}\n                </div>\n                {% endblock %}\n\n            </div>\n            {% endblock %}\n\n            \n            {% block sw_category_detail_layout_desc_actions %}\n            <div class="sw-category-layout-card__desc-actions">\n\n                \n                {% block sw_category_detail_layout_desc_actions_layout %}\n                <sw-button\n                    class="sw-category-detail-layout__change-layout-action"\n                    size="small"\n                    :disabled="!acl.can(\'category.editor\')"\n                    @click="openLayoutModal"\n                >\n                    {{ cmsPage ? $tc(\'sw-category.base.cms.changeLayout\') : $tc(\'sw-category.base.cms.changeLayoutEmpty\') }}\n                </sw-button>\n                {% endblock %}\n\n                \n                {% block sw_category_detail_layout_desc_actions_designer %}\n                <sw-button\n                    class="sw-category-detail-layout__open-in-pagebuilder"\n                    size="small"\n                    :disabled="!acl.can(\'category.editor\')"\n                    @click="openInPagebuilder"\n                >\n                    {{ cmsPage ? $tc(\'sw-category.base.cms.editInPagebuilder\') : $tc(\'sw-category.base.cms.editInPagebuilderEmpty\') }}\n                </sw-button>\n                {% endblock %}\n\n                \n                {% block sw_category_detail_layout_desc_actions_remove %}\n                <sw-button\n                    v-if="cmsPage"\n                    size="small"\n                    :disabled="!acl.can(\'category.editor\')"\n                    class="sw-category-detail-layout__layout-reset"\n                    square\n                    @click="onLayoutReset"\n                >\n                    <sw-icon\n                        name="regular-trash"\n                        small\n                    />\n                </sw-button>\n                {% endblock %}\n\n            </div>\n            {% endblock %}\n\n        </div>\n        {% endblock %}\n\n    </div>\n</sw-card>\n{% endblock %}\n',inject:["acl","cmsPageTypeService"],props:{category:{type:Object,required:!0},cmsPage:{type:Object,required:!1,default:null},isLoading:{type:Boolean,required:!1,default:!1},pageTypes:{type:Array,required:!1,default:function(){return["page","landingpage","product_list"]}},headline:{type:String,required:!1,default:""}},data:function(){return{showLayoutSelectionModal:!1}},computed:{pageTypeTitle:function(){var e=this.$tc("sw-category.base.cms.defaultDesc");return this.cmsPage&&this.cmsPageTypeService.getType(this.cmsPage.type)?this.$tc(this.cmsPageTypeService.getType(this.cmsPage.type).title):e}},methods:{onLayoutSelect:function(e){this.category.cmsPageId=e},onLayoutReset:function(){this.onLayoutSelect(null)},openInPagebuilder:function(){this.cmsPage?this.$router.push({name:"sw.cms.detail",params:{id:this.category.cmsPageId}}):this.$router.push({name:"sw.cms.create",params:{type:"category",id:this.category.id}})},openLayoutModal:function(){this.acl.can("category.editor")&&(this.showLayoutSelectionModal=!0)},closeLayoutModal:function(){this.showLayoutSelectionModal=!1}}}}}]);
//# sourceMappingURL=ba62e585f3010b963b0a.js.map