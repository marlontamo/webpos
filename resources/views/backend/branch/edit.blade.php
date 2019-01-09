@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Edit Branch
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Branch</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/branch/edit/{{$branch->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Branch Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="branch_code">Branch Code</label>
                        <input type="text" class="form-control" id="branch_code" name="branch_code" value="{{ $branch->branch_code }}">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="branch_name">Branch Name</label>
                        <input type="text" class="form-control" id="branch_name" name="branch_name" value="{{ $branch->branch_name }}">  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="branch_address">Branch Address</label>
                        <input type="text" class="form-control" id="branch_address" name="branch_address" value="{{ $branch->branch_address }}">  
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
                        <a href="/backend/branch" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection