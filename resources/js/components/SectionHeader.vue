<template>
  <h2 class="section-header">
    <span class="upper">{{ titleUpper }}</span>
    <span class="lower">{{ titleLower }}</span>
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
