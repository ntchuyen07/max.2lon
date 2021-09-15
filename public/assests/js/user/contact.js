
// đây là địa chỉ trang web, sau này có đẩy lên hosting thì đổi chỗ này là được
const hostname = 'http://localhost/max.2lon/public/';

$('#user-contact-form').on('submit', async function(e) {
  e.preventDefault();
  const result = await $.ajax({
    type: "POST",
    url: `${hostname}contact/create`,
    data: $(this).serialize(),
  });
  if(result == 1) {
    // nếu gửi contact thành công thì ...
    alert('Gửi yêu cầu hỗ trợ thành công')
  } else {
    // nếu gửi contact thất bại thì ...
  }

})