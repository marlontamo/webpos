@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Products List
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Products</a></li>
        <li class="active">List</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">
            <a role="button" class="btn btn-info" href="/backend/products/create">Add Product</a>
        </h3>
    </div>
    <div class="box-body">
        <table class="table table-striped table-bordered table-hover" >
            <thead>
                <tr class="active">
                    <th class="col-md-1">Action</th>
                    <th class="col-md-2">Code</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-4">Description</th>
                    <th class="col-md-1">Price</th>                
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                   
                    <tr>
                        <td>
                            <div class="btn-group task_buttons" name="task_buttons">
                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu left">
                                    <li>
                                        <a class="btn-sm" href="/backend/products/view/{{ $product->id }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn-sm" href="/backend/products/edit/{{ $product->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="btn-sm" href="/backend/products/delete/{{ $product->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            {{ $product->product_code }}
                        </td>
                        <td>
                            {{ $product->product_name }}
                        </td>
                        <td>
                            {{ $product->product_description }}
                        </td>
                        <td class="text-right">
                            {{ $product->product_price }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--<ul>
@foreach ($products as $product)
    <li>{{ $product->product_name }}</li>
@endforeach
</ul>-->


@endsection