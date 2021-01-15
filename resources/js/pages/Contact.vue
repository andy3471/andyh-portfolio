<template>
  <Section
    title-upper="Contact"
    title-lower="Me"
  >
    <div class="section-content">
      <p>
        If you would like to work with me, then be sure to contact me on
        <a href="mailto:me@andyh.app">me@andyh.app</a>,
        <a
          href=" www.linkedin.com/in/andyh-dev"
          title="LinkedIn"
        >LinkedIn</a>, or with the form below.
      </p>
      <form @submit.prevent="submit">
        <div class="field">
          <label
            class="label has-text-white"
            for="name"
          >Name:</label>
          <input
            id="name"
            v-model="fields.name"
            class="input"
            type="text"
            name="name"
            required
          >
        </div>
        <div class="field">
          <label
            class="label has-text-white"
            for="Email"
          >Email:</label>
          <input
            id="email"
            v-model="fields.email"
            class="input"
            type="text"
            name="email"
            required
          >
        </div>
        <div class="field">
          <label
            class="label has-text-white"
            for="Email"
          >Message:</label>
          <textarea
            id="message"
            v-model="fields.message"
            class="textarea"
            name="message"
            required
          />
        </div>
        <button
          class="button is-primary is-outlined"
          style="float: right;"
          type="submit"
        >
          Submit
        </button>
        <span
          v-for="(error, idx) in errors"
          :key="idx"
          role="alert"
        >
          <strong
            v-for="e in error"
            :key="e"
            class="has-text-danger"
          >
            {{ e }}
          </strong>
        </span>
        <span
          v-if="message"
          role="success"
        >
          <strong class="has-text-success">
            {{ message }}
          </strong>
        </span>
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
    submit () {
      if (this.sending == false) {
        this.message = ''
        this.errors = {}
        this.sending = true

        axios.post('/sendemail', this.fields).then(response => {
          (this.message = 'Message Sent'),
          (this.fields = {}),
          (this.sending = false)
          (console.log(response))
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
