(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[32],{"5S5E":function(e,n,t){},G8vM:function(e,n,t){var i=t("5S5E");i.__esModule&&(i=i.default),"string"==typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);(0,t("P8hj").default)("6f63af18",i,!0,{})},HxJE:function(e,n,t){"use strict";t.r(n);t("G8vM"),n.default={template:'\n{% block sw_media_base_item %}\n<div\n    class="sw-media-base-item"\n    :class="mediaItemClasses"\n    role="button"\n    tabindex="0"\n    @click="handleItemClick"\n    @keydown.enter="handleItemClick"\n>\n\n    \n    {% block sw_media_base_item_selected_indicator %}\n    <div\n        v-if="!isList && allowEdit"\n        class="sw-media-base-item__selected-indicator"\n        :class="selectionIndicatorClasses"\n        role="button"\n        tabindex="0"\n        @click="onClickedItem"\n        @keydown.enter="onClickedItem"\n    >\n\n        \n        {% block sw_media_base_item_selection_indicator_icon %}\n        <sw-icon\n            v-if="listSelected"\n            small\n            size="10px"\n            name="regular-checkmark-xxs"\n        />\n        {% endblock %}\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_preview %}\n    <div class="sw-media-base-item__preview-container">\n        <slot\n            name="preview"\n            v-bind="{ item }"\n        >\n            \n            {% block sw_media_base_item_slot_media_preview %}{% endblock %}\n        </slot>\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_name_container %}\n    <div\n        class="sw-media-base-item__name-container"\n        :class="mediaNameContainerClasses"\n    >\n        <slot\n            name="name"\n            v-bind="{ item, isInlineEdit, startInlineEdit, endInlineEdit }"\n        ></slot>\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_metadata_container %}\n    <div\n        v-if="isList && showContextMenuButton"\n        class="sw-media-base-item__metadata-container"\n    >\n        \n        {% block sw_media_base_item_metadata %}\n        <slot\n            name="metadata"\n            v-bind="{ item }"\n        >\n            \n            {% block sw_media_base_item_slot_media_item_metadata %}{% endblock %}\n        </slot>\n        {% endblock %}\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_context_menu %}\n    <sw-context-button\n        v-if="showContextMenuButton && !isLoading"\n        ref="swContextButton"\n    >\n        \n        {% block sw_media_base_item_context_items %}\n        <slot\n            name="context-menu"\n            v-bind="{ item, startInlineEdit, allowEdit, allowDelete }"\n        >\n            \n            {% block sw_media_base_item_slot_media_item_context_menu %}{% endblock %}\n        </slot>\n    {% endblock %}\n    </sw-context-button>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_list_selected_indicator %}\n    <div\n        v-if="isList && showSelectionIndicator && allowMultiSelect"\n        class="sw-media-base-item__selected-indicator"\n        :class="selectionIndicatorClasses"\n        role="button"\n        tabindex="0"\n        @click="onClickedItem"\n        @keydown.enter="onClickedItem"\n    >\n\n        \n        {% block sw_media_base_item_list_selection_indicator_icon %}\n        <sw-icon\n            v-if="listSelected"\n            small\n            name="regular-checkmark-xxs"\n            size="10px"\n        />\n        {% endblock %}\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_media_base_item_loading_indicator %}\n    <sw-icon\n        v-if="isLoading"\n        class="sw-media-base-item__loader"\n        name="regular-spinner-star"\n        size="16px"\n    />\n    {% endblock %}\n\n    <slot\n        name="modal-windows"\n        v-bind="{ item, allowEdit, allowDelete }"\n    ></slot>\n</div>\n{% endblock %}\n',props:{item:{type:Object,required:!0},isList:{type:Boolean,required:!1,default:!1},showSelectionIndicator:{required:!1,type:Boolean,default:!1},showContextMenuButton:{type:Boolean,required:!1,default:!0},selected:{type:Boolean,required:!1,default:!1},editable:{type:Boolean,required:!1,default:!0},allowMultiSelect:{type:Boolean,required:!1,default:!0},truncateRight:{type:Boolean,required:!1,default:!1},allowEdit:{type:Boolean,required:!1,default:!0},allowDelete:{type:Boolean,required:!1,default:!0}},data:function(){return{isInlineEdit:!1}},computed:{mediaItemClasses:function(){return{"is--list":this.isList,"is--selected":this.selected||this.isInlineEdit}},mediaNameContainerClasses:function(){return{"is--truncate-right":this.truncateRight}},listSelected:function(){return this.selected&&this.showSelectionIndicator},selectionIndicatorClasses:function(){return{"selected-indicator--visible":this.showSelectionIndicator,"selected-indicator--list":this.isList,"selected-indicator--checked":this.listSelected,"selected-indicator--is-allowed":this.allowMultiSelect}},isLoading:function(){return this.item.isLoading}},methods:{handleItemClick:function(e){this.isSelectionIndicatorClicked(e.composedPath())||this.$emit("media-item-click",{originalDomEvent:e,item:this.item})},isSelectionIndicatorClicked:function(e){return e.some((function(e){return e.classList&&(e.classList.contains("sw-media-base-item__selected-indicator")||e.classList.contains("sw-context-button"))}))},onClickedItem:function(e){this.listSelected&&this.allowMultiSelect?this.removeFromSelection(e):this.selectItem(e)},selectItem:function(e){this.$emit("media-item-selection-add",{originalDomEvent:e,item:this.item})},removeFromSelection:function(e){this.$emit("media-item-selection-remove",{originalDomEvent:e,item:this.item})},startInlineEdit:function(){this.editable&&this.allowEdit&&(this.isInlineEdit=!0)},endInlineEdit:function(){this.isInlineEdit=!1}}}}}]);
//# sourceMappingURL=5b369ff31f493c44f9c9.js.map