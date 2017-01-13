@extends('layouts.master')

@section('title')
	Profile Page
@endsection

@section('content')




<section class="row new-post">
	<div class="col-md-6 col-md-offset-3">
		<header><h3><center>PROFILE</center></h3></header>


			@if (Storage::disk('local')->has($user->first_name . '-' . $user->id . '.jpg'))
					<section class="row new-post">
						<div class="col-md-6 col-md-offset-3">
							<img src="{{ route('account.image', ['filename' => $user->first_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
						</div>
					</section>
			@endif	
			<br>
			<section>
			<div class="col-sm-12">
		        <div class="panel panel-info">
		            <div class="panel-heading">
		              <h3 class="panel-title">Profile</h3>
		            </div>
		            <div class="panel-body">
		              <h4><b>First Name: </b></h4>
		              <h4><b>Last Name: </b></h4>
		              <h4><b>Email: </b></h4>
		              <h4><b>Phone Number: </b></h4>

		            </div>
		        </div>
		    </div>
		    </section>

      		<br>
			<form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">

				<center><h3>Edit Profile</h3></center>


				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
				</div>

				<div class="form-group">
					<label for="first_name">Last Name</label>
					<input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" id="last_name">
				</div>


				<div class="form-group">
					<label for="first_name">Email</label>
					<input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">
				</div>

				<div class="form-group">
					<label for="first_name">Phone/label>
					<input type="text" name="phone" class="form-control" value="{{ $user->phone}}" id="phone">
				</div>

				<div class="form-group">
					<label for="image">Image (only .jpg)</label>
					<input type="file" name="image" class="form-control" id="image">
				</div>
				<button type="submit" class="btn btn-primary">Save Account</button>
				<input type="hidden" value="{{ Session::token() }}" name="_token">
			</form>
	</div>
</section>

@endsection