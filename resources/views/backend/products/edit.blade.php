@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Edit Product
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Products</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/products/edit/{{$product->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Product Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_code">Code</label>
                        <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $product->product_code }}">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_description">Description</label>
                        <input type="text" class="form-control" id="product_description" name="product_description" value="{{ $product->product_description }}">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_price">Price</label>
                        <input type="text" class="form-control text-right" id="product_price" name="product_price" value="{{ $product->product_price }}">  
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
                        <a href="/backend/products" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection