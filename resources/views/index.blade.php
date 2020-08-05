<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>@section('title')Outsource Architectural Design Services: CAD Drafters, BIM Modelers, CGI Artists@show</title>

  <link rel="icon" href="/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">

  <!-- Useful meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
        content="Successful Outsource Team Of Professionals In Architectural Design That Allows You To Reduce Your Operational Expenses Instantly. Increase Your Profit now!">
  <meta name="keywords"
        content="outsource architectural services, CAD drafting, BIM modeling, CGI services, rendering services, 3D animation services, architectural visualization services">
  <meta name="robots" content="index, follow, noodp">
  <meta name="googlebot" content="index, follow">
  <meta name="google" content="notranslate">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Cache-Control" content="public">
  <meta http-equiv="Expires" content="Wed, 22 Mar 3205 00:20:05 GMT">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ mix('css/slick.css') }}">
  <link rel="stylesheet" href="{{ mix('css/fancy.css') }}">
  <link href="{{ mix('css/all.css') }}" rel="stylesheet"/>

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []
      w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js',
      })
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''
      j.async = true
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl
      f.parentNode.insertBefore(j, f)
    })(window, document, 'script', 'dataLayer', 'GTM-TJVB8M8')</script>
  <!-- End Google Tag Manager -->

  <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJVB8M8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                        <h2 class="fira__regular title_size__md text-center">Request a Call</h2>
                        <p class="fira__light text_size__md text-center c__black">Leave your contact details and we will guide you through the price of our services</p>
                        <div class="text-center my-2">
                            <label for="modal_callback_user_choise" class="form_label fira__regular text_size__md text-left mx-0" >Call me</label>
                            <select name="description" id="modal_callback_user_choise" class="form_select fira__light text_size__md border brc__metal brc_h__yellow mx-0 py-1 px-2">
                                <option class="form_option text_size__md" value="Call me as soon as possible">as soon as possible</option>
                                <option class="form_option text_size__md modal_callback_tomorrow" value="Call me tomorrow">tomorrow</option>
                            </select>
                        </div>
                        <div class="text-right my-2" id="modal_callback_user_time_block" style="display: none">
                            <label for="modal_callback_user_time" class="form_label fira__regular text_size__md mx-0 text-left" >at</label>
                            <select name="time" id="modal_callback_user_time" class="form_select fira__light text_size__md border brc__metal brc_h__yellow py-1 px-2">
                                @foreach($callback_time as $time)
                                    <option class="form_option text_size__md" value="{{ $time }}">{{ $time }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center my-2">
                            <input type="text" name="name" class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="Your name">
                        </div>
                        <div class="text-center my-2">
                            <input type="text" id="modal_callback_user_phone" name="phone" required class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="+__ (___) ___ __ __">
                        </div>
                        <div class="text-center my-2">
                            <input type="email" name="email" id="modal_callback__user_email" class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="Your e-mail">
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

<section id="modal_page" class="container-fluid modal_page modal__page_close_area">
  <div id="modal_page_content"></div>
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
            <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Benefits</a></li>
            <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Services</a></li>
            <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Portfolio</a></li>
            <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Warranties</a></li>
            <li class="nav-item"><a href="#product_cart"  class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Team</a></li>
            <li class="nav-item"><a href="#download" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Downloads</a></li>
            <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">BIM & Technologies</a></li>
        </ul>
    </div>
</section>

<header id="header" class="container-fluid bgc__graphite fixed-top mx-0 px-0" style="height: 100px;">
    <div class="row d-flex justify-content-center mx-0 px-0">
        <div class="col-10 col-lg-auto">
            <div class="d-flex justify-content-lg-start justify-content-sm-between align-items-center" style="height: 100px;">
                <a href="#banner" class="d-none d-sm-inline-block">
                    <img src="img/logotype.png" alt="" class="img-fluid">
                </a>
                <a href="#banner" class="d-inline-block d-sm-none">
                    <img src="img/logo_mobile.png" alt="" class="img-fluid" style="max-height: 100px">
                </a>
                <div class="top_contacts col-sm-auto d-lg-none">
                    <a href="#" onclick="return false" class="callback_modal_btn button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-1 contact-button ">Request a Call</a>
                    <a href="#contacts" class="button border-0 open__semibold text_size__md px-4 py-1 contact-top contact-button ">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-auto">
            <ul class="nav d-flex justify-content-center align-items-center" style="height: 100px;">
                <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Benefits</a></li>
                <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Services</a></li>
                <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Portfolio</a></li>
                <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Warranties</a></li>
                <li class="nav-item"><a href="#product_cart" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Team</a></li>
                <li class="nav-item"><a href="#download" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Downloads</a></li>
                <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">BIM & Technologies</a></li>
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
                    <a href="#" onclick="return false" class="callback_modal_btn button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-1 contact-button ">Request a Call</a>
                    <a href="#contacts" class="button border-0 open__semibold text_size__md px-4 py-1 contact-top contact-button ">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="banner" class="jumbotron jumbotron-fluid banner mb-0 " style="height: 600px; margin-top: 100px;">
    <div id="video-bg">
        <video width="100%" height="auto" preload="auto" autoplay loop muted>
            <source src="img/banner-video.mp4" type="video/mp4" />
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
                    We Are a Successful Tight-knit Outsource Team of Professionals in Architectural Design That Allows You to Boost the Productivity Instantly and Increase Your Potential up to <b class="c__yellow">100<span class="text_size__xl">%</span></b>
                </h1>
                <div class="my-5" style="text-align: center;">
                    <a href="#calculation" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-3" style="text-transform: uppercase;">REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="inforgraphic" class="container-fluid py-5">
    <div class="container wow fadeInUp">
        <div class="col-12 pb-3">
            <h1 class="montserrat__bold title_size__xl text-center no-capitalize">Just Compare <br/> Staff And Operating Expenses</h1>
        </div>
        <!-- <img src="img/infographic.png" alt="" class="img-fluid"> -->
        <div class="tabs-name infographic">
            <div class="active" data-slide="0">The Netherlands</div>
            <div data-slide="1">The United Kingdom</div>
            <div data-slide="2">The United States</div>
            <div data-slide="3">Germany</div>
            <div data-slide="4">Switzerland</div>
            <div data-slide="5">Denmark</div>
            <div data-slide="6">Austria</div>
            <div data-slide="7">Hong Kong</div>
            <div data-slide="8">Singapore</div>
            <div data-slide="9">Israel</div>
            <div data-slide="10">Italy</div>
        </div>
        <div class="inforgraphic-slider">
            <div>
                <img src="img/graphics/Netherland.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/UK.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/USA.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Germany.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Switzerland.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Denmark.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Austria.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/HongKong.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Singapore.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
                <img src="img/graphics/Israel.jpg" alt="" class="img-fluid">
            </div>
            <div style="width: 930px; position: relative; left: -1860px; top: 0px; ">
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
                    <h4 class="no-capitalize">Higher Potential</h4>
                    <p>The majority of core design teams – highly-skilled experienced professionals – is based in your office.</p>
                    <p>The majority of technical personnel – skillful and qualified graduates and specialists – is outsourced at twice lower salary rates than your local ones.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>02</h3>
                    <h4 class="no-capitalize">Lower Operational Expenses</h4>
                    <p>Smaller quantity of office space, desktops, equipment, software & hardware is needed, as well as less workload for HR and Finance departments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>03</h3>
                    <h4 class="no-capitalize">Maintaining the Optimal Size of Your Head Office Core Team</h4>
                    <p>Immediate outsource team mobilization allows you to stick to the predictable permanent size of your head office team.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>04</h3>
                    <h4 class="no-capitalize">More Valuable Service for Your CIS Clients</h4>
                    <p>Providing the appropriate design solutions in accordance with the local market needs and regulation requirements while working in the CIS area.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
                <div class="benefits-item">
                    <h3>05</h3>
                    <h4 class="no-capitalize">Lower Expenses on the Further Design Package Adaptation for Your CIS Clients</h4>
                    <p>Two benefits regarding the higher probability of winning the competition: on the one hand, cost saving on business trips and additional expenses; on the other hand, the warranty of the initial design concept preservation up to the delivery stage.</p>
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
        <div class="row services__all">
            @foreach($services as $service)
                <div class="@if($service->pre_style == 'lg') col-lg-6 @else col-lg-4 @endif service__block service_btn" data-service="{{ $service->id }}">
                    <div class="service__bg" style="background-image: url({{ $service->small_image }});" >
                        <div class="block_title service__floating_text">
                            <h3 class="open__semibold text_size__md text-center c__white w-100 ">{{ $service->title }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="wall wall_services">
            <div class="service-description-wrapper">
                <div class="service__avatar service__avatar_1">
                    <div class="service__floating_text">
                        <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting</h3>
                    </div>
                </div>
                <div class="service__content">
                    <div class="pb-sm-2 font-weight-bold">Design Package development under supervision of your Project Architect
                        (software to comply with the one used in the head office)</div>
                    <p>Our highly experienced and educated CAD Drafter will suit your needs. Our Architect will develop drawings following your assignments and will introduce changes according to your remarks. You will have an opportunity to follow the process of work closely and introduce immediate changes together with Architect.</p>
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
                    <div class="service__back_button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Back</div>
                </div>
            </div>
            <div class="services">
                @foreach($services as $service)
                <div class="service service_{{$service->id}} service_btn" data-service="{{ $service->id }}">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">{{ $service->title }}</h3>
                </div>
                @endforeach
                <a href="#contacts" class="service_button">Get a Quote</a>
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
                    <a href="#contacts" class="button border-0 rounded open__semibold text_size__xl text-warning c__black bgc__black bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Request a BIM Model</a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="my-3">
                    <a href="#contacts" class="button border-0 rounded open__semibold text_size__xl c__black bgc__black text-warning bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Request a Drawing Sample</a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="my-3">
                    <a href="/files/DHI_Outsourcing_Services_LOI_Generic.pdf" download target="_blank" class="button border-0 rounded open__semibold text_size__xl c__black text-warning bgc__black bgc_h__black px-4 py-3" style="display:table;margin:0 auto;min-width:100%;text-align:center;padding:25px 0 !important; font-weight: bold">Download a Competency Statement</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bid" class="container-fluid py-5">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center no-capitalize">We will Do a Free Test Assignment for You</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex justify-content-center border brc__black">
                <form id="bid_form" class="form_bid px-5 py-4" method="POST" action="{{ route('contacts') }}" enctype="multipart/form-data">
                    <h2 class="montserrat__semibold title_size__md text-center no-capitalize">Leave a Request</h2>
                    <p class="open__light text_size__md text-center c__black">and we will do your<br />test assignment FOR FREE</p>
                    <div class="text-center my-3">
                        <input type="text" name="name" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="Your name">
                    </div>
                    <div class="text-center my-0">
                        <div class="service-choice__button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Choose a service<span>></span></div>
                    </div>
                    
                    <div class="text-center my-0 service-choice-wrapper">
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="1" id="bid_user_service_bim-model">
                            <label for="bid_user_service_bim-model" class="open__light">request a BIM model</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="4" id="bid_user_service_portfolio">
                            <label for="bid_user_service_portfolio" class="open__light">request a drawing sample</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="2" id="bid_user_service_email">
                            <label for="bid_user_service_email" class="open__light">write me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="5" id="bid_user_service_call">
                            <label for="bid_user_service_call" class="open__light">call me</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]"  value="3" id="bid_user_service_quot">
                            <label for="bid_user_service_quot" class="open__light">get a quote</label>
                        </div>
                    </div>
                    <div class="text-center mt-2 mb-0">
                        <input type="file" id="bid_user_file" name="file" onchange='uploadFile(this)'>
                        <label for="bid_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">Upload a test assignment</label>
                    </div>
                    <div class="text-center mt-0">
                        <label for="bid_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Contact phone number</label><br />
                        <input type="text" id="bid_user_phone" name="phone" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="+__ (___) ___ __ __">
                    </div>
                    <div class="text-center mt-0">
                        <label for="bid_user_email" class="form_label open__semibold text_size__md c__metal text-left mb-0">E-mail</label><br />
                        <input type="text" id="bid_user_email" name="email" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="Your e-mail">
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
        <div class="col-12 pb-5 wow fadeInUp">
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
    </div>
</section>

<section id="guarantees" class="container-fluid py-5 bgc__grey">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col">
                <h1 class="montserrat__bold title_size__xl text-center pb-0 pb-lg-3">Warranties</h1>
            </div>
        </div>
        <div class="row flex-wrap">
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>01</h3>
                    <h4>Financial Bonds</h4>
                    <p>For certain kinds of contract terms, service types, design contents and program conditions, we are able to provide Performance Bond or Advance Payment Bond to ensure the job delivery.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>02</h3>
                    <h4>Professional Indemnity Insurance</h4>
                    <p>We are able to provide PI insurance of an appropriate level in accordance with the certain project, its possible risks and types of service provided.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>03</h3>
                    <h4>Control</h4>
                    <p>We use Microsoft 365 for Task Management and Reporting purposes, so your representative can be a part of the process and have an online tool for control and reporting requests from the resources involved.</p>
                    <p>Having access to BIM cloud services you will be able not only to view the model but also to see the online design process with the possibility to extract an instant report with the data of the project progress and the actual amount of time each team member has spent on work.</p>
                    <p>For outstaffing employees of non-BIM services, we provide software that allows you to track working time and visualize the work process by random screen capturing.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-item">
                    <h3>04</h3>
                    <h4>Payments Policy & Representative office in CEE</h4>
                    <p>We work on a post-payment basis to ensure that the job is done in the first place.</p>
                    <p class="dfn">We also practice doing a test job free of charge in order to show our competency, express our interest in cooperation and willingness to work.</p>
                    <p>Having our representative in the Netherlands and taking into account the fact that we will become a registered company within two months, you will interact with the authorized company having its bank account in the CEE area and operating under European jurisdiction.</p>
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
                    <h2 class="montserrat__semibold title_size__md text-center no-capitalize">Calculate the Cost</h2>
                    <p class="open__light text_size__md text-center c__black">
                        Leave your contact details <br /> and we will guide you through the price of our services
                    </p>
                    <div class="text-center my-2">
                        <label for="calculation_user_name" class="form_label open__semibold c__metal text_size__md text-left mb-0">Enter Your Name</label><br />
                        <input required type="text" name="name" id="calculation_user_name" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center my-2">
                        <label for="calculation_user_email" class="form_label open__semibold text_size__md c__metal text-left mb-0">E-mail</label><br />
                        <input type="email" name="email" id="calculation_user_email" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center mt-3 mb-0">
                        <input type="file" id="calculation_user_file" name="file" onchange="uploadFile(this)">
                        <label for="calculation_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">Upload a test assignment</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="calculation_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Contact phone number for clarification of details</label><br />
                        <input type="text" name="phone" id="calculation_user_phone" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="+__ (___) ___ __ __">
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
            <h1 class="montserrat__bold title_size__xl text-center no-capitalize">All Necessary Specialists and Software in One Office</h1>
        </div>
        <div class="team__titles">
            <div class="worker__title worker__1 worker_btn" data-id="1">CAD Drafter</div>
            <div class="worker__title worker__2 worker_btn" data-id="2">Modeller</div>
            <div class="worker__title worker__3 worker_btn" data-id="3">Architectural Designer</div>
            <div class="worker__title worker__4 worker_btn" data-id="4">Graduate Architect</div>
            <div class="worker__title worker__5 worker_btn" data-id="5">Visualizer</div>
            <div class="worker__title worker__6 worker_btn" data-id="6">BIM Manager</div>
            <div class="worker__title worker__7 worker_btn" data-id="7">Account/Project Manager</div>
            <div class="worker__title worker__8 worker_btn" data-id="8">Parametric Designer</div>
            <div class="worker__title worker__9 worker_btn" data-id="9">Graphic Designer</div>
        </div>
        <div class="col-12 wow fadeInUp team team__mobile_col">
            <div class="team_foto">
                <div class="worker worker__1 worker_btn" data-id="1">
                    <div class="worker-point worker-point__1"></div>
                </div>
                <div class="worker worker__2 worker_btn" data-id="2">
                    <div class="worker-point worker-point__2"></div>
                </div>
                <div class="worker worker__3 worker_btn" data-id="3">
                    <div class="worker-point worker-point__3 active__worker"></div>
                </div>
                <div class="worker worker__4 worker_btn" data-id="4">
                    <div class="worker-point worker-point__4"></div>
                </div>
                <div class="worker worker__5 worker_btn" data-id="5">
                    <div class="worker-point worker-point__5"></div>
                </div>
                <div class="worker worker__6 worker_btn" data-id="6">
                    <div class="worker-point worker-point__6"></div>
                </div>
                <div class="worker worker__7 worker_btn" data-id="7">
                    <div class="worker-point worker-point__7"></div>
                </div>
                <div class="worker worker__8 worker_btn" data-id="8">
                    <div class="worker-point worker-point__8"></div>
                </div>
                <div class="worker worker__9 worker_btn" data-id="9">
                    <div class="worker-point worker-point__9"></div>
                </div>
            </div>
            <div class="team__mobile">
                <div class="worker__mobile worker__1 worker__mobile_mr worker_btn" data-id="1">CAD Drafter</div>
                <div class="worker__mobile worker__2 worker__mobile_ml worker_btn" data-id="2">Modeller</div>
                <div class="worker__mobile worker__3 worker__mobile_mr worker_btn" data-id="3">Architectural Designer</div>
                <div class="worker__mobile worker__4 worker__mobile_ml worker_btn" data-id="4">Graduate Architect</div>
                <div class="worker__mobile worker__5 worker__mobile_mr worker_btn" data-id="5">Visualizer</div>
                <div class="worker__mobile worker__6 worker__mobile_ml worker_btn" data-id="6">BIM Manager</div>
                <div class="worker__mobile worker__7 worker__mobile_mr worker_btn" data-id="7">Account/Project Manager</div>
                <div class="worker__mobile worker__8 worker__mobile_ml worker_btn" data-id="8">Parametric Designer</div>
                <div class="worker__mobile worker__9 worker__mobile_mr worker_btn" data-id="9">Graphic Designer</div>
            </div>
            <div class="worker-description__wrapper">
                <div class="worker-description">
                    <h4 class="open__bold text_size__xl">Architectural Designer</h4>
                    <p class="open__bold text_size__lg">5+ years experience</p>
                    <ul class="worker__tech-list">
                        <li class="worker__tech-list_header">Software: </li>
                        <li class="worker__tech-list_item">Autodesk Revit</li>
                        <li class="worker__tech-list_item">Autodesk AutoCAD (AutoCAD Architecture)</li>
                        <li class="worker__tech-list_item">Graphisoft Archicad + Graphisoft BIMx</li>
                        <li class="worker__tech-list_item">VectorWorks</li>
                        <li class="worker__tech-list_item">3Ds max</li>
                        <li class="worker__tech-list_item">Adobe Photoshop</li>
                    </ul>
                    <p class="description_text">In compliance with your requirements, our Architectural Designer will take part in the development of the project or its part under the guidance of your Project Architect both during the concept stage and the stage of working drawings.</p>
                </div>
            </div>
        </div>
        <div class="worker-portfolio">
            @if ($active_worker->works)
                <div class="worker__portfolio">
                    @foreach($active_worker->works as $work)
                        @if($work->small_image)
                            <a href="/#works-{{ $work->id }}" class="worker__portfolio_item worker__portfolio_1" style="background-image: url({{ asset('storage/' . $work->small_image )}})">
                                <p>{{ $work->name }}</p>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

<section id="software" class="container-fluid" style="">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-3 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">Software & BIM Competency Statement</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h4 class="h4 open__bold title_size__md pb-lg-3 text_size__md">BIM</h4>
                <div class="bim__video_wrapper">
                    <iframe class="bim__video" width="60%" height="100%" src="https://www.youtube.com/embed/M5pm50IZsDc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen">
                    </iframe>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center my-4">
                <div class="mx-4 order-2 order-md-1 param__modeling">
                    <h4 class="h4 open__bold title_size__md param__modeling_h">Parametric Modelling</h4>
                    <img src="img/param_modeling.jpg" alt="" class="param__modeling_img" />
                    <p class="txt text_size__md">Creation of complex surfaces, patterns, forms for interior design and architecture.</p>
                    <p class="txt text_size__md">Analysis and automatic modelling of the illumination cone, automatic illustrative calculation of insolation for any area and real estate development.</p>
                    <p class="txt text_size__md">Automatic change of room layouts and furniture placement due to the changing the contour of external walls, the shift of communication lines.</p>
                    <p class="txt text_size__md">Analysis of the territory, vehicular flow and foot traffic, restrictions on insolation and automated obtainment of the maximum possible building volume.</p>
                    <p class="txt text_size__md">Flexibility in design, ability to make changes.</p>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center align-items-md-start mt-4">
                <div class="mx-4 software__container">
                    <h4 class="h4 open__bold title_size__md text-center">Software</h4>
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
                            <h5 class="software__h open__bold">3D Modelling, Rendering And Animation</h5>
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
                    <h2 class="montserrat__bold title_size__md text-center no-capitalize">Leave a Request</h2>
                    <p class="open__light text_size__lg text-center c__black" style="font-weight: bold;">
                        and get your personal offer
                    </p>
                    <div class="text-center my-0">
                        <div class="service-choice__button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Choose a service <span>></span></div>
                    </div>
                    
                    <div class="text-center my-0 service-choice-wrapper">
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="1" id="callback_user_service_bim-model">
                            <label for="callback_user_service_bim-model" class="open__light">request a BIM model</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="action[]" value="4" id="callback_user_service_portfolio">
                            <label for="callback_user_service_portfolio" class="open__light">request a drawing sample</label>
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
                            <label for="callback_user_service_quot" class="open__light">get a quote</label>
                        </div>
                    </div>
                    
                    <div class="text-center my-0">
                        <input type="file" id="callback_user_file" name="file" onchange="uploadFile(this)">
                        <label for="callback_user_file" class="form_input open__light c__black border brc__metal brc_h__yellow text_size__md  bgc__transparent px-3 py-1 mt-2 text-left border-radius-5" style="max-width:100%;">Upload a test assignment</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="callback_user_phone" class="form_label open__semibold c__black text_size__md text-left mb-0">Contact phone number<br />
                            <input type="phone" id="callback_user_phone" class="form_input open__light c__black border brc__metal brc_h__yellow bgc__transparent px-3 py-1 border-radius-5" name="phone" placeholder="+__ (___) ___ __ __">
                        </label>
                        <label for="callback_user_email" class="form_label open__semibold c__black text_size__md text-left mt-2 mb-0">* E-mail<br />
                            <input type="email" name="email" required id="callback_user_email" class="form_input open__light c__black text_size__md border brc__metal brc_h__yellow bgc__transparent px-3 py-1 border-radius-5" placeholder="Enter your e-mail">
                        </label>
                    </div>
                    <div class="text-center my-2">
                        <textarea name="description" class="form_textarea task__field border open__light text_size__md c__black brc__metal brc_h__yellow bgc__transparent px-3 py-1 border-radius-5" rows="8" cols="80" placeholder="Description"></textarea>
                    </div>
                    <div class="text-right d-flex justify-content-center my-3">
                        <div class="form_textarea">
                            <input type="hidden" name="type" value="{{ App\Contact::TYPE_ORDER }}" />
                            <button type="submit" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-3" style="text-transform: uppercase; font-weight: bold;">Get an offer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div style="font-size: 12px; text-align: right">Photograph by <a href="https://www.bloomberg.com/company/london/" target="_blank">Bloomberg</a></div>
    </div>
</section>

<footer id="footer" class="container-fluid px-0 mx-0">
    <div class="container py-5">
        <div class="col-12 pb-0 pb-md-5 wow fadeInUp">
            <h1 class="h1 montserrat__bold title_size__xl text-center">Contacts</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start justify-content-md-between adress-wrapper">
                <div class="contact_block pb-0 pb-md-3 pb-md-0">
                    <p class="txt open__light text_size__lg font-weight-bold">Ukraine</p>
                    <p class="txt open__light text_size__md">18V Mykhailvska St., office 106, Kyiv</p>
                    <p class="txt open__light text_size__md">+38 (097) 908 26 78</p>
                </div>
                <div class="contact_block pb-0 pb-md-3 pb-md-0">
                    <p class="txt open__light text_size__lg font-weight-bold">The Netherlands</p>
                    <p class="txt open__light text_size__md">Drievriendenstraat 4b, Rotterdam, 3014 JR</p>
                    <p class="txt open__light text_size__md">+31 616 91 89 88</p>
                </div>
            </div>
        </div>
        <div class="col-12 wow fadeInUp text-center">
            <p class="txt open__light text_size__md">info@dhi-outsource.com</p>
            <p class="txt open__light text_size__md">
                <a href="https://www.facebook.com/Design-Hub-International-941115632665039/" class="soc-link mr-1"><img src="img/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/dhi_architecture/" class="soc-link mx-1"><img src="img/instagram.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCeDErzD8cwVhCSSLNZIKoSA" target="_blank" class="soc-link mx-1"><img src="img/youtube.png" alt=""></a>
                <a href="#" class="soc-link mx-1"><img src="img/linkedin.png" alt=""></a>
                <a href="https://www.behance.net/dhi-architecture" target="_blank" class="soc-link mx-1"><img src="img/behance.png" alt=""></a>
            </p>
        </div>
    
    </div>
    
    <div class="bgc__graphite py-4">
        <div class="row d-flex justify-content-center mx-0 wow fadeInUp">
            <div class="col-12 col-lg-auto">
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center" style="height: 100px;">
                    <a href="#banner">
                        <img src="img/logotype.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-auto">
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center" style="height: 100px;">
                    <div class="top_contacts">
                        <a href="#" onclick="return false" class="callback_modal_btn button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-1 contact-button">Request a Call</a>
                        <a href="#contacts" class="button border-0 open__semibold text_size__md px-4 py-1 contact-top contact-button">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="open__regular text_size__sm c__white py-1 my-0">Copyright © 2017 DHI-Outsource. All rights reserved</p>
                    <p class="open__regular py-1 my-0"><a href="#" class="nav-link open__regular text_size__sm c__white c_h__yellow my-0 py-0" style="text-decoration: underline;">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ mix('js/all.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="{{ mix('js/slick.js') }}"></script>
<script src="{{ mix('js/fancy.js') }}"></script>
</body>
</html>