(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[509],{E4yO:function(e,t,n){"use strict";n.r(t);var a=Shopware.State;t.default={template:'\n{% block sw_bulk_edit_order_documents_generate_invoice_datepicker %}\n<template v-if="generateData?.custom">\n    <sw-datepicker\n        {% if VUE3 %}\n        v-model:value="generateData.custom.deliveryDate"\n        {% else %}\n        v-model="generateData.custom.deliveryDate"\n        {% endif %}\n        class="sw-bulk-edit-order-documents-generate-invoice__item"\n        :label="$tc(\'sw-bulk-edit.order.documents.generateInvoice.labelDatePicker\')"\n    />\n    <sw-datepicker\n        {% if VUE3 %}\n        v-model:value="generateData.custom.deliveryNoteDate"\n        {% else %}\n        v-model="generateData.custom.deliveryNoteDate"\n        {% endif %}\n        class="sw-bulk-edit-order-documents-generate-invoice__item"\n        :label="$tc(\'sw-bulk-edit.order.documents.generateDeliveryNote.labelDeliveryDatePicker\')"\n    />\n</template>\n{% endblock %}\n',computed:{generateData:{get:function(){var e,t;return null===(e=a.get("swBulkEdit").orderDocuments)||void 0===e||null===(t=e.delivery_note)||void 0===t?void 0:t.value},set:function(e){a.commit("swBulkEdit/setOrderDocumentsValue",{type:"delivery_note",value:e})}}}}}}]);
//# sourceMappingURL=f29986dbc8c7123d6225.js.map