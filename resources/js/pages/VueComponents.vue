<template>
  <div class="section">
    <div class="slide">
      <SectionHeader
        title-upper="Date"
        title-lower="Picker"
      />
      <ButtonGroup>
        <Button
          href="https://github.com/andy3471/andyh-datepicker"
          title="Documentation"
          icon="fas fa-file"
          class="button is-info is-outlined"
        />
        <Button
          href="https://github.com/andy3471/andyh-datepicker"
          title="Github"
          icon="fab fa-github"
          class="button is-primary is-outlined"
        />
      </ButtonGroup>
      <p>
        A simple date picker component for VueJS. This allows you to use
        v-model on a date input to select a date.
      </p>
      <div class="level">
        <div class="level-item">
          <date-picker />
        </div>
      </div>
    </div>

    <div class="slide">
      <SectionHeader
        title-upper="Time"
        title-lower="Picker"
      />
      <ButtonGroup>
        <Button
          href="https://github.com/andy3471/andyh-timepicker"
          title="Documentation"
          icon="fas fa-file"
          class="button is-info is-outlined"
        />
        <Button
          href="https://github.com/andy3471/andyh-timepicker"
          title="Github"
          icon="fab fa-github"
          class="button is-primary is-outlined"
        />
      </ButtonGroup>
      <p>
        A time picker component for VueJS. This allows you to use v-model on
        a time input. This can be customised to use different minute
        intervals.
      </p>
      <div class="level">
        <div class="level-item">
          <time-picker />
        </div>
      </div>
    </div>
	
    <div class="slide">
      <SectionHeader
        title-upper="Auto"
        title-lower="Complete"
      />
      <ButtonGroup>
        <Button
          href="https://github.com/andy3471/andyh-autocomplete"
          title="Documentation"
          icon="fas fa-file"
          class="button is-info is-outlined"
        />
        <Button
          href="https://github.com/andy3471/andyh-autocomplete"
          title="Github"
          icon="fab fa-github"
          class="button is-primary is-outlined"
        />
      </ButtonGroup>
      <p>
        An autocomplete component made with Vue JS and Axios. This will make
        a get request to an endpoint as you type, and presents a dropdown
        with similar results.
      </p>
      <p>
        This supports using the arrow keys and enter
        to select, or clicking.
      </p>
      <div class="level">
        <div class="level-item">
          <auto-complete
            placeholder="Type a fruit"
            url="/autocomplete/fruit/"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import AndyHTimePicker from "andyh-timepicker";
import AndyHDatePicker from "andyh-datepicker";
import AndyHAutocomplete from "andyh-autocomplete";
import SectionHeader from "../components/SectionHeader.vue";

export default {
  name: "VueComponents",
  components: {
    SectionHeader,
    "time-picker": AndyHTimePicker,
    "date-picker": AndyHDatePicker,
    "auto-complete": AndyHAutocomplete
  }
};
</script>
<style scoped>
</style>