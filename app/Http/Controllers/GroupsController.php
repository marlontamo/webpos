<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;

class GroupsController extends Controller
{
    public function listing()
    {
        $groups = Group::all();
        return view('backend/groups.list', compact('groups'));
    }

    public function create()
    {     
        return view('backend/groups.create');
    }

    public function edit($id)
    {
        $group = Group::find($id);
        return view('backend/groups.edit', compact('group'));
    }

    public function view($id)
    {
        $group = Group::find($id);
        return view('backend/groups.view', compact('group'));
    }

    public function store(Request $request)
    {  
        $requestData = $request->all();

        $this->validate(request(),[
            'group_code' => 'required',
            'group_name' => 'required'
        ]);

        Group::create($requestData);

        return redirect('/backend/groups');
    }

    public function update($id, Request $request)
    {
        $group = Group::findOrFail($id);
       
        $requestData = $request->all();

        $this->validate(request(),[
            'group_code' => 'required',
            'group_name' => 'required'
        ]);

        $group->update($requestData);

        return redirect('/backend/groups');
    }

    public function delete($id)
    {
        $group = Group::find($id);

        $group->destroy($id);
       
        return redirect('/backend/groups');
    }
}
