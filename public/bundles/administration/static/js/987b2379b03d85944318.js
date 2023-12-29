(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[277],{"/m6y":function(e,t,i){"use strict";i.r(t);i("UPDw"),t.default={template:'\n{% block sw_import_export_edit_profile_import_settings %}\n<div class="sw-import-export-edit-profile-import-settings">\n    \n    {% block sw_import_export_edit_profile_import_settings_headline %}\n    <h3 class="sw-import-export-edit-profile-import-settings__headline">\n        {{ $tc(\'sw-import-export.profile.importSettingsHeadline\') }}\n    </h3>\n    {% endblock %}\n\n    \n    {% block sw_import_export_edit_profile_import_settings_create_switch %}\n    <sw-switch-field\n        {% if VUE3 %}\n        v-model:value="profile.config.createEntities"\n        {% else %}\n        v-model="profile.config.createEntities"\n        {% endif %}\n        class="sw-import-export-edit-profile-import-settings__create-switch"\n        :label="$tc(\'sw-import-export.profile.createEntitiesLabel\')"\n        :disabled="profile.systemDefault"\n        {% if VUE3 %}\n        @update:value="onChange($event, \'updateEntities\')"\n        {% else %}\n        @change="onChange($event, \'updateEntities\')"\n        {% endif %}\n    />\n    {% endblock %}\n\n    \n    {% block sw_import_export_edit_profile_import_settings_update_switch %}\n    <sw-switch-field\n        {% if VUE3 %}\n        v-model:value="profile.config.updateEntities"\n        {% else %}\n        v-model="profile.config.updateEntities"\n        {% endif %}\n        class="sw-import-export-edit-profile-import-settings__update-switch"\n        :label="$tc(\'sw-import-export.profile.updateEntitiesLabel\')"\n        :disabled="profile.systemDefault"\n        {% if VUE3 %}\n        @update:value="onChange($event, \'createEntities\')"\n        {% else %}\n        @change="onChange($event, \'createEntities\')"\n        {% endif %}\n    />\n    {% endblock %}\n</div>\n{% endblock %}\n',props:{profile:{type:Object,required:!0}},methods:{onChange:function(e,t){!1===e&&(this.profile.config[t]=!0)}}}},UPDw:function(e,t,i){var n=i("qg7K");n.__esModule&&(n=n.default),"string"==typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);(0,i("P8hj").default)("0e8db053",n,!0,{})},qg7K:function(e,t,i){}}]);
//# sourceMappingURL=987b2379b03d85944318.js.map