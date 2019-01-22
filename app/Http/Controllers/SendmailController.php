<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendGmail;

class SendmailController extends Controller
{
    //
    public function send(Request $req)
    {
        // 收件者務必使用 collect 指定二維陣列，每個項目務必包含 "name", "email"
        $to = collect([
            ['name' => $req->msg1, 'email' => $req->msg2]
        ]);
 
        // 提供給模板的參數
        $par = [
            'name' => $req->msg1, 
            'email' => $req->msg2,
            'content' => $req->msg3
        ];
 
        Mail::to($to)->send(new SendGmail($par));
        // return  redirect()->route('/');
        return redirect('/')->with('success','寄信成功囉!!');
    }


    // public function test(Request $req){
    //     return $req->all();
    // }
}
