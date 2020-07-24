import AOS from 'aos';
AOS.init()

require("./bootstrap");

window.Vue = require("vue");

Vue.component("navbar", require("./components/Navbar.vue").default);
Vue.component("browser-check", require("./components/BrowserCheck.vue").default);

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