<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserBookmark;
use App\User;
use App\Post1992Act;
use Illuminate\Support\Facades\DB;

class UserDashBoardController extends Controller
{
    //----------------------------------------------------------Dashboard-------------------------------------------------------------
    public function dashboard(){
        return view('user_dashboard.dashboard');
    }

    //----------------------------------------------------------Profile---------------------------------------------------------------
    // public function show_user_profile ($user_id){
    //     $users = User::where(['id' => $user_id])->get();

    //     return view('user_dashboard.profile', compact('users'));
    // }

    //----------------------------------------------------------Bookmarks-------------------------------------------------------------
    public function show_user_bookmarks($user_id){
        $order_by_dates = UserBookmark::where(['user_id' => $user_id])->orderBy('created_at')->get();

        return view('user_dashboard.bookmarks', compact('order_by_dates'));

    }

    public function save_bookmark_article($act, $section, $section_id, $user_name, $user_id, $user_section, $act_group, $act_id){
        $user_bookmark = new UserBookmark;

        if (UserBookmark::where('user_section', '=', $user_section)->first())
            {
                return response()->json(
                            [
                            'success' => true,
                            'message' => 'Section bookmark already exists'
                            ]
                        );
            }  
        else{
            $user_bookmark = UserBookmark::Create(
                ['user_section' => $user_section, 'act_title' => $act, 'act_section' => $section, 'user_name' => $user_name, 'user_id' => $user_id, 'section_id' => $section_id, 'act_id' => $act_id, 'act_group' => $act_group]
                );  
            }
            $user_bookmark->save();           
    }

    //----------------------------------------------------------Downloads-----------------------------------------------------------------
    public function downloads(){
        return view('user_dashboard.downloads');
    }
}
