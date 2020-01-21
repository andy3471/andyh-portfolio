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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptas voluptates ipsa alias, eaque dolore vel? Nam corporis iure pariatur, illum consequuntur, voluptatibus dolores nobis veniam et ullam excepturi dolorum autem, totam deserunt atque nostrum
                            sint? Omnis esse, excepturi expedita reiciendis est fugit perferendis vel libero hic voluptates sunt dignissimos.
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
                    <img src="./img/keyshare.jpg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                    <a href="https://github.com/andy3471/keyshare" class="button">
                        <span class="icon">
                                <i class="fab fa-github"></i>
                            </span>
                        <span>Github</span>
                    </a>
                    <a href="https://keydemo.andyh.app" class="button">Live Demo</a>
                </div>
        </section>

        <section class="hero is-fullheight keyshare" id="keyshare">
            <div class="container">
                <div class="section-header">
                    <h1>Lunch</h1>
                    <h2>Rota</h2>
                </div>
                <div class="section-body">
                    <img src="./img/keyshare.jpg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                    <a href="https://github.com/andy3471/lunchrota" class="button">
                        <span class="icon">
                                <i class="fab fa-github"></i>
                            </span>
                        <span>Github</span>
                    </a>
                    <a href="https://rotademo.andyh.app" class="button">Live Demo</a>
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
                        <date-picker></date-picker>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                        <a href="https://github.com/andy3471/andyh-datepicker" class="button">
                            <span class="icon">
                                    <i class="fab fa-github"></i>
                                </span>
                            <span>Github</span>
                        </a>
                    </div>
                    <div class="component-header">
                        <h1> Time Picker </h1>
                    </div>
                    <div class="component-body">
                        <time-picker></time-picker>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                        <a href="https://github.com/andy3471/andyh-timepicker" class="button">
                            <span class="icon">
                                    <i class="fab fa-github"></i>
                                </span>
                            <span>Github</span>
                        </a>
                    </div>
                    <div class="component-header">
                        <h1> Auto Complete </h1>
                    </div>
                    <div class="component-body">
                        <auto-complete></auto-complete>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                        <a href="https://github.com/andy3471/andyh-autocomplete" class="button">
                            <span class="icon">
                                    <i class="fab fa-github"></i>
                                </span>
                            <span>Github</span>
                        </a>
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
                        <div class="projects-header">
                            <h1>Music</h1>
                        </div>
                        <div class="projects-body">
                            <img src="./img/music.jpg" alt="">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ullam repellat totam officia sapiente odit, distinctio voluptatum beatae? Quaerat unde, veniam voluptatum aspernatur quae nemo omnis tempora. Voluptate, cum sint!</p>
                            <a href="https://morethandata.bandcamp.com/releases" class="button">
                                <span class="icon">
                                <i class="fab fa-bandcamp"></i>
                            </span>
                                <span>Bandcamp</span>
                            </a>
                        </div>
                    </div>
                    <div class="projects-item">
                        <div class="projects-header">
                            <h1>Charity</h1>
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
