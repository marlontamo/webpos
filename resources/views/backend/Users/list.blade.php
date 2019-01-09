@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        groups List
        <!--<small>Adminstrator panel</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> groups</a></li>
        <li class="active">List</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')
   
    
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>
    </div>
    <div class="box-body">
        <table class="table table-striped table-bordered table-hover" >
            <thead>
                <tr class="active">
                    <th class="col-md-1">Action</th>
                    <th class="col-md-3">Image</th>
                    <th class="col-md-2">name</th>
                    <th class="col-md-4">username</th>
                    <th class="col-md-1">email</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                   
                    <tr>
                        <td>
                            <div class="btn-groups task_buttons" name="task_buttons">
                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu left">
                                    <li>
                                        <a class="btn-sm" href="/backend/users/view/{{ $user->id }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn-sm" href="/backend/users/edit/{{ $user->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                    </li>
                                    <li><hr/></li>
                                    <li>
                                        <a class="btn-sm" href="/backend/groups/edit/{{ $user->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <img src="http://localhost/web-pos/storage/upload_img/{{$user->img}}" width="60" height="60">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->username}}
                        </td>
                        <td class="text-right">
                            {{ $user->email }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--<ul>
@foreach ($groups as $user)
    <li>{{ $user->user_name }}</li>
@endforeach
</ul>-->


@endsection