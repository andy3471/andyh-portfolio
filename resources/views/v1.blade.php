<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/v1.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Andrew Hargrave">
        <meta name="description" content="I'm a self taught Web Developer that works with PHP, JS, HTML, SQL, Redis, CSS and SCSS. I have a very good knowledge of the Laravel MVC framework. I also have knowledge of Bootstrap and Bulma as UI frameworks">
        <title>(V1 - Outdated) AndyH Web Development Portfolio</title>
        <script src="{{ asset('js/v1.js') }}" defer></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    </head>
 <body>
    <div id="app">

        <navbar></navbar>
        <browser-check></browser-check>

        <div class="columns is-mobile is-centered">
            <div class="column is-half">
            <div class="notification is-warning browser-notifcation version-notification">
                You are viewing v1 of my portfolio, for a later version, please
                <a href="./">click here</a>
            </div>
            </div>
        </div>

        <section class="header hero is-fullheight" id="header">
            <div class="container">
                <div class="header-text" >
                    <div class="logo" data-aos="fade-down">
                        <h1>Andy</h1>
                        <h2>Hargrave</h2>
                    </div>
                    <h3>Web Developer & Deployment Specialist</h3>
                    <br>
                    <div class="level">
                        <div class="level-item">
                            <a href="#about" title="About" class="button is-info is-outlined" >
                                <span class="icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                <span>About Me</span>
                            </a>
                        </div>

                        <div class="level-item">
                        <a href="#keys" title="Projects" class="button is-primary is-outlined">
                                <span class="icon">
                                        <i class="fas fa-code"></i>
                                    </span>
                                <span>View My Projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-fullheight about" id="about">
            <div class="container">
                <div class="section-header" data-aos="fade-right">
                    <h1>About</h1>
                    <h2>Me</h2>
                </div>
                <div class="columns section-body">
                    <div class="column">
                        <figure class="image" data-aos="fade-right">
                            <img class="image" src="{{ asset('images/profile.jpg') }}" alt="profile-picture" width="300px">
                        </figure>
                    </div>
                    <div class="column is-three-quarters"  data-aos="fade-left">
                    <button class="button is-link is-outlined">Find Out More</button>
                        <p>Hi, I'm Andrew Hargrave. I'm a self taught Web Developer that works with PHP, JS, HTML, SQL (MySQL and MS SQL), Redis, CSS and SCSS. I have a very good knowledge of the Laravel MVC framework, and have used it for multiple personal projects. I use VueJS for as a front-end JavaScript framework primarily, and have released multiple components that can be used freely in any Vue web app. I also have knowledge of Bootstrap and Bulma as UI frameworks.</p>
                        <p>I am currently emplayed as an Applications Support Anaylst at Neilson Finance Services. 
                        <p>Previously, I was employed as an Application Delivery Specialist at Advanced, the UK's third largest software company. I worked in the Health & Care business unit with Carenotes, an ASP.NET Web Application, with a large number of SOA services. Carenotes is used widely by the NHS for mental health and community Trusts. I provide third line support for Carenotes, as well as deploy and upgrade it. Carenotes is hosted on Windows Servers with IIS.</p>
                        <p>I also have a strong knowledge of Linux and Apache, and host multiple web applications on Linux Servers. I host web applications and video game servers privately, which is running on virtualised servers using Proxmox hypervisor, as well as in Docker Containers.</p>
                        <p>Outside of web development and deployment, I like to work on music in my free time, using Analog Synthesizers. I'm also a huge fan of board games and virtual reality.</p>
                        <p>Please check out my live demos on the site, and use the Contact Me form if you would like to work together!</p>
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://www.linkedin.com/in/andrew-hargrave-b36128144/" title="LinkedIn" class="button is-info is-outlined">
                                        <span class="icon">
                                                <i class="fab fa-linkedin"></i>
                                            </span>
                                        <span>Linked In</span>
                                    </a>
                                    <a href="https://github.com/andy3471/" title="GitHub" class="button is-primary is-outlined">
                                        <span class="icon">
                                                <i class="fab fa-github"></i>
                                            </span>
                                        <span>Github</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-fullheight keyshare" id="keys">
            <div class="container">
                <div class="section-header" data-aos="fade-left">
                    <h1>Key</h1>
                    <h2>Share</h2>
                </div>
                <div class="section-body">
                    <div class="level" data-aos="fade-right">
                        <div class="level-item">
                            <div class="buttons has-addons">
                                <a href="https://github.com/andy3471/keyshare" title="KeyshareCode" class="button is-info is-outlined">
                                    <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                    <span>Github</span>
                                </a>
                                <a href="https://keyshare.andyh.app" title="KeyshareDemo" class="button is-primary is-outlined">
                                <span class="icon">
                                        <i class="fa fa-link"></i>
                                    </span>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="image" src="{{ asset('images/keyshare.jpg') }}" alt="keyshare" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                    <div data-aos="fade-right">
                        <p>KeyShare is a Web Application for sharing excess steam keys for a gaming group. The site has paginated autoloading when browsing games, to make it easy to scroll through, as well as an autocomplete search component for finding games. The site uses a Redis cache for storing a 'karma' for users and caching routes for faster loading</p>
                        <p>KeyShare allows for options to enable sign-in through Steam using OpenID. The site contains an admin panel for user management, and the option to require admin approval to register.</p>
                        <p>The application was originally written in raw PHP and JavaScript, however was refactored to use the Laravel framework and VueJS as of 1.0.5. This has allowed faster development for new features, such as DLC that can be added for games. This has been solely written by me, however is open for contributions on GitHub.</p>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight keyshare" id="rota" >
            <div class="container">
                <div class="section-header" data-aos="fade-left">
                    <h1>Lunch</h1>
                    <h2>Rota</h2>
                </div>
                <div class="section-body">
                    <div class="level" data-aos="fade-right">
                        <div class="level-item">
                            <div class="buttons has-addons">
                                <a href="https://github.com/andy3471/lunchrota" title="LunchRotaCode" class="button is-info is-outlined">
                                    <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                    <span>Github</span>
                                </a>
                                <a href="https://lunchrota.andyh.app" title="KeyshareDemo" class="button is-primary is-outlined">
                                <span class="icon">
                                        <i class="fa fa-link"></i>
                                    </span>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="image" src="{{ asset('images/rota.jpg') }}" alt="rota" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                    <div data-aos="fade-right">
                        <p>LunchRota is a ground up rewrite of an application that was created for our service desk by <a href="https://curtisreet.co.uk" title="CurtPortfolio">Curtis Reet</a>. The application is to be used by teams, in order to keep track of daily work roles, as well as claim available lunch slots. The original application was built on PHP5, and required further development, so I decided to rewrite this in Laravel to allow me to continue working on the application</p>
                        <p>The roles can be assigned to users either via a UI built with VueJS, or uploaded via CSV.</p>
                        <p>The site can be configured to either use a set number of available lunch slots, or be calculated using the number of user roles that are marked as 'available'. This is used, for example, if certain roles need to be on the phones, and you require a certain number of people who are on phones to be available at any time.</p>
                        <p>LunchRota contains a full admin panel for editing users, lunch slots, roles and user roles. These use a Vue JS interface, to allow you to bulk edit.</p>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight" id="components" data-aos="fade-left">
            <div class="container">
                <div class="section-header" >
                    <h1>Vue</h1>
                    <h2>Components</h2>
                </div>
                <div class="section-body">
                    <div class="component-header" data-aos="flip-left">
                        <h1>Date Picker</h1>
                    </div>
                    <div class="component-body" data-aos="flip-right" data-aos-anchor-placement="center-bottom" >
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://github.com/andy3471/andyh-datepicker" title="DatePickerDocs" class="button is-info is-outlined">
                                        <span class="icon">
                                            <i class="fas fa-file"></i>
                                        </span>
                                        <span>Documentation</span>
                                    </a>
                                    <a href="https://github.com/andy3471/andyh-datepicker" title="DatePickerCode" class="button is-primary is-outlined">
                                        <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                        <span>Github</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>A simple date picker component for VueJS. This allows you to use v-model on a date input to select a date.</p>
                        <div class="level">
                            <div class="level-item">
                                <date-picker></date-picker>
                            </div>
                        </div>
                    </div>
                    <div class="component-header" data-aos="flip-left">
                        <h1>Time Picker</h1>
                    </div>
                    <div class="component-body">
                        <div data-aos="flip-right">
                            <div class="level">
                                <div class="level-item">
                                    <div class="buttons has-addons">
                                        <a href="https://github.com/andy3471/andyh-timepicker" title="TimePickerDocs" class="button is-info is-outlined">
                                        <span class="icon">
                                                <i class="fas fa-file"></i>
                                            </span>
                                            <span>Documentation</span>
                                        </a>
                                        <a href="https://github.com/andy3471/andyh-timepicker" title="TimePickerCode" class="button is-primary is-outlined">
                                            <span class="icon">
                                                    <i class="fab fa-github"></i>
                                                </span>
                                            <span>Github</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p>A time picker component for VueJS. This allows you to use v-model on a time input. This can be customised to use different minute intervals.</p>
                        </div>
                        <div class="level">
                            <div class="level-item">
                                <time-picker></time-picker>
                            </div>
                        </div>
                    </div>
                    <div class="component-header" data-aos="flip-left">
                        <h1> Auto Complete </h1>
                    </div>
                    <div class="component-body">
                        <div data-aos="flip-right">
                            <div class="level">
                                <div class="level-item">
                                    <div class="buttons has-addons">
                                        <a href="https://github.com/andy3471/andyh-autocomplete" title="AutoCompleteDocs" class="button is-info is-outlined">
                                        <span class="icon">
                                                <i class="fas fa-file"></i>
                                            </span>
                                            <span>Documentation</span>
                                        </a>
                                        <a href="https://github.com/andy3471/andyh-autocomplete" title="AutoCompleteCode" class="button is-primary is-outlined">
                                            <span class="icon">
                                                <i class="fab fa-github"></i>
                                            </span>
                                            <span>Github</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p>An autocomplete component made with Vue JS and Axios. This will make a get request to an endpoint as you type, and presents a dropdown with similar results. This supports using the arrow keys and enter to select, or clicking. </p>
                        </div>
                        <div class="level">
                            <div class="level-item">
                                <auto-complete placeholder="Type a fruit" url="/autocomplete/fruit/"></auto-complete>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight projects" id="hosting"  data-aos="fade-right">
            <div class="container">
                <div class="section-header">
                    <h1>Hosting</h1>
                    <h2>+ Virtualisation</h2>
                </div>
                <div class="section-body">
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/servers.png') }}" alt="servers">
                                </div>
                                <div class="column  is-four-fifths ">
                                    <div class="project">
                                        <h1>Hosting Platform</h1>
                                        <p>I run hosting privately, for both video game servers and web applications. These are mostly running Proxmox hypervisor with Ubuntu Server guests. The majority of the platform is running in docker containers, currently using Docker Swarm, for high availability. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column  is-four-fifths ">
                                    <div class="project">
                                        <h1>Proxmox</h1>
                                        <p>I am currently using Proxmox Hypervisor (KVM and LXC based) for VMs and Containers. This has the feature to be able to easily migrate VMs to other hosts, to avoid downtime of vital servers such as the File Server.</p>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/proxmox.png') }}" alt="proxmox">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/docker.png') }}" alt="docker">
                                </div>
                                <div class="column  is-four-fifths ">
                                    <div class="project">
                                        <h1>Docker</h1>
                                        <p>I have containerised most of the applications and game servers, including containers for all the applications I have created. I am currently running them in Docker Swarm mode, accross various hosts (Windows + Linux). This site is hosted on Docker Swarm, refresh (F5) the page, and the container name should change.</p>
                                        <p> Current Docker Container Name: @php echo gethostname() @endphp </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column  is-four-fifths ">
                                    <div class="project">
                                        <h1>Traefik</h1>
                                        <p>I am using Traefik as an edge router for directing traffic from the domains to the correct web application. Traefik integrates with docker and docker swarm nicely, and uses LetsEncrypt to automatically generate SSL certificates on the fly.</p>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/traefik.png') }}" alt="traefik">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="hero is-fullheight projects" id="projects"  data-aos="fade-right">
            <div class="container">
                <div class="section-header">
                    <h1>Other</h1>
                    <h2>Projects</h2>
                </div>
                <div class="section-body">
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/wards.jpg') }}" alt="wards">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Advanced Hackathon 2020 - Wards MyWorkplace App</h1>
                                        <p>I took part in the 2020 Advanced Hackathon, in which the task was to create an external applet which integrates with one of our existing applications. 
                                        I worked as developer on our team, alongside some of the developers for CareNotes. We created an applet that integrates with CareNotes, a patient management system,
                                        to show patients on a ward, and record incidents, clinical notes, BMI and Bodymap forms against the patient. This would then use the existing CareNotes API to send
                                        this to CareNotes. The project was designed and built in 24 hours, in Advanced's MosaicJS framework. I created the modals, forms and bodymapping functionality. The
                                        project is being looked into further as something we can develop into a full product. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Tabletop Simulator - Gloomhaven Scripting</h1>
                                        <p>I have been working to make board games playable in Tabletop Simulator, so that people can continue playing during the Covid-19 outbreak. I created a fork of the Gloomhaven Fantasy set-up mod, and scripted all of the Forgotten Circles expansion and solo scenarios in lua with <a href="https://curtisreet.co.uk" title="CurtPortfolio">Curtis Reet</a>. My mod has now been merged into the original mod, where I have been credited, which is the most popular tabletop simulator mod with over 100,000 active users</p>
                                        <div class="level">
                                            <div class="level-item">
                                                <div class="buttons has-addons">
                                                    <a href="https://github.com/andy3471/Gloomhaven-ForgottenCricles-TTS" title="TimePickerCode" class="button is-info is-outlined">
                                                        <span class="icon">
                                                                <i class="fab fa-github"></i>
                                                            </span>
                                                        <span>Github</span>
                                                    </a>
                                                    <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1301493206&searchtext=gloomhaven" title="Gloomhaven" class="button is-primary is-outlined">
                                                        <span class="icon">
                                                            <i class="fab fa-steam"></i>
                                                        </span>
                                                        <span>Steam Workshop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/gloomhaven.jpg') }}" alt="Gloomhaven">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-left">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/portalstories.jpg') }}" alt="portal">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Portal Stories: Mel</h1>
                                        <p>I was the original leader on the Portal 2 mod Portal Stores: Mel. The mod went on to win a Video Game Award for "Best Fan Creation" in 2015, and has been given a full steam release, with overwhelmingly positive reviews. I am in the credits of the mod for my past contributions.</p>
                                        <div class="level">
                                            <div class="level-item">
                                                <a href="https://store.steampowered.com/app/317400/Portal_Stories_Mel/" title="Portal Stories: Mel" class="button is-primary is-outlined">
                                                    <span class="icon">
                                                    <i class="fab fa-steam"></i>
                                                </span>
                                                    <span>Steam</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-right">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Minecraft VR Nightclub - Scripted Beat Detection</h1>
                                        <p>I host a Minecraft server for VR users. The server is a nightclub for VR users, and features a custom scripted beat detection system. The beat detection uses a C application, which acts as the API, using the GBD Framework. In the game, I have used the Computercraft Mod, to make a lua application which gets the beat information from the API, which keeps the lights in sync with the music. The club was created as a meeting place for people during Covid-19.</p>
                                        <div class="level">
                                            <div class="level-item">
                                                <a href="https://youtu.be/hUbeUy6U4nY" title="Club" class="button is-primary is-outlined">
                                                    <span class="icon">
                                                    <i class="fab fa-youtube"></i>
                                                </span>
                                                    <span>YouTube</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/club.jpg') }}" alt="club">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-left">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/albumart.jpg') }}" alt="MoreThanData">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Music Production</h1>
                                        <p>I produce music using Analog Synthesizers, mixed with more modern techniques. I have created and released an album that uses analog synths controlled via midi, along with Ableton Live and a Launchpad</p>
                                        <div class="level">
                                            <div class="level-item">
                                                <a href="https://open.spotify.com/artist/3BsM8NcTrGD2bZeh94E3Z4?si=QaYxYG9-QbO7Ohq1EjIZTw" title="Album" class="button is-primary is-outlined">
                                                    <span class="icon">
                                                    <i class="fab fa-spotify"></i>
                                                </span>
                                                    <span>Spotify</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item" data-aos="zoom-in-left">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Charity Events</h1>
                                        <p>I have hosted multiple charity events for various charities. This includes 4 separate charity gaming Marathons, that have raised a total of over £3600 for various Charities.</p>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('images/justgiving.jpg') }}" alt="JustGiving">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight work" id="work"  data-aos="fade-left">
            <div class="container">
                <div class="section-header">
                    <h1>Work</h1>
                    <h2>Experience</h2>
                </div>
                <div class="section-content">
                    <div class="timeline is-centered">
                        <header class="timeline-header">
                            <span class="tag is-medium is-primary">Today</span>
                        </header>
                        <div class="timeline-item is-warning" >
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('images/neilson.png') }}" alt="neilson">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-left">
                                <p class="heading">December 2020</p>
                                <p>Neilson - Application Support Analyst</p>
                                <ul>
                                    <li>Create bespoke reports using SQL for stakeholders and managing SSRS reports.</li>
                                    <li>Troubleshoot both the applications client UI and backend database related issues</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-warning" >
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('images/advanced.jpg') }}" alt="advanced">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-left">
                                <p class="heading">November 2017</p>
                                <p>Advanced - Application Delivery Specialist</p>
                                <ul>
                                    <li>Provide third line support for Carenotes (ASP NET Application)</li>
                                    <li>Deploy and upgrade the Carenotes Application (Windows and Linux Servers)</li>
                                    <li>Install and use monitoring tools such as New Relic and App Dynamics</li>
                                    <li>Install external modules such as the Patient Dashboard (Node JS Application on Red Hat Servers)</li>
                                    <li>Write complex SQL scripts to resolve data issues</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-warning">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('images/advanced.jpg') }}" alt="advanced">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-right">
                                <p class="heading">June 2017</p>
                                <p>Advanced - Service Desk Analyst  </p>
                                <ul>
                                    <li>Deal with customer escalations</li>
                                    <li>Attend internal and external conference calls, such as Go To Market calls</li>
                                    <li>Provide training to the first and second line teams</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-warning">
                            <div class="timeline-marker is-warning is-image is-32x32" >
                                <img src="{{ asset('images/advanced.jpg') }}" alt="advanced">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-left">
                                <p class="heading">September 2016</p>
                                <p>Advanced - Second Line Community Technician </p>
                                <ul>
                                    <li>Answer customer queries via phone and email</li>
                                    <li>Work with the development team to triage issues</li>
                                    <li>Write and test SQL scripts to resolve issues</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-primary">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('images/advanced.jpg') }}" alt="advanced">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-right">
                                <p class="heading">April 2016</p>
                                <p>Advanced - First Line Support Technician</p>
                                <ul>
                                    <li>Answer customer queries via phone and email</li>
                                    <li>Create and manage Active Directory accounts</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-primary">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('images/xpg.jpg') }}" alt="xpg">
                            </div>
                            <div class="timeline-content" data-aos="zoom-in-left">
                                <p class="heading">September 2013</p>
                                <p>Xpress Games - Business Administration Apprentice</p>
                                <ul>
                                    <li>Maintain database of stock held within the store</li>
                                    <li>Study towards all apprenticeship modules including communication in business environment</li>
                                </ul>
                            </div>
                        </div>
                        <header class="timeline-header">
                            <span class="tag is-medium is-primary">2013</span>
                        </header>
                        </div>
                </div>
            </div>
        </section>

        <section class="hero is-fullheight contact" id="contact"  >
            <div class="container">
                <div class="section-header" data-aos="fade-right">
                    <h1>Contact</h1>
                    <h2>Me</h2>
                </div>
                <div class="section-content">
                    <p data-aos="fade-left">If you would like to work with me, then be sure to contact me on <a href="mailto:me@andyh.app">me@andyh.app</a>, <a href="https://www.linkedin.com/in/andrew-hargrave-b36128144/" title="LinkedIn">LinkedIn</a>, or with the form below.</p>
                    <p> PLEASE USE THE <a href="./">V2</a> FORM TO CONTACT ME</p>
                <form method="POST" action="{{ route('sendemail') }}">
                        @if(session()->has('message'))
                            <span role="alert">
                                <strong class="has-text-success">{{ session()->get('message') }}</strong>
                            </span>
                        @endif

                        @csrf
                        <div class="field" data-aos="fade-right">
                            <label class="label has-text-white" for="name">Name:</label class="label">
                            <input class="input @error('name') is-invalid @enderror" type="text" name="name" id="name" disabled>
                            @error('name')
                                <span role="alert">
                                    <strong class="has-text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field" data-aos="fade-left">
                            <label class="label has-text-white" for="Email">Email:</label>
                            <input class="input @error('email') is-invalid @enderror" type="text" name="email" id="email" disabled>
                            @error('email')
                                <span role="alert">
                                    <strong class="has-text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field" data-aos="fade-right">
                            <label class="label has-text-white" for="Email">Message:</label>
                            <textarea class="textarea @error('message') is-invalid @enderror" name="message" id="message" disabled></textarea>
                            @error('message')
                                <span role="alert">
                                    <strong class="has-text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="button is-primary is-outlined" style="float: right;" data-aos="fade-left">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
