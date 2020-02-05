<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AndyH Portfolio</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
 <body>
    <div id="app">
        <navbar></navbar>

        <section class="header hero is-fullheight" id="header">
            <div class="container">
                <div class="header-text">
                    <div class="logo">
                        <h1>Andy</h1>
                        <h2>Hargrave</h2>
                    </div>
                    <h3>Web Developer & Deployment Specialist</h3>
                </div>
            </div>
        </section>

        <section class="hero is-fullheight about" id="about">
            <div class="container">
                <div class="section-header">
                    <h1>About</h1>
                    <h2>Me</h2>
                </div>
                <div class="columns section-body">
                    <div class="column">
                        <figure class="image">
                            <img class="image" src="{{ asset('img/profile.jpg') }}" alt="" width="300px">
                        </figure>
                    </div>
                    <div class="column is-three-quarters">
                        <p>Hi, I'm Andrew Hargrave. I'm a self taught Web Developer that works with PHP, JS, HTML, SQL (MySQL and MS SQL), Redis, CSS and SCSS. I have a very good knowledge of the Laravel MVC framework, and have used it for multiple personal projects. I use Vue JS for as a frontend JavaScript framework primarily, and have released mutliple components that can be used freely in any Vue web app. I also have knowledge of Bootstrap and Bulma as UI frameworks.</p>
                        <p>I am currently employed as an Application Delivery Specialist at Advanced, the UK's third largest software company. I work in the Health Care business unit with CareNotes, an ASP.NET Web Application, with a large number of SOA services. CareNotes is used widely by the NHS for Mental Health and Community Trusts. I provide third line support for CareNotes, as well as deploy and upgrade it. CareNotes is hosted on Windows Servers with IIS.</p>
                        <p>I also have a strong knowledge of Linux and Apache, and host multiple web applications on Linux Servers. I host Web Applications and Video Game Servers privately, which is running on Virtualised Servers using Proxmox Hypervisor, as well as in Docker Containers.</p>
                        <p>Outside of Web Development and Deployment, I like to work on music in my free time, using Analog Synthesisers. I'm also a huge fan of Board Games and Virtual Reality.</p>
                        <p>Please check out my live demos on the site, and use the Contact Me form if you would like to work together!</p>
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://github.com/andy3471/" class="button">
                                        <span class="icon">
                                                <i class="fab fa-github"></i>
                                            </span>
                                        <span>Github</span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/andrew-hargrave-b36128144/" class="button">
                                        <span class="icon">
                                                <i class="fab fa-linkedin"></i>
                                            </span>
                                        <span>Linked In</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-fullheight keyshare" id="keyshare">
            <div class="container">
                <div class="section-header">
                    <h1>Key</h1>
                    <h2>Share</h2>
                </div>
                <div class="section-body">
                    <div class="level">
                        <div class="level-item">
                            <div class="buttons has-addons">
                                <a href="https://github.com/andy3471/keyshare" class="button">
                                    <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                    <span>Github</span>
                                </a>
                                <a href="https://keyshare.andyh.app" class="button">Live Demo</a>
                            </div>
                        </div>
                    </div>
                    <img class="image" src="{{ asset('img/keyshare.jpg') }}" alt="">
                    <p>KeyShare is a Web Application for sharing excess steam keys for a gaming group. The site has paginated autoloading when browsing games, to make it easy to scroll through, as well as an autocomplete search component for finding games. The site uses a Redis cache for storing a 'karma' for users, as well as caching routes for faster loading</p>
                    <p>KeyShare allows for options to enable sign ins through Steam using oAuth. The site contains an admin panel for user management, and the option to require admin approval to sign into the site.</p>
                    <p>The application was originally written in raw PHP and JavaScript, however was refactored to use the Laravel framework and VueJS as of 1.0.5. This has allowed faster development for new features, such as DLC that can be added for Games. This has been solely written by me, however is open for contributions on GitHub.
                </div>
        </section>

        <section class="hero is-fullheight keyshare" id="keyshare">
            <div class="container">
                <div class="section-header">
                    <h1>Lunch</h1>
                    <h2>Rota</h2>
                </div>
                <div class="section-body">
                    <div class="level">
                        <div class="level-item">
                            <div class="buttons has-addons">
                                <a href="https://github.com/andy3471/lunchrota" class="button">
                                    <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                    <span>Github</span>
                                </a>
                                <a href="https://lunchrota.andyh.app" class="button">Live Demo</a>
                            </div>
                        </div>
                    </div>
                    <img class="image" src="{{ asset('img/rota.jpg') }}" alt="">
                    <p>LunchRota is a ground up rewrite of an Application that was created for our service desk by <a href="https://curtisreet.co.uk">Curtis Reet</a>. The application is to be used by teams, in order to keep track of daily work roles, as well as claim available lunch slots. The original application was built on PHP5, and required further development, so I decided to rewrite this in Laravel to allow me to continue development of the application</p>
                    <p>The roles can be assigned to users either via a UI built with VueJS, or uploaded via CSV.</p>
                    <p>The site can be configured to either use a set number of available lunch slots, or be autocalculated using the number of user roles that are marked as 'available'. This is used, for example, if certain roles need to be on the phones, and you require a certain number of people who are on phones to be available at any time</p>
                    <p>LunchRota contains a full admin panel for editing Users, LunchSlots, Roles and User Roles. These use a Vue JS interface, to allow you to bulk edit.</p>
                </div>
        </section>

        <section class="hero is-fullheight keyshare" id="components">
            <div class="container">
                <div class="section-header">
                    <h1>Vue</h1>
                    <h2>Components</h2>
                </div>
                <div class="section-body">
                    <div class="component-header">
                        <h1> Date Picker </h1>
                    </div>
                    <div class="component-body">
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://github.com/andy3471/andyh-datepicker" class="button">
                                        <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                        <span>Github</span>
                                    </a>
                                    <a href="https://github.com/andy3471/andyh-timepicker" class="button">
                                        <span class="icon">
                                            <i class="fas fa-file"></i>
                                        </span>
                                        <span>Documentation</span>
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
                    <div class="component-header">
                        <h1> Time Picker </h1>
                    </div>
                    <div class="component-body">
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://github.com/andy3471/andyh-timepicker" class="button">
                                        <span class="icon">
                                                <i class="fab fa-github"></i>
                                            </span>
                                        <span>Github</span>
                                    </a>
                                    <a href="https://github.com/andy3471/andyh-timepicker" class="button">
                                    <span class="icon">
                                            <i class="fas fa-file"></i>
                                        </span>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>A time picker component for VueJS. This allows you to use v-model on a time input. This can be customised to use different minute intervals.</p>
                        <div class="level">
                            <div class="level-item">
                                <time-picker></time-picker>
                            </div>
                        </div>
                    </div>
                    <div class="component-header">
                        <h1> Auto Complete </h1>
                    </div>
                    <div class="component-body">
                        <div class="level">
                            <div class="level-item">
                                <div class="buttons has-addons">
                                    <a href="https://github.com/andy3471/andyh-autocomplete" class="button">
                                        <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>
                                        <span>Github</span>
                                    </a>
                                    <a href="https://github.com/andy3471/andyh-timepicker" class="button">
                                    <span class="icon">
                                            <i class="fas fa-file"></i>
                                        </span>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>An autocomplete component made with Vue JS and Axios. This will make a get request to an endpoint as you type, and presents a dropdown with similar results. This supports using the arrow keys and enter to select, or clicking. </p>
                        <div class="level">
                            <div class="level-item">
                                <auto-complete placeholder="Type a fruit" autocomplete-url="/autocomplete/fruit/"></auto-complete>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight work" id="work">
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
                        <div class="timeline-item is-warning">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('img/advanced.jpg') }}">
                            </div>
                            <div class="timeline-content">
                                <p class="heading">November 2017</p>
                                <p>Advanced - Application Delivery Specialist</p>
                                <ul>
                                    <li>Provide third line support for Carenotes (ASP NET Application)</li>
                                    <li>Deploy and Upgrade the Carenotes Application (Windows and Linux Servers)</li>
                                    <li>Perform overnight monthly maintenance on our hosted infrastructure</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-warning">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('img/advanced.jpg') }}">
                            </div>
                            <div class="timeline-content">
                                <p class="heading">June 2017</p>
                                <p>Advanced - Title Service Desk Analyst  </p>
                                <ul>
                                    <li>Deal with customer escalations</li>
                                    <li>Attend internal and external conference calls, such as Go To Market calls</li>
                                    <li>Provide training to the first and second line teams</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-warning">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('img/advanced.jpg') }}">
                            </div>
                            <div class="timeline-content">
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
                                <img src="{{ asset('img/advanced.jpg') }}">
                            </div>
                            <div class="timeline-content">
                                <p class="heading">April 2016</p>
                                <p>Advanced - First Line Support Technician</p>
                                <ul>
                                    <li>Answer customer queries via phone and email</li>
                                    <li>Support Adastra, Crosscare and Carenotes</li>
                                    <li>Create and manage Active Directory accounts</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item is-primary">
                            <div class="timeline-marker is-warning is-image is-32x32">
                                <img src="{{ asset('img/xpg.jpg') }}">
                            </div>
                            <div class="timeline-content">
                                <p class="heading">September 2013</p>
                                <p>Xpress Games - Business Administration Apprentice</p>
                                <ul>
                                    <li>Maintain database of stock held within the store</li>
                                    <li>Learn all operational areas of the business</li>
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


        <section class="hero is-fullheight projects">
            <div class="container">
                <div class="section-header">
                    <h1>Other</h1>
                    <h2>Projects</h2>
                </div>
                <div class="section-body">
                    <div class="projects-item">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('img/proxmox.png') }}">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Hosting</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil fuga velit? Illo rerum cum accusantium sequi fugiat recusandae vitae tempore, sunt fugit, dolores nemo saepe voluptate libero quibusdam deserunt?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Music Production</h1>
                                        <p>I produce music using Analog Synthesisers, mixed with more modern techniques. I have created and released an album that uses Analog Synths controlled via midi, along with Ableton Live and a Launchpad</p>
                                        <div class="level">
                                            <div class="level-item">
                                                <a href="https://morethandata.bandcamp.com/releases" class="button">
                                                    <span class="icon">
                                                    <i class="fab fa-bandcamp"></i>
                                                </span>
                                                    <span>Bandcamp</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('img/albumart.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-body">
                            <div class="columns is-vcentered">
                                <div class="column is-hidden-mobile">
                                    <img src="{{ asset('img/justgiving.jpg') }}">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="project">
                                        <h1>Chairity Events</h1>
                                        <p>I have hosted multiple charity events for various charities. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="hero is-fullheight contact" id="contact">
            <div class="container">
                <div class="section-header">
                    <h1>Contact</h1>
                    <h2>Me</h2>
                </div>
                <div class="section-content">
                    <p>If you would like to work with me, then be sure to contact me on <a href="mailto:me@andyh.app">me@andyh.app</a>, <a href="https://www.linkedin.com/in/andrew-hargrave-b36128144/">LinkedIn</a>, or with thhe form below</p>
                <form method="POST" action="{{ route('sendemail') }}">
                        @csrf
                        <div class="field">
                            <label class="label has-text-white" for="name">Name:</label class="label">
                            <input class="input @error('name') is-invalid @enderror" type="text" name="name" id="name" required>
                            @error('name')
                                <span role="alert">
                                    <strong class="has-text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label has-text-white" for="Email">Email:</label>
                            <input class="input @error('email') is-invalid @enderror" type="text" name="email" id="email" required>
                            @error('email')
                                <span role="alert">
                                    <strong class="has-text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="field">
                                <label class="label has-text-white" for="Email">Message:</label>
                                <textarea class="textarea @error('message') is-invalid @enderror" name="message" id="message" required></textarea>
                                @error('message')
                                    <span role="alert">
                                        <strong class="has-text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="input" class="button is-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
