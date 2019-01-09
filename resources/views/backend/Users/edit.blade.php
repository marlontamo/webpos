@extends ('backend/layouts.main')

@section ('content-header')
<section class="content-header">
    <h1>
        Edit User {{$user->name}}
        <!--<small>Adminstrator panel</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> group</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section ('content')

@include ('backend/layouts.errors')

<div class="box box-info">

    <form method="POST" action="/update/{{$user->id}}" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        <div class="box-header with-border">
            <h3 class="box-title">group Information</h3>
        </div>
        <div class="box-body">
             <div class="col-md-12">
            <div class="col-md-6">
            <div class="row">
              
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name }}" required autofocus>

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
                                <input id="name" type="text" class="form-control" name="username" value="{{ $user->username }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

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
                                <input id="password" type="text" class="form-control" name="password" value="{{$user->password}}" required>

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!--button type="submit" class="btn btn-primary">
                                    Register
                                </button-->
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
        </div>
        <div class="box-footer">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update</button>
                        &nbsp;
                        <a href="/backend/group" role="button" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection