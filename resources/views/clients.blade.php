@extends('layouts.main')

@section('title', 'clients')

@push('styles')
    <style>
        h2{
            margin-bottom: 20px;
        }
    </style>
@endpush

@section('content')
    <h2>Clients</h2>
    <div class="card">
        <div class="card-body">
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $client->id }}</th>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a href=""><i class="bi bi-eye"></i></a>
                                <a href=""><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
