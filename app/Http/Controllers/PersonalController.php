<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonalController extends Controller
{
    function index()
    {
        $about_title = "About Homepage";

        return view('personal.index', compact('about_title'));
    }

    function resume()
    {
        $about_title = "About Resume";

        return view('personal.resume', compact('about_title'));
    }

    function projects()
    {
        return view('personal.projects');
    }

    function contact()
    {
        return view('personal.contact');
    }

    function contact_email(PersonalRequest $request)
    {

        Mail::to('admin@info.com')->send(new TestMail());

        // Mail::send('mails.test', [], function ($message) {
        //     $message->to('recipient@example.com')
        //         ->subject('Order Shipped')
        //         ->from('noreply@example.com');
        // });

        dd("Email Sent Successfully");
    }
}
