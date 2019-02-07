<div class="media">
	<a class="pull-left" href="{{route('profile.index', ['username' => $user->username])}}">
		<img class="media-object" alt="{{ $user->getNameOrUsername() }}" src="{{ $user->getAvatarUrl() }}">
	</a>
	<div class="media-body">
		<h7 class="media-heading"><a href="{{route ('profile.index', ['username' => $user->username])}}">{{ $user->getNameOrUsername() }}</a></h7>
		@if($user->location)
			<p>{{ $user->location}}</p>
		@endif
	</div>
		
</div>