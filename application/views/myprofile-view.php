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
<body class="bg-dark text-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" style="background-image: url(<?php echo base_url('assets/img/jumbotron.png');?>); background-size:cover; background-attachment:fixed;" >
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #504f4ffa;">
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
                <?php echo $quotes?>
            </p>
            <figcaption class="blockquote-footer mt-1" style="color: white">
                <?php echo $quotesSource?>
            </figcaption>
        </div>
    </div>

    <div class="d-flex flex-column fs-2 pt-2 bg-dark">
        <h2 class="fs-1 text-center fw-bold text-decoration-underline" id="about">About me</h2>
        <p class="fs-5 mt-2 mx-5">
        <?php echo $about?>
        </p>
        <div class="d-flex flex-row justify-content-evenly">
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/javascript.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/flutter.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/html.png');?>" alt="">
            </div>
            <div class="diamond-shape">
                <img src="<?php echo base_url('assets/img/dotnet.png');?>" alt="">
            </div>
        </div>
    </div>



    <div class="d-flex flex-column justify-content-center" style="background-color:#208dbc">
    <div class="Container px-xl-5">
        <div class="container-fluid my-4">
            <h2 class="fs-1 text-center fw-bold text-decoration-underline pb-4" id="project">Personal project</h2>
            <?php
                for($i=0;$i<count($projectTitle);$i++){
                    if($i%2==0){
            ?>
            <div class="container-fluid d-flex flex-xl-row justify-content-xl-between flex-column my-xl-5 my-md-4 my-s-5 px-5 border-bottom" style="padding: 0 5vw 0 5vw">
                <div class ="bloc_1 text-center mx-5 py-5">
                    <img src="<?php echo base_url('assets/img/'.$i.'.jpg' );?>" class="img-fluid" alt="" width="220px">
                </div>
                <div class="bloc_2 my-s-3">
                    <h2 class="fs-2 text-center pt-3">
                        <?php echo $projectTitle[$i] ?>
                    </h2>
                    <div class="fs-4 p-xl-4 p-md-3 p-s-2 mx-lg-5 mx-md-3 mx-s-1">
                        <?php echo $projectDesc[$i] ?>
                    </div>
                    <div class="d-flex flex-row justify-content-evenly m-5">
                        <a href="<?php echo "https://github.com/FrHaN23/".$projectLink[$i]?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo base_url('assets/ico/github.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </a>
                    </div>
                </div>
            </div>
            <?php } else{?>
            <div class="container-fluid d-flex flex-xl-row-reverse justify-content-xl-between flex-column my-xl-5 my-md-4 my-s-5 px-5 border-bottom" style="padding: 0 5vw 0 5vw">
                <div class ="bloc_1 text-center mx-5 py-5">
                    <img src="<?php echo base_url('assets/img/'.$i.'.jpg');?>" class="img-fluid" alt="" width="320px">
                </div>
                <div class="bloc_2 my-s-3">
                    <div class="fs-2 text-center pt-3">
                        <?php echo $projectTitle[$i] ?>
                    </div>
                    <div class="fs-4 p-xl-4 p-md-3 p-s-2 mx-lg-5 mx-md-3 mx-s-1">
                    <?php echo $projectDesc[$i] ?>
                    </div>
                <div class="d-flex flex-row justify-content-evenly m-5">
                        <a href="<?php echo "https://github.com/FrHaN23/".$projectLink[$i]?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo base_url('assets/ico/github.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </a>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
    </div>

    <div class="d-flex flex-column justify-content-center" style="background-color:#a71ebf"> 
        <div class="container-fluid my-4 px-xl-5 py-5">
            <h2 class="fs-1 text-center fw-bold text-decoration-underline pb-4" id="contact">
                Contact me
            </h2>
            <div class="container-fluid d-flex flex-xl-row flex-column justify-content-evenly" style="padding: 5vh 15vw 5vh 15vw">
                <a href="mailto:<?php echo $email ?>" style="color: inherit; ">    
                    <div class ="bloc_1 text-center pt-3">
                        <div class="fs-2 text-center pt-3">
                            <img src="<?php echo base_url('assets/ico/envelope.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </div>
                        <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-md-3 mx-s-1 pb-4">
                            <?php echo $email ?>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/FrHaN23" target="_blank" rel="noopener noreferrer" style="color: inherit;">
                    <div class ="bloc_2 text-center pt-3">
                        <div class="fs-2 text-center pt-3">
                            <img src="<?php echo base_url('assets/ico/github.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </div>
                        <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-md-3 mx-s-1 pb-4">
                            FrHaN23
                        </div>
                    </div>
                </a>
                <a href="" target="_blank" rel="noopener noreferrer" style="color: inherit;">
                    <div class ="bloc_1 text-center pt-3">
                        <div class="fs-2 text-center pt-3">
                            <img src="<?php echo base_url('assets/ico/telephone.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </div>
                        <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                            Undisclosed
                        </div>
                    </div>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" style="color: inherit;">
                    <div class ="bloc_2 text-center pt-3">
                        <div class="fs-2 text-center pt-3">
                            <img src="<?php echo base_url('assets/ico/house.svg');?>" alt="" width="80vw" style="filter: invert(100%)">
                        </div>
                        <div class="p-xl-4 p-md-3 p-s-2 p-xs-1 mx-lg-5 mx-md-3 mx-s-1 pb-4">
                            Undisclosed
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <footer class="d-flex flex-column fs-2 pt-5" style="background: rgba(0, 0, 0, 0.89);">
        <div class="container-fluid d-flex flex-row justify-content-evenly pt-5 pb-5">
            <a href="https://web.facebook.com/farhan.kzsr" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo base_url('assets/ico/facebook.svg');?>" alt="" width="50vw" style="filter: invert(100%)">
            </a>
            <a href="https://twitter.com/FrHaNkzsr" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo base_url('assets/ico/twitter.svg');?>" alt="" width="50vw" style="filter: invert(100%)">
            </a>
            <a href="https://www.instagram.com/frhankzsr/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo base_url('assets/ico/instagram.svg');?>" alt="" width="50vw" style="filter: invert(100%)">
            </a>
        </div>
        <div class="d-flex flex-row justify-content-center my-5">
            <p class="lead text-center" style="font-size: 15px;">
                All rights reserved &#169; Muhamad Farhan | Built using <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer">Bootstrap 5</a> 
            </p>
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