<template>
  <div id="app">
    <navbar />
    <full-page
      id="fullpage"
      ref="fullpage"
      :options="options"
    >
      <Header />
      <About />
      <Keyshare />
      <Lunchrota />
      <VueComponents />
      <OtherProjects />
      <Hosting :containername="containername" />
      <WorkExperience />
      <!-- <NonDevProjects /> -->
      <Contact />
    </full-page>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Header from "../pages/Header.vue";
import About from "../pages/About.vue";
import Keyshare from "../pages/Keyshare.vue";
import Lunchrota from "../pages/Lunchrota.vue";
import VueComponents from "../pages/VueComponents.vue";
import Hosting from "../pages/Hosting.vue";
import OtherProjects from "../pages/OtherProjects.vue";
import WorkExperience from "../pages/WorkExperience.vue";
import Contact from "../pages/Contact.vue";
// import NonDevProjects from "../pages/NonDevProjects.vue"

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
    // NonDevProjects
  },
  props: {
    containername: String,
  },
  data() {
    return {
      is_ie: false,
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
          // "other",
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
          "#011526",
          "none",
          "none",
          "#010b26",
          "#02738C",
          "#03B1D8",
          "#00333E",
          // "#F27405",
          "#011526"
        ],
        paddingTop: ".5em",
        paddingBottom: ".5em",
      }
    };
  }
};
</script>
