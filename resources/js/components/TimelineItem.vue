<template>
  <div class="timeline-item is-warning">
    <div class="timeline-marker is-warning is-image is-32x32">
      <img :src="this.img" :alt="this.imgAlt" />
    </div>
    <div class="timeline-content">
      <p class="heading">{{ this.date }}</p>
      <p>{{ this.jobTitle }}</p>
      <slot></slot>
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
