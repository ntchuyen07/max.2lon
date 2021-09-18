const hostName = 'http://localhost/max.2lon/public/';
$('.add-cart-form').on('submit', async function(e) {
  e.preventDefault();
  console.log($(this).serialize())
  const result = await $.ajax({
    type: "POST",
    url: `${hostName}cart/add`,
    data: $(this).serialize(),
  });
  $('#open-modal-btn').click();
})