@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create News</div>

                    <div class="card-body">
                        <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required minlength="10" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <textarea name="short_text" class="form-control" rows="3" placeholder="Short text" required minlength="10">{{ old('short_text') }}</textarea>
                            </div>

                            <div class="form-group">
                                <textarea name="text" id="text" class="form-control" rows="10" placeholder="Text" required minlength="10">{{ old('text') }}</textarea>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control p-1" name="image" required accept="image/*">
                            </div>

                            <div class="form-group">
                                <select name="categories[]" class="form-control" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
