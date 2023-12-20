<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eresta Developer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('/assets/logo/icon.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('/assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('/assets/css/user/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('/assets/css/user/style.css') ?>" rel="stylesheet">

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="30520e0b-941c-413b-b445-6a9e3bf72c58";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    <style>

        .client1 {background-image: url(<?= base_url('assets/customer/img/bonny2.jpg'); ?>); border-radius: 50px !important;}
        .client2 {background: url(<?= base_url('assets/customer/img/hidayah2.jpg'); ?>); border-radius: 50px !important;}
        .client3 {background: url(<?= base_url('assets/customer/img/lukas2.jpg'); ?>); border-radius: 50px !important;}
        /* .portofolio4 {background: url(img/portofolio4.jpg); border-radius: 50px !important;}
        .portofolio5 {background: url(img/portofolio5.jpg); border-radius: 50px !important;}
        .portofolio6 {background: url(img/portofolio6.jpg); border-radius: 50px !important;}
        .portofolio7 {background: url(img/portofolio7.jpg); border-radius: 50px !important;} */

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 100%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
        from {bottom: -300px; opacity: 0} 
        to {bottom: 0; opacity: 1}
        }

        @keyframes slideIn {
        from {bottom: -300px; opacity: 0}
        to {bottom: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
        from {opacity: 0} 
        to {opacity: 1}
        }

        @keyframes fadeIn {
        from {opacity: 0} 
        to {opacity: 1}
        }
</style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->