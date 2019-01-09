@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Branch List
        <!--<small>Adminstrator panel</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Branch</a></li>
        <li class="active">List</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">
            <a role="button" class="btn btn-info" href="/backend/branch/create">Add Branch</a>
        </h3>
    </div>
    <div class="box-body">
        <table class="table table-striped table-bordered table-hover" >
            <thead>
                <tr class="active">
                    <th class="col-md-1">Action</th>
                    <th class="col-md-2">Code</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-6">Address</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                   
                    <tr>
                        <td>
                            <div class="btn-group task_buttons" name="task_buttons">
                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu left">
                                    <li>
                                        <a class="btn-sm" href="/backend/branch/view/{{ $branch->id }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn-sm" href="/backend/branch/edit/{{ $branch->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                    </li>
                                    <li><hr/></li>
                                    <li>
                                        <a class="btn-sm" href="/backend/branch/edit/{{ $branch->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            {{ $branch->branch_code }}
                        </td>
                        <td>
                            {{ $branch->branch_name }}
                        </td>
                        <td>
                            {{ $branch->branch_address }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection