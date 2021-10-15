<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"rel="stylesheet">
    <link href="<?php echo base_url('assets/css/typograph.css');?>"rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Profile</title>
</head>
<body class="bg-dark text-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" style="background-image: url(<?php echo base_url('assets/img/jumbotron.png');?>); background-size:cover; background-attachment:fixed; background-repeat: no-repeat;" >
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark rounded" style="background-color: #504f4ffa;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">FrHaN | Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-4">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#project">Project</a>
                    <a class="nav-link" href="#contact">Contact</a>
                    
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-image img-fluid shadow-1-string text-left text-white pl-5 " style="height: 80vh; background-size:cover" id="home">
        <div class= "p-5 text-lg-fs2" style="background: rgba(0,0,0,0.3); background-size:cover; height:80vh; flex-direction:column;">
            <h2 class="h-jumbotron">
                Welcome to my profile
            </h2>
            <p class="lead mt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe perferendis facere pariatur obcaecati voluptatibus et velit aspernatur ratione quas veritatis. Optio eum ab, illum et hic quidem cupiditate architecto aspernatur!
            </p>
        </div>
    </div>

    <div class="d-flex flex-column fs-2 pt-2 bg-dark">
        <h2 class="fs-1 text-center fw-bold text-decoration-underline" id="about">About me</h2>
        <p class="fs-5 mt-2 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eveniet recusandae, error nulla odit, culpa ut molestias labore repellendus ea a fugiat est voluptates ad quibusdam corrupti, itaque minima ipsam!</p>
        <div class="d-flex flex-row justify-content-evenly">
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/asmbly.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/asmbly.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/asmbly.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/asmbly.png');?>" alt="">
            </div>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center" style="background-color:#208dbc">
    <div class="Container px-xl-5">
        <div class="container-fluid my-4">
            <h2 class="fs-1 text-center fw-bold text-decoration-underline pb-4" id="Project">Personal Project</h2>
            <div class="container-fluid d-flex flex-xl-row justify-content-xl-between flex-column my-xl-5 my-md-4 my-s-5 px-5" style="padding: 0 5vw 0 5vw">
                <div class ="bloc_1 text-center">
                    <img src="<?php echo base_url('assets/img/asmbly.png');?>" class="img-thumbnail" alt="" width="320px">
                </div>
                <div class="bloc_2 my-s-3">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                     <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                     </div>
                     <div class="d-flex flex-row justify-content-evenly">
                        <div>abc</div>
                        <div>abc</div>
                        <div>abc</div>
                     </div>
                </div>
            </div>
            <div class="container-fluid d-flex flex-xl-row-reverse justify-content-xl-between flex-column my-3 px-5" style="padding: 0 5vw 0 5vw">
                <div class ="bloc_1 text-center">
                    <img src="<?php echo base_url('assets/img/asmbly.png');?>" class="img-thumbnail" alt="" width="320px">
                </div>
                <div class="bloc_2">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                    <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="d-flex flex-column justify-content-center" style="background-color:#a71ebf"> 
        <div class="container-fluid my-4 px-xl-5 py-5">
            <h2 class="fs-1 text-center fw-bold text-decoration-underline pb-4" id="contact">
                Contact me
            </h2>
            <div class="container-fluid d-flex flex-xl-row justify-content-xl-between flex-column " style="padding: 0 10vw 0 10vw">
                <div class ="bloc_1 text-center border">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                    <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                    </div>
                </div>
                <div class ="bloc_2 text-center border">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                    <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex flex-xl-row justify-content-xl-between flex-column" style="padding: 0 10vw 0 10vw">
                <div class ="bloc_1 text-center border">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                    <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                    </div>
                </div>
                <div class ="bloc_2 text-center border">
                    <h2 class="fs-2 text-center pt-3">ABC</h2>
                    <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro molestiae necessitatibus maxime minima aliquid doloremque voluptatem? Corrupti, labore molestiae est aut exercitationem fuga libero consequuntur ut cupiditate quo cum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="d-flex flex-column fs-2" style="background: rgba(0,0,0,0.87);">
        <div class="container-fluid">
            abc
        </div>
    </footer>


<!-- load jquery js file -->
<script src="<?php echo 
base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo 
base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>