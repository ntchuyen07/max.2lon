const hostName = 'http://localhost/max.2lon/public/';

$('#create-category-form').on('submit', async function(e) {
    e.preventDefault();
    const result = await $.ajax({
      type: "POST",
      url: `${hostName}admin/product/store`,
      data: $(this).serialize(),
    });
    $('#model-title').text(result.message);
    $('#open-modal-btn').click();
    if(result.success) {
      $(this).trigger("reset");
    } 
  })