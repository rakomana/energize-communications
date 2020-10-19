<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function getContactPage()
  {
      return view('contact');
  }

  public function submitContactForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // Write your contact form logic here

        return redirect()->back();
    }
}
