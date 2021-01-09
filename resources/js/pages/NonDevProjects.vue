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
            titleUpper: "Arcade",
            titleLower: "Cabinet",
            img: "/images/wards.jpg",
            alt: "arcade",
            description: "Description"
          },
          {
            titleUpper: "Music",
            titleLower: "Production",
            img: "/images/albumart.jpg",
            alt: "albumart",
            description: "I produce music using Analog Synthesizers, mixed with more modern techniques. I have created and released an album that uses analog synths controlled via midi, along with Ableton Live and a Launchpad",
            tags: ['Ableton'],
            buttons: [
              {
                href: "https://open.spotify.com/artist/3BsM8NcTrGD2bZeh94E3Z4?si=QaYxYG9-QbO7Ohq1EjIZTw",
                title: "Spotify",
                icon: "fab fa-spotify",
                class: "button is-primary is-outlined"
              }
            ]
          },
          {
            titleUpper: "Charity",
            titleLower: "Events",
            img: "/images/justgiving.jpg",
            alt: "justgiving",
            description: "I have hosted multiple charity events for various charities. This includes 4 separate charity gaming Marathons, that have raised a total of over £3600 for various Charities."
          }
        ]
    }
  }
};
</script>
<style scoped>
</style>
