<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Support\Facades\Auth;

class PersonalQuizController extends Controller
{
    /**
     * Show the personal quiz
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_responses = Auth::user()
            ->responses()
            ->select('question_id', 'value')
            ->with([
                'question' => fn ($q) => $q->where('response_type', 'bool')->select('text', 'id')
            ]);

        // if user hasn't responded, send questions else send responses
        if ($user_responses->count() === 0)
            return view('personal-quiz')->with([
                'questions' => Question::where('response_type', 'bool')->get()
            ]);

        $user_responses = $user_responses->get();
        $all_ques = Question::where('response_type', 'bool')->withCount(['responses' => fn ($q) => $q->where('value', 1)])->get();
        $total_responses = Question::where('response_type', 'bool')->withCount('responses')->first()->responses_count;

        return view('personal-quiz')->with([
            'total_responses' => $total_responses,
            'responses' => $all_ques
                ->map(
                    fn ($q) => [
                        'user_response' => $user_responses->where('question_id', $q->id)->first()->value,
                        'public_yes' => $q->responses_count,
                        'question' => $q->text,
                    ]
                )
        ]);
    }
}
