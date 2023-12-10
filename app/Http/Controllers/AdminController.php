<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminController extends Controller
{
    //
    public function add_post_view(){
        if(session()->has('user')){

        return view('Admin.add-post');
    }else{
        echo " Login please";
    }
    return redirect('login');
    }

    public function save_post(Request $req){

        $post = new post();
        $post->post_title = $req['post_title'];
        $post->postdesc = $req['postdesc'];
        $post->category = $req['category'];

        if($req->hasFile('fileToUpload')){
            $this->validate($req,[
                'image'=>'image | mimes:jpg,jpeg,png,jfif | max:2000'
            ]
            );

            $file = $req->file('fileToUpload');
            
                $user = session('name');
           
            $file_name = $user . $file->getClientOriginalName();
            $file->move(public_path('upload'),$file_name);
        }else{
            $file_name = null;
        }
   
        $post->image = $file_name;
        // $post->user_id = user::where(['user_id',session('id')])->with('');
        $post->user_id = session('id');
        $post->save();

        return post::all();
    }

    public function get_all_post(){
        $post = post::all()->paginate(10);
        return view('post',['post'=>$post]);
    }

    
    public function test(){
        // Retrieve posts for a user
        $user = User::find(2);
        $posts = $user->post;
        return $posts;
             
        // // // // Retrieve user for a post
        // // $post = Post::find(1);
        // // $user = $post->user;
        
        // return $posts ;
        // // return $user ;

//         $post = Post::find(4);
// dd($post->user()->toSql());
        // $user = User::with('post')->first();
        // return dd($user->all());

    }
}
