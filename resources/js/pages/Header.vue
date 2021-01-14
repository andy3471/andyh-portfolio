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
        src="videos/banner.mp4"
        type="video/mp4"
      >
      <source src="videos/banner.webm" type="video/webm">
    </video>
    <div class="layer">
      <div class="container">
        <kinesis-container>
          <kinesis-element
            type="depth"
            :strength="7"
          >
            <h1 class="has-text-centered">
              <div class="logo">
                <span class="upper">Andrew</span>
                <span class="lower">Hargrave</span>
              </div>
              <span class="tagline has-text-centered">Full Stack Web Development & Deployment</span>
            </h1>
          </kinesis-element>
        </kinesis-container>
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
        </div>
        <div class="arrow" @click="console.log('click')">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped lang="scss">

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

  .arrow{
      position: absolute;
      left: 50%;
      transform: translate(-50%,0%);
  }
  .arrow span{
      display: block;
      width: 30px;
      height: 30px;
      border-bottom: 5px solid #F25D27;
      border-right: 5px solid #F25D27;
      transform: rotate(45deg);
      margin: -10px;
      animation: animate 2s infinite;
  }
  .arrow span:nth-child(2){
      animation-delay: -0.2s;
  }
  .arrow span:nth-child(3){
      animation-delay: -0.4s;
  }
  @keyframes animate {
      0%{
          opacity: 0;
          transform: rotate(45deg) translate(-20px,-20px);
      }
      50%{
          opacity: 1;
      }
      100%{
          opacity: 0;
          transform: rotate(45deg) translate(20px,20px);
      }
  }
  
</style>