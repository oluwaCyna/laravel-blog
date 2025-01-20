<x-layouts.app>
    <div class="flex flex-col gap-10 lg:m-20 mt-0 p-10 pt-0">

        <div class="flex justify-between items-center">
            <x-typography.p1 class="dark:text-white">Search Results for <strong
                    class="italic">{{ $query }}</strong> | {{ count($search_results) }} Results</x-typography.p1>

            <div>
                @if (config('binshopsblog.search.search_enabled'))
                    @include('binshopsblog::sitewide.search_form')
                @endif
            </div>
        </div>

        <section class="max-w-screen-xl mx-auto my-5 sm:my-10 p-5 sm:p-0">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">

                @php $search_count = 0;@endphp
                @forelse($search_results as $result)
                    @if (isset($result->indexable))
                        @php $search_count += $search_count + 1; @endphp
                        <?php $post = $result->indexable; ?>
                        @if ($post && is_a($post, \BinshopsBlog\Models\BinshopsPostTranslation::class))
                            @include('binshopsblog::partials.index_loop')
                        @else
                            <div class='dark:text-white'>Unable to show this search result - unknown type
                            </div>
                        @endif
                    @endif
                @empty
                    <div class='dark:text-white'>Sorry, but there were no results!</div>
                @endforelse
            </div>
        </section>

    </div>
</x-layouts.app>
