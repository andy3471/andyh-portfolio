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
      <form @submit.prevent="submit">
        <span role="alert" v-for="(error, idx) in errors" :key="idx">
          <strong class="has-text-danger" v-for="error in error" :key="error" >
            {{ error }}
          </strong>
        </span>
        <span role="success" v-if="message">
          <strong class="has-text-success">
            {{ message }}
          </strong>
        </span>
        <div class="field">
          <label class="label has-text-white" for="name">Name:</label>
          <input class="input" type="text" name="name" id="name" v-model="fields.name" required />
        </div>
        <div class="field">
          <label class="label has-text-white" for="Email">Email:</label>
          <input class="input" type="text" name="email" id="email" v-model="fields.email" required />
        </div>
        <div class="field">
          <label class="label has-text-white" for="Email">Message:</label>
          <textarea
            class="textarea"
            name="message"
            id="message"
            required
            v-model="fields.message"
          ></textarea>
        </div>
        <button class="button is-primary is-outlined" style="float: right;" type="submit">
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
      fields: {},
      errors: {},
      message: '',
      sending: false
    }
  },
  methods: {
    submit (e) {
      if (this.sending == false) {
        this.message = ''
        this.errors = {}
        this.sending = true

        axios.post('/sendemail', this.fields).then(response => {
          (this.message = 'Message Sent'),
          (this.fields = {}),
          (this.sending = false)
        }).catch(error => {
          (this.errors = error.response.data.errors),
          (this.sending = false)
        });
      }
    }
  }
};
</script>
<style scoped>
</style>
