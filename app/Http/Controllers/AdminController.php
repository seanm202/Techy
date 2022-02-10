<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    //To approve users
    public function approveUsers(Request $request)
    {
      $userId=$request->input('userId');
      $affected = DB::table('users')
              ->where('id', $userId)
              ->update(['status' => 1]);
      return back();
    }


//To delete users
    public function deleteUsers(Request $request)
    {
      $userId=$request->input('userId');
      $deleted = DB::table('users')->where('userID',$userId)->delete();
      return back();
    }


///To update user details
        public function updateUsers(Request $request)
        {
          $userId=$request->input('userId');
          $deleted = DB::table('users')->where('userID',$userId)->update(['status' => 1]);
          return back();
        }


//To view user details
    public function getUserDetails(Request $request)
    {
      $userId=$request->input('userId');
      $userDetails = DB::table('users')->where('userID',$userId)->get();
      $userDepartment = DB::table('departments')->where('userID',$userId)->get();
      $userEvents = DB::table('events')->where('userID',$userId)->get();
      $userLocation = DB::table('locations')->where('userID',$userId)->get();
      $userSocial = DB::table('social_media')->where('userID',$userId)->get();
      $userGallery = DB::table('galleries')->where('userID',$userId)->get();

      return view();

    }


////////To approve media posted by users
    public function approveUserMedia(Request $request)
    {
      $userId=$request->input('userId');
        $mediaId=$request->input('mediaId');
      $affected = DB::table('galleries')
              ->where('userId', $userId)
              ->where('galleryId', $mediaId)
              ->update(['status' => 2]);
      return back();
    }

}
