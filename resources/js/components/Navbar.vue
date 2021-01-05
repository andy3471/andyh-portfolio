<template>
  <div>
    <div
      class="hamburger"
      @click="isOpen = !isOpen"
      v-bind:class="{ active: isOpen }"
    >
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <section
      class="nav-page hero is-fullheight"
      v-bind:class="{ active: isOpen }"
    >
      <div class="nav-list columns is-desktop">
        <div
          v-for="(link, index) in links"
          class="column nav-item"
          v-bind:key="index"
          @click="openLink()"
        >
          <a :href="link.href">{{ link.title }}</a>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpen: false,
      links: [
        { href: "#about", title: "About Me" },
        { href: "#keys", title: "KeyShare" },
        { href: "#rota", title: "LunchRota" },
        { href: "#components", title: "Components" },
        { href: "#hosting", title: "Hosting" },
        { href: "#projects", title: "Other Projects" },
        { href: "#work", title: "Work Experience" },
        { href: "#contact", title: "Contact Me" }
      ]
    };
  },
  methods: {
    openLink() {
      this.isOpen = false;
    }
  }
};
</script>
