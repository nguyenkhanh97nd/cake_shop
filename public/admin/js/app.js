// Alert
$("div.alert").delay(3000).slideUp();

// Show menu
$(window).on('load',function() { 
  //thanh menu left
    $('.menu-left > ul > li:first a').next().slideToggle();
  
    $('.menu-left > ul > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('.menu-left ul li ul').slideUp();
      $(this).next().slideToggle();
      $('.menu-left ul li a').removeClass('active');
      $(this).addClass('active');
    }
    });
});

