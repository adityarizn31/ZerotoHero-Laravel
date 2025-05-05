<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 mx-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="font-medium hover::underline">
                <h2 class="mb-1 text-3xl tracking-tight text-gray-900"> {{ $post['title'] }} </h2>
            </a>
            <div class="text-base text-gray-500">
                <a href=""> {{ $post['author'] }} || May 5 2025 </a>
            </div>
            <p class="my-4 font-light"> {{ $post['body'] }} </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
