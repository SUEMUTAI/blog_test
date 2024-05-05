<!-- Iterate through posts and display them -->
@foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>Author: {{ $post->author->name }}</p>
        <p>Category: {{ $post->category->name }}</p> 
        <p>{{ $post->content }}</p>
        Add more details as needed
@endforeach
