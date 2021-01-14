<template>
  <Section
    title-upper="Hosting"
    title-lower="+ Virtualisation"
  >
    <div class="columns">
      <technology-card v-for="(technology, idx) in technologies" :key="idx" :technology="technology"/>
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
          description: "I am currently using Proxmox Hypervisor (KVM and LXC based) for VMs and Containers. This has the feature to be able to easily migrate VMs to other hosts, to avoid downtime of vital servers such as the File Server."
        },
        {
          name: "docker",
          img: "images/docker.png",
          description: "I have containerised most of my hosted applications, including containers for all the applications I have created. I am currently running them in Docker Swarm mode, accross various hosts. This site is hosted on Docker Swarm, refresh (F5) the page, and the container name should change. <br>Container Name:<br>" + this.containername
        },
        {
          name: "treafik",
          img: "images/traefik.png",
          description: "I am using Traefik as an edge router for directing traffic from the domains to the correct web application. Traefik integrates with docker and docker swarm nicely, and uses LetsEncrypt to automatically generate SSL certificates on the fly."
        }
      ]
    }
  }
}
</script>
<style scoped lang="scss">
</style>
