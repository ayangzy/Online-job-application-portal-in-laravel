@extends('layouts.app')


@section('content')

<div class="card">
<div class="card-header">
	<h3>Add profile image</h3>
	</div>
	<div class="card-body">
    <form action="{{route('pictures.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        
			<label for="file" class="lead">Profile Image</label>
			<div class="form-group">
				<input type="file" name="profile_picture" class="form-control" id="file">

			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Save and Continue" class="btn btn-success">
			</div>
		</form>
	</div>


</div>


@endsection