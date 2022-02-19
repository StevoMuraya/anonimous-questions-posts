<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class ManageQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $questions = question::orderBy('id', 'ASC')->where('answered', '=', '0')->get();
        return view('home', [
            'active' => 'pending',
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = question::find($id);
        if ($question->answered == 0) {
            $question->answered = 1;
        } else {
            $question->answered = 0;
        }
        $question->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function askedQuestions()
    {
        $questions = question::orderBy('updated_at', 'ASC')->where('answered', '=', '1')->get();
        return view('welcome', [
            'active' => 'asked',
            'questions' => $questions,
        ]);
    }
}
