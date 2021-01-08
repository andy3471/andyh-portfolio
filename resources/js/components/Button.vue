<template>
  <a
    :href="href"
    :title="title"
    :class="this.class"
  >
    <span class="icon">
      <i :class="icon" />
    </span>
    <span>{{ title }}</span>
  </a>
</template>
<script>
export default {
  props: {
    title: String,
    href: String,
    icon: String,
    class: String
  }
};
</script>
