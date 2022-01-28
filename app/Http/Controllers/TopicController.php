<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $course = Course::findOrFail($id);
        
        return view('admin.pages.course.create-topic', compact( 'course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $course_id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $order = Topic::where('course_id', $course_id)->pluck('order')->last();

        if ($order <= 0) {
            $order = 1;
        }else{
            $order++;
        }
        
        Topic::create([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $order,
            'course_id' => $course_id
        ]);

        return redirect()->route('courses.show', $course_id);
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
    public function edit($course_id, $topic_id)
    {
        $course = Course::findOrFail($course_id);
        $topics = Topic::findOrFail($topic_id);

        return view('admin.pages.course.edit-topic', compact('course', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $course_id, $id)
    {
        $data = Topic::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        // $order = Topic::where('course_id', $course_id)->pluck('order')->last();

        // if ($order <= 0) {
        //     $order = 1;
        // }else{
        //     $order++;
        // }

        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $data->order,
            'course_id' => $course_id
        ]);
        
        return redirect()->route('courses.show', $course_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topic::findOrFail($id)->delete();

        return back();
    }
}
