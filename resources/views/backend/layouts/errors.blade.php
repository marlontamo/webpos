@if (count($errors))
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-warning"></i> Warning</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>     
</div>
@endif