<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use DataTables;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.usermanagement');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userContent(Request $request)
    {
        $data = User::all();
        return Datatables::of($data)->addColumn('status', function($data){
            if($data->isOnline()){
                return "<i class='fas fa-circle text-success'> กำลังใช้งาน </i>";
            }else{
                return "<i class='fas fa-circle text-secondary'> ไม่ได้ใช้งาน </i>";
            }
        })
        ->addColumn('role', function($data){
            return $data->roles()->value('display_name');
        })->rawColumns(['status','role'])->make(true);
    }

    // public function userRolePermission(Request $request)
    // {
    //     $data = Role::with('permissions', 'permissions')->get();
    //     return Datatables::of($data)->make(true);
    // }
}
