@extends ('layouts.app')

@section('content')

    <h1>Posts</h1>
    @if (count($posts)>1)
        @foreach($posts as $post)
            <div class="">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
            </div>

        @endforeach

    @endif
@endsection