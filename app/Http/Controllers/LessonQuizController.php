<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonQuiz;
use Illuminate\Http\Request;

class LessonQuizController extends Controller
{
    public function store(Request $request, $topic_id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'time_limit' => 'required',
            'limit_type' => 'required',
            'show_timeout' => 'required',
            'passing_grade' => 'required',
            'question_order' => 'required'
        ]);

        // dd($request->all());

        $order = Lesson::where('topic_id', $topic_id)->pluck('order')->last();

        if ($order <= 0) {
            $order = 1;
        }else{
            $order++;
        }

        $lesson =  Lesson::create([
            'topic_id' => $topic_id,
            'type' => 'Quiz',
            'is_preview' => 1,
            'order' => $order,
        ]);

        LessonQuiz::create([
            'lesson_id' => $lesson->id,
            'name' => $request->name,
            'detail' => $request->detail,
            'time_limit' => $request->time_limit,
            'limit_type' => $request->limit_type,
            'show_timeout' => $request->show_timeout == 'on' ? 1 : 0,
            'passing_grade' => $request->passing_grade,
            'question_order' => $request->question_order
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $lessonQuiz = LessonQuiz::findOrFail($id);

        return view('admin.pages.course.lesson-quiz-edit', compact('lessonQuiz'));
    }

    public function update(Request $request, $lessonQuiz_id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'file' => 'required'
            // 'lesson_id' => 'required',
        ]);

        // $order = Lesson::where('topic_id', $topic_id)->pluck('order')->last();

        // if ($order <= 0) {
        //     $order = 1;
        // }else{
        //     $order++;
        // }

        // $lesson =  Lesson::create([
        //     'topic_id' => $topic_id,
        //     'type' => 'File',
        //     'is_preview' => 1,
        //     'order' => $order,
        // ]);

        $data  = LessonQuiz::findOrFail($lessonQuiz_id);

        if ($request->file) {
            $file = $request->file;
        }else{
            $file = $data->file;
        }

        $data->update([
            'lesson_id' => $data->lesson_id,
            'name' => $request->name,
            'description' => $request->description,
            'file' => $file
        ]);

        return redirect()->back();
    }
}
