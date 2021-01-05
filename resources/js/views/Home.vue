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
      <Hosting />
      <OtherProjects />
      <WorkExperience />
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
    Contact
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
          "hosting",
          "projects",
          "work",
          "contact"
        ],
        navigation: true,
        navigationPosition: "left",
        slidesNavigation: true,
        slidesNavPosition: "bottom",

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        scrollOverflow: true,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,

        //Design
        controlArrows: true,
        //verticalCentered: true,
        sectionsColor: [
          "none",
          "#2B438D",
          "#272727",
          "#F2F2F2",
          "#2A438C",
          "#EF9325",
          "#763C54",
          "#7AADCC",
          "none"
        ],
        paddingTop: ".5em",
        paddingBottom: ".5em",
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false
      }
    };
  }
};
</script>
