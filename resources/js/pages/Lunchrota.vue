<template>
  <Section titleUpper="Lunch" titleLower="Rota">
    <ButtonGroup>
      <Button href="https://github.com/andy3471/lunchrota" title="GitHub" icon="fab fa-github" class="button is-info is-outlined" />
      <Button href="https://lunchrota.andyh.app" title="Live Demo" icon="fa fa-link" class="button is-primary is-outlined" />
    </ButtonGroup>
    <div class="level">
      <div class="level-item">
        <div class="tags">
          <span class="tag">Laravel</span>
          <span class="tag">Vue</span>
          <span class="tag">Docker</span>
          <span class="tag">Bootstrap</span>
        </div>
      </div>
    </div>
    <p>
      LunchRota is a ground up rewrite of an application that was created
      for our service desk by
      <a href="https://curtisreet.co.uk" title="CurtPortfolio"
        >Curtis Reet</a
      >. The application is to be used by teams, in order to keep track of
      daily work roles, as well as claim available lunch slots. The original
      application was built on PHP5, and required further development, so I
      decided to rewrite this in Laravel to allow me to continue working on
      the application
    </p>
    <p>
      The roles can be assigned to users either via a UI built with VueJS,
      or uploaded via CSV.
    </p>
    <p>
      The site can be configured to either use a set number of available
      lunch slots, or be calculated using the number of user roles that are
      marked as 'available'. This is used, for example, if certain roles
      need to be on the phones, and you require a certain number of people
      who are on phones to be available at any time.
    </p>
    <p>
      LunchRota contains a full admin panel for editing users, lunch slots,
      roles and user roles. These use a Vue JS interface, to allow you to
      bulk edit.
    </p>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";

export default {
  name: "Lunchrota",
  components: {
    Section
  }
};
</script>
<style scoped>
p {
  color:#212529;
}

.section {
  background-image: url('/images/lunchrota-bg.png');
  background-color: #F2F2F2;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

</style>
