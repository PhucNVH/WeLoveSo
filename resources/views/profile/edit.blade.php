@extends('templates.homepage')
@section('content')
<div class="container">
    <h2>Cập nhật thông tin</h2>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <br><br>
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
              Bạn đừng bị bất ngờ vì password của bạn quá dài nka. Chúng mình mã hóa nó đó!
        </div>
        
        
        <form class="form-horizontal" role="form" method="post" action = "{{route('profile.edit')}}">
          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : ''}}">
            <label class="col-lg-3 control-label">Họ và tên đệm:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="last_name" value="{{Request::old('last_name') ?: Auth::user()->last_name}}">
            </div>
            @if ($errors->has('last_name'))
                    <span class = "help-block">{{ $errors->first('last_name')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
            <label class="col-lg-3 control-label">Tên của bạn:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="first_name" value="{{Request::old('first_name') ?: Auth::user()->first_name}}">
            </div>
            @if ($errors->has('first_name'))
                    <span class = "help-block">{{ $errors->first('first_name')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('company') ? ' has-error' : ''}}">
            <label class="col-lg-3 control-label">Công ty, tổ chức:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="company" value="{{Request::old('company') ?: Auth::user()->company}}">
            </div>
            @if ($errors->has('company'))
                    <span class = "help-block">{{ $errors->first('company')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('location') ? ' has-error' : ''}}">
            <label class="col-lg-3 control-label">Địa chỉ:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="location" value="{{Request::old('location') ?: Auth::user()->location}}">
            </div>
            @if ($errors->has('location'))
                    <span class = "help-block">{{ $errors->first('location')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="{{Request::old('email') ?: Auth::user()->email}}" disabled>
            </div>
            @if ($errors->has('email'))
                    <span class = "help-block">{{ $errors->first('email')}}</span>
                @endif
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Tên tài khoản:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{Request::old('username') ?: Auth::user()->username}}"disabled>
            </div>
            @if ($errors->has('username'))
                    <span class = "help-block">{{ $errors->first('username')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
            <label class="col-md-3 control-label">Mật khẩu:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="{{Request::old('password') ?: Auth::user()->password}}" name="password">
            </div>
            @if ($errors->has('password'))
                    <span class = "help-block"><br/>{{$errors->first('password')}}</span>
                @endif
          </div>
          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
            <label class="col-md-3 control-label">Xác nhận lại mật khẩu:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="{{Request::old('password') ?: Auth::user()->password}}" name="password_confirmation">
            </div>
            @if ($errors->has('password_confirmation'))
            <br>
                    <span class = "help-block">{{ $errors->first('password_confirmation')}}</span>
                @endif
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>

          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
  </div>
</div>
<hr>

@stop
