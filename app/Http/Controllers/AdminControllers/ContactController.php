<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index() {
        // lấy hết contact;
        // $contacts = Contact::all();
        // lấy hết contact có phân trang
        // $contacts = Contact::paginate(5);
        // lấy contact có điều kiện, get() sẽ lấy ra 1 danh sách kiểu mảng, first() sẽ lấy ra 1 phần tử đầu tiên
        // lấy số lượng cụ thể dùng take(5)
        // $contact = Contact::where('id', '=', 1)->take(5)->get();
        // lấy contact theo nhiều điều kiện
        //and:where->where, or: where->orWhere
        // ngoài ra có thể where like, where >
        $contacts = Contact::paginate(15);
        return view('admin.contact.index',compact('contacts'));
    }
    function contactReply($id) {
        $contact = Contact::where('id', '=', $id)->first();
        return view('admin.contact.detail',compact('contact'));
                // return view('admin.contact.detail');
    }

    function sendReply(Request $request, $id)
    {
        $contact = Contact::where('id', '=', $id)->first();
        $contact->reply = $request->content;
        $contact->reply_at = date("Y-m-d H:i:s");
        $contact->save();
        return redirect()->to('admin/management-contacts');
    }
}
