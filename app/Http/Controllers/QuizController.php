<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    protected $answer_path = 'answer.json';

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $request->session()->regenerate();
        return view('question.1');
    }

    /**
     * @param  \App\Http\Requests\QuizPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function answer(QuizPostRequest $request)
    {
        $failed = $request->session()->get('failed', 0);
        $data = $request->validated();
        $answer = json_decode(Storage::get($this->answer_path), true);
        $question = $data['question'];
        $next_question = $question + 1;
        if ($data['answer'] ==  $answer[$question]) {
            $request->session()->put('failed', 0);
            return view('question.' . $next_question);
        }
        if ($failed >= 3) {
            $request->session()->put('failed', 0);
            return view('question.' . $next_question);
        }
        $request->session()->put('failed', $failed + 1);
        return back()->withInput()->withErrors(['errors' => ['wrong answer']]);
    }
}
