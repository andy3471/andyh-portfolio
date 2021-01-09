<template>
  <div class="level">
    <div class="level-item">
      <div class="buttons has-addons">
        <Button
          v-for="(button, idx) in buttons"
          :key="idx"
          :title="button.title"
          :href="button.href"
          :icon="button.icon"
          :class="button.class"
        />
        <slot />  
      </div>
    </div>
  </div>
</template>
<script>
import Button from './Button.vue'

export default {
  components: {
    Button
  },
  props: {
    buttons: Array
  }
};
</script>
