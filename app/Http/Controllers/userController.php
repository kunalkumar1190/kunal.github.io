<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cardetails;


class userController extends Controller
{
    function apitest($id='Null'){

        $re= ($id=='Null') ? Cardetails::all() : Cardetails::where('id','=',$id)->get() ;

        if(!empty($re)){

            if(count($re)>0){
            return ['status'=>'true','data'=>$re];
            }
            else{
                return ['status'=>'false','data'=>'No data is found'];
            }
            }

        else{
             return ['satus'=>'false','msg'=>'something error happen'];

        }


         // $result = [];
        // foreach ($re as $data)
        // {
        //     $data->id;
        //     $data->campaign_name;
        //     $data->home_page;

        //     $result[] = $data;
        // }
        // dd($result);
        // return $result;
    }


    // for get the data from the user

    function store(Request $request){

        $data['name']=$request->name;
        $data['title']=$request->title;
        $data['subtitle']=$request->subtitle;

        // Cardetails::create($data);

        return ['status'=>'true','data'=>$data];


    }

}
