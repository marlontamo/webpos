@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Group List
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Group</a></li>
        <li class="active">List</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')
    
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">
            <a role="button" class="btn btn-info" href="/backend/groups/create">Add Group</a>
        </h3>
    </div>
    <div class="box-body">
        <table class="table table-striped table-bordered table-hover" >
            <thead>
                <tr class="active">
                    <th class="col-md-1">Action</th>
                    <th class="col-md-2">Code</th>
                    <th class="col-md-4">Name</th>
                    <th class="col-md-5">Desc</th>                    
                </tr>
            </thead>
            <tbody>
                @if (!empty($groups))
                    @foreach ($groups as $group)
                        <tr>
                            <td>
                                <div class="btn-groups task_buttons" name="task_buttons">
                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu left">
                                        <li>
                                            <a class="btn-sm" href="/backend/groups/view/{{ $group->id }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn-sm" href="/backend/groups/edit/{{ $group->id }}">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a class="btn-sm" href="/backend/groups/delete/{{ $group->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                {{ $group->group_code }}
                            </td>
                            <td>
                                {{ $group->group_name }}
                            </td>
                            <td>
                                {{ $group->group_desc }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center"><strong> No records are currently available </strong></td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection