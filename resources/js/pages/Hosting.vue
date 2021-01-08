<template>
  <Section titleUpper="Hosting" titleLower="+ Virtualisation">
    <div class="section-body">
      <div class="projects-item">
        <div class="projects-body">
          <div class="columns is-vcentered">
            <div class="column is-hidden-mobile">
              <img src="/images/servers.png" alt="servers" />
            </div>
            <div class="column  is-four-fifths ">
              <div class="project">
                <h3>Hosting Platform</h3>
                <p>
                  I run hosting privately, for both video game servers and web
                  applications. These are mostly running Proxmox hypervisor with
                  Ubuntu Server guests. The majority of the platform is running
                  in docker containers, currently using Docker Swarm, for high
                  availability.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="projects-item">
        <div class="projects-body">
          <div class="columns is-vcentered">
            <div class="column  is-four-fifths ">
              <div class="project">
                <h3>Proxmox</h3>
                <p>
                  I am currently using Proxmox Hypervisor (KVM and LXC based)
                  for VMs and Containers. This has the feature to be able to
                  easily migrate VMs to other hosts, to avoid downtime of vital
                  servers such as the File Server.
                </p>
              </div>
            </div>
            <div class="column is-hidden-mobile">
              <img src="/images/proxmox.png" alt="proxmox" />
            </div>
          </div>
        </div>
      </div>
      <div class="projects-item">
        <div class="projects-body">
          <div class="columns is-vcentered">
            <div class="column is-hidden-mobile">
              <img src="/images/docker.png" alt="docker" />
            </div>
            <div class="column  is-four-fifths ">
              <div class="project">
                <h3>Docker</h3>
                <p>
                  I have containerised most of the applications and game
                  servers, including containers for all the applications I have
                  created. I am currently running them in Docker Swarm mode,
                  accross various hosts (Windows + Linux). This site is hosted
                  on Docker Swarm, refresh (F5) the page, and the container name
                  should change.
                </p>
                <p>
                  Current Docker Container Name: {{ this.containername }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="projects-item">
        <div class="projects-body">
          <div class="columns is-vcentered">
            <div class="column  is-four-fifths ">
              <div class="project">
                <h3>Traefik</h3>
                <p>
                  I am using Traefik as an edge router for directing traffic
                  from the domains to the correct web application. Traefik
                  integrates with docker and docker swarm nicely, and uses
                  LetsEncrypt to automatically generate SSL certificates on the
                  fly.
                </p>
              </div>
            </div>
            <div class="column is-hidden-mobile">
              <img src="/images/traefik.png" alt="traefik" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";

export default {
  name: "Hosting",
  props: {
    containername: String,
  },
  components: {
    Section
  }
};
</script>
<style scoped lang="scss">
.section-header {
    background-image: linear-gradient(red, black);
}
</style>
