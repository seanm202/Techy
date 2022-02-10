<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

  public function getAllAlumniDetails()
  {

    $userId=$request->input('email');
    $userSocialDetails = DB::table('users')
             ->select('name','email')
             ->where('email',$email)
             ->get();

   $userMediaDetails = DB::table('users')
            ->select('name','email')
            ->where('email',$email)
            ->get();
  $userLocationDetails = DB::table('users')
           ->select('name','email')
           ->where('email',$email)
           ->get();
  $userGalleryDetails = DB::table('users')
  ->select('name','email')
  ->where('email',$email)
  ->get();
  }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        //
    }
}
