<template>
  <div class="section">
    <div class="container">
      <SectionHeader
        :title-upper="titleUpper"
        :title-lower="titleLower"
      />
      <slot />
    </div>
  </div>
</template>
<script>
import SectionHeader from './SectionHeader.vue'

export default {
  components: {
    SectionHeader
  },
  props: {
    titleUpper: String,
    titleLower: String
  }
};
</script>
