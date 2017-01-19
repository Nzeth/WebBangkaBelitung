<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css" media="screen">
  <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
  </head>
  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/io.js"></script>


<nav class="indigo darken-2 center">
      <a href="#" class="brand-logo">Hai Reva</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <div class="nav-wrapper center">
        <li><a href="#">Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Coba/cv">Profil</a></li>
        <li><a href="#">Sign Out</a></li>
        <li><a href="tumbal.php?about">About</a></li>
      </ul>

    </div>
          </nav>




<main>
<div class="row">
<form class="col s12" action="<?php echo base_url(); ?>index.php/Coba/hasil" method="post">
<div class="row">
<div class="input-field col s12">
  <i class="material-icons prefix">account_circle</i>
  <input id="icon_prefix" type="text" class="validate" name="nama" required>
  <label for="icon_prefix">Nama</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <i class="material-icons prefix">location_on</i>
  <input id="icon_telephone" type="tel" class="validate" name="alamat" required>
  <label for="icon_telephone">Alamat</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<i class="material-icons prefix">info</i>
<input id="icon_telephone" type="tel" class="validate" name="umur" required>
<label for="icon_telephone">Umur</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<i class="material-icons prefix">email</i>
<input id="email" type="email" class="validate" name="email" required>
<label for="email" data-error="wrong" data-success="right">Email</label>
</div>
</div>

<button class="btn waves-effect waves-light" type="submit" name="check" value="kirim">Submit
<i class="material-icons right">send</i>
</button>

</form>
</div>
</main>
<footer class="page-footer  indigo darken-4">
      <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <h5 class="white-text">About</h5>
                      <p class="grey-text text-lighten-4">Laporan Akhir Praktikum 4</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                      <h5 class="white-text">Find Me</h5>
                      <h4>
                        <a class="socicon-twitter" href="#!"></a>
                        <a class="socicon-linkedin" href="#!"></a>
                        <a class="socicon-youtube" href="#!"></a>
                        <a class="socicon-reddit" href="#!"></a>
                        <a  class="socicon-github" href="#!"></a>
                    </h4>
                    </div>
                  </div>
                </div>
                <div class="footer-copyright">
                  <div class="container">
                  © 2016 Copyright Text
                  </div>
                </div>
    </footer>
  </body>
</html>
