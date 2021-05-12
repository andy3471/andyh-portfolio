<template>
  <Section
    title-upper="About"
    title-lower="Me"
  >
    <div class="columns section-body">
      <div class="column">
        <figure class="image is-hidden-mobile">
          <img
            class="image is-rounded"
            src="/images/profile.jpg"
            alt="profile-picture"
            width="300px"
          >
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
          I am currently employed as a Laravel Full Stack Developer at Bullet Digital Solutions.
        </p>
        <p>
          Previously, I was employed as an Application Delivery Specialist at
          Advanced, the UK's third largest software company. I worked in the
          Health & Care business unit with Carenotes, an ASP.NET Web
          Application. Carenotes is used
          widely by the NHS for mental health and community Trusts.
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
        <ButtonGroup>
          <Button
            href="https://www.linkedin.com/in/andrew-hargrave-b36128144/"
            title="Linked In"
            icon="fab fa-linkedin"
            class="button is-info is-outlined"
          />
          <Button
            href="https://github.com/andy3471/"
            title="GitHub"
            icon="fab fa-github"
            class="button is-primary is-outlined"
          />
        </ButtonGroup>
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
<style scoped lang="scss">

#section07 a {
  padding-top: 80px;
}
#section07 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb07 2s infinite;
  animation: sdb07 2s infinite;
  opacity: 0;
  box-sizing: border-box;
}
#section07 a span:nth-of-type(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
#section07 a span:nth-of-type(2) {
  top: 16px;
  -webkit-animation-delay: .15s;
  animation-delay: .15s;
}
#section07 a span:nth-of-type(3) {
  top: 32px;
  -webkit-animation-delay: .3s;
  animation-delay: .3s;
}
@-webkit-keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>
