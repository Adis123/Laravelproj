<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsletterFormRequest;
use App\Newsletters;

class Newslettercontroller extends Controller
{
    public function create()
    {
        return view('newsletter.create');
        //
    }
    public function store(CreateNewsletterFormRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:newletters',
        ]);
        $newsletter = new Newsletters();
        $newsletter->name = $request->get('name');
        $newsletter->email = $request->get('email');
        $newsletter->save();
        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect('/');
    }
}
