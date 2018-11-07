<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    
    <!-- Useful meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, noodp">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="public">
    <meta http-equiv="Expires" content="Wed, 22 Mar 3205 00:20:05 GMT">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ mix('css/slick.css') }}">
    <link href="{{ mix('css/all.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <title>@section('title')Design Hub International@show</title>
</head>
<body>
<section id="modal_callback" class="container-fluid modal_callback">
    <div class="container">
        <div class="modal_callback_content animated fadeInUp">
            <div class="col-12">
                <div class="text-right">
                    <a href="#" onclick="return false" id="close_callback" class="nav-link c__grey c_h__yellow title_size__xl py-0 px-0" style="outline:none;">&times;</a>
                </div>
            </div>
            <div class="col-12 pb-3">
                <div class="d-flex justify-content-center">
                    <form id="modal_callback_form" class="form_modal_callback px-0 py-0" method="POST" action="{{ route('contacts') }}" enctype="multipart/form-data">
                        <h2 class="fira__regular title_size__md text-center">Make an order</h2>
                        <p class="fira__light text_size__md text-center c__black">Leave your contacts and we will orient you at the price of our services within 25 minutes</p>
                        <div class="text-center my-2">
                            <label for="modal_callback_user_choise" class="form_label fira__regular text_size__md text-left mx-0" >Call me</label>
                            <select name="description" id="modal_callback_user_choise" class="form_select fira__light text_size__md border brc__metal brc_h__yellow mx-0 py-1 px-2">
                                <option class="form_option text_size__md" value="Call me as soon as possible">as soon as possible</option>
                                <option class="form_option text_size__md" value="Call me tomorrow">tomorrow</option>
                            </select>
                            <!--<input type="text" id="modal_callback_user_choise" class="form_input border brc__black px-3 py-1" value="+38 " placeholder="()" style="width: 45%;">-->
                        </div>
                        <div class="text-center my-2">
                            <input type="text" name="name" class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="Your name">
                        </div>
                        <div class="text-center my-2">
                            <input type="text" id="modal_callback_user_phone" name="phone" required class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="38 (___) ___ __ __">
                        </div>
                        <div class="text-center my-3">
                            <input type="hidden" name="type" value="{{ App\Contact::TYPE_CALL }}" />
                            <button type="submit" class="button border-0 fira__medium text_size__md c__black bgc__yellow bgc_h__yellow px-5 py-2">Request a call</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="modal_page" class="container-fluid modal_page">
    <div class="container">
        <div class="modal_page_content animated fadeInUp" >
            <a href="#" onclick="return false" id="close_page" class="modal__page_close" style="outline:none;"></a>
            <div class="modal__slick" id="modal_page_content"></div>
        </div>
    </div>
</section>

<section id="modal_ty_page" class="container-fluid modal_ty_page">
    <div class="container">
        <div class="modal_ty_page_content animated fadeInUp">
            <div class="col-12">
                <div class="text-right">
                    <a href="#" onclick="return false" id="close_ty_page" class="nav-link c__grey c_h__yellow title_size__xl py-0 px-0" style="outline:none;">&times;</a>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center" style="max-height:100%;min-height:50%;">
                <h2 class="h2 fira__regular title_size__md text-center">Your order is sent</h2>
            </div>
        </div>
    </div>
</section>

<section id="modal_menu" class="container-fluid modal_menu">
    <div style="position: fixed; top:24px; right: 10px;">
        <a href="#" onclick="return false" id="close_menu" class="nav-link title_size__xl py-0 my-0 c__white c_h__yellow">&times;</a>
    </div>
    <div class="modal_menu_content animated fadeInLeft">
        <ul class="nav d-flex flex-column justify-content-center align-items-start pt-4">
            <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Why us</a></li>
            <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Services</a></li>
            <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Portfolio</a></li>
            <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Guarantees</a></li>
            <li class="nav-item"><a href="#product_cart"  class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Specialists</a></li>
            <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Technology</a></li>
            <li class="nav-item"><a href="#contacts" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Contacts</a></li>
        </ul>
    </div>
</section>

<header id="header" class="container-fluid bgc__graphite fixed-top mx-0 px-0" style="height: 100px;">
    <div class="row d-flex justify-content-center mx-0 px-0">
        <div class="col-10 col-lg-auto">
            <div class="d-flex justify-content-start align-items-center" style="height: 100px;">
                <a href="#banner">
                    <img src="img/logotype.png" alt="" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-auto">
            <ul class="nav d-flex justify-content-center align-items-center" style="height: 100px;">
                <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Benefits</a></li>
                <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Services</a></li>
                <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Portfolio</a></li>
                <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Guarantees</a></li>
                <li class="nav-item"><a href="#product_cart" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Team</a></li>
                <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Downloads</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">BIM & Technologies.</a></li>
            </ul>
        </div>
        <div class="col-2 d-lg-none">
            <ul class="nav d-flex justify-content-end align-items-center" style="height: 100px;">
                <li class="nav-item"><a href="#" id="bars" onclick="return false" class="nav-link c__white c_h__yellow"><i class="fas fa-bars"></i></a></li>
            </ul>
        </div>
        <div class="d-none d-lg-block col-lg-auto">
            <div class="d-flex justify-content-start align-items-center" style="height: 100px;">
                <div>
                    <a href="#" id="language_top" class="nav-link open__regular text_size__md c__white c_h__white pl-0 top_lang">En</a>
                </div>
                <div class="top_contacts">
                    <a href="#" onclick="return false" id="callback_top" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-1">Request Call</a>
                    <a href="#contacts" class="button border-0 open__semibold text_size__md px-4 py-1 contact-top">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="banner" class="jumbotron jumbotron-fluid banner mb-0 " style="height: 600px; margin-top: 100px;">
    <div id="video-bg">
        <video width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop">
            <source src="img/banner-video.mp4" type="video/mp4"></source>
        </video>
        <div class="container d-flex align-items-center" style="height: 100%;">
            <div class="col-12 text-left text-lg-center wow fadeInUp">
                <div class="montserrat__bold title_size__lg c__white d-flex flex-column align-items-center my-5 first-screen-h" style="text-align: center;">
                    REDUCE YOUR OPERATIONAL EXPENSES BY HIRING PROFESSIONAL OUTSOURCE TEAM OF
                    <div class="word-switcher__wrapper">
                        <ul class="word-switcher">
                            <li>ARCHITECTS</li>
                            <li>DRAFTERS</li>
                            <li>MODELLERS</li>
                            <li>CGI ARTISTS</li>
                            <li>GRAPHIC DESIGNERS</li>
                            <li>BIM MANAGERS</li>
                            <li>ARCHITECTS</li>
                        </ul>
                    </div>
                </div>
                <h1 class="montserrat__bold title_size__md c__white first-screen-h1" style="text-align: center;">
                    We are ready & set outsource team of professionals in architectural design that allows you instantly expand the workforce and increase your margin to up to <b class="c__yellow">100<span class="text_size__xl">%</span></b>
                </h1>
                <div class="my-5" style="text-align: center;">
                    <a href="#calculation" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-3" style="text-transform: uppercase;">REQUEST QUOTE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="inforgraphic" class="container-fluid py-5">
    <div class="container wow fadeInUp">
        <div class="col-12 pb-3">
            <h1 class="montserrat__bold title_size__xl text-center">Just Compare <br/> The Staff And Operating Costs</h1>
        </div>
        <!-- <img src="img/infographic.png" alt="" class="img-fluid"> -->
        <ul class="info-name">
            <div class="info-name__wrap">
                <li class="active" data-slide="0">Netherlands</li>
                <li data-slide="1">United Kingdom</li>
                <li data-slide="2">United States</li>
                <li data-slide="3">Germany</li>
                <li data-slide="4">Switzerland</li>
                <li data-slide="5">Denmark</li>
                <li data-slide="6">Austria</li>
                <li data-slide="7">HongKong</li>
                <li data-slide="8">Singapore</li>
                <li data-slide="9">Israel</li>
                <li data-slide="10">Italy</li>
            </div>
        </ul>
        <div class="inforgraphic-slider">
            <div>
                <img src="img/graphics/Netherland.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/UK.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/USA.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Germany.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Switzerland.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Denmark.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Austria.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/HongKong.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Singapore.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Israel.jpg" alt="" class="img-fluid">
            </div>
            <div>
                <img src="img/graphics/Italy.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col">
                <h1 class="montserrat__bold title_size__xl text-center pb-0 pb-lg-3">Benefits</h1>
            </div>
        </div>
        <div class="row flex-wrap">
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>01</h3>
                    <h4>Higher margin</h4>
                    <p>Majority of the core design team – high skilled experienced professionals – based in your office.</p>
                    <p>Majority of technical personnel – skilled and experienced graduates and professionals – outsourced at the rates x2 less than your local salary rates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>02</h3>
                    <h4>Less operational expenses</h4>
                    <p>Less number of needed office space, desktops, equipment, software & hardware, less HR and Finance departments workload</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>03</h3>
                    <h4>Keeps your head office core team of an optimum size</h4>
                    <p>Immediate outsource team mobilization allows to keep the head office team of a predictable constant size.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>04</h3>
                    <h4>More valuable service for your CIS clients</h4>
                    <p>Assurance in the appropriate design solutions in accordance to local market needs and regulation requirements when work in CIS area.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>05</h3>
                    <h4>Less expenses on the further design package adaptation for your CIS clients</h4>
                    <p>Cost saving on business trips and additional expenses on one hand and assurance for the client that the initial design concept is preserved through to delivery. Which is beneficial in terms of the higher probability to win competition.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="container-fluid bgc__grey py-5">
    <div class="container wow fadeInUp">
        <div class="col-12">
            <h1 class="montserrat__bold title_size__xl text-center pb-0 pb-lg-4">Services</h1>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="wall wall_pre-services">
            <div class="brick brick-lg">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_1.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under supervision of your Project Architect (software to comply with the one used in the head office)</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-lg">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_2.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">3D & BIM Modeling / Advanced parametric modeling / 3D modeling of MEP services</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_3.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">High quality CGI’s production, 3D animation and presentation reels production</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_4.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Graphic Design / Brand identity & Graphic Communication</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_5.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Remote desktop (with all necessary software installed)</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_6.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Hand sketch</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_7.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Adaptation of design package In Accordance To [in accordance with] local building codes, regulations and graphic standards / Development of dual language documentation</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_8.jpg);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Design delivery supervision on behalf of the head office locally in order to ensure compliance with the original design concept and intent</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wall wall_services">
            <div class="service-description-wrapper">
                <div class="service__avatar service__avatar_1">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under supervision of your Project Architect (software to comply with the one used in the head office)</h3>
                </div>
                <div class="service__content">
                    <p>Highly Experienced and educated CAD drafter that suit your needs. The architect will develop drawings on your assignments and will introduce changes following remarks. You will have opportunities to closely follow the process of work and introduce changes directly with the architect.</p>
                    <h4 class="open__semibold title_size__md">Software:</h4>
                    <ul>
                        <li>AutodeskRevit</li>
                        <li>AutodeskAutoCAD (AutoCADArchitecture)</li>
                        <li>GraphisoftArchicad + GraphisoftBIMx</li>
                    </ul>
                    <div class="service__portfolio">
                        <a href="#" class="service__portfolio_item service__portfolio_1">
                            <p>Artmall</p>
                        </a>
                        <a href="#" class="service__portfolio_item service__portfolio_2">
                            <p>New York School</p>
                        </a>
                        <a href="#" class="service__portfolio_item service__portfolio_3">
                            <p>Public Place</p>
                        </a>
                    </div>
                    <a href="#contacts" class="service_button">get quote</a>
                </div>
            </div>
            <div class="services">
                <div class="service service_1">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under supervision of your Project Architect (software to comply with the one used in the head office)</h3>
                </div>
                <div class="service service_2">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">3D & BIM Modeling / Advanced parametric modeling / 3D modeling of MEP services</h3>
                </div>
                <div class="service service_3">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">High quality CGI’s production, 3D animation and presentation reels production</h3>
                </div>
                <div class="service service_4">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Graphic Design / Brand identity & Graphic Communication</h3>
                </div>
                <div class="service service_5">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Remote desktop (with all necessary software installed)</h3>
                </div>
                <div class="service service_6">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Hand sketch</h3>
                </div>
                <div class="service service_7">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Adaptation of design package In Accordance To [in accordance with] local building codes, regulations and graphic standards / Development of dual language documentation</h3>
                </div>
                <div class="service service_8">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">Design delivery supervision on behalf of the head office locally in order to ensure compliance with the original design concept and intent</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="download" class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-0 pb-lg-3 wow fadeInUp">
                <h1 class="montserrat__bold title_size__xl text-center">Downloads</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="my-3">
                    <a href="#contacts" class="button border-0 rounded open__semibold text_size__xl text-warning c__black bgc__black bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Request BIM model</a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="my-3">
                    <a href="#contacts" class="button border-0 rounded open__semibold text_size__xl c__black bgc__black text-warning bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Request drawing sample</a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="my-3">
                    <a href="#" class="button border-0 rounded open__semibold text_size__xl c__black text-warning bgc__black bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Download competency statement</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bid" class="container-fluid py-5">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">We will make a free test assignment for you</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex justify-content-center border brc__black">
                <form id="bid_form" class="form_bid px-5 py-4" method="POST" action="{{ route('contacts') }}" enctype="multipart/form-data">
                    <h2 class="montserrat__semibold title_size__md text-center">leave a request</h2>
                    <p class="open__light text_size__md text-center c__black">and we will perform your<br />test assignment</p>
                    <div class="text-center my-3">
                        <input type="text" name="name" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="Your name">
                    </div>
                    <div class="text-center my-0">
                        <div class="service-choice__button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Choose a service<span>></span></div>
                    </div>
                    
                    <div class="text-center my-0 service-choice-wrapper">
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="1" id="callback_user_service_bim-model">
                            <label for="callback_user_service_bim-model" class="open__light">request BIM model</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="4" id="callback_user_service_portfolio">
                            <label for="callback_user_service_portfolio" class="open__light">request drawing sample</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="2" id="callback_user_service_email">
                            <label for="callback_user_service_email" class="open__light">write me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="5" id="callback_user_service_call">
                            <label for="callback_user_service_call" class="open__light">call me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="3" id="callback_user_service_quot">
                            <label for="callback_user_service_quot" class="open__light">get quote</label>
                        </div>
                    </div>
                    <div class="text-center mt-2 mb-0">
                        <input type="file" id="bid_user_file" name="file">
                        <label for="bid_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">upload test assignment</label>
                    </div>
                    <div class="text-center mt-0">
                        <label for="bid_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Contact phone number</label><br />
                        <input type="text" id="bid_user_phone" name="phone" required class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="38 (___) ___ __ __">
                    </div>
                    <div class="text-center my-3">
                        <input type="hidden" name="type" value="{{ App\Contact::TYPE_TEST }}" />
                        <button type="submit" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="works" class="container-fluid bgc__grey py-5">
    @include('portfolio')
</section>

<section id="testimonials" class="container-fluid py-5">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">Companies We Are Already Working With</h1>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-sm-4 col-lg-2 text-center">
                <img src="img/company_1_grey.png" class="company_1 img-fluid" alt="">
            </div>
            <div class="col-sm-4 col-lg-2 text-center mt-5 mt-sm-0">
                <img src="img/company_2_grey.png" class="company_2 img-fluid" alt="">
            </div>
            <div class="col-sm-4 col-lg-2 text-center mt-5 mt-sm-0">
                <img src="img/company_3_grey.png" class="company_3 img-fluid" alt="">
            </div>
            <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
                <img src="img/company_4_grey.png" class="company_4 img-fluid" alt="">
            </div>
            <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
                <img src="img/company_5_grey.png" class="company_5 img-fluid" alt="">
            </div>
            <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
                <img src="img/company_6_grey.png" class="company_6 img-fluid" alt="">
            </div>
        </div>
        <!-- <div class="row mt-5 wow fadeInUp">
          <div class="col-sm-4 col-lg-2 text-center">
            <img src="img/company_7_grey.png" class="company_7 img-fluid" alt="">
          </div>
          <div class="col-sm-4 col-lg-2 text-center mt-5 mt-sm-0">
            <img src="img/company_8_grey.png" class="company_8 img-fluid" alt="">
          </div>
          <div class="col-sm-4 col-lg-2 text-center mt-5 mt-sm-0">
            <img src="img/company_9_grey.png" class="company_9 img-fluid" alt="">
          </div>
          <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
            <img src="img/company_10_grey.png" class="company_10 img-fluid" alt="">
          </div>
          <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
            <img src="img/company_11_grey.png" class="company_11 img-fluid" alt="">
          </div>
          <div class="col-sm-4 col-lg-2 text-center mt-5 mt-lg-0">
            <img src="img/company_12_grey.png" class="company_12 img-fluid" alt="">
          </div>
        </div> -->
        <!-- <div class="col-12 d-none d-sm-block wow fadeInUp">
          <div id="carousel_testimonials" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner" >
                <div class="carousel-item">
                  <div class="carousel_block d-block mx-auto w-50" >
                    <h5 class="h5 open__extrabold title_size__xs">Microsoft</h5>
                    <p class="txt open__regular text_size__md">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    </p>
                  </div>
                </div>
                <div class="carousel-item active">
                  <div class="carousel_block d-block mx-auto w-50" >
                    <h5 class="h5 open__extrabold title_size__xs">Coca-Cola</h5>
                    <p class="txt open__regular text_size__md">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    </p>
                  </div>
                </div>
            
                <div class="carousel-item">
                  <div class="carousel_block d-block mx-auto w-50" >
                    <h5 class="h5 open__extrabold title_size__xs">Google</h5>
                    <p class="txt open__regular text_size__md">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    </p>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_testimonials" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"><img src="img/arrow_left.png" alt=""></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_testimonials" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"><img src="img/arrow_right.png" alt=""></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div> -->
    </div>
</section>

<section id="guarantees" class="container-fluid py-5 bgc__grey">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col">
                <h1 class="montserrat__bold title_size__xl text-center pb-0 pb-lg-3">Guarantees</h1>
            </div>
        </div>
        <div class="row flex-wrap">
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>01</h3>
                    <h4>Financial Bonds</h4>
                    <p>For certain kinds of contract terms, services types, design scale and programmatic conditions, we are able to provide Performance Bond or Advance Payment Bond to ensure the job delivery.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>02</h3>
                    <h4>Professional Indemnity Insurance</h4>
                    <p>We are able to provide PI insurance of an appropriate level in accordance to the certain project, its possible risks and types of service provided.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>03</h3>
                    <h4>Control</h4>
                    <p>We utilize Microsoft 365 for Task Management and Reporting purposes so your representative can be part of the process and have online tool for control and reporting requests from the resources involved.</p>
                    <p>Having access to BIM cloud services you will be able not only view the model but also see the online design process with the possibility to extract instant report with the data of the project progress and the actual amount of time each team member has spent on work.</p>
                    <p>For outstaffing employees for non-BIM services, we provide software that allows you to track working time and visualize the work process by random screen capturing.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>04</h3>
                    <h4>Payments Policy & Representative office in CEE</h4>
                    <p>We work on a post payment basis to ensure that the job is done in the first place.</p>
                    <p class="dfn">We also practice to do a test job free of charge in order to show our competency, express our interest in cooperation and willingness to work.</p>
                    <p>Having our representative in The Netherlands and taking the fact that we will become registered company within two months, you will interact with the company registered and having its bank account in CEE area operating under European jurisdiction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="calculation" class="container-fluid py-5">
    <div class="container wow fadeInUp">
        <div class="col-12">
            <div class="d-flex justify-content-center border brc__black">
                <form id="calculation_form" class="form_calculation px-5 py-4" method="POST" action="{{ route('contacts') }}" enctype="multipart/form-data">
                    <h2 class="montserrat__semibold title_size__md text-center">Calculate the cost</h2>
                    <p class="open__light text_size__md text-center c__black">
                        Leave your contacts <br /> and we will orient you at the price of our services <br /> within 25 minutes
                    </p>
                    <div class="text-center my-2">
                        <label for="calculation_user_name" class="form_label open__semibold c__metal text_size__md text-left mb-0">Enter name</label><br />
                        <input required type="text" name="name" id="calculation_user_name" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center my-2">
                        <label for="calculation_user_email" class="form_label open__semibold text_size__md c__metal text-left mb-0">E-mail</label><br />
                        <input type="email" name="email" id="calculation_user_email" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center mt-3 mb-0">
                        <input type="file" id="calculation_user_file" name="file">
                        <label for="calculation_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">upload test assignment</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="calculation_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Contact phone number for clarification of details</label><br />
                        <input required type="text" name="phone" id="calculation_user_phone" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="38 (___) ___ __ __">
                    </div>
                    <div class="text-center my-3">
                        <input type="hidden" name="type" value="{{ App\Contact::TYPE_QUOTE }}" />
                        <button type="submit" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="product_cart" class="container-fluid py-5">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">All necessary specialists and software in one office</h1>
        </div>
        <div class="team__titles">
            <div class="worker__title worker__1">CAD drafter</div>
            <div class="worker__title worker__2">modeler</div>
            <div class="worker__title worker__3">Architectural Designer</div>
            <div class="worker__title worker__4">Graduate Architect</div>
            <div class="worker__title worker__5">Visualizer</div>
            <div class="worker__title worker__6">BIM Manager</div>
            <div class="worker__title worker__7">Account/Project Manager</div>
            <div class="worker__title worker__8">parametric designer</div>
            <div class="worker__title worker__9">Graphic Designer</div>
        </div>
        <div class="col-12 wow fadeInUp team">
            <div class="team_foto">
                <div class="worker worker__1">
                    <div class="worker-point worker-point__1"></div>
                </div>
                <div class="worker worker__2">
                    <div class="worker-point worker-point__2"></div>
                </div>
                <div class="worker worker__3">
                    <div class="worker-point worker-point__3 active__worker"></div>
                </div>
                <div class="worker worker__4">
                    <div class="worker-point worker-point__4"></div>
                </div>
                <div class="worker worker__5">
                    <div class="worker-point worker-point__5"></div>
                </div>
                <div class="worker worker__6">
                    <div class="worker-point worker-point__6"></div>
                </div>
                <div class="worker worker__7">
                    <div class="worker-point worker-point__7"></div>
                </div>
                <div class="worker worker__8">
                    <div class="worker-point worker-point__8"></div>
                </div>
                <div class="worker worker__9">
                    <div class="worker-point worker-point__9"></div>
                </div>
            </div>
            <div class="team__mobile">
                <div class="worker__mobile worker__1">CAD drafter</div>
                <div class="worker__mobile worker__2">modeler</div>
                <div class="worker__mobile worker__3">Architectural Designer</div>
                <div class="worker__mobile worker__4">Graduate Architect</div>
                <div class="worker__mobile worker__5">Visualizer</div>
                <div class="worker__mobile worker__6">BIM Manager</div>
                <div class="worker__mobile worker__7">Account/Project Manager</div>
                <div class="worker__mobile worker__8">parametric designer</div>
                <div class="worker__mobile worker__9">Graphic Designer</div>
            </div>
            <div class="worker-description__wrapper">
                <div class="worker-description">
                    <h4 class="open__bold text_size__xl">Architectural Designer</h4>
                    <p class="open__bold text_size__lg">(5+ years experience)</p>
                    <ul class="worker__tech-list">
                        <li class="worker__tech-list_item open__bold text_size__md">Autodesk Revit</li>
                        <li class="worker__tech-list_item open__bold text_size__md">Autodesk AutoCAD (AutoCAD Architecture)</li>
                        <li class="worker__tech-list_item open__bold text_size__md">Graphisoft Archicad + Graphisoft BIMx</li>
                        <li class="worker__tech-list_item open__bold text_size__md">VectorWorks</li>
                        <li class="worker__tech-list_item open__bold text_size__md">3Ds max</li>
                        <li class="worker__tech-list_item open__bold text_size__md">Adobe Photoshop</li>
                    </ul>
                    <p class="description_text">In compliance with your requirements the architectural designer will take part in the development of the project or its part under the guidance of your Project Architect both during the stage of concept and during the stage of working drawings.</p>
                    <a href="#" class="worker-description__link open__bold text_size__md">View examples of work</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="software" class="container-fluid" style="">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">Software & BIM Competency Statement</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h4 class="h4 open__bold title_size__sm">BIM</h4>
                <div class="bim__video_wrapper">
                    <iframe class="bim__video" width="60%" height="100%" src="https://www.youtube.com/embed/M5pm50IZsDc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen">
                    </iframe>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center my-4">
                <div class="mx-4 order-2 order-md-1 param__modeling">
                    <h4 class="h4 open__bold title_size__sm param__modeling_h">Parametric Modeling</h4>
                    <img src="img/param_modeling.jpg" alt="" class="param__modeling_img" />
                    <p class="txt open__light text_size__md">Creation of complex surfaces, patterns, forms for interior and architecture design</p>
                    <p class="txt open__light text_size__md">Analysis and automatic modelling of the illumination cone, automatic illustrative calculation of insolation for any area and real estate development</p>
                    <p class="txt open__light text_size__md">Automatic change of room layouts and furniture placement due to the changing the contour of external walls, the shift of communication lines</p>
                    <p class="txt open__light text_size__md">Analysis of the territory, vehicular flow and foot traffic, restrictions on insolation and automated obtainment of the maximum possible building volume</p>
                    <p class="txt open__light text_size__md">Flexibility in design, ability to make changes</p>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center align-items-md-start mt-4">
                <div class="mx-4 software__container">
                    <h4 class="h4 open__bold title_size__sm text-center">Software</h4>
                    <div class="software__wrapper">
                        <div class="software">
                            <h5 class="software__h open__bold">BIM & CAD</h5>
                            <p class="mb-0">Autodesk Revit</p>
                            <p class="mb-0">Autodesk AutoCAD (AutoCAD Architecture)</p>
                            <p class="mb-0">Graphisoft Archicad + Graphisoft BIMx</p>
                            <p class="mb-0">Vector Works</p>
                            <h5 class="software__h open__bold">Graphics & Post-production</h5>
                            <p class="mb-0">Adobe package</p>
                        </div>
                        <div class="software">
                            <h5 class="software__h open__bold">3D Modeling, Rendering and Animation</h5>
                            <p class="mb-0">3DMax + Vray / Corona</p>
                            <p class="mb-0">Rhino + Grasshopper</p>
                            <p class="mb-0">Google SketchUP + Vray</p>
                            <p class="mb-0">Artlantis</p>
                            <p class="mb-0">Lumion</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tech__stripe">
                <img src="img/stripe.jpg" alt=""/>
            </div>
        </div>
        
        <div id="contacts" class="col-12 wow fadeInUp">
            <div class="d-flex justify-content-center">
                <form id="callback_form" class="form_callback px-0 px-sm-5 py-4" method="POST" action="{{ route('contacts') }}" enctype="multipart/form-data">
                    <h2 class="montserrat__bold title_size__md text-center">Leave a request</h2>
                    <p class="open__light text_size__lg text-center c__black" style="font-weight: bold;">
                        and get your personal offer
                    </p>
                    <div class="text-center my-0">
                        <div class="service-choice__button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Choose a service <span>></span></div>
                    </div>
                    
                    <div class="text-center my-0 service-choice-wrapper">
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="1" id="callback_user_service_bim-model">
                            <label for="callback_user_service_bim-model" class="open__light">request BIM model</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="4" id="callback_user_service_portfolio">
                            <label for="callback_user_service_portfolio" class="open__light">request drawing sample</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="2" id="callback_user_service_email">
                            <label for="callback_user_service_email" class="open__light">write me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="5" id="callback_user_service_call">
                            <label for="callback_user_service_call" class="open__light">call me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="3" id="callback_user_service_quot">
                            <label for="callback_user_service_quot" class="open__light">get quote</label>
                        </div>
                    </div>
                    
                    <div class="text-center my-0">
                        <input type="file" id="callback_user_file" name="file">
                        <label for="callback_user_file" class="form_input open__light c__black border brc__metal brc_h__yellow text_size__md  bgc__transparent px-3 py-1 mt-2 text-left" style="max-width:100%">upload test assignment</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="callback_user_phone" class="form_label open__semibold c__black text_size__md text-left mb-0">Contact phone number<br />
                            <input type="phone" required id="callback_user_phone" class="form_input open__light c__black border brc__metal brc_h__yellow bgc__transparent px-3 py-1" name="phone" placeholder="38 (___) ___ __ __">
                        </label>
                        <label for="callback_user_email" class="form_label open__semibold c__black text_size__md text-left mt-2 mb-0">E-mail<br />
                            <input type="email" name="email" id="callback_user_email" class="form_input open__light c__black text_size__md border brc__metal brc_h__yellow bgc__transparent px-3 py-1" placeholder="Enter your E-mail">
                        </label>
                    </div>
                    <div class="text-center my-2">
                        <textarea name="description" class="form_textarea border open__light text_size__md c__black brc__metal brc_h__yellow bgc__transparent px-3 py-1" rows="8" cols="80" placeholder="Describe the task"></textarea>
                    </div>
                    <div class="text-right d-flex justify-content-center my-3">
                        <div class="form_textarea">
                            <input type="hidden" name="type" value="{{ App\Contact::TYPE_ORDER }}" />
                            <button type="submit" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-3" style="text-transform: uppercase; font-weight: bold;">get offer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="container-fluid px-0 mx-0">
    <div class="container py-5">
        <div class="col-12 pb-0 pb-md-5 wow fadeInUp">
            <h1 class="h1 montserrat__bold title_size__xl text-center">our office</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start justify-content-md-between adress-wrapper">
                <div class="contact_block pb-0 pb-md-3 pb-md-0">
                    <p class="txt open__light text_size__md">Kiyv, Pushkinska street, 19, office 6</p>
                    <p class="txt open__light text_size__md">+38 (097) 908 26 78 </p>
                    <p class="txt open__light text_size__md">info@dhi-outsource.com</p>
                    <p class="txt open__light text_size__md">Mon-Fri: 9.00 - 18.00</p>
                    <p class="txt open__light text_size__md">Sat-Sun: by agreement</p>
                </div>
                <div class="contact_block pb-0 pb-md-3 pb-md-0">
                    <p class="txt open__light text_size__md">Rotterdam | 3014 JR | Drievriendenstraat 4b</p>
                    <p class="txt open__light text_size__md">+31 616 91 89 88</p>
                    <p class="txt open__light text_size__md"> info@dhi-architecture.com</p>
                    <p class="txt open__light text_size__md">
                        <a href="https://www.facebook.com/Design-Hub-International-941115632665039/" class="soc-link mr-1"><img src="img/facebook.png" alt=""></a>
                        <a href="https://www.instagram.com/dhi_architecture/" class="soc-link mx-1"><img src="img/instagram.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCeDErzD8cwVhCSSLNZIKoSA" target="_blank" class="soc-link mx-1"><img src="img/youtube.png" alt=""></a>
                        <a href="#" class="soc-link mx-1"><img src="img/linkedin.png" alt=""></a>
                        <a href="https://www.behance.net/dhi-architecture" target="_blank" class="soc-link mx-1"><img src="img/behance.png" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-0 my-0 text-center wow fadeInUp maps-wrapper">
        <div class="map map_1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.589698305447!2d30.5151422533948!3d50.44400735006834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5624704451%3A0xc8507a3f0735da3a!2sPushkinska+St%2C+19%2C+Kyiv%2C+02000!5e0!3m2!1sen!2sua!4v1541445715016" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        <div class="map map_2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4921.310950747094!2d4.4659286473339215!3d51.92199659221616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a49876d879%3A0x1d76a2817f4b838c!2sDrievriendenstraat+4B%2C+3014+JR+Rotterdam%2C+Netherlands!5e0!3m2!1sen!2sua!4v1541445846765" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
    <div class="bgc__graphite py-4" style="margin-top: 3rem;">
        <div class="row d-flex justify-content-center mx-0 wow fadeInUp">
            <div class="col-12 col-lg-auto">
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center" style="height: 100px;">
                    <a href="#banner">
                        <img src="img/logotype.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!-- <div class="col-12 col-lg-auto">
              <ul class="nav d-flex flex-column flex-lg-row justify-content-center align-items-center" style="min-height: 100px;">
                <li class="nav-item"><a href="#inforgraphic" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Почему мы</a></li>
                <li class="nav-item"><a href="#services" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Услуги</a></li>
                <li class="nav-item"><a href="#works" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Портфолио</a></li>
                <li class="nav-item"><a href="#guarantees" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Гарантии</a></li>
                <li class="nav-item"><a href="#product_cart" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Специалисты</a></li>
                <li class="nav-item"><a href="#software" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Технологии</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link fira__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Контакты</a></li>
              </ul>
            </div> -->
            <div class="col-12 col-lg-auto">
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center" style="height: 100px;">
                    <div class="top_contacts">
                        <a href="#" onclick="return false" id="callback_top" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-1">Request Call</a>
                        <a href="#contacts" class="button border-0 open__semibold text_size__md px-4 py-1 contact-top">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="open__regular text_size__sm c__white py-1 my-0">Copyright © 2017 Business life. All rights reserved</p>
                    <p class="open__regular py-1 my-0"><a href="#" class="nav-link open__regular text_size__sm c__white c_h__yellow my-0 py-0" style="text-decoration: underline;">privacy policy</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ mix('js/all.js') }}"></script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCq-YyosZPzamYukHmjw2e8ForECU4D4p0&callback=initMap" async defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="{{ mix('js/slick.js') }}"></script>
</body>
</html>