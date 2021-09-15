const navItems = document.querySelectorAll('.nav-item');
const currentRoute = window.location.pathname.split('/');

loadActiveNavbar();
function loadActiveNavbar() {
    for(const navItem of navItems) {
        navItem.classList.remove('active');
    }
    switch(currentRoute[3]) {
        case '':
        case 'home':
            navItems[0].classList.add('active');
            break;
        case 'menu':
        case 'product':
            navItems[1].classList.add('active')
            break;
        case 'chia-se-bai-viet':
        case 'list-posts':
        case 'post':
            navItems[2].classList.add('active')
            break;
        case 've-chung-toi':
            navItems[3].classList.add('active')
            break;
        case 'contact':
            navItems[4].classList.add('active')
            break;
        case 'gio-hang-cua-toi':
          navItems[5].classList.add('active')
          break;

    }
}

function bootstrapHoverMenu (bp = 768) {

    // close all dropdowns that are open
      $('body').click( function (e) {
      $('.dropdown-menu.show').removeClass('show');
    });
  
    // show dropdown for the link clicked
    $('.nav-item').hover(function (e) {
      $('.dropdown-menu.show').removeClass('show');
      if(( $(window).width() >= bp )) {
        $dd = $(this).find('.dropdown-menu');
        $dd.addClass('show');
      }
    });
  
    // get href for top level link if clicked and open
    $('.dropdown').click(function (e) {
      if( $(window).width() < bp ) {
        $('.dropdown-menu').css({'display': 'none'});
      }
      $href = $(this).find('.nav-link').attr('href');
      window.open($href, '_self');
    });
  }
  
  $(document).ready( function() {
     // when page ready run the fix
     bootstrapHoverMenu();
  });

  //Get the button
  var buttop = document.getElementById("BtnTop");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      buttop.style.display = "block";
    } else {
      buttop.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }