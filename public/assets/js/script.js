$('.home-slider').slick({
    dots: false,
    arrows:false,
    infinite: true,
    autoplay:true,
});
$('.image-slider').slick({
    dots: false,
    arrows:false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});
$('.post_row').slick({
    dots: false,
    arrows:false,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    autoplay:true,
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