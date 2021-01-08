<template>
  <div class="timeline-item is-warning">
    <div class="timeline-marker is-warning is-image is-32x32">
      <img
        :src="img"
        :alt="imgAlt"
      >
    </div>
    <div class="timeline-content">
      <p class="heading">
        {{ date }}
      </p>
      <p>{{ jobTitle }}</p>
      <slot />
    </div>
  </div>
</template>
<script>
export default {
  props: {
    date: String,
    jobTitle: String,
    img: String,
    imgAlt: String
  }
};
</script>
