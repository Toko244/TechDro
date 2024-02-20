 
$(document).ready(function(){ 
  $(".scroll_data_id").on('click', function(event) {
    let itemId = $(this).attr('data-id'); 
    let headerHeight = $('header').height(); 
    $('html, body').animate({
      scrollTop: $(`#${itemId}`).offset().top - headerHeight
  }, 200);
  });
});


$(document).ready(function(){
  $('.mg-b_01 .arrow-icon-burger').on('click', function() { 
    $(this).parents('.resp-burger-links-div').toggleClass('active-burger').siblings().removeClass('active-burger');
  });
})

$('.modal-input-box_01 input, .modal-textarea-box_01 textarea').keyup(function(){
  if($(this).val().length > 0){
    $(this).prev().addClass('hidden-validate');
  }else{
    $(this).prev().removeClass('hidden-validate');
  }
}) 
 

$(window).scroll(function(){
  if ($(this).scrollTop() > 800) {
     $('#guideline').addClass('guid-on');
  } else {
     $('#guideline').removeClass('guid-on');
  }
});


$(window).scroll(function(){
  if ($(this).scrollTop() > 1) {
     $('.header-scroll').addClass('header-short');
  } else {
     $('.header-scroll').removeClass('header-short');
  }
});


setTimeout(function() {
  $('.contact-alert-message').addClass('none');
}, 3000);


// var a = 0; 
// $(window).scroll(function() {
//   var oTop = $('#counter').offset().top - window.innerHeight;
//   if (a == 0 && $(window).scrollTop() > oTop) {
//     $('.counter-value').each(function() {
//       var $this = $(this),
//         countTo = $this.attr('data-count');
//         console.log(countTo)
//       $({
//         countNum: $this.text()
//       }).animate({
//           countNum: countTo
//         }, 
//         { 
//           duration: 2000,
//           easing: 'swing',
//           step: function() {
//             $this.text(Math.floor(this.countNum));
//           },
//           complete: function() {
//             $this.text(this.countNum);
//             //alert('finished');
//           }

//         });
//     });
//     a = 1;
//   } 
// });

var sliderActive = true;
// console.log(sliderActive)
 if( $('.home-banner').attr('data-slider') == 'false'){
    sliderActive = false;
 }
//  console.log(sliderActive)
$('.home-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows:false,
  infinite: true,
  autoplay:  sliderActive,
  speed: 2000, 
});
$('.text-section-slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: $('.text-prev'),
  nextArrow: $('.text-next'),
  autoplay:true,
});
$('.image-slider').slick({
  dots: false,
  arrows:false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay:true,
  responsive: [ 
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.testimonial-slider').slick({
dots: false,
arrows:false,
slidesToShow: 4,
slidesToScroll: 1,
infinite: true,
speed: 500,
responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 576,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
]
});
$('.post-slider').slick({
dots: false,
arrows:false,
infinite: true,
slidesToShow: 4,
speed: 500,
prevArrow: $('.prev'),
nextArrow: $('.next'),
responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      infinite: true,
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  }
]
});
$('.post_row').slick({
  dots: false,
  arrows:false,
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  autoplay:true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});

$('.post-row-slider').slick({
  dots: false,
  arrows:false,
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  // autoplay:true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

$(document).ready(function(){
                    
    $(".guidline-icon").click(function() {  
      $(".fixed-guidline").toggleClass("active").focus();  
    });  
    $("section, header").click(function() {  
      $(".fixed-guidline").removeClass("active");  
    });  
   
  $('#nav-icon3').click(function(){
      $(this).toggleClass('open');
  });

  $( "#nav-icon3" ).click(function() {
      $( ".burgermenu" ).toggleClass( "open" );
      
      if($('.burgermenu').hasClass('open')){
         $('.fixed-guidline .guidline-icon').css('display', 'none');
      }else{
        $('.fixed-guidline .guidline-icon').css('display', 'flex');
      }
    });

  
$( ".icon-right-arrow" ).click(function() {
  $(this).parent().toggleClass( "sub-open" );
});
});
 

$('.fancybox-button').on('click', (event) => {
  console.log('click-fancy-box-close')
})
 
 

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal  
if(btn !== null){
  btn.onclick = function() { 
    modal.style.display = "block";
    }
}
 

// When the user clicks on <span> (x), close the modal
 if(span){
  span.onclick = function() {
    modal.style.display = "none";
    }
 }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
