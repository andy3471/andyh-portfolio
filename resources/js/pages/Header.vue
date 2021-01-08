<template>
  <div
    id="section0"
    class="section "
  >
    <video
      id="myVideo"
      loop
      muted
      data-autoplay
    >
      <source
        src="videos/flowers2.mp4"
        type="video/mp4"
      >
      <!-- <source src="videos/flowers.webm" type="video/webm"> -->
    </video>
    <div class="layer">
      <div class="container">
        <h1 class="has-text-centered">
          <div class="logo">
            <span class="upper">Andy</span>
            <span class="lower">Hargrave</span>
          </div>
          <span class="tagline has-text-centered">Full Stack Web Development & Deployment</span>
        </h1>
        <br>
        <div class="header-buttons level">
          <div class="level-item">
            <a
              href="#about"
              title="About"
              class="button is-info"
            >
              <span class="icon">
                <i class="fas fa-user" />
              </span>
              <span>About Me</span>
            </a>
          </div>
          <div class="level-item">
            <a
              href="#keys"
              title="Projects"
              class="button is-primary"
            >
              <span class="icon">
                <i class="fas fa-code" />
              </span>
              <span>View My Projects</span>
            </a>
          </div>
          <h1> NEEDS DOWN ARROW </h1>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>

	#myVideo{
		position: absolute;
		right: 0;
		bottom: 0;
		top:0;
		width: 100%;
		height: 100%;
		background-size: 100% 100%;
    background-color: black; /* in case the video doesn't fit the whole page*/
    background-position: center center;
    background-size: contain;
    object-fit: cover; /*cover video background */
    z-index:3;
	}



	/* Layer with position absolute in order to have it over the video
	* --------------------------------------- */
	#section0 .layer{
		position: absolute;
		z-index: 4;
    width: 100%;
    height: 100%;
		left: 0;
		top: 25%;
		-webkit-transform: translate3d(0,0,0);
		-ms-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}

	/*solves problem with overflowing video in Mac with Chrome */
	#section0{
		overflow: hidden;
	}

	video::-webkit-media-controls {
    display:none !important;
  }

  .header-buttons {
    padding-left: 250px;
    padding-right: 250px;
  }

</style>