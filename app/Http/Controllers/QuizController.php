<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    protected $answer_path = 'answer.json';
    protected $question_number = 25;
    protected $answer_chance = 3;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->reflash();
        return view('index');
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
        //
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

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request)
    {
        session()->invalidate();
        return redirect()->route('quiz.question', ['number' => 1]);
    }

    /**
     * @param  int $number
     * @return \Illuminate\Http\Response
     */
    public function question(int $number)
    {
        if ($this->question_number < 1 && $this->question_number > 25) {
            return abort(404);
        }
        return view('question.' . $number);
    }

    /**
     * @param  \App\Http\Requests\QuizPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function answer(QuizPostRequest $request)
    {
        $failed = session()->get('failed', 0);
        $chance = session()->get('chance', $this->answer_chance);
        $data = $request->validated();
        $answer = json_decode(Storage::get($this->answer_path), true);
        $question = $data['question'];
        $next_question = $question + 1;
        if ($data['answer'] ==  $answer[$question]) {
            session()->forget(['failed', 'chance']);
            return redirect()->route('quiz.question', ['number' => $next_question]);
        }
        $failed += 1;
        $chance = $this->answer_chance - $failed;
        if ($chance == 0) {
            session()->forget(['failed', 'chance']);
        } else {
            session()->put('failed', $failed);
            session()->put('chance', $chance);
        }
        return back()->withInput()->withErrors(['errors' => ['wrong answer']]);
    }
}
