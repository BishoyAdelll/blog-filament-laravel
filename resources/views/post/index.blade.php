<x-app-layout :meta-title="$category->title" meta-description="daydumb">
<!-- Posts Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    @foreach ($posts as $post)
    {{-- @dd($post) --}}
        <x-post-number :post="$post"></x-post-number>
        
    @endforeach

    {{ $posts->links() }} 
    

</section>
<x-sidebar></x-sidebar>
</x-app-layout>

