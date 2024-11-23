@extends('layouts.frontend')

@section('main')
<div class="page-404">
	<div class="content-page-404">
		<div class="title-error">
			404		
		</div>
		<div class="sub-title">
			Oops! That page can't be found.		
		</div>
		<div class="sub-error">
			We're really sorry but we can't seem to find the page you were looking for.		
		</div>
		<a class="button" href="{{route('welcome')}}">
			Back The Homepage		
		</a>
	</div>
</div>
@endsection
