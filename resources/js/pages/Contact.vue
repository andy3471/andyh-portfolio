<template>
  <Section titleUpper="Contact" titleLower="Me">
    <div class="section-content">
      <p>
        If you would like to work with me, then be sure to contact me on
        <a href="mailto:me@andyh.app">me@andyh.app</a>,
        <a
          href="https://www.linkedin.com/in/andrew-hargrave-b36128144/"
          title="LinkedIn"
          >LinkedIn</a
        >, or with the form below.
      </p>
      <form method="POST">
        <div class="field">
          <label class="label has-text-white" for="name">Name:</label>
          <input class="input" type="text" name="name" id="name" required />
        </div>
        <div class="field">
          <label class="label has-text-white" for="Email">Email:</label>
          <input class="input" type="text" name="email" id="email" required />
        </div>
        <div class="field">
          <label class="label has-text-white" for="Email">Message:</label>
          <textarea
            class="textarea"
            name="message"
            id="message"
            required
          ></textarea>
        </div>
        <button class="button is-primary is-outlined" style="float: right;">
          Submit
        </button>
      </form>
    </div>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";

export default {
  name: "Contact",
  components: {
    Section
  },
  data() {
    return {
      
    }
  }
};
</script>
