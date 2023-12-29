(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[145],{D7M1:function(n,e,t){"use strict";t.r(e);var s=t("CsSd"),o=t.n(s);t("o3QE");function i(n,e){var t=Object.keys(n);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(n);e&&(s=s.filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),t.push.apply(t,s)}return t}var c=Shopware,l=c.Component,a=c.Mixin,r=c.Filter,d=l.getComponentHelper().mapPropertyErrors;e.default={template:'\n{% block sw_cms_section %}\n<div\n    class="sw-cms-section"\n    :class="[sectionClasses, customSectionClass, sectionTypeClass]"\n>\n\n    \n    {% block sw_cms_section_actions %}\n    <sw-cms-section-actions\n        :section="section"\n        :disabled="disabled"\n    />\n    {% endblock %}\n\n    <div\n        class="sw-cms-section__wrapper"\n        :style="sectionStyles"\n    >\n        <sw-cms-visibility-toggle\n            v-if="isVisible"\n            :text="toggleButtonText"\n            :is-collapsed="isCollapsed"\n            :class="expandedClass"\n            @toggle="toggleVisibility"\n        />\n        \n        {% block sw_cms_section_sidebar %}\n        <div\n            v-if="isSideBarType && (!isCollapsed || !isVisible)"\n            class="sw-cms-section__sidebar"\n            :class="sectionSidebarClasses"\n        >\n\n            <template v-if="sideBarEmpty">\n                \n                {% block sw_cms_section_sidebar_block_empty %}\n                <div\n                    v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(blockCount, \'sidebar\') }"\n                    class="sw-cms-section__empty-stage"\n                    role="button"\n                    tabindex="0"\n                    @click="openBlockBar"\n                    @keydown.enter="openBlockBar"\n                >\n\n                    <sw-icon\n                        name="regular-plus-circle"\n                        size="24"\n                    />\n                    <p>{{ $tc(\'sw-cms.detail.label.addBlocks\') }}</p>\n                </div>\n                {% endblock %}\n            </template>\n\n            <template v-else>\n\n                \n                {% block sw_cms_section_sidebar_add_first_block %}\n                <sw-cms-stage-add-block\n                    v-if="isSystemDefaultLanguage && !disabled"\n                    :key="0"\n                    v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(0, \'sidebar\') }"\n                    @stage-block-add="onAddSectionBlock"\n                />\n                {% endblock %}\n\n                <template\n                    v-for="(block, index) in sideBarBlocks"\n                    {% if VUE3 %}\n                    :key="block.id"\n                    {% endif %}\n                >\n                    \n                    {% block sw_cms_section_sidebar_block %}\n                    <sw-cms-block\n                        {% if VUE2 %}\n                        :key="block.id"\n                        {% endif %}\n                        class="sw-cms-stage-block"\n                        :block="block"\n                        :disabled="disabled"\n                        :active="selectedBlock !== null && selectedBlock.id === block.id"\n                        :has-errors="hasBlockErrors(block)"\n                        @block-overlay-click="onBlockSelection(block)"\n                    >\n\n                        \n                        {% block sw_cms_section_sidebar_block_component %}\n                        <component :is="`sw-cms-block-${block.type}`">\n                            \n                            {% block sw_cms_section_content_block_slot %}\n                            <template\n                                v-for="el in block.slots"\n                                {% if VUE3 %}\n                                :key="el.id"\n                                {% endif %}\n                                #[el.slot]\n                            >\n                                <sw-cms-slot\n                                    {% if VUE2 %}\n                                    :key="el.id"\n                                    {% endif %}\n                                    :element="el"\n                                    :disabled="disabled"\n                                    :active="selectedBlock !== null && selectedBlock.id === block.id"\n                                />\n                            </template>\n                            {% endblock %}\n                        </component>\n                        {% endblock %}\n                    </sw-cms-block>\n                    {% endblock %}\n\n                    \n                    {% block sw_cms_section_add_sidebar_block %}\n                    <sw-cms-stage-add-block\n                        v-if="isSystemDefaultLanguage && !disabled"\n                        :key="index + 1"\n                        v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(block.position + 1, \'sidebar\') }"\n                        @stage-block-add="onAddSectionBlock"\n                    />\n                    {% endblock %}\n                </template>\n            </template>\n        </div>\n        {% endblock %}\n\n        \n        {% block sw_cms_section_content %}\n        <div\n            v-if="!isCollapsed || !isVisible"\n            class="sw-cms-section__content"\n            :class="sectionContentClasses"\n        >\n            <template v-if="mainContentEmpty">\n                \n                {% block sw_cms_section_content_block_empty %}\n                <div\n                    v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(blockCount, \'main\') }"\n                    class="sw-cms-section__empty-stage"\n                    role="button"\n                    tabindex="0"\n                    @click="openBlockBar"\n                    @keydown.enter="openBlockBar"\n                >\n\n                    <sw-icon\n                        name="regular-plus-circle"\n                        size="24"\n                    />\n                    <p>{{ $tc(\'sw-cms.detail.label.addBlocks\') }}</p>\n                </div>\n                {% endblock %}\n            </template>\n\n            <template v-else>\n\n                \n                {% block sw_cms_section_content_add_first_block %}\n                <sw-cms-stage-add-block\n                    v-if="isSystemDefaultLanguage && !disabled"\n                    :key="0"\n                    v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(0) }"\n                    @stage-block-add="onAddSectionBlock"\n                />\n                {% endblock %}\n\n                <template\n                    v-for="(block, index) in mainContentBlocks"\n                    {% if VUE3 %}\n                    :key="block.id"\n                    {% endif %}\n                >\n                    \n                    {% block sw_cms_section_content_block %}\n                    <sw-cms-block\n                        {% if VUE2 %}\n                        :key="block.id"\n                        {% endif %}\n                        class="sw-cms-stage-block"\n                        :block="block"\n                        :disabled="disabled"\n                        :active="selectedBlock !== null && selectedBlock.id === block.id"\n                        :has-errors="hasBlockErrors(block)"\n                        @block-overlay-click="onBlockSelection(block)"\n                    >\n\n                        \n                        {% block sw_cms_section_content_block_component %}\n                        <component :is="`sw-cms-block-${block.type}`">\n                            \n                            {% block sw_cms_section_content_block_component_slot %}\n                            <template\n                                v-for="el in block.slots"\n                                {% if VUE3 %}\n                                :key="el.id"\n                                {% endif %}\n                                #[el.slot]\n                            >\n                                <sw-cms-slot\n                                    {% if VUE2 %}\n                                    :key="el.id"\n                                    {% endif %}\n                                    :element="el"\n                                    :disabled="disabled"\n                                    :active="selectedBlock !== null && selectedBlock.id === block.id"\n                                />\n                            </template>\n                            {% endblock %}\n                        </component>\n                        {% endblock %}\n                    </sw-cms-block>\n                    {% endblock %}\n\n                    \n                    {% block sw_cms_section_add_content_block %}\n                    <sw-cms-stage-add-block\n                        v-if="isSystemDefaultLanguage && !disabled"\n                        :key="index + 1"\n                        v-droppable="{ dragGroup: \'cms-stage\', data: getDropData(block.position + 1) }"\n                        @stage-block-add="onAddSectionBlock"\n                    />\n                    {% endblock %}\n                </template>\n            </template>\n        </div>\n        {% endblock %}\n    </div>\n</div>\n{% endblock %}\n',inject:["cmsService","repositoryFactory"],mixins:[a.getByName("cms-state")],props:{page:{type:Object,required:!0},section:{type:Object,required:!0},active:{type:Boolean,required:!1,default:!1},disabled:{type:Boolean,required:!1,default:!1}},data:function(){return{isCollapsed:!0}},computed:function(n){for(var e=1;e<arguments.length;e++){var t=null!=arguments[e]?arguments[e]:{};e%2?i(Object(t),!0).forEach((function(e){o()(n,e,t[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(n,Object.getOwnPropertyDescriptors(t)):i(Object(t)).forEach((function(e){Object.defineProperty(n,e,Object.getOwnPropertyDescriptor(t,e))}))}return n}({blockRepository:function(){return this.repositoryFactory.create("cms_block")},slotRepository:function(){return this.repositoryFactory.create("cms_slot")},sectionClasses:function(){return{"is--active":this.active,"is--boxed":"boxed"===this.section.sizingMode}},sectionTypeClass:function(){return"is--".concat(this.section.type)},customSectionClass:function(){return this.section.cssClass},sectionStyles:function(){var n=null;return this.section.backgroundMedia&&(n=this.section.backgroundMedia.id?'url("'.concat(this.section.backgroundMedia.url,'")'):"url('".concat(this.assetFilter(this.section.backgroundMedia.url),"')")),{"background-color":this.section.backgroundColor||"transparent","background-image":n,"background-size":this.section.backgroundMediaMode}},sectionSidebarClasses:function(){return{"is--empty":this.sideBarEmpty,"is--hidden":this.sectionMobileAndHidden,"is--expanded":this.expandedClass}},sectionMobileAndHidden:function(){return"mobile"===Shopware.State.get("cmsPageState").currentCmsDeviceView&&"hidden"===this.section.mobileBehavior},isSideBarType:function(){return"sidebar"===this.section.type},sideBarEmpty:function(){return 0===this.sideBarBlocks.length},blockCount:function(){return this.section.blocks.length},mainContentEmpty:function(){return 0===this.mainContentBlocks.length},sideBarBlocks:function(){var n=this,e=this.section.blocks.filter((function(e){return n.blockTypeExists(e.type)&&"sidebar"===e.sectionPosition}));return e.sort((function(n,e){return n.position-e.position}))},mainContentBlocks:function(){var n=this,e=this.section.blocks.filter((function(e){return n.blockTypeExists(e.type)&&"sidebar"!==e.sectionPosition}));return e.sort((function(n,e){return n.position-e.position}))},assetFilter:function(){return r.getByName("asset")},blockTypes:function(){return Object.keys(this.cmsService.getCmsBlockRegistry())},isVisible:function(){var n=Shopware.State.get("cmsPageState").currentCmsDeviceView;return"desktop"===n&&!this.section.visibility.desktop||"tablet-landscape"===n&&!this.section.visibility.tablet||"mobile"===n&&!this.section.visibility.mobile},toggleButtonText:function(){return this.$tc("sw-cms.sidebar.contentMenu.visibilitySectionTextButton",!this.isCollapsed)},expandedClass:function(){return{"is--expanded":this.isVisible&&!this.isCollapsed}},sectionContentClasses:function(){return{"is--empty":this.mainContentEmpty,"is--expanded":this.isVisible&&!this.isCollapsed}}},d("page",["slots","slotConfig"])),created:function(){this.createdComponent()},methods:{createdComponent:function(){this.section.backgroundMediaMode||(this.section.backgroundMediaMode="cover")},openBlockBar:function(){this.disabled||this.$emit("page-config-open","blocks")},onAddSectionBlock:function(){this.openBlockBar()},onBlockSelection:function(n){Shopware.State.dispatch("cmsPageState/setBlock",n),this.$emit("page-config-open","itemConfig")},onBlockDuplicate:function(n,e){this.$emit("block-duplicate",n,e)},onBlockDelete:function(n){this.section.blocks.remove(n),this.selectedBlock&&this.selectedBlock.id===n&&Shopware.State.commit("cmsPageState/removeSelectedBlock"),this.updateBlockPositions()},updateBlockPositions:function(){this.section.blocks.forEach((function(n,e){n.position=e}))},getDropData:function(n){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"main";return{dropIndex:n,section:this.section,sectionPosition:e}},blockTypeExists:function(n){return this.blockTypes.includes(n)},hasBlockErrors:function(n){return[this.hasUniqueBlockErrors(n),this.hasSlotConfigErrors(n)].some((function(n){return!!n}))},hasUniqueBlockErrors:function(n){var e,t,s=null===(e=this.pageSlotsError)||void 0===e||null===(t=e.parameters)||void 0===t?void 0:t.elements;return!!s&&s.some((function(e){return e.blockIds.includes(n.id)}))},hasSlotConfigErrors:function(n){var e,t,s=null===(e=this.pageSlotConfigError)||void 0===e||null===(t=e.parameters)||void 0===t?void 0:t.elements;return!!s&&s.some((function(e){return e.blockId===n.id}))},toggleVisibility:function(){this.isCollapsed=!this.isCollapsed}}}},Zjbs:function(n,e,t){},o3QE:function(n,e,t){var s=t("Zjbs");s.__esModule&&(s=s.default),"string"==typeof s&&(s=[[n.i,s,""]]),s.locals&&(n.exports=s.locals);(0,t("P8hj").default)("60c9a3aa",s,!0,{})}}]);
//# sourceMappingURL=4830df66d9cd016e7bb0.js.map