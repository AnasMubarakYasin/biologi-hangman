<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
        session()->invalidate();
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

    protected function can_continue(int $question_number)
    {
        if ($question_number < 1 || $question_number > $this->question_number) {
            return false;
        }
        return true;
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function start()
    {
        session()->invalidate();
        session()->put('question', 1);
        session()->put('key', Hash::make(today()->getTimestamp() . ''));
        return redirect()->route('quiz.question', ['number' => 1]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function end()
    {
        return view('question.finish');
    }

    /**
     * @param  int $number
     * @return \Illuminate\Http\Response
     */
    public function question(int $number)
    {
        if (!session()->has('key')) {
            return redirect('/');
        }
        if (!$this->can_continue($number)) {
            if ($number == $this->question_number + 1) {
                return redirect()->route('quiz.end');
            }
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
        $answers = session()->get('answers', []);
        $data = $request->validated();
        $question = +$data['question'];
        $answer = json_decode(Storage::get($this->answer_path));
        $next_question = $question + 1;
        if (Str::of($data['answer'])->lower() ==  $answer[$question - 1]) {
            session()->increment('correct');
            session()->forget(['failed', 'chance']);
            session()->put('question', $next_question);
            if ($question >= $this->question_number) {
                return redirect()->route('quiz.end');
            }
            return redirect()->route('quiz.question', ['number' => $next_question]);
        }
        $failed += 1;
        $chance = $this->answer_chance - $failed;
        if ($chance == 0) {
            $answers = Arr::add($answers, $question . '', $answer[$question - 1]);
            session()->put('answers', $answers);
            session()->increment('incorrect');
            session()->forget(['failed', 'chance']);
            session()->put('question', $next_question);
        } else {
            session()->put('failed', $failed);
            session()->put('chance', $chance);
        }
        return back()->withInput()->withErrors(['errors' => ['wrong answer']]);
    }
}
