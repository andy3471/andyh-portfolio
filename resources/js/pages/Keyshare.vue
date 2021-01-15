<template>
  <Section
    title-upper="Key"
    title-lower="Share"
  >
    <ButtonGroup>
      <Button
        href="https://github.com/andy3471/keyshare"
        title="GitHub"
        icon="fab fa-github"
        class="button is-info is-outlined"
      />
      <Button
        href="https://keyshare.andyh.app"
        title="Live Demo"
        icon="fa fa-link"
        class="button is-primary is-outlined"
      />
    </ButtonGroup>
    <div class="level">
      <div class="level-item">
        <div class="tags">
          <span class="tag">Laravel</span>
          <span class="tag">Vue</span>
          <span class="tag">Redis</span>
          <span class="tag">OpenID</span>
          <span class="tag">Bootstrap</span>
          <span class="tag">Docker</span>
        </div>
      </div>
    </div>
    <p>
      KeyShare is a Web Application for sharing excess steam keys for a gaming
      group. The site has paginated autoloading when browsing games, to make
      it easy to scroll through, as well as an autocomplete search component
      for finding games. The site uses a Redis cache for storing a 'karma' for
      users and caching routes for faster loading
    </p>
    <p>
      KeyShare allows for options to enable sign-in through Steam using
      OpenID. The site contains an admin panel for user management, and the
      option to require admin approval to register.
    </p>
    <p>
      The application was originally written in raw PHP and JavaScript,
      however was refactored to use the Laravel framework and VueJS as of
      1.0.5. This has allowed faster development for new features, such as DLC
      that can be added for games. This has been solely written by me, however
      is open for contributions on GitHub.
    </p>
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
<style scoped>
  .section {
    background-image: url('/images/keyshare-bg.png');
    background-color: #272727;
    background-repeat: no-repeat;
    background-size: cover;
  }

  p {
    text-shadow: 0 0 15px black;
  }
</style>
