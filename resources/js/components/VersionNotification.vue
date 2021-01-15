<template>
  <div
    v-if="isOpen"
    class="columns is-mobile is-centered"
  >
    <div class="column is-half">
      <div class="notification is-warning browser-notifcation version-notification">
        <button
          class="delete"
          @click="isOpen = false"
        />
        You are viewing v1 of my portfolio, for the latest version, please
        <a href="./">click here</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpen: true
    };
  }
};
</script>
