@extends('layouts.app')



@section('content')

@include('includes.errors')

<div class="card">
	<div class="card-header">
        <h3>Your means of identification</h3>
    </div>
		<div class="card-body">
        <form action="{{route('identifications.update')}}" method="post">
				 {{csrf_field()}}
				<div class="form-group">
					<label class="lead">Identification Type</label>
					<select name="identification_type" class="form-control">
						@if($app !==NULL)
						<option value="{{$app->identification_type}}">
								{{$app->identification_type}}
								@else
								Select Mean of identification
								
							</option>
							@endif
                        <option>National id-card</option>
                        <option>Voters Card</option>
                        <option>Drivers License</option>
                        <option>International Passport</option>
					</select>
				</div>

				<div class="form-group">
					<label class="lead">Identification Number</label>
					<input type="text" name="identification_number" class="form-control" value="{{$app->identification_number}}">
				</div>


				<div class="form-group">
					<button class="btn btn-success">Save and Continue</button>
				</div>
			</form>
	</div>
</div>


@endsection