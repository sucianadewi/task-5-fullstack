@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="mb-2">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('danger') }}
                        </div>
                    @endif
                </div>
                <div class="h2 mb-4">Category</div>
                <a class="btn btn-primary" href="{{ url('category/create') }}" role="button"><i class="bi bi-plus"></i>
                    Add Category</a>
                <div class="col-lg-8 mt-4">
                    <table class="table table-bordered">
                        <tr class="text-center table-secondary">
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($category as $item)
                            <tr>
                                <td class="text-center" style="width: 15%">{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td style="width: 15%" class="text-center">
                                    <a href="{{ url('category/edit/' . $item->id) }}" class="btn btn-warning btn-sm"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="{{ url('category/destroy/' . $item->id) }}" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
