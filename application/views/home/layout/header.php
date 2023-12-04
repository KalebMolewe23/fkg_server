<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Eresta Developer</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/user/style.css') ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/logo/icon.png'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="30520e0b-941c-413b-b445-6a9e3bf72c58";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <style>
        .box1{
            width: 1885px;
            margin-top: 150px;
            margin-left: 10px;
            height:370px;
            background: url(<?= base_url("/assets/logo/banner2.jpg") ?>);
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
        .portofolio1 {background-image: url(<?= base_url('assets/customer/img/bonny2.jpg'); ?>); border-radius: 50px !important;}
        .portofolio2 {background: url(<?= base_url('assets/customer/img/hidayah2.jpg'); ?>); border-radius: 50px !important;}
        .portofolio3 {background: url(<?= base_url('assets/customer/img/lukas2.jpg'); ?>); border-radius: 50px !important;}
        /* .portofolio4 {background: url(img/portofolio4.jpg); border-radius: 50px !important;}
        .portofolio5 {background: url(img/portofolio5.jpg); border-radius: 50px !important;}
        .portofolio6 {background: url(img/portofolio6.jpg); border-radius: 50px !important;}
        .portofolio7 {background: url(img/portofolio7.jpg); border-radius: 50px !important;} */

        @media only screen and (max-width: 600px) {
        .box1{
            width: 999px;
            margin-left: 0px;
        }
}
    </style>
</head>
<body>
    <header>
        <a href="/" class="logo"><img src="<?= base_url('/assets/logo/eresta_dev.png'); ?>"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="https://api.whatsapp.com/send/?phone=62895337261274&text=Halo+eresta, +bisakah+kamu+membantu+saya.+&type=phone_number&app_absent=0">Contact Me</a></li>
            <li><a href="#" id="myBtn"> Get Started</a></li>
            <hr>
            <li><a href="<?= base_url('/'); ?>"><i class='bx bxs-home'></i> Home</a></li>
            <li><a href="#project"><i class='bx bxl-product-hunt'></i> Project</a></li>
            <li><a href="#portofolio"><i class='bx bxs-book'></i> Testimonial</a></li>
            <li><a href="#"><i class='bx bx-grid'></i> About</a></li>
        </ul>
        
        <ul class="navbar_slide">
            <li><a href="<?= base_url('/'); ?>"><i class='bx bxs-home'></i> Home</a></li>
            <li><a href="#project"><i class='bx bxl-product-hunt'></i> Project</a></li>
            <li><a href="#portofolio"><i class='bx bxs-book'></i> Testimonial</a></li>
            <li><a href="#"><i class='bx bx-grid'></i> About</a></li>
        </ul>
        
        <div class="main">
            <div class="menu-container">
                <a href="https://api.whatsapp.com/send/?phone=62895337261274&text=Halo+eresta, +bisakah+kamu+membantu+saya.+&type=phone_number&app_absent=0"><button type="submit" class="button"><i class='bx bxl-whatsapp'></i> Contact Me</button></a>
                <button type="submit" class="button" id="myBtn"> Get Started</button>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Input Your Data</h2>
                </div>
                <div class="modal-body">
                    <center>
                        <h3>Username :</h3>
                        <input type="text" class="form-control">
                        <h4>Password :</h4>
                        <input type="text" class="form-control">
                    </center>
                </div><br>
                <div class="modal-footer">
                    <center>
                        <button>Login</button> <a href="#" style="color:red;"><p>Don't have an account?</p></a>
                    </center>
                </div>
            </div>

        </div>
        
    </header>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <!-- <div></div> -->
        <!-- <div></div> -->
    </div>