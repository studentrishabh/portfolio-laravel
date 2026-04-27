<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects()
    {
        $projects = [
            ['title' => 'Project 1', 'desc' => 'Web App', 'image' => 'images/p1.jpg'],
            ['title' => 'Project 2', 'desc' => 'Ecommerce', 'image' => 'images/p2.jpg'],
            ['title' => 'Project 3', 'desc' => 'Portfolio', 'image' => 'images/p3.jpg'],
        ];

        return view('projects', compact('projects'));
    }

    public function serviceDetails()
    {
        return view('service-details');
    }
    public function portfolioDetails()
    {
        return view('portfolio-details');
    }

    public function starterPage()
    {
        return view('starter-page');
    
    }

    public function layout()
    {
        return view('layout');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        try {
            Mail::raw($request->message, function ($msg) use ($request) {
                $msg->to('your@email.com')
                    ->subject('Portfolio Contact')
                    ->replyTo($request->email);
            });

            return back()->with('success', 'Message sent!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }
}