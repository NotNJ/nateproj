@extends('includes.app')

@section('content')
<div id="storePage">
	@include('includes.nav')

	<div>
        <h5 style="text-align: left; padding-top: .5rem; padding-left: .5rem">Updated as of: {{ $date }}</h5>
    </div>
</div>
@endsection