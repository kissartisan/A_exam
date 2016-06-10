@if(count($errors) > 0)
	<div class="row messageBlock">
		<div class="col s12 red white-text center">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif

@if(Session::has('message'))
	<div class="row messageBlock">
		<div class="col s12 green white-text center">
		<ul>
			<li>{{ Session::get('message') }}</li>
		</ul>
		</div>
	</div>
@endif