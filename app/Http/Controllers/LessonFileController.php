<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonFile;
use Illuminate\Http\Request;

class LessonFileController extends Controller
{
    public function store(Request $request, $topic_id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required'
            // 'lesson_id' => 'required',
        ]);

        $order = Lesson::where('topic_id', $topic_id)->pluck('order')->last();

        if ($order <= 0) {
            $order = 1;
        }else{
            $order++;
        }

        $lesson =  Lesson::create([
            'topic_id' => $topic_id,
            'type' => 'File',
            'is_preview' => 1,
            'order' => $order,
        ]);

        LessonFile::create([
            'lesson_id' => $lesson->id,
            'name' => $request->name,
            'description' => $request->description,
            'file' => $request->file
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $lesson = LessonFile::findOrFail($id);

        return view('admin.pages.course.lesson-file-edit', compact('lesson'));
    }

}
