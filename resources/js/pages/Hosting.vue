<template>
  <Section
    title-upper="Hosting"
    title-lower="+ Virtualisation"
  >
    <div class="columns">
      <technology-card
        v-for="(technology, idx) in technologies"
        :key="idx"
        :technology="technology"
      />
    </div>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";
import TechnologyCard from "../components/TechnologyCard.vue"

export default {
  name: "Hosting",
  components: {
    Section,
    TechnologyCard
  },
  props: {
    containername: String,
  },
  data() {
    return {
      technologies: [
        {
          name: "proxmox",
          img: "images/proxmox.png",
          description: "I am currently using Proxmox Hypervisor (KVM and LXC based) to host VMs and Containers. I run both linux and windows VM, across multiple hosts."
        },
        {
          name: "docker",
          img: "images/docker.png",
          description: "I have containerised most of my hosted applications, including containers for all the applications I have created. I am currently running them in Docker Swarm, accross various hosts. This site is hosted on Docker Swarm. If you refresh (F5) the page, the below container name should change to demonstrate this. <br>Container Name:<br>" + this.containername
        },
        {
          name: "treafik",
          img: "images/traefik.png",
          description: "I am using Traefik as an edge router for directing traffic from the domains to the correct containers. Traefik integrates with docker and docker swarm, and uses LetsEncrypt to automatically generate SSL certificates on the fly."
        }
      ]
    }
  }
}
</script>
<style scoped lang="scss">
</style>
