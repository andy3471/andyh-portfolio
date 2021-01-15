<template>
  <div class="slide">
    <div class="container">
      <kinesis-container>
        <kinesis-element
          type="depth"
          :strength="1"
        >
          <div class="card">
            <SectionHeader
              :title-upper="project.titleUpper"
              :title-lower="project.titleLower"
            />
            <ButtonGroup :buttons="project.buttons" />
            <img
              :src="project.img"
              :alt="project.alt"
              style="height: 35vh; width: auto; padding-top: none"
            >
            <div class="card-content">
              <p
                class="content"
                v-html="project.description"
              />
            </div>
            <div class="level">
              <div class="level-item">
                <div class="tags">
                  <span
                    v-for="(tag, idx) in project.tags"
                    :key="idx"
                    class="tag is-dark"
                  >{{ tag }}</span>
                </div>
              </div>
            </div>
            <br>
          </div>
        </kinesis-element>
      </kinesis-container>
    </div>
  </div>
</template>
<script>
import SectionHeader from './SectionHeader.vue'
import ButtonGroup from './ButtonGroup.vue'

export default {
  components: {
    SectionHeader,
    ButtonGroup
  },
  props: {
    project: Object,
  }
};
</script>
<style lang="scss" scoped>
  .card {
    background-color: #DEDEDE;
  }
  .card-content {
    padding:  calc(0.25rem + .5vw);
  }
</style>