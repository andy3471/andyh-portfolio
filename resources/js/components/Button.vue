<template>
  <a
    :href="this.href"
    :title="this.title"
    :class="this.class"
  >
    <span class="icon">
      <i :class="this.icon"></i>
    </span>
    <span>{{ this.title }}</span>
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
