<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $count = Answer::where(['user_id' => auth()->user()->id])->count();
        
        $questions = Question::inRandomOrder()->limit(10)->get();
        return view('staff.servey', compact('questions', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach($request->mcq as $key => $respnse){
            Answer::create([
                'question_id' => $key,
                'user_id' => auth()->user()->id,
                'response' => json_encode($respnse),
                ]);
        }
        foreach($request->except(['_token', 'mcq']) as $questionId => $answer){
            Answer::create([
            'question_id' => $questionId,
            'user_id' => auth()->user()->id,
            'response' => json_encode($answer),
            ]);
        }        
        
        return redirect()->route('thanks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
    public function thanks()
    {
        return view('staff.thanks');
    }
}
