<h1>Posts by {{ $author->name }}</h1>

@foreach($author->posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <!-- Add more details as needed -->
    </div>
@endforeach
