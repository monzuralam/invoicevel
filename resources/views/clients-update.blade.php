@extends('layouts.main')

@section('title', 'Update Client')

@section('pageTitle', 'Update Client')

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Client Information</h5>

                    @foreach ( $errors as $error )
                        {{ $error }}
                    @endforeach

                    <form class="row g-3" action="{{ route('clients.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control @error('name') error @enderror" placeholder="Name" value="{{ old('name', $data->name) }}">
                            @error('name') <span>Name field is requied.</span> @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="Email" value="{{ old('email', $data->email ) }}">
                            @error('email') <span>Email field is requied.</span> @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control @error('password') error @enderror" placeholder="Password" value="{{ old('password', $data->password ) }}">
                            @error('password') <span>Password field is requied & Min lenght is 8 character.</span> @enderror
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection