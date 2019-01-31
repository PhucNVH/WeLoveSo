@extends('templates.welcome')

@section('content')
<div class="columns is-mobile is-centered">
    <div class="is-half is-offset-one-quarter">
        <div class="has-text-centered">
            <!--                <img class="login-logo" src="../../../assets/avatars/logo.png">-->
        </div>
        <br><br><br>
        <section class="section">
        <form action = "../overall/checkSignup.php" method="POST">
            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="text" placeholder="Họ và tên đệm" name="last_name">
                    <span class="icon is-small is-right">
                <i class="fas fa-address-book"></i>
              </span>
                </div>
            </div>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="text" placeholder="Tên của bạn" name="first_name">
                    <span class="icon is-small is-right">
                <i class="fas fa-address-book"></i>
              </span>
                </div>
            </div>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="text" placeholder="Tên tài khoản" name="username">
                    <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                </div>
            </div>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="password" placeholder="Mật khẩu" name="password">
                    <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                </div>
            </div>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="password" placeholder="Nhập lại mật khẩu" name="password_again">
                    <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
              </span>
                </div>
            </div>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input" type="text" placeholder="Email" name="email">
                    <span class="icon is-small is-right">
                <i class="fa fa-envelope"></i>
              </span>
                </div>
            </div>

            <div class="has-text-centered">
                <input type="submit" class="button is-primary is-outlined" value="+ ♥">
            </div>

            <div class="has-text-centered">
                <a href="../overall/login.php"> Bạn đã có tài khoản? Đăng nhập ngay thôi!</a>
            </div>
        </form>
        </section>

</div>
@stop