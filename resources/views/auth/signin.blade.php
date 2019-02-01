@extends('templates.auth')

@section('content')
<div class="columns is-mobile is-centered">
    <div class="is-half is-offset-one-quarter">
        <section class="section">
        <div class="has-text-centered">
            <!--                <img class="login-logo" src="../../../assets/avatars/logo.png">-->
        </div>
        <br><br><br><br>
        <form action ="{{route('auth.signin')}}" method = "post" role="form" class="form-vertical">
            <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
                <div class="control has-icons-right">
                    <input class="input" type="text" name="username">
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
                    <label>
                        <input class="input" type="password" name="password">
                    </label>
                    <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                </div>
                @if ($errors->has('password'))
                    <span class = "help-block">{{ $errors->first('password')}}</span>
                @endif
            </div>

            <div class="has-text-centered">
                <div class="is-centered">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Nhớ tài khoản!
                        </label>
                    </div>
                </div>
            </div>

            <div class="has-text-centered">
                <input type="submit" class="button is-primary is-outlined"  value="→">
            </div>

            <div class="has-text-centered">
                <a href="{{route('auth.signup')}}" style="color: firebrick"> + ♥ ?</a>
            </div>

            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        </section>
    </div>
</div>

@stop
