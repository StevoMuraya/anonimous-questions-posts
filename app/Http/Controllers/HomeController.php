<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = question::latest()->get();
        return view('home', [
            'active' => 'asked',
            'questions' => $questions,
        ]);
    }
}
