<template>
  <div class="column">
    <kinesis-container>
      <kinesis-element
        type="depth"
        :strength="4"
      >
        <div
          class="card"
          style="min-height: 30vw"
        >
          <div class="card-image">
            <figure>
              <img
                :src="technology.img"
                alt="Placeholder image"
                style="max-height: 20vh; width: auto; padding-top: none"
              >
            </figure>
          </div>
          <div class="card-content">
            <p
              class="content"
              v-html="technology.description"
            >
              <br>
            </p>
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