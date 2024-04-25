<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        if(auth()->user()->role !== 'management')
            abort(403);
        $users = User::count();
        $questions = Question::count();

        // $answerCount = DB::table('answers')
        //         ->leftJoin('answers.question_id')
        //          ->select('question_id', DB::raw('count(*) as total'))
        //          ->groupBy('question_id')
        //          ->get();

        $answerCount = Question::withCount(['answers'])->get();
        return view('management.home', compact('users', 'questions','answerCount'));
    }
}
