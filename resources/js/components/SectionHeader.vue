<template>
  <h2 class="section-header">
    <span class="upper">{{ this.titleUpper }}</span>
    <span class="lower">{{ this.titleLower }}</span>
  </h2>
</template>
<script>
export default {
  props: {
    titleUpper: String,
    titleLower: String
  }
};
</script>
