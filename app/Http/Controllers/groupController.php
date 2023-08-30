<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;

class groupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = group::with('children')->whereNull('parent_id')->get();
        return view('group.index', ['group' => $group]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function manager()
    // {
    //     $group = Group::get();
    //     return view('group.manager', ['group' => $group]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function userGroup()
    // {
    //     $user = Group::get();
    //     return view('user.group', ['user' => $user]);
    // }
    // public function childGroup()
    // {
    //     $childGroup = Group::get();
    //     return view('group.parent', ['childGroup' => $childGroup]);
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
