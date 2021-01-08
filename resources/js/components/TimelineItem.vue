<template>
  <div class="timeline-item is-warning">
    <div class="timeline-marker is-warning is-image is-32x32">
      <img
        :src="img"
        :alt="imgAlt"
      >
    </div>
    <div class="timeline-content">
      <p class="heading">
        {{ date }}
      </p>
      <p>{{ jobTitle }}</p>
      <ul>
        <li v-for="(responsibility, idx) in responsibilities" :key="idx">
          {{responsibility}}
        </li>
      </ul>
      <slot />
      <div class="tags">
        <span v-for="(tag, idx) in tags" class="tag" :key="idx">{{tag}}</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    date: String,
    jobTitle: String,
    img: String,
    imgAlt: String,
    tags: [],
    responsibilities: []
  }
};
</script>
