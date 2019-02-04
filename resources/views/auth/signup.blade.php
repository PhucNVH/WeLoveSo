@extends('templates.auth')

@section('content')
<div class="columns is-mobile is-centered">
    <div class="is-half is-offset-one-quarter">
        <div class="has-text-centered">
            <!--                <img class="login-logo" src="../../../assets/avatars/logo.png">-->
        </div>
        <br><br><br>
        <section class="section">
        <form action = "{{route('auth.signup')}}" method="post" role="form" class="form-vertical">
            <div class= "form-group{{ $errors->has('last_name') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="text" placeholder="Họ và tên đệm" name="last_name">
                    <span class="icon is-small is-right">
                <i class="fas fa-address-book"></i>
              </span>
                </div>
                @if ($errors->has('last_name'))
                    <br>
                    <span class = "help-block">{{ $errors->first('last_name')}}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="text" placeholder="Tên của bạn" name="first_name">
                    <span class="icon is-small is-right">
                <i class="fas fa-address-book"></i>
              </span>
                </div>
                @if ($errors->has('first_name'))
                    <span class = "help-block">{{ $errors->first('first_name')}}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="text" placeholder="Tên tài khoản" name="username" value="{{Request::old('username') ?: ''}}">
                    <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                </div>
                @if ($errors->has('username'))
                    <span class = "help-block">{{ $errors->first('username')}}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="password" placeholder="Mật khẩu" name="password">
                    <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                </div>
                @if ($errors->has('password'))
                    <span class = "help-block">{{ $errors->first('password')}}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                    <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
              </span>
                </div>
                @if ($errors->has('password_confirmation'))
                    <span class = "help-block">{{ $errors->first('password_confirmation')}}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="form-control" type="text" placeholder="Email" name="email"
                    value="{{Request::old('email') ?: ''}}">
                    <span class="icon is-small is-right">
                <i class="fa fa-envelope"></i>
              </span>
                </div>
                @if ($errors->has('email'))
                    <span class = "help-block">{{ $errors->first('email')}}</span>
                @endif
            </div>

            <div class="has-text-centered form-group">
                <input type="submit" class="button is-primary is-outlined" value="+ ♥">
            </div>

            <div class="has-text-centered">
                <a href="{{route('auth.signin')}}"> Bạn đã có tài khoản? Đăng nhập ngay thôi!</a>
            </div>

            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        </section>
    </div>
</div>
@stop