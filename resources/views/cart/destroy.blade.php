@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<p>{{$deleted}}</p>
		<!-- @foreach($cart as $item)
		<p>{{$item['Name']}}</p>
		@endforeach -->
	</div>
</div>
@endsection