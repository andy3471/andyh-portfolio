<template>
  <div id="app">
    <navbar></navbar>
    <!-- <browser-check></browser-check> -->
    <full-page ref="fullpage" :options="options" id="fullpage">
      <Header />
      <About />
      <Keyshare />
      <Lunchrota />
      <VueComponents />
      <OtherProjects />
      <Hosting />
      <WorkExperience />
      <NonDevProjects />
      <Contact />
    </full-page>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
// import BrowserCheck from "../components/BrowserCheck";

import Header from "../pages/Header.vue";
import About from "../pages/About.vue";
import Keyshare from "../pages/Keyshare.vue";
import Lunchrota from "../pages/Lunchrota.vue";
import VueComponents from "../pages/VueComponents.vue";
import Hosting from "../pages/Hosting.vue";
import OtherProjects from "../pages/OtherProjects.vue";
import WorkExperience from "../pages/WorkExperience.vue";
import Contact from "../pages/Contact.vue";
import NonDevProjects from "../pages/NonDevProjects.vue"

export default {
  name: "MainPage",
  components: {
    Navbar,
    // BrowserCheck,
    Header,
    About,
    Keyshare,
    Lunchrota,
    VueComponents,
    Hosting,
    OtherProjects,
    WorkExperience,
    Contact,
    NonDevProjects
  },
  data() {
    return {
      options: {
        //Navigation
        anchors: [
          "home",
          "about",
          "keys",
          "rota",
          "components",
          "projects",
          "hosting",
          "work",
          "other",
          "contact"
        ],
        navigation: true,
        navigationPosition: "left",
        slidesNavigation: true,
        autoScrolling: true,
        scrollOverflow: true,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,

        //Design
        controlArrows: true,
        //verticalCentered: true,
        sectionsColor: [
          "none",
          "none",
          "none",
          "none",
          "#049DBF",
          "#D82B2B",
          "#33A65B",
          "#049DBF",
          "#D82B2B",
          "none"
        ],
        paddingTop: ".5em",
        paddingBottom: ".5em",
      }
    };
  }
};
</script>
