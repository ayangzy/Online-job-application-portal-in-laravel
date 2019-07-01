@extends('layouts.app')



@section('content')

<div class="card">
        <div class="card-header"><h3>Position Applying for</h3></div>

        <div class="card-body">
        <form action="{{route('applications.store')}}" method="post">


            @if($position_applied !==NULL)

            
            @else
           
            @endif
               
                {{ csrf_field() }}
            	<div class="form-group">
            		<label for="position" class="lead">Position</label>
            		<select name="position" class="form-control">

                        @if($position_applied !==NULL)

                        <option value="{{$position_applied->position}}">{{$position_applied->position}}<option>
                            @endif
                        

                        


                            <option value="">Select Position</option>
                        @foreach($positions as $position)
                        
                        <option>
                            {{$position->position}}
                        </option>
                        
                        @endforeach
                      

                    </select>
                   
            	</div>

            	<div class="form-group">
            		<button class="btn btn-success">Save and Continue</button>
            	</div>
                
            </form>


        </div>
   
</div>

@endsection