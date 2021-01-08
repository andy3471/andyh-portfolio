require("./bootstrap");

import "fullpage.js/vendors/scrolloverflow";
import VueFullPage from "vue-fullpage.js";


window.Vue = require("vue");
Vue.use(VueFullPage);

Vue.component("home", require("./views/Home.vue").default);
Vue.component("Button", require("./components/Button.vue").default);
Vue.component("ButtonGroup", require("./components/ButtonGroup.vue").default);

const app = new Vue({
    el: "#app"
});