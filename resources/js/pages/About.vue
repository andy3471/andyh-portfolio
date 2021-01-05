<template>
  <Section titleUpper="About" titleLower="Me">
    <div class="columns section-body">
      <div class="column">
        <figure class="image">
          <img
            class="image"
            src="/images/profile.jpg"
            alt="profile-picture"
            width="300px"
          />
        </figure>
      </div>
      <div class="column is-three-quarters">
        <p>
          Hi, I'm Andrew Hargrave. I'm a self taught Web Developer that works
          with PHP, JS, HTML, SQL (MySQL and MS SQL), Redis, CSS and SCSS. I
          have a very good knowledge of the Laravel MVC framework, and have used
          it for multiple personal projects. I use VueJS for as a front-end
          JavaScript framework primarily, and have released multiple components
          that can be used freely in any Vue web app. I also have knowledge of
          Bootstrap and Bulma as UI frameworks.
        </p>
        <p>
          I am currently employed as an Applications Support Anaylst at Neilson
          Finance Services.
        </p>
        <p>
          Previously, I was employed as an Application Delivery Specialist at
          Advanced, the UK's third largest software company. I worked in the
          Health & Care business unit with Carenotes, an ASP.NET Web
          Application, with a large number of SOA services. Carenotes is used
          widely by the NHS for mental health and community Trusts. I provide
          third line support for Carenotes, as well as deploy and upgrade it.
          Carenotes is hosted on Windows Servers with IIS.
        </p>
        <p>
          I also have a strong knowledge of Linux and Apache, and host multiple
          web applications on Linux Servers. I host web applications and video
          game servers privately, which is running on virtualised servers using
          Proxmox hypervisor, as well as in Docker Containers.
        </p>
        <p>
          Outside of web development and deployment, I like to work on music in
          my free time, using Analog Synthesizers. I'm also a huge fan of board
          games and virtual reality.
        </p>
        <p>
          Please check out my live demos on the site, and use the Contact Me
          form if you would like to work together!
        </p>
        <div class="level">
          <div class="level-item">
            <div class="buttons has-addons">
              <a
                href="https://www.linkedin.com/in/andrew-hargrave-b36128144/"
                title="LinkedIn"
                class="button is-info is-outlined"
              >
                <span class="icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span>Linked In</span>
              </a>
              <a
                href="https://github.com/andy3471/"
                title="GitHub"
                class="button is-primary is-outlined"
              >
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Github</span>
              </a>
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
  name: "About",
  components: {
    Section
  }
};
</script>
