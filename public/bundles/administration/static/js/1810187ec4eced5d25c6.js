(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[215],{"0hz5":function(e,n,t){},"4tBT":function(e,n,t){var o=t("0hz5");o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);(0,t("P8hj").default)("46e5258e",o,!0,{})},YcX7:function(e,n,t){"use strict";t.r(n);t("4tBT"),n.default=Shopware.Component.wrapComponentConfig({template:'<div class="sw-extension-app-module-error-page">\n    <img\n        :src="assetFilter(\'administration/static/img/error-pages/app-error.svg\')"\n        alt="Error page background with a cute little space kitty"\n        class="sw-extension-app-module-error-page__illustration"\n    >\n\n    <div class="sw-extension-app-module-error-page__text-content">\n        <h3>{{ $tc(\'sw-extension.sw-extension-app-module-error-page.error.heading\') }}</h3>\n        <p>{{ $tc(\'sw-extension.sw-extension-app-module-error-page.error.phrase\') }}</p>\n        <p>{{ $tc(\'sw-extension.sw-extension-app-module-error-page.error.info\') }}</p>\n\n        <sw-button\n            variant="primary"\n            @click="goBack"\n        >\n            {{ $tc(\'sw-extension.sw-extension-app-module-error-page.error.lblBackButton\') }}\n        </sw-button>\n    </div>\n</div>\n',computed:{assetFilter:function(){return Shopware.Filter.getByName("asset")}},methods:{goBack:function(){this.$router.go(-1)}}})}}]);
//# sourceMappingURL=1810187ec4eced5d25c6.js.map