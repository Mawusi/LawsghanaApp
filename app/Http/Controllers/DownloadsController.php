<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDownload;

class DownloadsController extends Controller
{
    //
    public function show_user_downloads($user_id){

        $order_by_sections = UserDownload::where(['user_id' => $user_id])
        ->where('user_act')
        ->get();

        $order_by_acts = UserDownload::where(['user_id' => $user_id])
        ->where('user_section')
        ->get();

        return view('user_dashboard.downloads', compact('order_by_sections', 'order_by_acts'));
    }

    public function save_download_section($act_title, $section, $section_id, $user_name, $user_id, $user_section, $act_group, $act_id){
        //dd($act, $section, $section_id, $user_name, $user_id, $user_section, $act_group, $act_id);

        $user_bookmark = new UserDownload;

        if (UserDownload::where('user_section', '=', $user_section)->first())
            {
                return response()->json(
                            [
                            'success' => true,
                            'message' => 'You have already downloaded this section'
                            ]
                        );
            }  
        else{
            $user_bookmark = UserDownload::Create(
                ['user_section' => $user_section, 'act_title' => $act_title, 'act_section' => $section, 'user_name' => $user_name, 'user_id' => $user_id, 'section_id' => $section_id, 'act_id' => $act_id, 'act_group' => $act_group]
                );  
            }
            $user_bookmark->save();           
    }

    public function save_download_act($act_title, $user_name, $user_id, $act_group, $act_id, $user_act){
        // dd($act_title, $user_name, $user_id, $act_group, $act_id, $user_act);

        $user_bookmark = new UserDownload;

        if (UserDownload::where('user_act', '=', $user_act)->first())
            {
                return response()->json(
                            [
                            'success' => true,
                            'message' => 'You have already downloaded this section'
                            ]
                        );
            }  
        else{
            $user_bookmark = UserDownload::Create(
                ['user_act' => $user_act, 'act_title' => $act_title, 'user_name' => $user_name, 'user_id' => $user_id, 'act_id' => $act_id, 'act_group' => $act_group]
                );  
            }
            $user_bookmark->save();           
    }

    public function destroy($id){
        $bookmark = UserDownload::findOrFail($id);
        $bookmark->delete();

        return redirect()->back();
        
    }

}
