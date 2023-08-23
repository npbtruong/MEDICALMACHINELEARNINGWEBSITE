@extends('main')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">Forgot password? We will send you an email!</div>
			<div class="card-body">
				<form action="{{ route('sample.validate_request') }}" method="post">
					@csrf
					<div class="form-group mb-3">
						<input type="text" name="email" class="form-control" placeholder="Your Email" />
						@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
					
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Send</button>
					</div>

					
				</form>
					
			</div>
		</div>
	</div>
</div>

@endsection('content')