@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        New Post
                    </div>

                    <div class="card-body">
                        <form class="form" role="form" method="post" action="{{route('edit_post')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label">Body</label>

                                <div class="col-md-6">
                                    <textarea id="body" name="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" required autofocus>
                                        {{old('body')}}
                                    </textarea>

                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
