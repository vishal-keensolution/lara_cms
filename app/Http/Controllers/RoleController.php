<?php

namespace App\Http\Controllers;
use App\Models\role;
use App\Models\MenuRole;
use App\Models\MenuAccess;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s= session_n_role_chk();
        $data = role::latest()->paginate(5);
        return view('admin.role', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s= session_n_role_chk();
        return view('admin.addrole');
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
            'name' => 'required|max:255'
        ]);
        $Role = new role($request->input()) ;

        
        $Role->save() ;

        return redirect('/admin/role')->with('completed', 'Role has been saved!') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s= session_n_role_chk();
        $role = role::findOrFail($id);
        $MenuRole = MenuRole::where('roleid', $id)->get();
        $ms = menu_dropdown("EDIT", $MenuRole);
        //dd($rs['select']); die;
        return view('admin.editrole')->with(compact('role'))->with(compact('ms'));;
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
        ]);
        //-------------------------
        $roled = role::find($id);
        $roled->name = $request->input('name');
             //for update in table
             $roled->save();
             return redirect('/admin/role')->with('completed', 'Role has been updated');
           
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
        $role = role::findOrFail($id);
        $role->delete();

        return redirect('/admin/role')->with('completed', 'Role has been deleted');
    }
}
