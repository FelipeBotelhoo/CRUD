<?php
require_once(__DIR__.'/../../conexao.php');

if (!isset($_SESSION['dados_usuario'])) {
    header('Location: '.BASE_URL.'views/login/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Blog Template · Bootstrap v5.2 - getbootstrap.com/ </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <style type="text/css">
        .qFEI8L02KLK4YXGzllCPA {
            background-image: url("chrome-extension://dphoaaiomekdhacmfoblfblmncpnbahm/images/icon48.png") !important;
            background-repeat: no-repeat !important;
            background-position: 100% !important;
            background-size: auto 100% !important
        }

        .qFEI8L02KLK4YXGzllCPA._3U5WScQ4Vxd9Jk1zK1nfiu {
            background-image: url("chrome-extension://dphoaaiomekdhacmfoblfblmncpnbahm/images/icon48_green.png") !important
        }

        .qFEI8L02KLK4YXGzllCPA._38D_HoaLLZ97zT4JXrlytB {
            background-image: url("chrome-extension://dphoaaiomekdhacmfoblfblmncpnbahm/images/icon48_orange.png") !important
        }

        .qFEI8L02KLK4YXGzllCPA._27eY5NKXFOVnvoK_bGJmz1 {
            background-image: url("chrome-extension://dphoaaiomekdhacmfoblfblmncpnbahm/images/icon48_red.png") !important
        }

        .KXMfwTdOv5nWBA86brp7T {
            all: revert;
            position: absolute;
            border: 1px solid grey;
            border-radius: 4px;
            margin: 2px;
            background-color: #fff;
            min-width: 225px;
            z-index: 999999;
            text-align: start;
            line-height: normal;
            --dropdown-select-background-start: $lighterLightPurple;
            --dropdown-select-background-end: $lighterDarkPurple;
            --scrollbar-color: $darkPurple
        }

        .KXMfwTdOv5nWBA86brp7T ::-webkit-scrollbar {
            height: 4px;
            width: 4px
        }

        .KXMfwTdOv5nWBA86brp7T ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 2px
        }

        .KXMfwTdOv5nWBA86brp7T ::-webkit-scrollbar-thumb {
            background: var(--scrollbar-color);
            border-radius: 2px
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF {
            font-size: 14px;
            line-height: 18px;
            min-height: 30px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            max-height: 200px;
            overflow-y: auto
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._3arp4b04nfXj9VgM-lDwSb {
            color: grey;
            text-align: center;
            line-height: 50px
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq {
            text-align: center;
            line-height: 18px;
            font-size: small;
            padding: 5px;
            max-height: 400px
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq ._1VzKCuJQdIcnvr9nu6XVD4 {
            display: flex;
            align-items: center
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq ._1VzKCuJQdIcnvr9nu6XVD4 input {
            padding: 5px;
            width: 100%;
            height: 30px;
            border-width: 1px;
            box-sizing: border-box
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq ._1VzKCuJQdIcnvr9nu6XVD4 ._1dgW0GNgG8YFraFuR1_ZWF {
            cursor: pointer;
            right: 2px;
            width: 28px;
            height: 28px
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq ._1VzKCuJQdIcnvr9nu6XVD4 ._1dgW0GNgG8YFraFuR1_ZWF:hover svg path {
            fill: #5273d0
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._52xr7WQLJtYNG1DLmROrq ._1VzKCuJQdIcnvr9nu6XVD4 ._1dgW0GNgG8YFraFuR1_ZWF._19CTEOUGaOAnCul2k5cUW7 svg path {
            fill: #0a0
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q {
            color: #000;
            padding: 3px;
            border-bottom: 1px solid #d3d3d3;
            cursor: pointer;
            overflow-x: hidden
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q div {
            text-overflow: ellipsis;
            overflow: hidden
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q ._1MJvbXPXG2MTpECtBvGvyw {
            font-weight: 700
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q:first-child {
            -webkit-border-radius: 4px 4px 0 0;
            -moz-border-radius: 4px 4px 0 0
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q:last-child {
            border-bottom: 0;
            -webkit-border-radius: 0 0 4px 4px;
            -moz-border-radius: 0 0 4px 4px
        }

        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q.bLap8CH11Wr7RkAgbLFdv,
        .KXMfwTdOv5nWBA86brp7T ._1EN43L0RaAfe1jdYFB1HYF ._2M9holyqFVTM2KH90i6y3Q:hover {
            background-image: linear-gradient(90deg, var(--dropdown-select-background-start), var(--dropdown-select-background-end))
        }

        .KXMfwTdOv5nWBA86brp7T ._3pM18_ZyVcVnXl1sb2Zp4X {
            display: block;
            height: 30px;
            line-height: 23px;
            font-size: 14px;
            background-image: linear-gradient(90deg, #dae1f5, #5273d0);
            border-top: 1px solid grey;
            padding: 3px;
            font-weight: 700;
            color: #dae1f5;
            text-shadow: 0 0 2px #000;
            box-sizing: border-box;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif
        }

        .KXMfwTdOv5nWBA86brp7T ._3pM18_ZyVcVnXl1sb2Zp4X img {
            float: right;
            height: 100%;
            width: auto
        }

        .KXMfwTdOv5nWBA86brp7T ._3pM18_ZyVcVnXl1sb2Zp4X img._3kg-SYuhAV6WEZWiwVlJE3 {
            float: left;
            margin-right: 5px
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Large</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#"><?php echo $_SESSION['dados_usuario']['email']?></a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="<?php echo BASE_URL.'views/clientes/listagem.php';?>">Clientes</a>
                <a class="p-2 link-secondary" href="<?php echo BASE_URL.'views/usuarios/listagem.php';?>">Usuários</a>
                <a class="p-2 link-secondary" href="<?php echo BASE_URL.'views/fornecedores/listagem.php';?>">Fornecedores</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Culture</a>
                <a class="p-2 link-secondary" href="#">Business</a>
                <a class="p-2 link-secondary" href="#">Politics</a>
                <a class="p-2 link-secondary" href="#">Opinion</a>
                <a class="p-2 link-secondary" href="#">Science</a>
                <a class="p-2 link-secondary" href="#">Health</a>
                <a class="p-2 link-secondary" href="#">Style</a>
                <a class="p-2 link-secondary" href="<?php echo BASE_URL.'views/usuarios/sair.php'?>">Sair</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div>

    <?php
    if (isset($_SESSION['msg_error'])) {
        echo '<div class="col-md-12 alert alert-danger">'.$_SESSION['msg_error'].'</br>';
        unset($_SESSION['msg_error']);
    } else if (isset($_SESSION['msg_success'])) {
        echo '<div class="col-md-12 alert alert-success">'.$_SESSION['msg_success'].'</br>';
        unset($_SESSION['msg_success']);
    }
    ?>
    </div>