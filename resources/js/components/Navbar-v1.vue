<template>
  <div>
    <div
      class="hamburger"
      :class="{ active: isOpen }"
      @click="isOpen = !isOpen"
    >
      <div class="bar1" />
      <div class="bar2" />
      <div class="bar3" />
    </div>
    <section
      class="nav-page hero is-fullheight"
      :class="{ active: isOpen }"
    >
      <div class="nav-list columns is-desktop">
        <div
          v-for="(link, index) in links"
          :key="index"
          class="column nav-item"
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
