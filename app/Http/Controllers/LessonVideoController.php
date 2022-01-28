<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonVideo;
use Illuminate\Http\Request;

class LessonVideoController extends Controller
{
    public function store(Request $request, $topic_id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'link' => 'required'
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
            'type' => 'Video',
            'is_preview' => 1,
            'order' => $order,
        ]);

        LessonVideo::create([
            'lesson_id' => $lesson->id,
            'name' => $request->name,
            'type' => $request->type,
            'link' => $request->link
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $lessonVideo = LessonVideo::findOrFail($id);

        return view('admin.pages.course.lesson-video-edit', compact('lessonVideo'));
    }

    public function update(Request $request, $lessonVideo_id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'link' => 'required'
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
        //     'type' => 'Video',
        //     'is_preview' => 1,
        //     'order' => $order,
        // ]);

        // dd($request->all());
        // $Lesson = LessonVideo::findOrFail($lessonVideo_id);
        $data = $request->all();

        LessonVideo::findOrFail($lessonVideo_id)->update($data);

        return redirect()->back();
    }
}
