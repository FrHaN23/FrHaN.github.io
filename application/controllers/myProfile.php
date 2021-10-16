<?php

class MyProfile extends CI_Controller{
    function index(){
        $data["quotes"] = array(
            "There is no path. Beyond the 
            scope of light, beyond the reach of Dark... 
            what could possibly await us? And yet, we seek it, insatiably... Such is our fate.",
            "We all make choices in life, but in the end our choices make us.",
            "What is better? To be born good or to overcome your evil nature through great effort?",
            "It’s dangerous to go alone, take this!",
            "You are here, and it’s beautiful, and escaping isn’t always something bad.",
            "We both said a lot of things that you're going to regret. But I think we can put our differences behind us. For science. You monster.",
            "No matter how dark the night, morning always comes, and our journey begins anew.",
            "Stop right there, criminal scum!",
            "YOU DIED",
            "I used to be an adventurer like you until I took an arrow to the knee.",
            "Finish Him!",
        );
        $data["quotesSource"] = array(
            "Aldia, Scholar of the First Sin (Dark Souls 2)",
            "Andrew Ryan (Bioshock)",
            "Paarthurnax (The Elder Scroll V: Skyrim)",
            "Old Man (The Legend of Zelda)",
            "Delilah (Firewatch)",
            "GLaDOS (Portal 2)",
            "Lulu (Final Fantasy X)",
            "Town Guard (The Elder Scrolls IV: Oblivion)",
            "Dark Souls",
            "Town Guard (The Elder Scrolls V: Skyrim)",
            "Announcer (Mortal Kombat)"
        );
        $data["about"] = "Hello there, my name is Muhamad Farhan, you can call me Farhan, I born in Palembang on 23 April 2001.
        Right now I going to State Polytechnic of Sriwijaya majoring in Informatics Management, I love reading books and comics. I do progamming since 2018 
        starting with C and so on. I have experience with JavaScript, Visual Basic .NET, Dart, PHP, HTML, CSS, SQL, Non SQL, Git, and more,
        then some framework such as Flutter, Hapi, Node.Js,Express, Laravel, CodeIgniter, Bootstrap, etc. \n 
        I hope every day is always smooth and without any problems, and for you too of course. \n
        Here some of my personal project.";
        $data["projectTitle"] = array(
            "Meow Book",
            "Penjualan Sederhana (Simple POS)",
            "Simple Student Management");
        $data["projectLink"] = array(
            "Meonk-Books",
            "Kasir-Penjualan-Sederhana",
            "Simple-Manajemen-Siswa"
        );
        $data["projectDesc"] = array(
            "Meow Book is an app that allow you to find, review, search, and read book and novel from Android or iOS. this app built using Flutter", 
            "Penjualan Sederhana is an app that inspire from complex Point-of-Sales (POS) and we built this with simplicity in mind. this app built using Visual Basic .NET and Ms. Access",
            "Simple Student Management is an app that to manage student data, using simple (near nonexistent) UI and with help Ms. Access database for ease use. this app built using Visual Basic .NET and Ms. Access");
        $data["email"] = "farhan.kzsr23@gmail.com";
        $data["icoLang"] = array(
            "javascript.png",
            "flutter.png",
            "html.png",
            "dotnet.png",
        );
        $data["icoLink"] = array(
            "https://www.javascript.com/",
            "https://flutter.dev/",
            "https://html.spec.whatwg.org/",
            "https://dotnet.microsoft.com/"

        );

        $this->load->view('myprofile-view',$data);
    }
}

?>