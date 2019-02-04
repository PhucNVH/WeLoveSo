@extends('templates.homepage')

@section('content')
	<br><br><br><br>

	<h6>Kết quả tìm kiếm về "{{ Request::input('query') }}"</h6>

	@if(!$users->count())
		<p>Xin lỗi, chúng tôi không tìm thấy kết quả nào.</p>
	@else
		<div class="row">
			<div class="col-lg-12">
				@foreach ($users as $user)
					@include('user/partials/userblock')
				@endforeach
			</div>
		</div>
	@endif
@stop