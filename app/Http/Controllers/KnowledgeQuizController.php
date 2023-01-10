<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KnowledgeQuizController extends Controller
{
    /**
     * Show the knowledge quiz
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_responses = Auth::user()
            ->responses()
            ->select('question_id', 'value')
            ->withWhereHas('question', fn ($q) => $q->where('response_type', 'bool')->select('text', 'id'));

        // if user hasn't responded, send questions else send responses
        if ($user_responses->count() === 0)
            return view('knowledge-quiz')->with([
                'questions' => Question::where('response_type', 'int')->get()
            ]);

        $user_responses = $user_responses->get();


        return view('knowledge-quiz')->with([
            'total_score' => $user_responses->sum('value'),
            'responses' => $user_responses
        ]);
    }
}
