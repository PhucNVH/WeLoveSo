@extends('templates.homepage')

@section('content')

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
   <!--  <br><br><br><br>
      <div class="row justify-content-center">

            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                    
                    <div class="rank-label-container">
                        <span class="label label-default rank-label">{{$user->name}}</span>
                    </div>
                </div>
            </div>

      </div>  -->
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center"> Bạn bè của {{ $user->getFirstNameOrUsername() }} </h3>
    @if (!$user->friends()->count())
        <p class="w3-center">{{ $user->getFirstNameOrUsername() }} chưa có bạn bè nào.</p>
    @else
        @foreach ($user->friends() as $user)
            @include('user/partials/userblock')
        @endforeach
    @endif
</div>
    
    
@stop