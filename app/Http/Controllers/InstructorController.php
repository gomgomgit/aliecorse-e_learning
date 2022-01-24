<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = User::whereRole('Instructor')->orderByDesc('id')->get();

        return view('admin.pages.instructor.index', compact('instructors'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'email:rfc,dns|min:4|max:25|unique:users,email,except,id',
            'password'=> 'required|min:6',
            'phone'=> 'required',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'role' => 'Instructor'
        ]);

        return redirect()->route('instructors.index')->with('success-create', 'berhasil membuat data instructor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructor = User::whereRole('Instructor')->findOrFail($id);

        return view('admin.pages.instructor.detail', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = User::whereRole('Instructor')->findOrFail($id);
        return view('admin.pages.instructor.edit', compact('instructor'));
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
        $data = User::findOrFail($id);

        if($request->password){
            $request->validate([
                'name'=> 'required|max:25',
                'email'=> 'required|min:4|max:25|email:rfc,dns|unique:users,email,'.$id,
                'password' =>'required|min:6',
                'phone' =>'required',
                'role' => 'required'
            ]);
    
            $request->merge([
                'password' => bcrypt($request->password)
            ]);
    
            }else{
                $request->validate([
                    'name'=> 'required|max:25',
                    'email'=> 'required|min:4|max:25|email:rfc,dns|unique:users,email,'. $id,
                    'phone' => 'required',
                    'role' => 'required'
                ]);
            }

        if ($request->password) {
            $data->update($request->all());
        }else{
            $data->update($request->except('password'));
        }
        
        return redirect()->route('instructors.index')->with('success-update', 'berhasil mengedit data instructor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return back()->with('success-delete', 'berhasil menghapus data instructor');
    }
}
