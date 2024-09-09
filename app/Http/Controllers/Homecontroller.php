<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Models\Product;
use App\Mail\BlogPosted;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $items = Product::all();

        // dd($items);

        return view('Index', compact('items'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|min:$request->valid',
        ]);

        // $news=NewsLetter::get('email');
        // if($request->email=$news){
        //     dd('already');
        // }
        $newsletter = new NewsLetter;
        $newsletter->email = $request->email;
        $newsletter->save();


        // SendMail::dispatch();

        return redirect()->back()->with('message', 'Thank you for subscribing to our newsletter!!');
    }
}
