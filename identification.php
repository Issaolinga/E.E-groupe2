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
                <li><a href="liste.php">Listes des crimes</a></li>
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
    <span>Nous avons besoin de vos information pour une bonne prise en charge</span>
  </div>
  </div>


    <div class="cite" id="cite">
      <section>
        <div class="crimes">
          <div class="crimes-top">
            <div class="crimes-top-seco">
              <div class="crimes-top-second-title">
                <h2>Information </h2>
                <span id="iss" style="color: rgb(241, 13, 13);">cette partie est oblicatoire. Remplir tous les champs</span>
              </div><br>
                    <form action="action_page.php">
                      <div class="row">
                        <div class="col-25">
                          <h4>Nome et Prenom</h4>
                          <label for="fname"></label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="issa olinga hermann junior">
                          <span id="iss">Votre nom comme c'est  dans la C.N.I</span>
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
                              <h4>Ville</h4>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="lastname" placeholder="Douala">
                              <span id="iss">Lieu de residence actuelle</span>
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
                          </div><br><hr><br>

                          <h2>Votre plainte </h2>
                          <span id="iss" style="color: rgb(238, 11, 11);">cette partie est oblicatoire. Remplir tous les champs</span>
                          <div class="row">
                            <div class="col-25">
                              <h4>Tel</h4>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="lastname" placeholder="690154721">
                              <span id="iss">Le numero qui a besoin assistance</span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Crimes</h4>
                            </div>
                            <div class="col-75">
                                <input type="radio" name="crimes" value="telephone" id="telephone"/><label for="telephone">..Vol de telephone</label>
                                <input type="radio" name="crimes" value="telephone" id="telephone"/><label for="telephone"> ..Vol de tablette</label>
                                <input type="radio" name="crimes" value="telephone" id="telephone"/><label for="telephone">..Vol de television</label><br>
                                <input type="radio" name="crimes" value="telephone" id="telephone"/><label for="telephone">..Vol d'ecouteur</label>
                                <input type="radio" name="crimes" value="telephone" id="telephone"/><label for="telephone"> ..Tranfert d'argent à un numero inconnu</label>
                              <br><span id="iss">le code parant de votre compagnie</span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Marque</h4>
                            </div>
                            <div class="col-75">
                                <select name="marque" id="marque">
                                    <option value="iphone">Telephone:Iphone</option>
                                    <option value="techno">Telephone: Techno</option>
                                    <option value="Itel"> Telephone: Itel</option>
                                    <option value="infocus">Telephone: Infocus</option>
                                    <option value="Apple"> Telephone: Apple</option>
                                    <option value="Huawei">Telephone: Huawei</option>
                                    <option value="Itel">Telephone: Samsung</option>
                                    <option value="fantome">Telephone: Fantome</option><hr>
                                    <option value="Itel">Ecouteur sans fil Bluetooth</option>
                                    <option value="infocus">Ecouteur Apple AirPods Pro</option>
                                    <option value="Apple">Ecouteur Apple AirPods</option>
                                    <option value="Huawei">Ecouteur sans fil Apple AirPods </option>
                                    <option value="Itel"> Ecouteur Jabra Elite</option><hr>
                                    <option value="Itel">televiseur: Samsung</option>
                                    <option value="infocus"> televiseur: Apple</option>
                                    <option value="Apple">televiseur: SONY</option>
                                    <option value="Huawei">televiseur: L.G </option>

                                </select><br>
                              <span id="iss">la marque de l'appareil voler</span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Numero dr serie</h4>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="lastname" placeholder="*********************">
                              <span id="iss">le numero de serie de l'appareil(facultative) où le numero de transfert(argent)</span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Garantie</h4>
                            </div>
                            <div class="col-75">
                                <input type="radio" name="garantie" value="Expirer" id="Expirer"/><label for="Expirer">..Expirer</label>
                                <input type="radio" name="garantie" value="Non expirer" id="Non expirer"/><label for="Non expirer"> ..Non expirer</label>
                                <input type="radio" name="garantie" value="Pas de garantie" id="Pas de garantie"/><label for="Pas de garantie">..Pas de garantie</label><br>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>N° de la facture</h4>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="lastname" placeholder="ISD123/46502021">
                              <span id="iss">saisiser le numero et le nom de compte de votre facture </span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <h4>Description</h4>
                            </div>
                            <div class="col-75">
                                <textarea name="montext" id="montext" cols="5" rows="5" placeholder="Ajouter une description.........."></textarea>

                            </div>
                          </div>
                          <span id="iss" style="color: rgb(238, 11, 11);">Vous allez recevoir sur votre boit email un message de confirmation</span>
                          <br>
                          <form action="index.php"> 
                            <div class="col-753">
                                <input type="submit" value="valider">
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
<footer class="footer" id="footer">
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
