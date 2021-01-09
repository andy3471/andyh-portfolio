<template>
  <div class="section">
    <ProjectSlide
      v-for="(project, idx) in projects"
      :key="idx"
      :project="project"
    />
  </div>
</template>
<script>
import SectionHeader from "../components/SectionHeader.vue";
import ProjectSlide from "../components/ProjectSlide.vue"

export default {
  name: "OtherProjects",
  components: {
    SectionHeader,
    ProjectSlide
  },
  data () {
  return {
      projects: [
        {
          titleUpper: "Advanced",
          titleLower: "Hackaton",
          img: "/images/wards.jpg",
          alt: "wards",
          description: "I took part in the 2020 Advanced Hackathon, in which the task was to create an external applet which integrates with an existing healthcare application. I worked as developer on our team, alongside some of the developers for CareNotes. We created an applet that integrates with CareNotes, a patient management system, to show patients on a ward, and record incidents, clinical notes, BMI and Bodymap forms against the patient. This would then use the existing CareNotes API to send this to CareNotes. The project was designed and built in 24 hours, in Advanced's MosaicJS framework. I created the modals, forms and bodymapping functionality. The project is being looked into further as something, that can be developed into a full product.",
          tags: ['SQL','NodeJS','MosaicJS (Bespoke Framework)']
        },
        {
          titleUpper: "Portfolio",
          titleLower: "Website",
          img: "/images/portfolio.jpg",
          alt: "portfolio",
          description: "My portfolio is build on Laravel, VueJS, Bulma and Fullpage.js. I am currently running V2 of my portfolio, I have decided to make the website more readable, and remove some of the animations from <a href='./v1'>V1</a>, to make it far more readable, and easy to follow. I have used Fullpage.JS to draw attention to each of my individual projects and remove clutter from the page.",
          tags: ['VueJS','Bulma','Laravel','Fullpage.js'],
          buttons: [
            {
              href: "https://github.com/andy3471/andyh-portfolio",
              title: "GitHub",
              icon: "fab fa-github",
              class: "button is-info is-outlined"
            },
            {
              href: "./v1",
              title: "Version 1",
              icon: "fa fa-link",
              class: "button is-primary is-outlined"
            }
          ]
        },
        {
          titleUpper: "VC",
          titleLower: "Tees",
          img: "/images/vctees.jpg",
          alt: "vctees",
          description: "I run a website where I design and sell clothing based on retro music Synthesizers. The site is built using WooCommerce on Wordpress.",
          tags: ['Wordpress','WooCommerce','Photoshop','Illustrator'],
          buttons: [
            {
              href: "https://vctees.co.uk",
              title: "VCTees",
              icon: "fa fa-link",
              class: "button is-primary is-outlined"
            }
          ]
        },
        {
          titleUpper: "Tabletop Sim",
          titleLower: "Gloomhaven",
          img: "/images/gloomhaven.jpg",
          alt: "gloomhaven",
          description: "I have been working to make board games playable in Tabletop Simulator, so that people can continue playing during the Covid-19 outbreak. I created a fork of the Gloomhaven Fantasy set-up mod, and scripted all of the Forgotten Circles expansion and solo scenarios in lua with <a href='https://curtisreet.co.uk'>Curtis Reet</a>. My mod has now been merged into the original mod, where I have been credited, which is the most popular tabletop simulator mod with over 100,000 active users",
          tags: ['Lua'],
          buttons: [
            {
              href: "https://github.com/andy3471/Gloomhaven-ForgottenCricles-TTS",
              title: "Github",
              icon: "fab fa-github",
              class: "button is-info is-outlined"
            },
            {
              href: "https://steamcommunity.com/sharedfiles/filedetails/?id=1301493206&searchtext=gloomhaven",
              title: "Steam",
              icon: "fab fa-steam",
              class: "button is-primary is-outlined"
            },
          ]
        },
        {
          titleUpper: "Portal Stories",
          titleLower: "Mel",
          img: "/images/portalstories.jpg",
          alt: "portal",
          description: "I was the original leader on the Portal 2 mod Portal Stores: Mel. The mod went on to win a Video Game Award for 'Best Fan Creation' in 2015, and has been given a full steam release, with overwhelmingly positive reviews. I am in the credits of the mod for my past contributions. The mod featured in news articles on various news websites, such as the washington post.",
          tags: ['Source Engine'],
          buttons: [
            {
              href: "https://store.steampowered.com/app/317400/Portal_Stories_Mel",
              title: "Steam",
              icon: "fab fa-steam",
              class: "button is-info is-outlined"
            }
          ]
        },
        {
          titleUpper: "Minecraft",
          titleLower: "Beat Detection",
          img: "/images/club.jpg",
          alt: "club",
          description: "I host a Minecraft server for VR users. The server is a nightclub for VR users, and features a custom scripted beat detection system. The beat detection uses a C application, which acts as the API, using the GBD Framework. In the game, I have used the Computercraft Mod, to make a lua application which gets the beat information from the API, which keeps the lights in sync with the music. The club was created as a meeting place for people during Covid-19.",
          tags: ['C','Lua','Linux'],
          buttons: [
            {
              href: "https://youtu.be/hUbeUy6U4nY",
              title: "YouTube",
              icon: "fab fa-youtube",
              class: "button is-primary is-outlined"
            }
          ]
        }
      ]
    }
  }
};
</script>
<style scoped>
</style>
