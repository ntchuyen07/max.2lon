var slider = document.getElementById("range-price");
var output = document.getElementById("price");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}