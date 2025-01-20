@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a id="admin-edit" href="{{$post->edit_url()}}" class="btn border border-gray-500 text-gray-500 text-sm float-right underline">Edit
        Post</a>
@endif

<x-typography.h1 class="text-center text-2xl mb-3">{{$post->title}}</x-typography.h1>
<x-typography.h3 class="text-center text-xl dark:text-white mb-3">{{$post->subtitle}}</x-typography.h3>


<?=$post->image_tag("large", false, 'd-block mx-auto'); ?>

<p class="">
    {!! $post->post_body_output() !!}

    {{--@if(config("binshopsblog.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("binshopsblog::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}
</p>
