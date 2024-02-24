@extends('layouts.main')

@section('title', 'clients')

@push('styles')
    <style>
        h2 {
            margin-bottom: 20px;
        }

        form button {
            border: 0;
            background: transparent;
        }

        td form {
            display: inline-block;
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
                    @php
                        $count = 1
                    @endphp
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal{{$client->id}}"><i class="bi bi-eye"></i></a>
                                <div class="modal fade" id="modal{{$client->id}}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Client Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>{{ $client->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email:</td>
                                                            <td>{{ $client->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Created:</td>
                                                            <td>{{ $client->created_at}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Updated:</td>
                                                            <td>{{ $client->updated_at}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('clients.edit', $client->id)  }}"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('clients.destroy', $client->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $count++
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
