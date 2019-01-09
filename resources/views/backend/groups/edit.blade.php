@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Edit Group
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Group</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/groups/edit/{{$group->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Group Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_code">Group Code</label>
                        <input type="text" class="form-control" id="group_code" name="group_code" value="{{ $group->group_code }}">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_name">Group Name</label>
                        <input type="text" class="form-control" id="group_name" name="group_name" value="{{ $group->group_name }}">  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="group_desc">Group Description</label>
                        <input type="text" class="form-control" id="group_desc" name="group_desc" value="{{ $group->group_desc }}">  
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Save</button>
                        &nbsp;
                        <a href="/backend/groups" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection