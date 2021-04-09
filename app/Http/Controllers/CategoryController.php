<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s= session_n_role_chk();
        $data = category::latest()->paginate(5);
        return view('admin.category', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s= session_n_role_chk();
        // $session= Session::get('admin');
        // $udi=$session[0]->id;
        return view('admin.addcategory');
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
        // $session = Session::get('admin');
        $session= Session::get('admin');
        $user_id=$session[0]->id;
        $Category = new Category($request->input()) ;
        $Category->level=0;
        $Category->extension=0;
        $Category->modified=0;
        $Category->created_time=0;
        $Category->modified_user_id=0;
        $Category->modified_time=0;
        $Category->created_user_id=$user_id;
        $Category->save() ;
        return redirect('/admin/category')->with('completed', 'Category has been saved!');
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
        $user = Category::findOrFail($id);
        return view('admin.editcategory', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $s= session_n_role_chk();
        $session= Session::get('admin');
        $user_id=$session[0]->id;
        $upd_data = Category::find($user_id)->where('created_user_id',"=",$user_id)->first();
        $upd_data->title = $request->title;
        $upd_data->alias = $request->alias;
        $upd_data->description = $request->description;
        $upd_data->parentid = $request->parentid;
        $upd_data->published = $request->published;
        $upd_data->params = $request->params;
        $upd_data->metakey = $request->metakey;
        $upd_data->metadata = $request->metadata;
        $upd_data->metadesc = $request->metadesc;
        $upd_data->metakey = $request->metakey;
        $upd_data->cat_for_component = $request->cat_for_component;
        $upd_data->save();
        return redirect('/admin/category')->with('completed', 'Category has been updated');
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
        $user = Category::findOrFail($id);
        $user->delete();
        return redirect('/admin/category')->with('completed', 'User has been deleted');
    }
}
