<template>
  <div class="section">
    <div class="slide">
      <SectionHeader
        title-upper="Arcade"
        title-lower="Cabinet"
      />
      <div class="container">
        <img
          src="/images/wards.jpg"
          class="is-16by9"
          alt="wards"
          style="width: 50%; padding-top: none"
        >
        <p>
          Description
        </p>
      </div>
    </div>

    <div class="slide">
      <SectionHeader
        title-upper="Music"
        title-lower="Production"
      />
      <ButtonGroup>
        <Button
          href="https://open.spotify.com/artist/3BsM8NcTrGD2bZeh94E3Z4?si=QaYxYG9-QbO7Ohq1EjIZTw"
          title="Spotify"
          icon="fab fa-spotify"
          class="button is-primary is-outlined"
        />
      </ButtonGroup>
      <div class="container">
        <img
          src="/images/albumart.jpg"
          alt="wards"
          style="width: 25%"
        >
        <p>
          I produce music using Analog Synthesizers, mixed with more
          modern techniques. I have created and released an album that
          uses analog synths controlled via midi, along with Ableton
          Live and a Launchpad
        </p>
      </div>
      <div class="level">
        <div class="level-item">
          <div class="tags">
            <span class="tag">Ableton</span>
          </div>
        </div>
      </div>
    </div>

    <div class="slide">
      <SectionHeader
        title-upper="Charity"
        title-lower="Events"
      />
      <div class="container">
        <img
          src="/images/justgiving.jpg"
          alt="justgiving"
          style="width: 25%"
        >
        <p>
          I have hosted multiple charity events for various charities.
          This includes 4 separate charity gaming Marathons, that have
          raised a total of over £3600 for various Charities.
        </p>
      </div>
    </div>
  </div>
</template>
<script>
import SectionHeader from "../components/SectionHeader.vue";

export default {
  name: "OtherProjects",
  components: {
    SectionHeader
  }
};
</script>
<style scoped>
</style>
