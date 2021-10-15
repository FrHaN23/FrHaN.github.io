<?php

class MyProfile extends CI_Controller{
    function index(){
        $data["quotes"] = "There is no path. Beyond the 
        scope of light, beyond the reach of Dark... 
        what could possibly await us? And yet, we seek it, insatiably... Such is our fate.";
        $data["quotesSource"] = "Aldia, Scholar of the First Sin";
        $data["about"] = "Hello there, my name is Muhamad Farhan, you can call me Farhan, I born in Palembang on 23 April 2001.
        Right now I going to State Polytechnic of Sriwijaya majoring in Informatics Management. I do progamming since 2018 
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
        $this->load->view('myprofile-view',$data);
    }
}

?>