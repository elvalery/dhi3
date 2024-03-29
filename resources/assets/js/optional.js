function openModal() {
	getElementById('modal_page').style.display='block';
}

function portfolioTabs() {
	$("ul.tabs_buttons, .tabs-name.portfolio").on("click", "li:not(.bgc__active), div:not(.active)",
		function() {
			$('.wall_tab.slick-initialized').slick('unslick');
			$('.wall_tab__active').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				nextArrow: '<span class="slick-next">></span>',
			prevArrow: '<span class="slick-prev"><</span>'
			});
		});
	
	$('.wall_tab__active').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		nextArrow: '<span class="slick-next">></span>',
		prevArrow: '<span class="slick-prev"><</span>'
	});
}

function modal_callback_time_show() {
	$("#modal_callback_user_time_block").show();
	$("#modal_callback .modal_callback_content").addClass('modal_callback_content_w_time');
}

function modal_callback_time_hide() {
	$("#modal_callback_user_time_block").hide();
	$("#modal_callback .modal_callback_content").removeClass('modal_callback_content_w_time');
}

$(document).ready(function() {
	let workid = null;
	
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$(".tabs-name.portfolio")
		.on("click","div:not(.active)",function(){
			$(this).addClass("active").siblings()
				.removeClass("active").closest("div.wall-tabs")
				.find("div.wall_tab").removeClass("wall_tab__active")
				.eq($(this).index()).addClass("wall_tab__active").fadeIn("slow")});

  $('.banner-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 10000,
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
			$('#modal_page_content_slick').slick('unslick');
			location.hash = '#works';
			workid = null;
		}
	});
  
  $('.modal__open_button').click(function () {
    const id = $(this).data()['id'];
    workid = id;
    
    let dataSlider = [];
    let descr = '';
    
    let sliderOptions = {
      touch: false,
      loop: true,
      buttons: [
        "zoom",
        "close"
      ],
      image: {
        preload: true
      },
      btnTpl: {
        arrowLeft:
          '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
          '<span class="modal__slick-prev-optimized slick-arrow" style="">&lt;</span>' +
          "</button>",
        
        arrowRight:
          '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
          '<span class="modal__slick-next-optimized slick-arrow" style="">&gt;</span>' +
          "</button>",
      }
    };
    
    $.ajax({
      type: 'get',
      url: '/works/' + id,
      success: function(data) {
        $('#modal_page_content').html(data.html);
        history.pushState({profile: id}, data.title, '#works-' + id);
      },
      complete: function() {
        if ($('#modal_page .modal__slick_text').length) {
          descr = $('#modal_page .modal__slick_text').html();
        }
        
        $('#modal_page .modal_item').each(function () {
          if ($(this).data('src')) {
            let item = {};
            
            item.src = $(this).data('src');
            item.caption = descr;
            
            dataSlider.push(item);
          }
        });
        
        $.fancybox.open(dataSlider, sliderOptions);
      }
    });
  });
  
  function checkWorksHash() {
		const hash = window.location.hash.match(/#works-([0-9]+)/);
		if (hash && hash.length > 1 && parseInt(hash[1]) > 0) {
			const top = $('#works').offset().top;
			window.scrollTo({
				top, // scroll so that the element is at the top of the view
				behavior: 'smooth' // smooth scroll
			});
		
			$('.modal__open_button[data-id=' + hash[1] + ']')[0].click();
		}
	}
	
	function checkMenuHash() {
  	const menu_hash = [];
    const services_hash = [
      '#cad-drafting-service',
      '#3d-modelling-and-bim-service',
      '#cgi-and-3d-animation-service',
      '#graphic-design-service',
      '#remote-desktop-service',
      '#hand-drawn-sketch-service',
      '#design-adaptation-service',
      '#on-site-supervision-service'
    ]

    let hash = window.location.hash

    if (services_hash.indexOf(hash) !== -1) {
      let index = services_hash.findIndex(item => item === hash)

      if (index !== -1) {
        window.setTimeout(() => {
          $(`[data-service="${index + 1}"]`)[0].click()
        }, 100)
      }

      hash = '#services'
    }

  	$('#header .nav-item a').map(function () {
			menu_hash.push($(this).attr('href'));
		});

		if (window.location.hash && menu_hash.indexOf(hash) !== -1) {
			const top = $(hash).offset().top;

			window.scrollTo({
				top, // scroll so that the element is at the top of the view
				behavior: 'smooth' // smooth scroll
			});
		}
	}
	
	if(window.location.hash) {
		checkWorksHash();
		checkMenuHash();
	}
	
	portfolioTabs();
	
	$('.tabs-name.infographic > div').click(function(){
		$('.inforgraphic-slider').slick('slickGoTo', $(this).data('slide'));
		$(this).addClass('active').siblings().removeClass('active');
	});
	
	$('#calculation_form, #callback_form, #bid_form, #modal_callback_form').submit(function (e) {
		e.preventDefault();
		
		const form_id = this.id;
		
		$.ajax({
			type: 'post',
			url: '/contacts',
			data:new FormData($(this)[0]),
			cache: false,
			processData: false,
			contentType: false,
			complete: function () {
				if (form_id === 'modal_callback_form') {
					$('#modal_callback').hide();
				}
				$('#modal_ty_page').show();
			}
		});
	});
	
	$('input[name="phone"]').mask("+00 (000) 000 00 00");
	
	$("#modal_menu").click(function(e){
		if ($(e.target).hasClass('modal_menu')
			|| $(e.target).hasClass('nav-link')) {
			$("#modal_menu").hide();
		}
	});
	
	$('.modal_menu_content .nav-link').click(function (e) {
		e.preventDefault();
		
		history.pushState($(this).html(), $(this).html(), $(this).attr('href'));
		self.location.href = $(this).attr('href');
		$("#modal_menu").hide();
	});
	
	$('#header .nav-item a').click(function (e) {
		e.preventDefault();
		
		history.pushState($(this).html(), $(this).html(), $(this).attr('href'));
		self.location.href = $(this).attr('href');
	});
	
	$("#modal_callback_user_choise").change(function (e) {
		if ($('option:selected', this).hasClass('modal_callback_tomorrow')) {
			modal_callback_time_show();
		} else {
			modal_callback_time_hide();
		}
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
	
	$('.worker_btn').click(function() {
		//$('.worker-loader').load('team/' + $(this).attr('data-id') + '?' + Date.now());
		const url = 'team/' + $(this).attr('data-id') + '?' + Date.now();
		
		$.ajax({
			type: 'get',
			url: url,
			success: function(data) {
				if (data.length < 2) return;
				$('.worker-description__wrapper').html(data.description);
				$('.worker-portfolio').html(data.portfolio);
			}
		});
		
		$('.active__worker').removeClass('active__worker');
		$(this).children().addClass('active__worker');
	});
	
	$('.service__block').click(function(){
		$('.services__all').slideToggle();
		$('.wall_services').slideToggle();
		$('.service_' + $(this).data('service')).click();
	});

	function service_back() {
		$('.service__back_button').on('click', function(e){
			e.preventDefault();
			$('.services__all').slideToggle();
			$('.wall_services').slideToggle();
			window.location.href = "#services";
		});
	}

	$('.service_btn').click(function() {
		$('.service-description-wrapper')
			.load('service/' + $(this).attr('data-service') + '?' + Date.now(),
				function (){
					service_back();
				});
		$('.service_active').removeClass('service_active');
		$(this).addClass('service_active');
		window.location.href = "#services";
	});
	
	$(".callback_modal_btn").click(function(){
		$("#modal_callback").show()
	});
	
	window.onhashchange = checkWorksHash;
});

/* video playing */

$(".bim__video_wrapper").click(function(){
	$(".bim__video").css("pointer-events","auto");
});

function uploadFile(target) {
	$(target).siblings('label').html(target.files[0].name);
}