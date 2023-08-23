@extends('main')

@section('content')



<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">Reset your password !!</div>
			<div class="card-body">
				<form action="{{ route('sample.validate_reset') }}" method="post">
					@csrf

					@if($message = Session::get('successx'))
					<div style="max-height: 2px;">
						<input type="text" name="email"  placeholder="Email" value="{{ $message }}" style="visibility: hidden;max-height:2px !important;"/>
					</div>
					@endif

					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password" />
						@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
					</div>
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Submit</button>
					</div>

					
				</form>
					
			</div>
		</div>
	</div>
</div>

@endsection('content')