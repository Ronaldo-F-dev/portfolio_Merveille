<!DOCTYPE html>
<html lang="en">
<?php $nom = "Ronaldo"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{('images/fav.png')}}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Portfolio | <?= $nom ?></title>
</head>
<body>
    <div class="container">
    <!-- -- Navigation Section -- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name"><?= $nom ?></p>
            <span>.</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Accueil</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">A propos</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#projects" class="nav-link">Projets</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn">Télécharger CV <i class="uil uil-file-alt"></i></button>
        </div>
        <div class="mode">
            <div class="moon-sun" id="toggle-switch">
                <i class="fa fa-moon" id="moon"></i>
                <i class="fa fa-sun" id="sun"></i>
            </div>
        </div>
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>
    <!-- -- Main -- -->
    <main class="wrapper">
       <!-- -- Hero Section -- -->
       <section class="featured-box" id="home">
        <div class="featured-text">
          <div class="featured-text-card">
              <span><?= $nom ?></span>
          </div>
          <div class="featured-name">
              <p>Je suis un  <span class="typedText"></span></p>
          </div>
          <div class="featured-text-info">
              <p>Développeur frontend passionné dédié à la création de sites Web visuellement captivants et parfaitement conviviaux.
              </p>
          </div>
          <div class="featured-text-btn">
              <button class="btn blue-btn">Embauchez-moi</button>
              <button class="btn">Télécharger CV <i class="uil uil-file-alt"></i></button>
          </div>
          <div class="social_icons">
              <div class="icon"><i class="uil uil-instagram"></i></div>
              <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
              <div class="icon"><i class="uil uil-dribbble"></i></div>
              <div class="icon"><i class="uil uil-github-alt"></i></div>
          </div>
        </div>
        <div class="featured-image">
          <div class="image">
              <img src="{{asset('images/ronaldo.jpg')}}" alt="ronaldo">
          </div>
        </div>
        <div class="scroll-icon-box">
          <a href="#about" class="scroll-btn">
              <i class="uil uil-mouse-alt"></i>
              <p>Faites défiler vers le bas</p>
          </a>
        </div>
     </section>
       <!-- -- About Section -- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>A propos de moi</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>Introduction</h3>
                    <p>Je suis hautement compétent en HTML, CSS et JavaScript, ainsi qu'en une gamme de frameworks et de bibliothèques modernes, me permettant de créer des expériences Web engageantes et interactives. De plus, j'ai une expérience pratique des systèmes de gestion de contenu (CMS) populaires tels que WordPress, me permettant de gérer et d'optimiser le contenu de manière transparente.
                    </p>
                    <div class="about-btn">
                        <button class="btn">Télécharger CV <i class="uil uil-import"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>Bootstrap</span>
                        <span>Tailwind CSS</span>
                        <span>Vue</span>
                        <span>React</span>
                        <span>Angular</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>Node.js</span>
                        <span>Express.js</span>
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>Django</span>
                        <span>JAVA</span>
                        <span>Python</span>
                        <span>Spring Boot</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Base de données</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>PostgreSQL</span>
                        <span>MongoDB</span>
                        <span>Firebase</span>
                        <span>SQLite</span>
                    </div>
                </div>
            </div>
          </div>
       </section>
       <!-- -- Project Section -- -->
       <section class="section" id="projects">
        <div class="top-header">
            <h1>Projets</h1>
        </div>
        <div class="project-container">
          <div class="project-box">
              <i class="uil uil-briefcase-alt"></i>
              <h3>Finis</h3>
              <label>85+ Finished Projects</label>
          </div>
          <div class="project-box">
              <i class="uil uil-users-alt"></i>
              <h3>Clients</h3>
              <label>79+ Happy Clients</label>
          </div>
          <div class="project-box">
              <i class="uil uil-award"></i>
              <h3>Experience</h3>
              <label>9+ Years in the field</label>
          </div>
        </div>
     </section>
       <!-- -- CONTACT BOX -- -->
       <section class="section" id="contact">
        <div class="top-header">
          <h1>Entrons en contact</h1>
          <span>Vous avez une idée de projet ? Faisons de cela une réalité ! Contactez-moi ici et commençons.</span>
        </div>
        <div class="row">
           <div class="col">
              <div class="contact-info">
                  <h2>Trouvez moi <i class="uil uil-corner-right-down"></i></h2>
                  <p><i class="uil uil-envelope"></i> Email: contact@ronaldodev.online</p>
                  <p><i class="uil uil-phone"></i> Tel: +229 0199653843</p>
              </div>
           </div>
           <div class="col">
              <div class="form-control">
              <form method="post" action="{{ route('form.index') }}">
    @csrf {{-- Protection CSRF obligatoire --}}

    <div class="form-inputs">
        <input type="text" class="input-field" placeholder="Nom" id="nom" name="nom" required>
        <br>
        <input type="email" class="input-field" placeholder="Email" id="email" name="email" required>
    </div>
    <span id="errorNom"></span>

    <div class="text-area">
        <textarea placeholder="Message" id="message" name="message" required></textarea>
        <span id="errorMessage"></span>
    </div>

    <div class="form-button">
        <button type="submit" class="btn" id="btnMessage">Envoyer <i class="uil uil-message"></i></button>
    </div>
</form>

            
            @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

              </div>
           </div>
        </div>
     </section>
    </main>
    <!-- -- Footer -- -->
    <footer>
        <div class="top-footer">
            <p><?= $nom ?></p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Accueil</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">A propos</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projets</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="footer-social-icons">
            <div class="icon"><i class="uil uil-instagram"></i></div>
            <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
            <div class="icon"><i class="uil uil-dribbble"></i></div>
            <div class="icon"><i class="uil uil-github-alt"></i></div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none; color: rgb(216, 86, 0);"><?=$nom;?></a> - All rights reserved</p>
        </div>
    </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>