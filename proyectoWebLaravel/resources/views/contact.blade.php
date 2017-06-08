@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-6">
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.746990807518!2d-84.51211448565378!3d10.362103792603474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa06e6e4d2769fd%3A0x161bb9f05a5c1351!2sInstituto+Tecnol%C3%B3gico+de+Costa+Rica!5e0!3m2!1ses!2scr!4v1496889811303" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>
        <div class="col-md-6">
           

				<h1>Contactenos</h1>

				@if(Session::has('success'))
				    <div class="alert alert-success">
				      {{ Session::get('success') }}
				    </div>
				@endif

				{!! Form::open(['route'=>'contactus.store']) !!}

					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						{!! Form::label('Name:') !!}
						{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						{!! Form::label('Email:') !!}
						{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
						<span class="text-danger">{{ $errors->first('email') }}</span>
					</div>

					<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
						{!! Form::label('Message:') !!}
						{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
						<span class="text-danger">{{ $errors->first('message') }}</span>
					</div>

					<div class="form-group">
						<button class="btn btn-success">Contact US!</button>
					</div>

				{!! Form::close() !!}


        </div>
    </div>
</div>
@endsection
