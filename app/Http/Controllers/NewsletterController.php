<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        Newsletter::subscribe($request->email);
        return redirect('newsletter')->with('success', $request->email);
    }
}