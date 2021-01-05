<template>
  <Section titleUpper="Key" titleLower="Share">
    <div class="level">
      <div class="level-item">
        <div class="buttons has-addons">
          <a
            href="https://github.com/andy3471/keyshare"
            title="KeyshareCode"
            class="button is-info is-outlined"
          >
            <span class="icon">
              <i class="fab fa-github"></i>
            </span>
            <span>Github</span>
          </a>
          <a
            href="https://keyshare.andyh.app"
            title="KeyshareDemo"
            class="button is-primary is-outlined"
          >
            <span class="icon">
              <i class="fa fa-link"></i>
            </span>
            <span>Live Demo</span>
          </a>
        </div>
      </div>
    </div>
    <img
      class="image"
      src="/images/keyshare.jpg"
      alt="keyshare"
      width="1000px"
    />
    <div>
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
