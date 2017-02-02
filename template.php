<!DOCTYPE html>

<html lang="<?php enit("en", "it") ?>" >

  <head>
    <meta charset="UTF-8">
    <html lang="<?php enit("en", "it") ?>">
    <title>
      <?php
        $title = enit($en_title, $it_title);
        echo $title;
      ?>
    </title>
    <link rel="stylesheet" href="tiles.css">
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="keywords" content="essays, craft, costruire, saggi brevi, diy, fai da te, bricolage">
    <meta name="description" content="Essays and crafts">

    <!--Start Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--End Favicon -->

  </head>

  <body>

    <header role="banner">
      <!--
      if necessary, add these property to the object
      width="100" height="100"
      -->
      <object type="image/svg+xml" data="img/argoste-logo.svg" class="argoste-logo"></object>
      <div class="choose-lang">
        <ul>
          <li>
            <a href="<?php echo $_SERVER["PHP_SELF"]."?lang=en" ; ?>">English</a>
          </li>
          <li>
            <a href="<?php echo $_SERVER["PHP_SELF"]."?lang=it" ; ?>">Italiano</a>
          </li>
        </ul>
      </div>
      <nav role="navigation" class="navigation">
        <ul>
          <li><a href="index.php"><?php enit("Homepage","Homepage") ?></a></li>
          <li><a href="blog/"><?php enit("Blog","Blog") ?></a></li>
          <li><a href="diy.php"><?php enit("Do It Yourself","Fai Da Te") ?></a></li>
          <li><a href="essays.php"><?php enit("Small essays","Saggi brevi") ?></a></li>
          <li><a href="credits.php"><?php enit("Credits","Credits") ?></a></li>
          <li><a href="apropos.php"><?php enit("About me","Chi sono") ?></a></li>
        </ul>
      </nav>
    </header>

    <main>

      <?php
        $mycontent = enit($en_content, $it_content);
        echo $mycontent;
      ?>
    </main>

    <footer role="contentinfo">

      <div class="license">
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
        <img alt="Creative Commons Licence" style="border-width:0"
        src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png"></a>
        <br>
        <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">
      www.argo3.altervista.org website content</span>
       by
       <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.argo3.altervista.org"
      property="cc:attributionName" rel="cc:attributionURL">Stefano Carlesso
      <br>
      </a> is licensed under a <a rel="license" href=
      "http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons
      Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
      </div>

    </footer>

  </body>

</html>
