@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Posts
                        @can('create-post')
                            <a class="float-right btn btn-sm btn-primary" href="{{route('create_post')}}">
                                New
                            </a>
                        @endcan
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-6 col-md-4">
                                    <div class="img-thumbnail">
                                        <div class="figure-caption">
                                            <h3>
                                                <a href="{{route('edit_post', ['id' => $post->id])}}">{{$post->title}}</a>
                                            </h3>
                                            <p>{{substr($post->body, 50)}}</p>
                                            @can('update-post', $post)
                                                <p>
                                                    <a href="{{route('edit_post', ['id' => $post->id])}}" class="btn btn-sm btn-primary" role="button">Edit</a>
                                                </p>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
