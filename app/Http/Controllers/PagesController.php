<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        $s= session_n_role_chk();
        $data = Pages::latest()->where('title_alias',"=",0)->paginate(5);
        return view('admin.pages', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s= session_n_role_chk();
        $data['all_category'] = category::where('cat_for_component',"=",'pages')->get();
        return view('admin.addpage', $data);
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
        $session= Session::get('admin');
        $user_id=$session[0]->id;
        $this->validate($request,[
            'images' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',     'fulltext' => 'required',
            'urls' => 'required',      'metakey' => 'required',
            'metadesc' => 'required'
        ]);
        $Pages = new Pages($request->input()) ;
        
        if($file = $request->hasFile('images')) {
            $file = $request->file('images') ;
            $getFileExt   = $file->getClientOriginalExtension();
            $uploadedFile =   time().'.'.$getFileExt;
            $destinationPath = public_path('images/users') ;
            $file->move($destinationPath,$uploadedFile);
            $Pages->images = $uploadedFile ;
        }
        // $slug = sanitize($request->title);
        // $Pages->alias=$slug;
        /*code for slug unique*/
        $title=array();
        $title=$request->alias;
        if(empty($title))
        {
          $slug = sanitize($request->title);
          $count = pages::where('alias','LIKE' ,"{$slug}%" )->count();
          if($count){
            $newcount = $count > 0 ? ++$count : '';
            $Pages->alias= $newcount > 0 ? "$slug-$newcount" :$slug;
          }else
          $Pages->alias=$slug;
        }
        else
        {
          $slug = sanitize($title);
          $count = pages::where('alias','LIKE' ,"{$slug}%" )->count();
          if($count){
            $newcount = $count > 0 ? ++$count : '';
            $Pages->alias= $newcount > 0 ? "$slug-$newcount" :$slug;
          }else
          $Pages->alias=$slug;  
        }
        $Pages->title_alias=0;
        $Pages->introtext=0;
        $Pages->sectionid=0;
        $Pages->mask=0;
        $Pages->created=0;
        $Pages->created_by=$user_id;
        $Pages->sectionid=0;
        $Pages->mask=0;
        $Pages->metadata=0;
        $Pages->modified=0;
        $Pages->modified_by=0;
        $Pages->parentid=0;
        $Pages->ordering=0;
        $Pages->modified_by=0;
        $Pages->save() ;
        return redirect('/admin/pages');
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
        $user = Pages::findOrFail($id);
        $data['all_category'] = category::where('cat_for_component',"=",'pages')->get();
        return view('admin.editpage', compact('user') , $data);
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
        //-------------------------
        // $userd = Pages::find($id);
        $session= Session::get('admin');
        $user_id=$session[0]->id;
        $userd = Pages::find($id)->where('created_by',"=",$user_id)->first();

        if($file = $request->hasFile('images')) {

            $file = $request->file('images') ;
            $getFileExt   = $file->getClientOriginalExtension();
            $uploadedFile =   time().'.'.$getFileExt;
            $destinationPath = public_path('images/users') ;
            $file->move($destinationPath,$uploadedFile);
            $userd->images = $uploadedFile ;
        }
        // if($request->image != ''){
        //     $path = public_path('images/users');

        //      //code for remove old file
        //      if($userd->image != ''  && $userd->image != null){
        //           $file_old = $path.$userd->image;
        //           unlink($file_old);
        //      }
        //      //upload new file
        //      $file = $request->image;
        //      $filename = $userd->image;
        //      $file->move($path, $filename);
             //for update in table
         /*code for slug unique*/
        $title=array();
        $title=$request->alias;
        if(empty($title))
        {
          $slug = sanitize($request->title);
          $count = pages::where('alias','LIKE' ,"{$slug}%" )->count();
          if($count){
            $newcount = $count > 0 ? ++$count : '';
            $userd->alias= $newcount > 0 ? "$slug-$newcount" :$slug;
          }else
          $userd->alias=$slug;
        }
        else
        {
          $slug = sanitize($title);
          $count = pages::where('alias','LIKE' ,"{$slug}%" )->count();
          if($count){
            $newcount = $count > 0 ? ++$count : '';
            $userd->alias= $newcount > 0 ? "$slug-$newcount" :$slug;
          }else
          $userd->alias=$slug;  
        }
            // $userd->title = $request->title;
            // $userd->alias = $request->alias;
            $userd->fulltext = $request->fulltext;
            $userd->state = $request->state;
            $userd->catid = $request->catid;
            $userd->Featured = $request->Featured;
            $userd->urls = $request->urls;
            $userd->metadesc = $request->metadesc;
            $userd->metakey = $request->metakey;
            $userd->save();
             // $userd->update( $userd);
        return redirect('/admin/pages')->with('completed', 'Page has been updated');   
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
        $user = Pages::findOrFail($id);
        $user->title_alias=1;
        $user->save();
        // $user = Pages::findOrFail($id);
        // $user->delete();
        return redirect('/admin/pages')->with('completed', 'User has been deleted');
    }
}
