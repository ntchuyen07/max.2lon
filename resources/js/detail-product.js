var slides = document.getElementsByClassName("image-slide");
var dots = document.getElementsByClassName("item-image");
var slideIndex = 1;
let isFirstTime = true;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


// slides[slideIndex-1].style.display = "block";


//tăng giảm số lượng sản phẩm
$('input.input-qty').each(function() {
    var $this = $(this),
      qty = $this.parent().find('.is-form'),
      min = Number($this.attr('min')),
      max = Number($this.attr('max'))
    if (min == 0) {
      var d = 0
    } else d = min
    $(qty).on('click', function() {
      if ($(this).hasClass('minus')) {
        if (d > min) d += -1
      } else if ($(this).hasClass('plus')) {
        var x = Number($this.val()) + 1
        if (x <= max) d += 1
      }
      $this.attr('value', d).val(d)
    });
  });

$('#nav-link-review').on('click', async function() {
  if(isFirstTime) {
    let progressBars = document.querySelectorAll('.progress-bar');
    for(let progressBar of progressBars) {
      const progress = progressBar.getAttribute('data-progress');
      let current = 0;
      const id = setInterval(() => {
        if(current >= progress) clearInterval(id);
        progressBar.style.width = current + '%';
        current++;
      }, 10)
      }
  }
  isFirstTime = false;
})
