@if(isset($items) && !empty($items))
	<header id={!! sanitize_title($post_title) !!} class="relative pb-4 block mb-4">
		<span class="border-b-2 border-blue-dark text-xl font-bold text-black pb-2 z-20 relative leading-none">{!! apply_filters('the_title', $post_title) !!}</span>
		<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
	</header>
	<ul class="list-reset">
		@foreach ($items as $item)
			<li class="mb-2">
				<svg class="h-4 w-4 align-middle mr-1">
					<use xlink:href="#link-2"/>
				</svg>
				<a class="text-lg text-blue-dark" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
			</li>
		@endforeach
	</ul>
@endif