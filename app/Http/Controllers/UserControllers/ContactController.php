<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function contact()
    {
        return view('user.contact');
    }

    function contactCreate(Request $request) 
    {
        // thì muốn lấy cái input nào thì gọi $request->name hoặc $request['']
        // giờ tạo mới 1 cái contact
        // đầu tiên là import cái modal Contact vào file Controller này
        // tạo mới 1 contact, cái contact được tạo ra này là 1 đối tượng rỗng, chưa có dữ liệu
        // mình sẽ thêm dữ liệu cho nó
        $contact = new Contact();
        // thêm dữ liệu tên người gửi cho đối tượng contact
        // vì chưa có user nên để tạm user_id = 1 ở đây nghe, sau có bảng user thì thêm vô
        $contact->user_id = 1;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->message;

        // sau khi thêm dữ liệu cho contact. thì mình phải lưu lại cái đối tượng contact này
        // đã lưu, cái này sẽ trả về 1 và 0, 1 là lưu thành công
        // giờ mình kiểm tra, nếu lưu thành công thì trả về trạng thái là success true
        // còn ko thì success false, để biến thành công hay ko còn hiện cái thông báo cho đúng
        if($contact->save()) {
            return 1;
        } else {
            return 0;
        }
        
    }
}
