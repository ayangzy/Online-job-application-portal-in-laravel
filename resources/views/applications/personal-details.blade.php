@extends('layouts.app')



@section('content')
@include('includes.errors')

<div class="card">
        <div class="card-header"><h3>Your personal details</h3></div>

        <div class="card-body">
                
        <form action="{{route('applications.update')}}" method="post">

                {{ csrf_field() }}
            	<div class="form-group">
                    <label class="lead">FullName</label>
            		<input type="text" name="name" class="form-control" value=" {{$user->name}}" disabled>
                    </div>
                    

                    <div class="form-group">
                        <label for="" class="lead">State of Origin</label>
                               <select name="state" class="form-control">
                                  
                                   
                               <option value='{{$position->state}}'>{{$position->state}}</option>

                                   @foreach($states as $state)
                                
                               <option value="{{$state->name}}">{{$state->name}}</option>

                                   @endforeach
                                   
                               </select>
                        </div>

                        <div class="form-group">
                        <label for="" class="lead">Local Govertment of Origin</label>
                               <select name="lga" class="form-control">
                                   <option value="{{$position->lga}}">{{$position->lga}}</option>

                                   @foreach($lgas as $lga)

                                   
                                   
                                    <option class="{{$lga->name}}">{{$lga->name}}</option>
                                   
                                   @endforeach
                               </select>
                        </div>
                    
                    <div class="form-group">
                        <label for="phone" class="lead">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{$position->phone}}">
                        </div>

                        <div class="form-group">
                            <label for="address" class="lead">Address of Residence</label>
                              <textarea name="contact" class="form-control" id="address">{{$position->contact}}</textarea>  
                        </div>

            	<div class="form-group">
            		<button class="btn btn-success">Save and Continue</button>
            	</div>
                
            </form>


        </div>
   
</div>

@endsection