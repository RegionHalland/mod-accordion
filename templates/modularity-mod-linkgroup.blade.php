@if(isset($items) && !empty($items))
	<h2 id={!! sanitize_title($post_title) !!}>{!! apply_filters('the_title', $post_title) !!}</h2>
	<ul>
		@foreach ($items as $item)
			<li><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
		@endforeach
	</ul>
@endif