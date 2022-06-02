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
                <div class="h2 mb-4">Article</div>
                <a class="btn btn-primary" href="{{ url('article/create') }}" role="button"><i class="bi bi-plus"></i>
                    Add Article</a>
                <div class="col-lg-12 mt-4">
                    <table class="table table-bordered">
                        <tr class="text-center table-secondary">
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 1;
                            
                        @endphp
                        @foreach ($article as $item)
                            <tr>
                                <td class="text-center" style="width: 5%">{{ $no++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ Str::limit($item->content, 100) }}</td>
                                <td style="width: 15%" class="text-center">
                                    <a href="{{ url('article/edit/' . $item->id) }}" class="btn btn-warning btn-sm"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="{{ url('article/destroy/' . $item->id) }}" class="btn btn-danger btn-sm"><i
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
