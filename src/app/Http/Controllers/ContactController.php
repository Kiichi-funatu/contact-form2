<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tell' => 'required',
            'address' => 'required',
            'detail' => 'required|max:120',
            'category_id' => 'required',
        ]);

        return view('confirm', compact('inputs'));
    }

    public function store(Request $request)
    {
        if ($request->input('back') === 'back') {
            return redirect('/')->withInput();
        }

        Contact::create([
            'category_id' => $request->category_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tell' => $request->tell,
            'address' => $request->address,
            'building' => $request->building,
            'detail' => $request->detail,
        ]);

        return view('thanks');
    }
}