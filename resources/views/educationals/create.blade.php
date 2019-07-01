@extends('layouts.app')



@section('content')

@include('includes.errors')


<div class="card">
	<div class="card-header"><h3>Educational Qualifications</h3></div>
	<div class="card-body">
		<form action="{{route('educationals.update')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="lead">NYSC Year of Completion</label>
				<input type="date" name="nysc_year" class="form-control" value="{{$user->nysc_year}}">
			</div>


			<div class="form-group">
				<label class="lead">NYSC Number</label>
				<input type="text" name="nysc_number" class="form-control" placeholder="eg (A003498453)" value="{{$user->nysc_number}}">
			</div>

			<hr>
			<h3>Secondary School Qualification with Dates</h3>
			<hr>

			<div class="form-group">
				<label class="lead">Secondary School Attended</label>
				<input type="text" name="secondary" class="form-control" value="{{$user->secondary}}">
			</div>

			<div class="form-group">
				<label class="lead">Year of completion</label>
				<input type="date" name="secondary_year" class="form-control" value="{{$user->secondary_year}}">
			</div>



			<hr>
			<h3>Tertiary Institution Qualification with Dates</h3>
			<hr>

			<div class="form-group">
				<label class="lead">Tertiary Institution attended</label>
				<input type="text" name="tertiary" class="form-control" value="{{$user->tertiary}}">
			</div>

			<div class="form-group">
				<label class="lead">Year of completion</label>
				<input type="date" name="tertiary_year" class="form-control" value="{{$user->tertiary_year}}">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Save and continue" class="btn btn-success">
			</div>

		</form>
	</div>

</div>


@endsection