<?php

require_once 'Config/Functions.php';
$Fun_call = new Functions();

$fetch_video = $Fun_call->select_order('videos', 'v_id', 'DESC');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/MTGroup-removebg-preview.png">
    <title>MTGroup - Cursos musicales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <link rel="stylesheet" href="Stylesheet/stylesheet.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header class="hero">
    

    <nav class="nav container">
      <figure class="nav__logo">
        <img src="images/MTGroup-removebg-preview.png" class="nav__img">
      </figure>

      <a href="../../index.php" class="nav__link">Inicio</a>
      <a href="../../index.php#team" class="nav__link">Equipo</a>
      <a href="../../nosotros.php" class="nav__link">Nosotros</a>
      <a href="../../login.php" class="nav__link">Login</a>
    </nav>


  </header>
    <div class="container-fluid">

        <div class="container">
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <div class="nav-link heading">Cursos musicales</div>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="ins-box">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php if($fetch_video){ foreach($fetch_video as $video_data){ ?>
                    <div class="col mb-4">
                        <div class="card h-100">
                          <div class="set-box youtube-video-r">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_data['v_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                          
                        </div>
                    </div>    
                    <?php }} ?>
                </div>
                <?php if(!$fetch_video){echo "<h1 class='text-center'>Sorry Vidoes Not Found</h1>";} ?>
            </div>
        </div>

    </div>

    <footer class="footer ">
    <section class="footer__container container">
      

      <div class="footer__items">
        <p class="footer__contact footer__contact--first">
          <img src="images/icon-location.svg" class="footer__icon">
          29 sur 18 1/2 poniente #0935 Talca, Chile
        </p>
  
  
       
  
        <nav class="footer__nav">
          <a href="#" class="footer__link">Inicio</a>
          <a href="nosotros.php" class="footer__link">Nosotros</a>
          

          
        </nav>
  
        <nav class="footer__nav">
          <a href="#team" class="footer__link">Equipo</a>
          <a href="#contacto" class="footer__link">Contacto</a>
        </nav>
  
        <div class="footer__social">
          <a href="#" class="footer__media"><img src="images/fb.svg" class="footer__img"></a>
          <a href="#" class="footer__media"><img src="images/twitter.svg" class="footer__img"></a>
          <a href="#" class="footer__media footer__media--last"><img src="images/instagram.svg" class="footer__img"></a>
        </div>
      </div>
      
    </section>


  </footer>


<!--End - Delete - Modal -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>