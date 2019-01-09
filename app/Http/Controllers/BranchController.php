<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    public function listing()
    {
        $branches = Branch::all();

        return view('backend/branch.list', compact('branches'));
    }

    public function create()
    {
        return view('backend/branch.create');
    }

    public function edit($id)
    {
        $branch = Branch::find($id);
        
        return view('backend/branch.edit', compact('branch'));
    }

    public function view($id)
    {
        $branch = Branch::find($id);
        
        return view('backend/branch.view', compact('branch'));
    }

    public function store(Request $request)
    {   
        $requestdata = $request->all();

        $this->validate(request(),[
            'branch_code' => 'required',
            'branch_name' => 'required'
        ]);

        Branch::create($requestdata);

        return redirect('/backend/branch');
    }

    public function update($id, Request $request)
    {
        $branch = Branch::findOrFail($id);
       
        $requestData = $request->all();

        $this->validate(request(),[
            'branch_code' => 'required',
            'branch_name' => 'required'
        ]);

        $branch->update($requestData);

        return redirect('/backend/branch');
    }

    public function delete($id)
    {
        $branch = Branch::find($id);

        $branch->destroy($id);
       
        return redirect('/backend/branch');
    }
}
