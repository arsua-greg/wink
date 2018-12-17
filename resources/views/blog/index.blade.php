@foreach($posts as $post)
	<h2><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a><h2>
	<span>Posted on {{ $post->publish_date->format('dS M Y') }}</span>
	<p>{{ $post->excerpt }}</p>
@endforeach

{{ $posts->links() }}