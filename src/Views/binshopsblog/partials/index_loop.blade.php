{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.com for how to copy these files to your /resources/views/ directory--}}
<div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
    style="height: 450px; background-image:url({{ $post->image_url('large') }});">
    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
    </div>
    <div class="absolute top-0 right-0 left-0 mx-3 mt-2 flex justify-between items-center">
        <a href="#"
            class="text-xs bg-gold-dark text-white px-5 py-2 uppercase hover:bg-gold hover:text-white transition ease-in-out duration-500">{{ $post->category_name }}</a>
        <div class="text-white font-regular flex flex-col justify-start">
            <span class="leading-0 text-xs">{{ date('d M Y ', strtotime($post->post->posted_at)) }}</span>
            {{-- <span class="-mt-3">{{ date('d M Y ', strtotime($post->post->posted_at)) }}</span> --}}
        </div>
    </div>
    <div class="w-full p-5 z-10 bg-gold-dark hover:bg-gold">
        <a href="{{ $post->url($locale, $routeWithoutLocale) }}" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">
            {{ $post->title }}
        </a>
    </div>

</div>
