<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s= session_n_role_chk();
        $data = Post::latest()->paginate(5);
        return view('admin.posts', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s= session_n_role_chk();
        return view('admin.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s= session_n_role_chk();
        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $Post = new Post($request->input()) ;
        
        if($file = $request->hasFile('image')) {

            $file = $request->file('image') ;
            $getFileExt   = $file->getClientOriginalExtension();
            $uploadedFile =   time().'.'.$getFileExt;
            $destinationPath = public_path('images/users') ;
            $file->move($destinationPath,$uploadedFile);
            $Post->images = $uploadedFile ;

        }
        $Post->title_alias=0;
        $Post->introtext=0;
        $Post->sectionid=0;
        $Post->mask=0;
        $Post->created=0;
        $Post->created_by=0;
        $Post->sectionid=0;
        $Post->mask=0;
        $Post->metadata=0;
        $Post->modified=0;
        $Post->modified_by=0;
        $Post->parentid=0;
        $Post->ordering=0;
        $Post->modified_by=0;
        $Post->save() ;
        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $s= session_n_role_chk();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s= session_n_role_chk();
        $user = Post::findOrFail($id);
        return view('admin.editpost', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s= session_n_role_chk();
        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        //-------------------------
        $userd = Post::find($id);

        if($request->image != ''){
            $path = public_path('images/users');
             //code for remove old file
             if($userd->image != ''  && $userd->image != null){
                  $file_old = $path.$userd->image;
                  unlink($file_old);
             }
             //upload new file
             $file = $request->image;
             $filename = $userd->image;
             $file->move($path, $filename);
             //for update in table
             $userd->update( $userd);
             return redirect('/admin/posts');->with('completed', 'Post has been updated');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s= session_n_role_chk();
        $user = Post::findOrFail($id);
        $user->delete();

        return redirect('/admin/posts')->with('completed', 'User has been deleted');
    }
}
