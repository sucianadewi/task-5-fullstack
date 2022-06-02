@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="h2 mb-4">Update Category</div>
                <form action="{{ url('category/update/' . $model->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"
                            class="form-control input-pill @error('name') is-invalid @enderror" value="{{ $model->name }}"
                            required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group mt-4 text-right">
                            <a href="{{ url('category') }}" class="btn btn-danger "><span class="btn-label mr-2"><i
                                        class="fa fa-arrow-circle-left"></i></span>Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>
                                Save</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
