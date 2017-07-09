@extends('layouts.app')

@section('header')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <form method="POST" action="/letters/{{	 $letter->id	}}/contacts/add">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <h3>Edit Contact:</h3>
                	<h5>First Name:</h5>
                    <input type="text" name="firstname" value="">
                    <h5>Last Name:</h5>
                    <input type="text" name="lastname" value="">
                    <h5>Phone:</h5>
                    <input type="text" name="phone" value="">
                    <h5>Mobile:</h5>
                    <input type="text" name="mobile" value="">
                    <h5>Email:</h5>
                    <input type="text" name="email" value="">

                	<h5>Address</h5>
                	<div class='form-group'>
                		<textarea name="address" class="form-control"></textarea>
                	</div>
                	<h5>Bio</h5>
                	<div class='form-group'>
                		<textarea name="bio" class="form-control"></textarea>
					</div>

					<div class='form-group'>
                		<button type="submit" class="btn btn-primary">Create</button>
                	</div>


               
            </form> 
                    
        </div>
    </div>
</div>

@endsection