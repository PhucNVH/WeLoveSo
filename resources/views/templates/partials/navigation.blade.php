<nav class = "navbar navbar-default" role = "navigation">
    <div class="container">
	   <div class = "navbar-header">
	    	<a class = "navbar-brand" href="{{route('home')}}">Weloveso</a>
	   </div>
	   
       <div class = "collapse navbar-collapse">
		    @if (Auth::check())
		      	<ul class= "nav navbar-nav">
			     	<li><a href = "#">Bảng tin</a></li>
                    <li><a href = "#">Bạn bè</a></li>
			    </ul>
                <form class="navbar-form navbar-left" role="search" action = "{{route('search.results')}}">
                    <div class = "form-group">
                        <input type="text" name="query" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-default">
                        Tìm
                    </button>
                </form>
            @endif

                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li><a href="{{route('profile.index', ['username' => Auth::user()->username])}}">{{ Auth::user()->getNameOrUsername() }}</a></li>
                        <li><a href="{{ route('profile.edit') }}">Trang cá nhân</a></li>
                        <li><a href="{{ route('auth.signout') }}">Đăng xuất</a></li>
                    @else
                        <li><a href="{{ route('auth.signin') }}">Đăng nhập</a></li>
                        <li><a href="{{ route('auth.signup') }}">Đăng kí</a></li>
                    @endif
                </ul>
	   </div>
    </div>
</nav>
