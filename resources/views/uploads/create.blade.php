@extends('layouts.app')



@section('content')

@include('includes.errors')
<div class="card">
	<div class="card-header"><h3>Upload credentials</h3></div>
	<div class="card-body">
		<form action="{{route('uploads.update')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group">
				<label for="ssce" class="lead">SSCE</label>
				<input type="file" name="upload_ssce" class="form-control" id="ssce">
			</div>

			<div class="form-group">
				<label for="nysc" class="lead">NYSC</label>
				<input type="file" name="upload_nysc" class="form-control" id="nysc">
			</div>


			<div class="form-group">
				<label for="degree" class="lead">Degree</label>
				<input type="file" name="upload_degree" class="form-control" id="degree">
			</div>

			<div class="form-group">
				<button class="btn btn-success">
					Save Uploads
				</button>
			</div>
		</form>
	</div>
</div>

@endsection