const href = window.location.href;
const hostName = href.substr(0, href.indexOf('admin'));

$('#create-category-form').on('submit', async function(e) {
  e.preventDefault();
  const result = await $.ajax({
    type: "POST",
    url: `${hostName}admin/category/store`,
    data: $(this).serialize(),
  });
  $('#model-title').text(result.message);
  $('#open-modal-btn').click();
  if(result.success) {
    $(this).trigger("reset");
  }
})