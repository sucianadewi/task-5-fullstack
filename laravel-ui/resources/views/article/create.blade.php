@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="h2 mb-4">Add New Article</div>
                <form action="{{ url('article/store') }}" method="POST">
                    @csrf
                    <i class="fas fa-chevron-square-left"></i>
                    <div class="form-group mt-2">
                        <label for="selectCategory" class="form-label">Category</label>
                        <select id="selectCategory" name="category" class="form-select">
                            <option>--Select Category--</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control input-pill"
                            value="{{ old('title') }}" required placeholder="Input article title">
                    </div>
                    <div class="form-group mt-2">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="20" rows="5" class="form-control input-pill" value="{{ old('content') }}"
                            placeholder="Input article content"></textarea>
                    </div>


                    <div class="form-group mt-4 text-right">
                        <a href="{{ url('article') }}" class="btn btn-danger "><span class="btn-label mr-2"><i
                                    class="fa fa-arrow-circle-left"></i></span>Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>
                            Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
