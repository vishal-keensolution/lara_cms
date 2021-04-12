<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UsersRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s= session_n_role_chk();
        $data = User::latest()->paginate(5);
        return view('admin.users', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s= session_n_role_chk();
        $data['role']=role_dropdown();
        return view('admin.adduser');
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
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:tbl_user',
            'phone' => 'required|numeric|unique:tbl_user',
            'password' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $User = new User($request->input()) ;

        if($file = $request->hasFile('image')) {

            $file = $request->file('image') ;
            $getFileExt   = $file->getClientOriginalExtension();
            $uploadedFile =   time().'.'.$getFileExt;
            $destinationPath = public_path('images/users') ;
            $file->move($destinationPath,$uploadedFile);
            $User->image = $uploadedFile ;
        }
        $password = Hash::make($request->input('password'));
        $User->password = $password; 
        $User->save() ;

        return redirect('/admin/users')->with('completed', 'User has been saved!') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s= session_n_role_chk();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s= session_n_role_chk();
        $user = User::findOrFail($id);
        $rs = role_dropdown();
        //dd($rs['all']); die;
        return view('admin.edituser')->with(compact('user'))->with(compact('rs'));
        //return view('admin.edituser', compact(''=>$user,'rs'=>$rs));
    }
    public function updaterole(Request $request, $id)
    {
        $s= session_n_role_chk();
        //-------------------------
        $UsersRole = UsersRole::findOrFail($id);
        $UsersRole->delete();
             //for update in table
             $data = $request->all();
            $finalArray = array();
            foreach($data as $key=>$value){
                array_push($finalArray, array('roleid'=>$value['roleid'],'userid'=>$id));
            }
            
            UsersRole::insert($finalArray);
            return redirect('/admin/users')->with('completed', 'User\'s Role has been updated');
        //----------------------
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s= session_n_role_chk();
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:tbl_user',
            'phone' => 'required|numeric|unique:tbl_user',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        //-------------------------
        $userd = User::find($id);

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
             return redirect('/admin/users')->with('completed', 'User has been updated');
            }
        //----------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s= session_n_role_chk();
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/admin/users')->with('completed', 'User has been deleted');
    }
}
