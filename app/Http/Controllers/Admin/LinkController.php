<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target = Link::get();
        $data=[
            'data' => $target,
        ];
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::find($request->course_id);
        $link = new Link();
        $link->name = $request->name;
        $link->description = $request->description;
        $link->link = $request->link;
        $res=$course->links()->save($link);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $link = Link::find($id);

        $link->name = $request->name;
        $link->description = $request->description;
        $link->link = $request->link;
        $res = $link->save();
        
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
        $link=Link::find($id);
        $res=$link->delete();

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
