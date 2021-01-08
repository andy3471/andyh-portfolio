<template>
  <div class="section">
    <div class="container">
      <SectionHeader :titleUpper="titleUpper" :titleLower="titleLower"/>
        <slot></slot>
    </div>
  </div>
</template>
<script>
import SectionHeader from './SectionHeader.vue'

export default {
  props: {
    titleUpper: String,
    titleLower: String
  },
  components: {
    SectionHeader
  }
};
</script>
