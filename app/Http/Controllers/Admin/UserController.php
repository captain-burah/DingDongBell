<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        $this->validate($request, [
            'fname'  => 'required|string|max:191',
            'lname'  => 'required|string|max:191',
            'email'  => 'required|string|email|max:191|unique:users',
            'password'  => 'required|string|min:8',
            'contact'  => 'required',
            'medium'  => 'required',
            'status'  => 'required',
            'course_id'  => 'required',
        ]);

        $course = Course::find($request->course_id);
        $user = new user();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->contact = $request->contact;
        $user->medium = $request->medium;
        $user->message = $request->message;
        $user->status = $request->status;
        $course->users()->save($user);

        $target = User::with('course')->where('fname', $request['fname'])->get();

        return response([
            'data' => $target,
        ]);
        // return User::create([
        //     'fname' => $request['fname'],
        //     'lname' => $request['lname'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        //     'contact' => $request['contact'],
        //     'medium' => $request['medium'],
        //     'message' => $request['message'],
        //     'status' => $request['status'],
        //     'course_id' => $request['course_id'],
        // ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
