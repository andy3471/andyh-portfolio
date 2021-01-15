import AOS from 'aos';
AOS.init()

require("./bootstrap");

window.Vue = require("vue");

Vue.component("Navbar", require("./components/Navbar-v1.vue").default);
Vue.component("BrowserCheck", require("./components/BrowserCheck.vue").default);
Vue.component("VersionNotification", require("./components/VersionNotification.vue").default);

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