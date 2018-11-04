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
                    <form id="modal_callback_form" class="form_modal_callback px-0 py-0">
                        <h2 class="fira__regular title_size__md text-center">Оставте заявку</h2>
                        <p class="fira__light text_size__md text-center c__black">Оставьте свои контакты и мы сориентируем вас по цене наших услуг в течение 25 минут</p>
                        <div class="text-center my-2">
                            <label for="modal_callback_user_choise" class="form_label fira__regular text_size__md text-left mx-0" >Позвоните мне</label>
                            <select name="modal_callback_user_choise" id="modal_callback_user_choise" class="form_select fira__light text_size__md border brc__metal brc_h__yellow mx-0 py-1 px-2">
                                <option class="form_option text_size__md" value="в ближайшее время">в ближайшее время</option>
                                <option class="form_option text_size__md" value="завтра">завтра</option>
                            </select>
                            <!--<input type="text" id="modal_callback_user_choise" class="form_input border brc__black px-3 py-1" value="+38 " placeholder="()" style="width: 45%;">-->
                        </div>
                        <div class="text-center my-2">
                            <input type="text" class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="Ваше имя">
                        </div>
                        <div class="text-center my-2">
                            <input type="text" id="modal_callback_user_phone" name="phone-number" class="form_input fira__light text_size__md border brc__metal brc_h__yellow px-3 py-1" placeholder="38 (___) ___ __ __">
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="button border-0 fira__medium text_size__md c__black bgc__yellow bgc_h__yellow px-5 py-2">Заказать звонок</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="modal_page" class="container-fluid modal_page">
    <div class="container">
        <a href="#" onclick="return false" id="close_page" class="modal__page_close" style="outline:none;">close</a>
        <div class="modal_page_content animated fadeInUp modal__slick" id="modal_page_content">
        
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
                <h2 class="h2 fira__regular title_size__md text-center">Ваша заявка отправлена</h2>
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
            <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Почему мы</a></li>
            <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Услуги</a></li>
            <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Портфолио</a></li>
            <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Гарантии</a></li>
            <li class="nav-item"><a href="#product_cart"  class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Специалисты</a></li>
            <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Технологии</a></li>
            <li class="nav-item"><a href="#contacts" class="nav-link open__regular text_size__md px-0 py-2 mx-3 c__white c_h__white border-bottom brc__transparent">Контакты</a></li>
        </ul>
    </div>
</section>
<header id="header" class="container-fluid bgc__black fixed-top mx-0 px-0" style="height: 100px;">
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
                <li class="nav-item"><a href="#inforgraphic" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Почему мы</a></li>
                <li class="nav-item"><a href="#services" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Услуги</a></li>
                <li class="nav-item"><a href="#works" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Портфолио</a></li>
                <li class="nav-item"><a href="#guarantees" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Гарантии</a></li>
                <li class="nav-item"><a href="#product_cart" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Специалисты</a></li>
                <li class="nav-item"><a href="#software" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Технологии</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link open__regular text_size__md px-lg-1 px-xl-3 c__white c_h__white border-bottom brc__transparent">Контакты</a></li>
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
                    <a href="#" id="language_top" class="nav-link open__regular text_size__md c__white c_h__white pl-0">En</a>
                </div>
                <div>
                    <span class="open__light text_size__xl c__white c_h__white text-nowrap py-0 px-0">+380 090 126 45 25</span><br />
                    <a href="#" onclick="return false" id="callback_top" class="nav-link open__bold text_size__lg c__yellow c_h__yellow c_h__yellow text-nowrap py-0 px-0" style="text-decoration: underline;"><i class="fas fa-phone fa-sm mx-1" style="transform: rotate(90deg);"></i>Заказать звонок</a>
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
                <h1 class="montserrat__bold title_size__lg c__white">
                    Повысьте маржинальность Вашего проекта на <b class="c__yellow">100<span class="text_size__xl">%</span></b>,<br class="d-none d-lg-block"/> доверив весь комплекс услуг по архитектурному проектированию профессиональной аутсорсинг-команде
                </h1>
                <div class="my-5">
                    <a href="#calculation" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-4 py-3" style="text-transform: uppercase;">Рассчитать стоимость</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="inforgraphic" class="container-fluid py-5">
    <div class="container wow fadeInUp">
        <div class="col-12 pb-3">
            <h1 class="montserrat__bold title_size__xl text-center">Просто сравните расходы <br />на специалистов и операционные затраты</h1>
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
            <h1 class="montserrat__bold title_size__xl text-center pb-0 pb-lg-4">Услуги</h1>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="wall wall_pre-services">
            <div class="brick brick-lg">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_1.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-lg">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_2.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_3.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_4.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-md">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_5.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-sm">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_6.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-sm">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_7.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-sm">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_8.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brick brick-sm">
                <div class="pre-service__block block position-relative" style="width: 100%; height: 100%; background-image: url(img/service_9.png);">
                    <div style="position: absolute; width: 90%; height: 80%; margin: auto; left:0;top:0;right:0;bottom:0;">
                        <div class="d-flex flex-wrap justify-content-center align-items-center" style="width: 100%; height: 100%;">
                            <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wall wall_services">
            <div class="service-description-wrapper">
                <div class="service__avatar">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service__content">
                    <p>CAD drafting –архитектор проектирует чертежи позаданным параметрам, исправляет замечания и вносит корректировки в системе онлайн – заказчик может постоянно отслеживать процесс работы и непосредственно вносить изменения</p>
                    <p>Design Package development  - это тот случай, когда архитектор «привязан» к вам на протяжении всего времени, пока поставленная задача не приобретёт необходимую и требуемую форму заказчика. Это своего рода маленькая, но полноценная компания в лице одного человека, выполняющего различные задачи в одном ритме с остальной командой на протяжении всего проекта. </p>
                    <h4 class="open__semibold title_size__md">Software:</h4>
                    <ul>
                        <li>AutodeskRevit</li>
                        <li>AutodeskAutoCAD (AutoCADArchitecture)</li>
                        <li>GraphisoftArchicad + GraphisoftBIMx</li>
                    </ul>
                    <h4 class="open__semibold title_size__md">Portfolio</h4>
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
                    <a href="#contacts" class="service_button">get quot</a>
                </div>
            </div>
            <div class="services">
                <div class="service service_1">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_2">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_3">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_4">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_5">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_6">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_7">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
                <div class="service service_8">
                    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">CAD Drafting / Design Package development under<br /> supervision of LJA’s Project Architect</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="download" class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-0 pb-lg-3 wow fadeInUp">
                <h1 class="montserrat__bold title_size__xl text-center">Download</h1>
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
            <h1 class="montserrat__bold title_size__xl text-center">Сделаем для Вас бесплатное тестовое задание</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex justify-content-center border brc__black">
                <form id="bid_form" class="form_bid px-5 py-4">
                    <h2 class="montserrat__semibold title_size__md text-center">Оставте заявку</h2>
                    <p class="open__light text_size__md text-center c__black">и мы воплним Ваше <br />тестовое задание</p>
                    <div class="text-center my-3">
                        <input type="text" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="Ваше имя">
                    </div>
                    <div class="text-center my-3">
                        <input type="text" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="Выберите услугу">
                    </div>
                    <div class="text-center mt-2 mb-0">
                        <input type="file" id="bid_user_file">
                        <label for="bid_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">Загрузите ТЗ</label>
                    </div>
                    <div class="text-center mt-0">
                        <label for="bid_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Номер телефона для связи</label><br />
                        <input type="text" id="bid_user_phone" name="phone-number" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1" placeholder="38 (___) ___ __ __">
                    </div>
                    <div class="text-center my-3">
                        <button type="button" onclick="getElementById('modal_ty_page').style.display='block';" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-2">Отправить</button>
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
            <h1 class="montserrat__bold title_size__xl text-center">Компании, с которыми мы уже работаем</h1>
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
                <form id="calculation_form" class="form_calculation px-5 py-4">
                    <h2 class="montserrat__semibold title_size__md text-center">Рассчитайте стоимость</h2>
                    <p class="open__light text_size__md text-center c__black">
                        Оставьте свои контакты <br /> и мы сориентируем вас по цене наших услуг <br /> в течение 25 минут
                    </p>
                    <div class="text-center my-2">
                        <label for="calculation_user_name" class="form_label open__semibold c__metal text_size__md text-left mb-0">Введите имя</label><br />
                        <input type="text" id="calculation_user_name" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center my-2">
                        <label for="calculation_user_email" class="form_label open__semibold text_size__md c__metal text-left mb-0">E-mail</label><br />
                        <input type="email" id="calculation_user_email" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1">
                    </div>
                    <div class="text-center mt-3 mb-0">
                        <input type="file" id="calculation_user_file">
                        <label for="calculation_user_file" class="form_input open__light text_size__md c__metal border brc__metal brc_h__yellow px-3 py-1 text-left">Загрузите ТЗ</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="calculation_user_phone" class="form_label open__semibold text_size__md c__metal text-left mb-0">Номер телефона для уточнения деталей</label><br />
                        <input type="text" id="calculation_user_phone" class="form_input open__light c__metal text_size__md border brc__metal brc_h__yellow px-3 py-1" name="phone-number" placeholder="38 (___) ___ __ __">
                    </div>
                    <div class="text-center my-3">
                        <button type="button" onclick="getElementById('modal_ty_page').style.display='block';" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-2">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="product_cart" class="container-fluid py-5">
    <div class="container">
        <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
            <h1 class="montserrat__bold title_size__xl text-center">Все необходимые специалисты и софт в одном офисе</h1>
        </div>
        <div class="team__titles">
            <div class="worker__title worker__1">CAD drafter</div>
            <div class="worker__title worker__2">modeler</div>
            <div class="worker__title worker__3">Architect</div>
            <div class="worker__title worker__4">visualizer</div>
            <div class="worker__title worker__5">BIM manager</div>
            <div class="worker__title worker__6">project manager</div>
            <div class="worker__title worker__7">Artist</div>
            <div class="worker__title worker__8">parametric designer</div>
            <div class="worker__title worker__9">Local representer</div>
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
                <div class="worker__mobile worker__3">Architect</div>
                <div class="worker__mobile worker__4">visualizer</div>
                <div class="worker__mobile worker__5">BIM manager</div>
                <div class="worker__mobile worker__6">project manager</div>
                <div class="worker__mobile worker__7">Artist</div>
                <div class="worker__mobile worker__8">parametric designer</div>
                <div class="worker__mobile worker__9">Local representer</div>
            </div>
            <div class="worker-description__wrapper">
                <div class="worker-description">
                    <h4 class="open__bold text_size__xl">Architect</h4>
                    <p class="open__bold text_size__lg">Опыт - от 9 лет</p>
                    <ul class="worker__tech-list">
                        <li class="worker__tech-list_item open__bold text_size__md">Autodesk Revit Graphisoft</li>
                        <li class="worker__tech-list_item open__bold text_size__md">Archicad + Graphisoft</li>
                        <li class="worker__tech-list_item open__bold text_size__md">BIMx Rhino + Grasshopper</li>
                        <li class="worker__tech-list_item open__bold text_size__md">Google ScetchUP + Vray</li>
                        <li class="worker__tech-list_item open__bold text_size__md">3DMAx + Vray / Corona</li>
                    </ul>
                    <p class="description_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="#" class="worker-description__link open__bold text_size__md">Посмотреть примеры работ</a>
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
                    <p class="txt open__light text_size__md">Cоздание сложных поверхностей, паттернов, форм для дизайна интерьеров и архитектуры</p>
                    <p class="txt open__light text_size__md">Анализ и автоматическое моделирование конуса освещенности, автоматический наглядный расчет инсоляциии для любой местности и застройки </p>
                    <p class="txt open__light text_size__md">Автоматическое изменение планировок помещения и расстановки мебели при изменении контура внешних стен, передвижении коммуникаций</p>
                    <p class="txt open__light text_size__md">Анализ территории, транспортно-пешеходных потоков, ограничений по инсоляции и автоматизированное получение максимально возможного объема здания </p>
                    <p class="txt open__light text_size__md">Гибкость в проектировании, возможности вносить изменения</p>
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
                <form id="callback_form" class="form_callback px-0 px-sm-5 py-4">
                    <h2 class="montserrat__bold title_size__md text-center">Оставьте заявку</h2>
                    <p class="open__light text_size__md text-center c__black">
                        и получите персональное коммерческое предложение
                    </p>
                    <div class="text-center my-0">
                        <div class="service-choice__button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Выберите услугу <span>></span></div>
                    </div>
                    
                    <div class="text-center my-0 service-choice-wrapper">
                        <div class="service-choice">
                            <input type="checkbox" name="bim_model_choice" value="request BIM model" id="callback_user_service_bim-model">
                            <label for="callback_user_service_bim-model" class="open__light">request BIM model</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="bim_portfolio_choice" value="request drawing sample" id="callback_user_service_portfolio">
                            <label for="callback_user_service_portfolio" class="open__light">request drawing sample</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="bim_email_choice" value="email me" id="callback_user_service_email">
                            <label for="callback_user_service_email" class="open__light">напишите мне</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="bim_call_choice" value="call me" id="callback_user_service_call">
                            <label for="callback_user_service_call" class="open__light">позвоните мне</label>
                        </div>
                        <div class="service-choice">
                            <input type="checkbox" name="bim_quot_choice" value="get quot" id="callback_user_service_quot">
                            <label for="callback_user_service_quot" class="open__light">get quot</label>
                        </div>
                    </div>
                    
                    <div class="text-center my-0">
                        <input type="file" id="callback_user_file">
                        <label for="callback_user_file" class="form_input open__light c__black border brc__metal brc_h__yellow text_size__md  bgc__transparent px-3 py-1 mt-2 text-left" style="max-width:100%">Загрузите ТЗ</label>
                    </div>
                    <div class="text-center mt-0 mb-3">
                        <label for="callback_user_phone" class="form_label open__semibold c__black text_size__md text-left mb-0">Номер телефона для связи<br />
                            <input type="phone" id="callback_user_phone" class="form_input open__light c__black border brc__metal brc_h__yellow bgc__transparent px-3 py-1" name="phone-number" placeholder="38 (___) ___ __ __">
                        </label>
                        <label for="callback_user_email" class="form_label open__semibold c__black text_size__md text-left mt-2 mb-0">E-mail<br />
                            <input type="email" id="callback_user_email" class="form_input open__light c__black text_size__md border brc__metal brc_h__yellow bgc__transparent px-3 py-1" placeholder="Введите ваш E-mail">
                        </label>
                    </div>
                    <div class="text-center my-2">
                        <textarea name="name" class="form_textarea border open__light text_size__md c__black brc__metal brc_h__yellow bgc__transparent px-3 py-1" rows="8" cols="80" placeholder="Опишите задачу в свбодной форме"></textarea>
                    </div>
                    <div class="text-right d-flex justify-content-center my-3">
                        <div class="form_textarea">
                            <button type="button" onclick="getElementById('modal_ty_page').style.display='block';" class="button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow px-3 px-sm-5 py-2">Получить предложение</button>
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
            <h1 class="h1 montserrat__bold title_size__xl text-center">Наше представительство</h1>
        </div>
        <div class="col-12 wow fadeInUp">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start justify-content-md-around">
                <div class="contact_block pb-0 pb-md-3 pb-md-0">
                    <h5 class="h5 open__bold title_size__xs">Наш офис:</h5>
                    <p class="txt open__light text_size__md">Киев, ул. Пушкинская, 19, оф.6</p>
                    <p class="txt open__light text_size__md">Пн-Пт: 9.00 - 18.00</p>
                    <p class="txt open__light text_size__md">Сб-Вс: по договоренности</p>
                </div>
                <div class="contact_block py-0 py-md-0">
                    <h5 class="h5 open__bold title_size__xs">Телефон:</h5>
                    <p class="txt open__light text_size__md">+38 (097) 908 26 78 </p>
                </div>
                <div class="contact_block pt-0 pt-md-0">
                    <h5 class="h5 open__bold title_size__xs">Email:</h5>
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
        </div>
    </div>
    <div class="py-0 my-0 text-center wow fadeInUp">
        <div id="map"></div>
    </div>
    <div class="bgc__black py-4">
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
                    
                    <div>
                        <span class="open__light text_size__xl c__white c_h__white text-nowrap py-0 px-0">+380 090 126 45 25</span><br />
                        <a href="#" onclick="return false" id="callback_bottom" class="nav-link open__bold text_size__lg c__yellow c_h__yellow text-nowrap py-0 px-0" style="text-decoration: underline;"><i class="fas fa-phone fa-sm mx-1" style="transform: rotate(90deg);"></i>Заказать звонок</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="open__regular text_size__sm c__white py-1 my-0">Copyright © 2017 Business life. All rights reserved</p>
                    <p class="open__regular py-1 my-0"><a href="#" class="nav-link open__regular text_size__sm c__white c_h__yellow my-0 py-0" style="text-decoration: underline;">Политика конфиденциальности</a></p>
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