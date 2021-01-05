<template>
  <div class="columns is-mobile is-centered">
    <div class="column is-half">
      <div v-if="this.isIE" class="notification is-danger browser-notifcation">
        This website does not support Internet Explorer, please try again on
        <a href="https://www.mozilla.org/en-GB/firefox/new/">Firefox</a> or
        <a href="https://www.google.co.uk/chrome/">Chrome</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isIE: false
    };
  },
  mounted: function() {
    var ua = navigator.userAgent;
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
    this.isIE = is_ie;
  }
};
</script>
