(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[196],{E6m7:function(e,n,i){},"M+tE":function(e,n,i){"use strict";i.r(n);var o=i("7yzw"),l=i.n(o),t=i("92Mt"),a=i.n(t),m=(i("ptfH"),Shopware.Mixin);n.default={template:'\n{% block sw_cms_element_vimeo_video_config %}\n<div class="sw-cms-el-config-vimeo-video">\n\n    \n    {% block sw_cms_element_vimeo_video_config_video_id %}\n    <sw-text-field\n        {% if VUE3 %}\n        v-model:value="videoID"\n        {% else %}\n        v-model="videoID"\n        {% endif %}\n        class="sw-cms-el-config-vimeo-video__video-id"\n        :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.videoId\')"\n        :placeholder="$tc(\'sw-cms.elements.vimeoVideo.config.placeholder.videoId\')"\n    />\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_player_controls %}\n    <div class="sw-cms-el-config-vimeo-video__player-controls">\n\n        \n        {% block sw_cms_element_vimeo_video_config_autoplay %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.autoplay.value"\n            {% else %}\n            v-model="element.config.autoplay.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.autoPlay\')"\n            :help-text="$tc(\'sw-cms.elements.vimeoVideo.config.helpText.autoPlay\')"\n        />\n        {% endblock %}\n\n        \n        {% block sw_cms_element_vimeo_video_config_do_not_track %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.doNotTrack.value"\n            {% else %}\n            v-model="element.config.doNotTrack.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.advancedPrivacy\')"\n            :help-text="$tc(\'sw-cms.elements.vimeoVideo.config.helpText.advancedPrivacy\')"\n        />\n        {% endblock %}\n\n        \n        {% block sw_cms_element_vimeo_video_config_loop %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.loop.value"\n            {% else %}\n            v-model="element.config.loop.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.loop\')"\n        />\n        {% endblock %}\n\n        \n        {% block sw_cms_element_vimeo_video_config_controls %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.controls.value"\n            {% else %}\n            v-model="element.config.controls.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.showControls\')"\n        />\n        {% endblock %}\n\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_color %}\n    <sw-colorpicker\n        {% if VUE3 %}\n        v-model:value="element.config.color.value"\n        {% else %}\n        v-model="element.config.color.value"\n        {% endif %}\n        class="sw-cms-el-config-vimeo-video__color"\n        :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.controlsColor\')"\n        color-output="hex"\n        :z-index="1001"\n        :alpha="false"\n    />\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_artist_information %}\n    <div class="sw-cms-el-config-vimeo-video__artist-information">\n\n        \n        {% block sw_cms_element_vimeo_video_config_byline %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.byLine.value"\n            {% else %}\n            v-model="element.config.byLine.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.byLine\')"\n        />\n        {% endblock %}\n\n        \n        {% block sw_cms_element_vimeo_video_config_portrait %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.portrait.value"\n            {% else %}\n            v-model="element.config.portrait.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.showPortrait\')"\n        />\n        {% endblock %}\n\n        \n        {% block sw_cms_element_vimeo_video_config_title %}\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.title.value"\n            {% else %}\n            v-model="element.config.title.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.showTitle\')"\n        />\n        {% endblock %}\n\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_needs_confirmation %}\n    <div class="sw-cms-el-config-vimeo-video__confirmation">\n        <sw-switch-field\n            {% if VUE3 %}\n            v-model:value="element.config.needsConfirmation.value"\n            {% else %}\n            v-model="element.config.needsConfirmation.value"\n            {% endif %}\n            :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.needsConfirmation\')"\n        />\n    </div>\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_preview_media %}\n    <sw-cms-mapping-field\n        v-if="element.config.needsConfirmation.value"\n        {% if VUE3 %}\n        v-model:config="element.config.previewMedia"\n        {% else %}\n        v-model="element.config.previewMedia"\n        {% endif %}\n        :label="$tc(\'sw-cms.elements.vimeoVideo.config.label.previewImage\')"\n        value-types="entity"\n        entity="media"\n    >\n        <sw-media-upload-v2\n            variant="regular"\n            :upload-tag="uploadTag"\n            :source="previewSource"\n            :allow-multi-select="false"\n            :default-folder="cmsPageState.pageEntityName"\n            :caption="$tc(\'sw-cms.elements.general.config.caption.mediaUpload\')"\n            @media-upload-sidebar-open="onOpenMediaModal"\n            @media-upload-remove-image="onImageRemove"\n        />\n\n        \n        {% block sw_cms_element_vimeo_video_config_preview_media_display %}\n        <template #preview="{ demoValue }">\n            <div class="sw-cms-el-config-image__mapping-preview">\n                <img\n                    v-if="demoValue.url"\n                    :src="demoValue.url"\n                    alt=""\n                >\n                <sw-alert\n                    v-else\n                    class="sw-cms-el-config-image__preview-info"\n                    variant="info"\n                >\n                    {{ $tc(\'sw-cms.detail.label.mappingEmptyPreview\') }}\n                </sw-alert>\n            </div>\n        </template>\n        {% endblock %}\n    </sw-cms-mapping-field>\n\n    \n    {% block sw_cms_element_vimeo_video_config_preview_media_upload_listener %}\n    <sw-upload-listener\n        :upload-tag="uploadTag"\n        auto-upload\n        @media-upload-finish="onImageUpload"\n    />\n    {% endblock %}\n\n    \n    {% block sw_cms_element_vimeo_video_config_preview_media_modal %}\n    <sw-media-modal-v2\n        v-if="mediaModalIsOpen"\n        variant="regular"\n        :caption="$tc(\'sw-cms.elements.general.config.caption.mediaUpload\')"\n        :entity-context="cmsPageState.entityName"\n        :allow-multi-select="false"\n        :initial-folder-id="cmsPageState.defaultMediaFolderId"\n        @media-upload-remove-image="onImageRemove"\n        @media-modal-selection-change="onSelectionChanges"\n        @modal-close="onCloseModal"\n    />\n    {% endblock %}\n    {% endblock %}\n</div>\n{% endblock %}\n',mixins:[m.getByName("cms-element")],data:function(){return{mediaModalIsOpen:!1,initialFolderId:null}},computed:{videoID:{get:function(){return this.element.config.videoID.value},set:function(e){this.element.config.videoID.value=this.shortenLink(e)}},mediaRepository:function(){return this.repositoryFactory.create("media")},uploadTag:function(){return"cms-element-vimeo-video-config-".concat(this.element.id)},previewSource:function(){return this.element.data&&this.element.data.previewMedia&&this.element.data.previewMedia.id?this.element.data.previewMedia:this.element.config.previewMedia.value}},created:function(){this.createdComponent()},methods:{createdComponent:function(){this.initElementConfig("vimeo-video")},shortenLink:function(e){var n=/#/,i=e.replace(/https:\/\/vimeo\.com\//,"");if(n.test(i)){var o=n.exec(i).index;i=i.substring(0,o)}return i},onImageUpload:function(e){var n=this;return l()(a.a.mark((function i(){var o,l;return a.a.wrap((function(i){for(;;)switch(i.prev=i.next){case 0:return o=e.targetId,i.next=3,n.mediaRepository.get(o);case 3:l=i.sent,n.element.config.previewMedia.value=l.id,n.updateElementData(l),n.$emit("element-update",n.element);case 7:case"end":return i.stop()}}),i)})))()},onImageRemove:function(){this.element.config.previewMedia.value=null,this.updateElementData(),this.$emit("element-update",this.element)},onCloseModal:function(){this.mediaModalIsOpen=!1},onSelectionChanges:function(e){var n=e[0];this.element.config.previewMedia.value=n.id,this.updateElementData(n),this.$emit("element-update",this.element)},updateElementData:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;this.$set(this.element.data,"previewMediaId",null===e?null:e.id),this.$set(this.element.data,"previewMedia",e)},onOpenMediaModal:function(){this.mediaModalIsOpen=!0}}}},ptfH:function(e,n,i){var o=i("E6m7");o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);(0,i("P8hj").default)("5388f592",o,!0,{})}}]);
//# sourceMappingURL=8613f9550464ff94e387.js.map