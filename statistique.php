<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sofanofi</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="corpo.css">
  <link rel="stylesheet" href="foot.css">
  <link rel="stylesheet" href="formulaire.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div class="logo"><a href="index.php">SofaNofi</a></div>
          <ul class="links">
            <li><a href="index.php">Acceuil</a></li>
            <li>
              <a href="#" class="desktop-link">Contact</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">Contact</label>
              <ul>
                <li><a href="#">guide de fontionnement</a></li>
                <li><a href="#">Aide</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">crimes</a>
              <input type="checkbox" id="show-services">
              <label for="show-services">crimes</label>
              <ul>
                <li><a href="liste.html">Listes des crimes</a></li>
                <li><a href="identification.php">Statistiques</a></li>
              </ul>
            </li>
            <li><a href="#apropo">A propos</a></li>
            <li><a href="identification.php">S'identifier</a></li>
          </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
          <input type="text" placeholder="Type Something to Search..." required>
          <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
      </nav>
    </div>  

  <div class="dummy-text">
    <div class="logo"><a href="index.php"><h2>Crimes</h2></a></div>
    <span>Cette partie est reservée au administrateur</span>
  </div>
  </div>


    <div class="cite">
      <section>
        <div class="crimes">
          <div class="crimes-top">
            <div class="crimes-top-seco">
              <div class="crimes-top-second-title">
                <h2>Se connecter entant qu' administrateur </h2>
              </div><br>
                    <form action="action_page.php">
                      <div class="row">
                        <div class="col-25">
                          <h4>Compagnie</h4>
                          <label for="fname"></label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="CMR//yaoundé">
                          <span id="iss">Le code et le nom de votre compagniee(xxx//yyyyy)</span>
                        </div>
                      </div>
    
                      <div class="row">
                        <div class="col-25">
                          <h4>Addresse</h4>
                        </div>
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="issahermannjunior@gmail.com">
                          <span id="iss">votre addresse de messagerie</span>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-25">
                            <h4>N° de CNI</h4>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="ISD123/46502021">
                            <span id="iss">Le numero de votre carte nation d'identité</span>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Code parant</h4>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="lastname" placeholder="*********************">
                              <span id="iss">le code parant de votre compagnie</span>
                            </div>
                          </div><br>
                          <form action="index.php"> 
                            <div class="col-753">
                                <input type="submit" value="Connecte">
                              </div><br>
                        </form>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </section>
  </div>

<!-- creation du footer -->
<footer class="footer">
  <div class="footer-left">
    <div class="logoo"><a href="index.php">SofaNofi</a></div>
      <p> 
        Nous sommes à votre service et avec votre aide, nous voulons mettre fin au crimes électromiques. 
        soihait vigilent!!<br>
      <br>
      </p>
      
      <div class="socials">
          <a href="https://web.whatsapp.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://web.whatsapp.com/"><i class="fa fa-twitter"></i></a>
          <a href="https://web.whatsapp.com/"><i class="fa fa-.whatsapp"></i></a>
          <a href="https://web.whatsapp.com/"><i class="fa fa-youtube"></i></a>
          <a href="https://web.whatsapp.com/"><i class="fa fa-instagram"></i></a>
      </div>

  </div>
  <ul class="footer-right">
      <li>
          <h2>contact</h2>

          <ul class="box">
              <li><a href="#">Facebook</a></li>
              <li><a href="https://web.whatsapp.com/">Whatsapp</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Youtube</a></li>
          </ul>
      </li>
      <li class="features" id="apropo">
          <h2>A propos</h2>

          <ul class="box">
              <li><a href="#">Condition</a></li>
              <li><a href="#">Inscription</a></li>
              <li><a href="#">Nos services</a></li>
              <li><a href="#">confidencialité</a></li>
          </ul>
      </li>
      <li>
          <h2>Address</h2>

          <ul class="box">
              <li><a href="#">690154721</a></li>
              <li><a href="#">Nanga-Eboko</a></li>
              <li><a href="#">Centre-cameroun</a></li>
              <li><a href="#">Afrique-centrale</a></li>
          </ul>
      </li>
  </ul>

  <div class="footer-bottom">
      <p>issahermann/conception@ 2020</p>
  </div>
</footer>
</body>
</html>
