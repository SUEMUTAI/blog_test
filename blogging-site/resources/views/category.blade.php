<h1>Posts in {{ $category->name }} Category</h1>

@foreach($category->posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <!-- Add more details as needed -->
    </div>
@endforeach
