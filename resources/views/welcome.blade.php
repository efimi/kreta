<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kreta Paderborn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.6.2-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" integrity="sha256-2k1KVsNPRXxZOsXQ8aqcZ9GOOwmJTMoOB5o5Qp1d6/s=" crossorigin="anonymous" />
  {{-- <link rel="stylesheet" type="text/css" href="css/landing.css"> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


  <style>
    html,body {
      font-family: 'Open Sans', serif;
    }
    .hero.is-info {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('img/bg2.jpg') }}') no-repeat center center fixed;
      /*background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('http://unsplash.com/photos/JKMnm3CIncw') no-repeat center center fixed;*/
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .hero .nav, .hero.is-success .nav {
      -webkit-box-shadow: none;
      box-shadow: none;
    }
    .hero .subtitle {
      padding: 3rem 0;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <section class="hero is-info is-fullheight">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="../">
            
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
              <!-- <div class="navbar-end">
                           <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-home"></i>
                  </span>
                  <span>Home</span>
                </a>
              </span>
                           <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-superpowers"></i>
                  </span>
                  <span>Examples</span>
                </a>
              </span>
              <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-book"></i>
                  </span>
                  <span>Documentation</span>
                </a>
              </span>
              <span class="navbar-item">
                <a class="button is-white is-outlined" href="https://github.com/dansup/bulma-templates/blob/master/templates/landing.html">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                  <span>View Source</span>
                </a>
              </span>
          </div> -->
        </div>
      </nav>
    </div>

    <div class="hero-body">
      <div class="container">
        <div class="column is-6 is-offset-3">
            <div class="has-text-centered">          
                  <h1 class="title ">
                          Kreta Paderborn
                        </h1>
                        <h2 class="subtitle">
                          Dein Grieche an der Ecke
                        </h2>
            </div>          

        <div class="box">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                  </div>
                </div>

                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                  <a href="#">#css</a> <a href="#">#responsive</a>
                  <br>
                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
              </div>
            </div>
            
          {{-- <form action="#">
            <div class="field">
              <label class="label">Name 1.Teilnehmer</label>
              <div class="control">
                <input class="input" type="text" placeholder="Eingabe">
              </div>
            </div>

            <div class="field">
              <label class="label">Name 2.Teilnehmer</label>
              <div class="control has-icons-left has-icons-right">
                <!-- is-success -->
                <input class="input" type="text" placeholder="Eingabe" >
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <!-- <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span> -->
              </div>
              <!-- <p class="help is-success">This username is available</p> -->
            </div>

            <div class="field">
              <label class="label">Kontakt Email</label>
              <div class="control has-icons-left has-icons-right">
                <!-- is-danger -->
                <input class="input" type="email" placeholder="Emaileingabe" >
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
               <!--  <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span> -->
              </div>
              <!-- <p class="help is-danger">This email is invalid</p> -->
            </div>

            <div class="field">
              <label class="label">Kontakt Telefonnummer</label>
              <div class="control has-icons-left has-icons-right">
                <!-- is-danger -->
                <input class="input" type="phone" placeholder="Telefonnummer" >
                <span class="icon is-small is-left">
                  <i class="fas fa-phone"></i>
                </span>
                <!-- <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span> -->
              </div>
              <!-- <p class="help is-danger">This email is invalid</p> -->
            </div>


            <div class="field">
              <label class="label">Art</label>
              <div class="control">
                <div class="select">
                  <select>
                    <option>Mit Alkohol</option>
                    <option>Ohne Alkohol</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Weiter Bemerkungen</label>
              <div class="control">
                <textarea class="textarea" placeholder="Allergien, Sonstiges"></textarea>
              </div>
            </div>

            <div class="field">
              <div class="control">
                <label class="checkbox">
                  <input type="checkbox">
                  Ich stimme mit den <a href="#">AGB</a> zu. 
                </label>
              </div>
            </div>

            <!-- <div class="field">
              <div class="control">
                <label class="radio">
                  <input type="radio" name="question">
                  Yes
                </label>
                <label class="radio">
                  <input type="radio" name="question">
                  No
                </label>
              </div>
            </div> -->

            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Abschicken</button>
              </div>
              <div class="control">
                <button class="button is-text">Abbrechen</button>
              </div>
            </div>
          </form> --}}

          </div>
        </div>
      </div>
    </div>

  </section>
  <script>
    (function() {
        var burger = document.querySelector('.burger');
        var menu = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
  </script>
</body>
</html>