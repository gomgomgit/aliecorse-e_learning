<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseDiscount;
use App\Models\Topic;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderByDesc('id')->get();

        return view('admin.pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'thumbnail' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'duration_hour' => 'required',
            'duration_minute' => 'required',
            'duration_second' => 'required',
            'level' => 'required',
            'price'=> 'required',
            'benefits'=> 'required|string',
            'requirements'=> 'required|string',
            'audients'=> 'required|string',
            // 'user_id'=> 'required',
            // 'status'
        ]);


        if ($request->file('thumbnail') !== null ) {
            $image = $request->file('thumbnail')->store('assets/course','public');
        }else{
            $image = null;
        }

        Course::create([
            'thumbnail' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'duration_hour' => $request->duration_hour,
            'duration_minute' => $request->duration_minute,
            'duration_second' => $request->duration_second,
            'level' => $request->level,
            'price' => $request->price,
            'benefits' => $request->benefits,
            'requirements' => $request->requirements,
            'audients' => $request->audients,
            'user_id' => 1,
            'status' => 'Active'
        ]);

        $course_id = Course::pluck('id')->last();

        if ($request->discount_price) {
            CourseDiscount::create([
                // 'course_id' => $courses->count() <= 0 ? 1 : $courses->last()->id + 1,
                'course_id' => $course_id != null ? $course_id++ : 1,
                'discount_price' => $request->discount_price,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end
            ]);
        }

        return redirect()->route('courses.index')->with('success-create', 'berhasil membuat data kursus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        $topics = Topic::where('course_id', $id)->get();

        return view('admin.pages.course.detail', compact('course', 'topics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $courses = Course::findOrFail($id);

        return view('admin.pages.course.create', compact('categories', 'courses'));
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
        $request->validate([
            'thumbnail' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'duration_hour' => 'required',
            'duration_minute' => 'required',
            'duration_second' => 'required',
            'level' => 'required',
            'price'=> 'required',
            'benefits'=> 'required|string',
            'requirements'=> 'required|string',
            'audients'=> 'required|string',
            // 'user_id'=> 'required',
            // 'status'
        ]);

        $data = Course::find($id);

        if ($request->file('thumbnail') !== null ) {
            $image = $request->file('thumbnail')->store('assets/thumbnail','public');
        }else{
            $image = $data->thumbnail;
        }

        $data->update([
            'thumbnail' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'duration_hour' => $request->duration_hour,
            'duration_minute' => $request->duration_minute,
            'duration_second' => $request->duration_second,
            'level' => $request->level,
            'price'=> $request->price,
            'benefits'=> $request->benefits,
            'requirements'=> $request->requirements,
            'audients'=> $request->audients,
            'user_id' => 1,
            'status' => 'Active',
        ]);

        $courseDiscount = CourseDiscount::where('course_id', $id)->get()->first();
        
        if ($request->discount_price) {
            $courseDiscount->update([
                'course_id' => $id,
                'discount_price' => $request->discount_price,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end
            ]);
        }

        return redirect()->route('courses.index')->with('success-update', 'berhasil mengedit data kursus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Course::findOrFail($id);
        $data->delete();
        $data->topic->delete();
        $data->courseDiscount->delete();
        $data->review->delete();
        $data->order->delete();
        $data->question->delete();
        
        return back()->with('success-delete', 'berhasil menghapus data kursus');
    }
}
