@push('styles')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endpush
<x-layouts.app>

    @if (config('binshopsblog.reading_progress_bar'))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

    <div class="flex flex-col gap-10 lg:m-20 mt-0 p-10 pt-0">


        @include('binshopsblog::partials.show_errors')
        <div id="blog-box">
            @include('binshopsblog::partials.full_post_details')
        </div>

        @if (config('binshopsblog.comments.type_of_comments_to_show', 'built_in') !== 'disabled')
            <div class="" id='maincommentscontainer'>
                <h2 class='text-center' id='binshopsblogcomments'>Comments</h2>
                @include('binshopsblog::partials.show_comments')
            </div>
        @else
            {{-- Comments are disabled --}}
        @endif


    </div>

    @push('scripts')
        <script src="{{ asset('binshops-blog.js') }}"></script>
    @endpush

</x-layouts.app>
