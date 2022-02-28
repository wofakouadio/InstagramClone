@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <div class="card">

                <div class="card-header">{{ __('Add New Post') }}</div>

                <div class="card-body">

                    <form method="post" action="/p" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>
        
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" name="post_caption" autofocus>
        
                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>
        
                            <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" value="{{ old('image') }}" name="post_image">
        
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add New Post') }}
                            </button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection




