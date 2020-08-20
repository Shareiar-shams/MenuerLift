<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendmailController extends Controller
{
    public function index($id)
    {
        $contact = contact::where('id',$id)->first();
        return view('admin.contact.mailfeedback',compact('contact'));
    }
}
