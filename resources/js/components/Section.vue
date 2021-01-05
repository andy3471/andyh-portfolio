<template>
  <div class="section">
    <div class="container">
      <h2 class="section-header">
        <span class="upper">{{ this.titleUpper }}</span>
        <span class="lower">{{ this.titleLower }}</span>
      </h2>
      <div class="section-body">
        <slot></slot>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    titleUpper: String,
    titleLower: String
  }
};
</script>
