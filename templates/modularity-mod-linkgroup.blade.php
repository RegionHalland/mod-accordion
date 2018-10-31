@if(isset($items) && !empty($items))
	<header id={!! sanitize_title($post_title) !!} class="relative pb-2 block mb-2">
		<span class="border-b border-grey-light block text-xl font-bold text-black pb-2 z-20 relative">{!! apply_filters('the_title', $post_title) !!} aksodaksod</span>
	</header>
	<ul class="list-reset mb-8">
		@foreach ($items as $item)
			<li class="inline-flex mb-4">
				<svg class="h-4 w-4 align-bottom mr-2">
					<use xlink:href="#link-2"/>
				</svg>
				<a class="text-lg text-blue-dark flex-1 " href="{{ $item['url'] }}">{{ $item['title'] }}</a>
			</li>
		@endforeach
	</ul>
@endif