@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        View Group
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Group</a></li>
        <li class="active">View</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/groups/view/{{$group->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Group Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_code">Group Code</label>
                        <p class="form-control-static">{{ $group->group_code }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_name">Group Name</label>
                        <p class="form-control-static">{{ $group->group_name }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="group_desc">Group Description</label>
                        <p class="form-control-static">{{ $group->group_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="/backend/groups/edit/{{$group->id}}" role="button" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <a href="/backend/groups" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection