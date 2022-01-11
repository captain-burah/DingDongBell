<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'tutor' => 'required',
            'status' => 'required',
            'learning_outcomes' => 'required',
        ]);

        

        $course = new Course();
        $course->name = $request->name;
        $course->tutor = $request->tutor;
        $course->description = $request->description;
        $course->status = $request->status;
        $course->learning_outcomes = $request->learning_outcomes;
        $course->image = $request->image;
        $res = $course->save();

        if ($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }
        else {
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        };
        return response()->json($data);
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
        $course = Course::find($id);

        $course->name = $request->name;
        $course->tutor = $request->tutor;
        $course->description = $request->description;
        $course->status = $request->status;
        $course->learning_outcomes = $request->learning_outcomes;
        $course->image = $request->image;

        $res=$course->save();
        
        if ($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }
        else {
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        };
        return response()->json($data);

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $res=$course->delete();
        if ($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }
        else {
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        };
        return response()->json($data);
    }
}
