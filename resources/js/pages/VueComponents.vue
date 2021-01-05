<template>
  <Section titleUpper="Vue" titleLower="Components">
    <div class="section-body">
      <div class="component-header">
        <h3>Date Picker</h3>
      </div>
      <div class="component-body">
        <div class="level">
          <div class="level-item">
            <div class="buttons has-addons">
              <a
                href="https://github.com/andy3471/andyh-datepicker"
                title="DatePickerDocs"
                class="button is-info is-outlined"
              >
                <span class="icon">
                  <i class="fas fa-file"></i>
                </span>
                <span>Documentation</span>
              </a>
              <a
                href="https://github.com/andy3471/andyh-datepicker"
                title="DatePickerCode"
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
        <p>
          A simple date picker component for VueJS. This allows you to use
          v-model on a date input to select a date.
        </p>
        <div class="level">
          <div class="level-item">
            <date-picker></date-picker>
          </div>
        </div>
      </div>
      <div class="component-header">
        <h3>Time Picker</h3>
      </div>
      <div class="component-body">
        <div>
          <div class="level">
            <div class="level-item">
              <div class="buttons has-addons">
                <a
                  href="https://github.com/andy3471/andyh-timepicker"
                  title="TimePickerDocs"
                  class="button is-info is-outlined"
                >
                  <span class="icon">
                    <i class="fas fa-file"></i>
                  </span>
                  <span>Documentation</span>
                </a>
                <a
                  href="https://github.com/andy3471/andyh-timepicker"
                  title="TimePickerCode"
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
          <p>
            A time picker component for VueJS. This allows you to use v-model on
            a time input. This can be customised to use different minute
            intervals.
          </p>
        </div>
        <div class="level">
          <div class="level-item">
            <time-picker></time-picker>
          </div>
        </div>
      </div>
      <div class="component-header">
        <h3>Auto Complete</h3>
      </div>
      <div class="component-body">
        <div>
          <div class="level">
            <div class="level-item">
              <div class="buttons has-addons">
                <a
                  href="https://github.com/andy3471/andyh-autocomplete"
                  title="AutoCompleteDocs"
                  class="button is-info is-outlined"
                >
                  <span class="icon">
                    <i class="fas fa-file"></i>
                  </span>
                  <span>Documentation</span>
                </a>
                <a
                  href="https://github.com/andy3471/andyh-autocomplete"
                  title="AutoCompleteCode"
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
          <p>
            An autocomplete component made with Vue JS and Axios. This will make
            a get request to an endpoint as you type, and presents a dropdown
            with similar results. This supports using the arrow keys and enter
            to select, or clicking.
          </p>
        </div>
        <div class="level">
          <div class="level-item">
            <auto-complete
              placeholder="Type a fruit"
              url="/autocomplete/fruit/"
            ></auto-complete>
          </div>
        </div>
      </div>
    </div>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";
import AndyHTimePicker from "andyh-timepicker";
import AndyHDatePicker from "andyh-datepicker";
import AndyHAutocomplete from "andyh-autocomplete";

export default {
  name: "VueComponents",
  components: {
    Section,
    "time-picker": AndyHTimePicker,
    "date-picker": AndyHDatePicker,
    "auto-complete": AndyHAutocomplete
  }
};
</script>
