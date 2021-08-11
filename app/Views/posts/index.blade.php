<h1>Posts</h1>

@foreach($posts as $post)
    <div class="post_title">{{ $post['name'] }}</div>
    <div class="post_content">{{ $post['content'] }}</div>
@endforeach
