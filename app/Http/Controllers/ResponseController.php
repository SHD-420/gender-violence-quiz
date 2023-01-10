<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'response' => 'required|array',
            'response.*' => 'numeric|min:0',
        ]);

        $response_collection = collect($data['response']);
        $response_type = Question::findOrFail($response_collection->keys()->first())->response_type;

        $unanswered_questions =
            Question::where('response_type', $response_type)
            ->select('id')
            ->get()
            ->mapWithKeys(fn ($q) => ["response[$q->id]" => "required"]);
        $response_objects = [];
        $user_id = Auth::user()->id;

        if ($response_type === "bool") {
            foreach ($response_collection as $question_id => $response) {
                array_push($response_objects, [
                    'question_id' => $question_id,
                    'value' => $response,
                    'user_id' => $user_id
                ]);
                $unanswered_questions->forget("response[$question_id]");
            }
            if ($unanswered_questions->count() > 0) {
                return back()->withErrors($unanswered_questions->toArray())->withInput($data);
            }
            Response::insert($response_objects);
            User::where('id', $user_id)->update(['has_responded_personal_quiz' => true]);
            return redirect()->route('dashboard')->with('success-message', '¡Respuesta grabada!');
        }
    }
}
