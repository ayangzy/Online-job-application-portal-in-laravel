@extends('layouts.app')

@section('content')


        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                   <h5><strong>Please pay attention to the following application guidelines / instrunctions</strong></h5>

                   <hr>

                   <ul class="list-group">

                    <li class="list-group-item">Select position that suit your qualification</li>

                    <li class="list-group-item">Upload your profile image</li>

                    <li class="list-group-item">Correctly enter your personal details</li>
                    <li class="list-group-item">Choose your mode of identification eg(Voters card,National id)..</li>

                    <li class="list-group-item">Fill out your academic qualifications</li>


                    <li class="list-group-item">Uploads your credentials</li>
                   </ul>

            </div>
            <div class="card-footer">
                <strong>NB:</strong> Your application can be edited during the time of application but once click submit, your application cannot be undone.
            </div>
       
    </div>
@endsection
