<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
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

        // dd($image);
        
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

        return view('admin.pages.course.detail', compact('course'));
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

        return view('admin.pages.course.create', compact('categories'));
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
            'thumbnail' => 'required|image',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'duration_hour' => 'required|numeric',
            'duration_minute' => 'required|numeric',
            'duration_second' => 'required|numeric',
            'level' => 'required',
            'price'=> 'required|numeric',
            'benefits'=> 'required|string',
            'requirements'=> 'required|string',
            'audients'=> 'required|string',
            'user_id'=> 'required',
            'status'
        ]);

        $data = Course::find($id);

        if ($request->file('thumbnail') !== null ) {
            $image = $request->file('thumbnail')->store('assets/thumbnail','public');
        }else{
            $image = $data->thumbnail;
        }

        $data->update([
            'thumbnail' => $image,
            'name' => $request->title,
            'description' => $request->content,
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

        return redirect()->route('course.index')->with('success-update', 'berhasil mengedit data kursus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::findOrFail($id)->delete();

        return back()->with('success-delete', 'berhasil menghapus data kursus');
    }
}
