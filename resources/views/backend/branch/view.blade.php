@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        View Branch
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Branch</a></li>
        <li class="active">View</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/branch/view/{{$branch->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Branch Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="branch_code">Code</label>
                        <p class="form-control-static">{{ $branch->branch_code }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="branch_name">Name</label>
                        <p class="form-control-static">{{ $branch->branch_name }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="branch_address">Address</label>
                        <p class="form-control-static">{{ $branch->branch_address }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="/backend/branch/edit/{{$branch->id}}" role="button" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <a href="/backend/branch" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection