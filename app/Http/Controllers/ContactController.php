<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        try {
            Mail::raw(
                "Name: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}",
                function ($msg) use ($request) {
                    $msg->to('rishabh.chaurasiya011@gmail.com')
                        ->subject($request->subject)
                        ->replyTo($request->email);
                }
            );

           
            return redirect()->back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Email failed!');
        }
    }
}