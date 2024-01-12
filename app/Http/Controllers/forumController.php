<?php

namespace App\Http\Controllers;


use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\quest;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class forumController extends Controller
{
    public function forum(){
        $all_quest=DB::table('question')
        ->join('user','user.userID','=','question.userID')
        ->where('cate',1)
        ->get();
        $total_quest=count(DB::table('question')->get());
        $total_qa=count(DB::table('question')->where('cate',1)->get());
        $total_gd=count(DB::table('question')->where('cate',2)->get());

        return view('front.forum',compact('all_quest','total_quest','total_qa','total_gd'));
    }
    public function forum2(){
        $all_quest=DB::table('question')
        ->join('user','user.userID','=','question.userID')
        ->where('cate',2)
        ->get();
        $total_quest=count(DB::table('question')->get());
        $total_qa=count(DB::table('question')->where('cate',1)->get());
        $total_gd=count(DB::table('question')->where('cate',2)->get());

        return view('front.forum2',compact('all_quest','total_quest','total_qa','total_gd'));
    }
    public function quest(){
        return view('front.forum_questgd');
    }
    public function save_questgd(Request $request){
        $data=array();
        $data['title']=$request->title;
        $data['body']=$request->body;
        $data['tab']=$request->tab;
        $data['cate']=2;
        $data['vote']=0;
        $data['view']=0;
        $data['userID']=3;
        DB::table('question')->insert($data);
        return redirect('/forum2');
}
    public function detail($id){
        $quest_detail = DB::table('question')
        ->join('user','user.userID','=','question.userID')
        ->where('questID',$id)
        ->get();
        $all_quest=DB::table('question')
        ->get();
        $total_quest=count($all_quest);
        $total_qa=count(DB::table('question')->where('cate',1)->get());
        $total_gd=count(DB::table('question')->where('cate',2)->get());
        echo $quest_detail->questID;
    }
}
