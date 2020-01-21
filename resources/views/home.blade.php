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
        <section class="nav-page hero is-fullheight">
            <div class="nav-list columns is-desktop">
                <div class="column nav-item"><a href="#">About Me</a></div>
                <div class="column nav-item"><a href="#">KeyShare</a></div>
                <div class="column nav-item"><a href="#">Rota</a></div>
                <div class="column nav-item"><a href="#">Components</a></div>
                <div class="column nav-item"><a href="#">Work Experience</a></div>
                <div class="column nav-item"><a href="#">Other Projects</a></div>
                <div class="column nav-item"><a href="#">Contact Me</a></div>
            </div>
        </section>


        <section class="header hero is-fullheight" id="header">
            <div class="container">
                <div class="header-text">
                    <div class="logo">
                        <h1>Andy</h1>
                        <h2>Hargrave</h2>
                    </div>
                    <h3>Some kind of tagline</h3>
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
                        <p>
                            Hi, I'm Andrew Hargrave. I'm a self taught Web Developer that works with PHP, JS, HTML, SQL (MySQL and MS SQL), Redis, CSS and SCSS. I have a very good knowledge of the Laravel MVC framework, and have used it for multiple personal projects.

                            I am currently employed as an Application Delivery Specialist at Advanced, the UK's third largest software company. I work in the Health Care business unit with CareNotes, an ASP.NET Web Application, with a large number of SOA services. CareNotes is used widely by the NHS for Mental Health and Community Trusts. I provide third line support for CareNotes, as well as deploy and upgrade it. CareNotes is hosted on Windows Servers with IIS.

                            I also have a strong knowledge of Linux and Apache, and host multiple web applications on Linux Servers. I host Web Applications and Video Game Servers privately, which is running on Virtualised Servers using Proxmox, as well as in Docker Containers.

                            I have released multiple Vue Components that are available to be used in any application

                            Outside of Web Development and Deployment, I like to work on music in my free time, using Analog Synthesisers.`
                        </p>
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
                                <a href="https://keydemo.andyh.app" class="button">Live Demo</a>
                            </div>
                        </div>
                    </div>
                    <img src="./img/keyshare.jpg" alt="">
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
                                <a href="https://rotademo.andyh.app" class="button">Live Demo</a>
                            </div>
                        </div>
                    </div>
                    <img src="./img/keyshare.jpg" alt="">
                    <p>LunchRota is a ground up rewrite of an Application that was created for our service desk by <a href="">Curtis Reet</a>. The application is to be used by teams, in order to keep track of daily work roles, as well as claim available lunch slots. The original application was built on PHP5, and required further development, so I decided to rewrite this in Laravel to allow me to continue development of the application</p>
                    <p>The roles can be assigned to users either via a UI built with VueJS, or uploaded via CSV.
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
                                        Documentation
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>A simple date picker component for VueJS. This allows you to use v-model on a date input to select a date.</p>
                        <div class="container">
                            <date-picker></date-picker>
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
                                        Documentation
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>A time picker component for VueJS. This allows you to use v-model on a time input. This can be customised to use different minute intervals.</p>
                        <time-picker></time-picker>
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
                                        Documentation
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p>An autocomplete component made with Vue JS and Axios. This will make a get request to an endpoint as you type, and presents a dropdown with similar results </p>
                        <div class="level">
                            <div class="level-item">
                                <auto-complete :classes="input"></auto-complete>
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
                            <div class="columns">
                                <div class="column">
                                    <img src="{{ asset('img/albumart.jpg') }}">
                                </div>
                                <div class="column is-three-quarters">
                                    <div class="projects-header">
                                        <h1>Music Production</h1>
                                    </div>
                                    <p>I like to produce music using Analog Synthesisers, mixed with more modern techniques. I have created an album that uses Analog Synths controlled via midi, along with Ableton Live and a Launchpad</p>
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
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-header">
                            <h1>Charity Events</h1>
                        </div>
                        <div class="projects-body">
                            <img src="./img/charity.jpg" alt="">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-header">
                            <h1>Hosting</h1>
                        </div>
                        <div class="projects-body">
                            <img src="./img/hosting.jpg" alt="">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-header">
                            <h1>Photo Editing</h1>
                        </div>
                        <div class="projects-body">
                            <img src="./img/hosting.jpg" alt="">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
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
                    <form action="">
                        <div class="field">
                            <label class="label has-text-white" for="name">Name:</label class="label">
                        <input class="input" type="text" name="name" id="name" required>
                    </div>
                    <div class="field">
                        <label class="label has-text-white" for="Email">Email:</label>
                            <input class="input" type="text" name="email" id="email" required>
                        </div>
                        <div class="field">
                            <label class="label has-text-white" for="Email">Message:</label>
                            <textarea class="textarea" name="message" id="message" required></textarea>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="input" class="button is-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
