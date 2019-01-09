@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        View Product
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Products</a></li>
        <li class="active">View</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/backend/products/view/{{$product->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Product Information</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_code">Code</label>
                        <p class="form-control-static">{{ $product->product_code }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <p class="form-control-static">{{ $product->product_name }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_description">Description</label>
                        <p class="form-control-static">{{ $product->product_description }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="product_price">Price</label>
                        <p class="form-control-static text-price">{{ $product->product_price }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="/backend/products/edit/{{$product->id}}" role="button" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <a href="/backend/products" role="button" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection