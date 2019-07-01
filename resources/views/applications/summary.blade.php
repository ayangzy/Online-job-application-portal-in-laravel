@extends('layouts.app')




@section('content')

<div class="card">
	<div class="card-header"><h3>Your Application Summary</h3></div>

	<div class="card-body">
		<h3 class="text-center lead"><a href="" style="text-decoration: none;">Position Applied: {{$userdetails->position}}</a></h3>
		<hr>
		<h5 class="text-center">Personal Details</h5>
		<hr>
		<form action="" method="post">
		<div class="table-responsive">
		<table class="table table-hover table-bordered">
			
			<thead>
				<tr>
					<th>Name</th>
					<th>state</th>
					<th>lga</th>
					<th>phone</th>
					<th>Address</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{Auth::user()->name}}</td>
					<td>{{$userdetails->state}}</td>
					<td>{{$userdetails->lga}}</td>
					<td>{{$userdetails->phone}}</td>
					<td>{{$userdetails->contact}}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h5 class="text-center">Preferred Means of identification</h5>
		<hr>
		<div class="table-responsive">
		<table class="table table-hover table-bordered">
			
			<thead>
				<tr>
					<th>Identification Type</th>
					<th>Identification Number</th>
					
					
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{$userdetails->identification_type}}</td>
					<td>{{$userdetails->identification_number}}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h5 class="text-center">Educational Qualifications</h5>
		<hr>
		<div class="table-responsive">
		<table class="table table-hover table-bordered">
			
			<thead>
				<tr>
					<th>NYSC year</th>
					<th>NYSC number</th>
					<th>Secondary</th>
					<th>Year completed</th>
					<th>Tertiary</th>
					<th>Year completed</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{$userdetails->nysc_year}}</td>
					<td>{{$userdetails->nysc_number}}</td>
					<td>{{$userdetails->secondary}}</td>
					<td>{{$userdetails->secondary_year}}</td>
					<td>{{$userdetails->tertiary}}</td>
					<td>{{$userdetails->tertiary_year}}</td>
				</tr>
			</tbody>
		</table>
		
	
	</div>
	<button class="btn btn-primary mt-3" data-toggle="modal" data-target="#save">Submit and Exit</button>
	</form>
	</div>
</div>

<div class="modal fade" id="save">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				
		
			</div>
		</div>
	</div>
</div>


@endsection