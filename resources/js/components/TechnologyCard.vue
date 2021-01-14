<template>
  <div class="column">
    <kinesis-container>
      <kinesis-element
        type="depth"
        :strength="4"
      >
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img :src="technology.img" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
              {{ technology.description }}
              <br>
            </div>
          </div>
        </div>
      </kinesis-element>
    </kinesis-container>
  </div>
</template>
<script>
export default {
  props: {
    technology: {}
  }
}
</script>