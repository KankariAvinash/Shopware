(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[615],{z9ck:function(t,e,s){"use strict";s.r(e);var i=s("7yzw"),a=s.n(i),n=s("92Mt"),o=s.n(n),c=Shopware.Data.Criteria,r=Shopware.Utils;e.default={template:'\n{% block sw_settings_custom_field_set_detail_content_detail_custom_field_list %}\n<sw-card\n    class="sw-settings-set-create__option-list-empty-state__wrapper"\n    position-identifier="sw-settings-custom-field-set-create"\n>\n\n    \n    {% block sw_settings_custom_field_set_detail_content_detail_custom_field_list_empty_state %}\n    <sw-empty-state\n        :absolute="false"\n        class="sw-settings-set-create__option-list-empty-state__empty-state"\n        :title="$tc(\'sw-settings-custom-field.set.detail.messageCustomFieldsEmpty\')"\n    >\n\n        <p>{{ $tc(\'sw-settings-custom-field.set.detail.emptyStateDescription\') }}</p>\n    </sw-empty-state>\n    {% endblock %}\n</sw-card>\n{% endblock %}\n',beforeRouteEnter:function(t,e,s){t.name.includes("sw.settings.custom.field.create")&&!t.params.id&&(t.params.id=r.createId()),s()},methods:{createdComponent:function(){var t=this;return a()(o.a.mark((function e(){return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.isLoading=!0,e.next=3,t.customFieldSetRepository.create(Shopware.Context.api,t.$route.params.id);case 3:t.set=e.sent,t.set.name="custom_",t.$set(t.set,"config",{}),t.setId=t.set.id,t.isLoading=!1;case 8:case"end":return e.stop()}}),e)})))()},saveFinish:function(){this.isSaveSuccessful=!1,this.$router.push({name:"sw.settings.custom.field.detail",params:{id:this.setId}})},onSave:function(){var t=this;if(this.isLoading=!0,!this.set||!this.set.name)return this.createNotificationError({title:this.$tc("global.default.error"),message:this.$tc("global.error-codes.c1051bb4-d103-4f74-8988-acbcafc7fdc3")}),this.technicalNameError={detail:this.$tc("global.error-codes.c1051bb4-d103-4f74-8988-acbcafc7fdc3")},void(this.isLoading=!1);var e=new c(1,25);e.addFilter(c.equals("name",this.set.name)),this.customFieldSetRepository.search(e).then((function(e){0!==e.length?(t.createNameNotUniqueNotification(),t.isLoading=!1):t.$super("onSave")}))},createNameNotUniqueNotification:function(){this.createNotificationError({title:this.$tc("global.default.error"),message:this.$tc("sw-settings-custom-field.set.detail.messageNameNotUnique")}),this.technicalNameError={detail:this.$tc("sw-settings-custom-field.set.detail.messageNameNotUnique")}}}}}}]);
//# sourceMappingURL=96275c9cc29394a67833.js.map