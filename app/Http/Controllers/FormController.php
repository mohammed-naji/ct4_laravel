<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form4Request;
use App\Rules\WordsCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    function form1()
    {
        return view('forms.form1');
    }

    function form1_data(Request $request)
    {
        dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('email'));
        // $data = $_POST;
        // unset($data['_token']);

        // dd($data);

        // $name = $request->post('name');
        // $name = $request->input('name');
        // $name = $request->name;
        // $accept = $request->input('accept', 'dddddddddddddd');
        // $accept = $request->accept;

        // dd($accept);

        // dd($name);
    }

    function form2()
    {
        return view('forms.form2');
    }

    function form2_data(Request $request)
    {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;

        // check the identity
        if ($email == 'admin@info.com' && $password == 123) {
            dd("Login Successfully");
        } else {
            dd("Error");
        }
    }

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'mobile' => 'required',
            'password' => 'required|confirmed',
        ]);
        dd($request->all());
    }


    function form4()
    {
        return view('forms.form4');
    }

    // function form4_data(Form4Request $request)
    function form4_data(Request $request)
    {
        // 1. request validation
        // 2. form request
        // 3. validator class
        // $request->validate([
        //     // 'name' => 'required|min:3|max:20',
        //     'name' => ['required', 'min:3', 'max:20'],
        //     'email' => 'required|email|ends_with:@gmail.com'
        // ], [
        //     // 'required' => 'الحقل مطلووووووووب'
        //     'name.required' => 'حقل الاسم مطلوب اخوي',
        //     'email.required' => 'حقل الايميل اهم منك شخصيا',
        // ]);

        // $request->validate();
        // $request->validated();

        // $validator = Validator::make($request->all(), [
        //     'name' => ['required', 'min:3', 'max:20'],
        //     'email' => 'required|email'
        // ]);

        // if($validator->fails()) {
        //     return [
        //         'status' => false,
        //         'messages' => 'There is an errors',
        //         'errors' => $validator->errors()->messages()
        //     ];
        // }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'bio' => ['required', new WordsCount()],
            'content' => ['required', new WordsCount(20)],
        ]);

        dd($request->all());
    }
}
