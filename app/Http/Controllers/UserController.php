<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        //To add user detais
        public function addDetails(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('members')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }
            //To update Social Media details
        public function updateSocialMedia(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('social_media')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }


            //To update event details
        public function updateEventDetails(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('events')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }

            //To insert or update media
        public function insertUpdateMedia(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('galleries')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }

        //To delete media
        public function deleteMedia(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('galleries')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }

        //To delete media
        public function deleteSocialMedia(Request $request)
        {
          $userId=$request->input('userId');
          $affected = DB::table('galleries')
                  ->where('id', $userId)
                  ->update(['status' => 1]);
          return back();
        }
}
