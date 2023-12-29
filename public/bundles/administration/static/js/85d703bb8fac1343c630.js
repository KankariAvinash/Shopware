(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[138],{"93Lu":function(e,t,i){},aysd:function(e,t,i){var s=i("93Lu");s.__esModule&&(s=s.default),"string"==typeof s&&(s=[[e.i,s,""]]),s.locals&&(e.exports=s.locals);(0,i("P8hj").default)("33700547",s,!0,{})},siNS:function(e,t,i){"use strict";i.r(t);i("aysd");var s=Shopware.Filter;t.default={template:'\n{% block sw_cms_list_item %}\n<div\n    class="sw-cms-list-item"\n    :class="componentClasses"\n>\n\n    \n    {% block sw_cms_list_item_options %}\n    <slot name="contextMenu"></slot>\n    {% endblock %}\n\n    \n    {% block sw_cms_list_item_image %}\n    <div\n        v-if="page"\n        class="sw-cms-list-item__image"\n        :style="previewMedia"\n        role="button"\n        tabindex="0"\n        @click="onItemClick(page)"\n        @keydown.enter="onItemClick(page)"\n    >\n        <div v-if="isDefault">\n            <span\n                v-if="page.type === \'product_list\'"\n                class="sw-cms-list-item__is-default"\n            >{{ $tc(\'sw-cms.components.cmsListItem.defaultLayoutProductList\') }}</span>\n            <span\n                v-else-if="page.type === \'product_detail\'"\n                class="sw-cms-list-item__is-default"\n            >{{ $tc(\'sw-cms.components.cmsListItem.defaultLayoutProductDetail\') }}</span>\n        </div>\n    </div>\n    <div\n        v-else\n        class="sw-cms-list-item__image is--empty"\n    >\n        {{ $tc(\'sw-cms.components.cmsListItem.emptyText\') }}\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_cms_list_item_info %}\n    <div class="sw-cms-list-item__info">\n        <div\n            v-if="page"\n            class="sw-cms-list-item__status"\n            :class="statusClasses"\n        ></div>\n        <div\n            v-if="page"\n            class="sw-cms-list-item__title"\n            role="button"\n            tabindex="0"\n            @click="onElementClick"\n            @keydown.enter="onElementClick"\n        >\n            {{ page.translated.name }}\n        </div>\n        <sw-icon\n            v-if="page && page.locked"\n            class="sw-cms-list-item__locked"\n            name="solid-lock"\n            small\n        />\n    </div>\n    {% endblock %}\n</div>\n{% endblock %}\n',inject:["feature"],props:{page:{type:Object,required:!1,default:null},active:{type:Boolean,required:!1,default:!1},isDefault:{type:Boolean,required:!1,default:!1},disabled:{type:Boolean,required:!1,default:!1}},computed:{previewMedia:function(){var e,t;if(null!==(e=this.page.previewMedia)&&void 0!==e&&e.id&&null!==(t=this.page.previewMedia)&&void 0!==t&&t.url)return{"background-image":"url(".concat(this.page.previewMedia.url,")"),"background-size":"cover"};if(this.page.locked&&"page"!==this.page.type)return{"background-image":this.defaultLayoutAsset};var i=this.defaultItemLayoutAssetBackground;return i?{"background-image":i,"background-size":"cover"}:null},defaultLayoutAsset:function(){return"url(".concat(this.assetFilter("administration/static/img/cms/default_preview_".concat(this.page.type,".jpg")),")")},defaultItemLayoutAssetBackground:function(){return this.page.sections.length<1?null:"url(".concat(this.assetFilter("".concat("administration/static/img/cms","/preview_").concat(this.page.type,"_").concat(this.page.sections[0].type,".png")),")")},componentClasses:function(){return{"is--active":this.active,"is--disabled":this.disabled}},statusClasses:function(){return{"is--active":this.active||this.isDefault}},assetFilter:function(){return s.getByName("asset")}},methods:{onChangePreviewImage:function(e){this.$emit("preview-image-change",e)},onElementClick:function(){this.disabled||(this.$emit("onItemClick",this.page),this.$emit("on-item-click",this.page))},onItemClick:function(e){this.disabled||this.$emit("item-click",e)},onRemovePreviewImage:function(e){e.previewMediaId=null,e.save(),e.previewMedia=null},onDelete:function(e){this.$emit("cms-page-delete",e)}}}}}]);
//# sourceMappingURL=85d703bb8fac1343c630.js.map