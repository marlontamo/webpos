@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Create New User
        <!--<small>Adminstrator panel</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> User</a></li>
        <li class="active">Add</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">
    <form method="POST" action="/user/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">Create New User</h3>
        </div>
        <div class="box-body">
          <div class="col-md-12">
            <div class="col-md-6">
            <div class="row">
               
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">username</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="username" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   </div>
                   </div>
                    <div class="col-md-6">
                   <div class="row">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!--div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div-->
                        </div>
                        </div>
                        </div>

                <!--div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label for="group_code">Code</label>
                        <input type="text" class="form-control" id="group_code" name="group_code" >  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_name">Name</label>
                        <input type="text" class="form-control" id="group_name" name="group_name" >  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_price">Desc</label>
                        <input type="text" class="form-control" id="group_price" name="group_desc" >  
                    </div>
                </div>
                <!--*--><!--div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="group_image">Image</label>
                        <input name="userfile" id="group_image" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1" type="file">
                        <div class="bootstrap-filestyle input-group">
                            <input class="form-control" disabled="" type="text"> 
                            <span class="group-span-filestyle input-group-btn"  tabindex="0">
                                <label for="group_image" class="btn btn-default "> <span class="fa fa-folder-open"></span> choose featured image </label>
                            </span>
                        </div>
                    </div>
                </div><!--/-->
            
           
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Register</button>
                        &nbsp;
                        <a role="button" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection









