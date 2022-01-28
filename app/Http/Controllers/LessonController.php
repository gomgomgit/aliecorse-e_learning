<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonFile;
use App\Models\LessonQuiz;
use App\Models\LessonVideo;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    // public function store(Request $request, $topic_id)
    // {   
    //     $request->validate([
    //         'topic_id' => 'required',
    //         'type' => 'required',
    //         'is_preview' => 'required',
    //         'order' => 'required',
    //     ]);

    //     $order = Lesson::where('topic_id', $topic_id)->pluck('order')->last();

    //     if ($order <= 0) {
    //         $order = 1;
    //     }else{
    //         $order++;
    //     }

    //     Lesson::create([
    //         'topic_id' => $topic_id,
    //         'type' => $request->type,
    //         'is_preview' => true,
    //         'order' => $order
    //     ]);
        
    //     return redirect()->back();
    // }
    // public function edit($id)
    // {
    //     $lesson = Lesson::findOrFail($id);

    //     return view('admin.pages.course.lesson-file-edit')
    // }

    public function destroy($id)
    {
        $data = Lesson::findOrFail($id);
        $data->delete();

        LessonFile::where('lesson_id', $id)->delete();
        LessonQuiz::where('lesson_id', $id)->delete();
        LessonVideo::where('lesson_id', $id)->delete();

        return back();
    }
}
