<div class=''>
    <form method='get' action='{{route("binshopsblog.search", app('request')->get('locale'))}}' class='text-center'>
        {{-- <h4>Search for something in our blog:</h4> --}}
        <input type='text' name='s' placeholder='Search...' class='focus:border-gold' value='{{\Request::get("s")}}'>
        <input type='submit' value='Search' class='btn btn-primary m-2 cursor-pointer dark:text-white'>
    </form>
</div>