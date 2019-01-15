function openModal() {
	getElementById('modal_page').style.display='block';
}
function portfolioTabs() {
	$("ul.tabs_buttons").on("click", "li:not(.bgc__active)", function() {
		$('.wall_tab.slick-initialized').slick('unslick');
		$('.wall_tab__active').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			nextArrow: '<span class="slick-next">></span>',
			prevArrow: '<span class="slick-prev"><</span>'
		});
	});
	
	$('.wall_tab__active').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		nextArrow: '<span class="slick-next">></span>',
		prevArrow: '<span class="slick-prev"><</span>'
	});
}

$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$('.inforgraphic-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true
	});
	
	
	$('.modal__page_close, .modal__page_close_area').click(function (e) {
		if ($(e.target).hasClass('modal__page_close') || $(e.target).hasClass('modal__page_close_area')) {
			$('#modal_page').hide();
			$('#modal_page_content').slick('unslick');
		}
	});
	
	$('.modal__open_button').click(function () {
		const id = $(this).data()['id'];
		
		$.ajax({
			type: 'get',
			url: '/works/' + id,
			success: function(data) {
				$('#modal_page').show();
				$('#modal_page_content').html(data);
			},
			complete: function() {
				$('#modal_page_content').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					nextArrow: '<span class="modal__slick-next">></span>',
					prevArrow: '<span class="modal__slick-prev"><</span>'
				});
			}
		});
	});
	
	portfolioTabs();
	
	$('.info-name li').click(function(){
		var numb = $(this).data('slide');
		$('.inforgraphic-slider').slick('slickGoTo', numb);
		$(this).addClass('active').siblings().removeClass('active');
	});
	
	$('#calculation_form, #callback_form, #bid_form, #modal_callback_form').submit(function (e) {
		e.preventDefault();
		
		$.ajax({
			type: 'post',
			url: '/contacts',
			data:new FormData($(this)[0]),
			cache: false,
			processData: false,
			contentType: false,
			complete: function () {
				$('#modal_ty_page').show();
			}
		});
	});
	
	$('input[name="phone"]').mask("+00 (000) 000 00 00")
});


$(".service-choice__button").on('click', function(){
	$(".service-choice-wrapper").slideToggle('medium', function() {
		if ($(this).is(':visible'))
			$(this).css('display','flex');
	});
});
// portfolio mobile
function portfolioMobile(){
	var window_size = window.matchMedia('(max-width: 540px)');
	if(window_size.matches){
		$('.portfolio__lg').css('display','none');
		$('.portfolio__mobile').css('display','block');
		//$('#works').load('portfolio_mobile.html');
		//portfolioTabs();
	}
}
portfolioMobile();

// team choice

$(document).ready(function(){
	$('.worker__1').click(function() {
		$('.worker-description__wrapper').load('html/worker1.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__2').click(function() {
		$('.worker-description__wrapper').load('html/worker2.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__3').click(function() {
		$('.worker-description__wrapper').load('html/worker3.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__4').click(function() {
		$('.worker-description__wrapper').load('html/worker4.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__5').click(function() {
		$('.worker-description__wrapper').load('html/worker5.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__6').click(function() {
		$('.worker-description__wrapper').load('html/worker6.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__7').click(function() {
		$('.worker-description__wrapper').load('html/worker7.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__8').click(function() {
		$('.worker-description__wrapper').load('html/worker8.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	$('.worker__9').click(function() {
		$('.worker-description__wrapper').load('html/worker9.html');
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
});

// service choice

$(document).ready(function(){
	$('.pre-service__block').click(function(){
		$('.wall_pre-services').slideToggle();
		$('.wall_services').slideToggle();
	});
	$('.service_1').click(function() {
		$('.service-description-wrapper').load('html/service1.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_2').click(function() {
		$('.service-description-wrapper').load('html/service2.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_3').click(function() {
		$('.service-description-wrapper').load('html/service3.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_4').click(function() {
		$('.service-description-wrapper').load('html/service4.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_5').click(function() {
		$('.service-description-wrapper').load('html/service5.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_6').click(function() {
		$('.service-description-wrapper').load('html/service6.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_7').click(function() {
		$('.service-description-wrapper').load('html/service7.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
	$('.service_8').click(function() {
		$('.service-description-wrapper').load('html/service8.html');
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
	});
});

/* video playing */

$(".bim__video_wrapper").click(function(){
	$(".bim__video").css("pointer-events","auto");
});

$('div').click(function(e) { console.log($(e.target))});