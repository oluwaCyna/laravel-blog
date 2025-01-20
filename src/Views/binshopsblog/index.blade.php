@push('styles')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endpush

<x-layouts.app>
    <div class="flex flex-col gap-10 lg:m-20 mt-0 p-10 pt-0">

        {{-- <div class='col-sm-12 binshopsblog_container'> --}}

        <x-typography.h1 class="text-center text-2xl">{{ $title }}</x-typography.h1>

        <div class="flex align-items-end justify-end">
            @if (config('binshopsblog.search.search_enabled'))
                @include('binshopsblog::sitewide.search_form')
            @endif
        </div>

        @if ($category_chain)
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @forelse($category_chain as $cat)
                            / <a href="{{ $cat->categoryTranslations[0]->url($locale) }}">
                                <span class="cat1">{{ $cat->categoryTranslations[0]['category_name'] }}</span>
                            </a>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        @endif

        @if (isset($binshopsblog_category) && $binshopsblog_category)
            <h2 class='text-center'> {{ $binshopsblog_category->category_name }}</h2>

            @if ($binshopsblog_category->category_description)
                <p class='text-center'>{{ $binshopsblog_category->category_description }}</p>
            @endif
        @endif

        <section class="max-w-screen-xl mx-auto my-5 sm:my-10 p-5 sm:p-0">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">
                @forelse($posts as $post)
                    @include('binshopsblog::partials.index_loop')
                @empty
                    <div class="col-md-12">
                        <div class='alert alert-danger'>No posts!</div>
                    </div>
                @endforelse
            </div>
        </section>

        {{ $posts->links('components.blog-paginator') }}
    </div>

</x-layouts.app>
