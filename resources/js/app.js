require("./bootstrap");

window.Vue = require("vue");

Vue.component("example", require("./components/Example.vue").default);

import AndyHTimePicker from "andyh-timepicker";
import AndyHDatePicker from "andyh-datepicker";
import AndyHAutocomplete from "andyh-autocomplete";

const app = new Vue({
    el: "#app",
    components: {
        "time-picker": AndyHTimePicker,
        "date-picker": AndyHDatePicker,
        "auto-complete": AndyHAutocomplete
    }
});