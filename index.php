<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="author" content="Colombies Olivier">
  <meta name="description" content="Colombies Olivier ingénieur à l'ISEN Toulon / Tahiti" />      
  <meta name="keywords" content="Colombies Olivier Isen toulon tahiti">
  <title>Pretty FTP light</title>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="blue-grey darken-2 lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Colombies.com</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Colombies.com</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h2 class="header center teal-text">Pretty FTP light</h2>
    </div>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
       <!-- Genration des images -->
        <ul class="collection">
            <?php

            //calcul de la taille du fichier
            function formatSizeUnits($bytes)
            {
              if ($bytes >= 1073741824)
              {
                  $bytes = number_format($bytes / 1073741824, 2) . ' GB';
              }
              elseif ($bytes >= 1048576)
              {
                  $bytes = number_format($bytes / 1048576, 2) . ' MB';
              }
              elseif ($bytes >= 1024)
              {
                  $bytes = number_format($bytes / 1024, 2) . ' KB';
              }
              elseif ($bytes > 1)
              {
                  $bytes = $bytes . ' bytes';
              }
              elseif ($bytes == 1)
              {
                  $bytes = $bytes . ' byte';
              }
              else
              {
                  $bytes = '0 bytes';
              }
              return $bytes;
          }


          function filePathParts($arg1) {
            /*echo $arg1['dirname'], "\n";
            echo $arg1['basename'], "\n";
            echo $arg1['extension'], "\n";
            echo $arg1['filename'], "\n";*/
            $File = pathinfo($arg1);
            if (isset($File['extension'])) {
              //si c'est un dossier
              return $File['filename'].'.'.$File['extension'];
            }else{
              return $File['filename'];
            }
            
          }



          $dirname = "your_file_here/";
          $files = glob($dirname."*");
          //var_dump(filesize($files[0]));
          foreach($files as $file) {
            echo '
            <li class="collection-item avatar">
              <i class="material-icons circle teal">folder</i>
              <span class="title">'.filePathParts($file).'</span>
              <p>'.formatSizeUnits(filesize($file)).'  &nbsp <br>
                 '.date("F d Y H:i:s.",filectime($file)).'
              </p>
              <a href="'.$file.'" target="_blank" class="secondary-content waves-effect waves-light btn"><i class="material-icons right">system_update_alt</i><span class="desktop">Download<span></a>
            </li>';
          }

          $xmlFile = pathinfo('/usr/admin/config/test.xml');






             
            ?>
          </ul>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer blue-grey lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Want to have a pretty design ?</h5>
          <p class="grey-text text-lighten-4">Material Design, Responsive, Easy Use</p>
          <a class="white-text" href='https://github.com/Erozbliz' target='_blank'><p class="grey-text text-lighten-4">Download GitHub</p></a>
        </div>
      
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="white-text" href='http://colombies.com/'>Colombies.com</a> made with <a class="orange-text text-lighten-3">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
