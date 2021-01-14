<template>
  <div class="column">
    <kinesis-container>
      <kinesis-element
        type="depth"
        :strength="4"
      >
        <div class="card" style="min-height: 40rem">
          <div class="card-image">
            <figure>
              <img :src="technology.img" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="content" v-html="technology.description">
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