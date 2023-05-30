@extends('layout.master')
@section('title', 'Home Page')
@section('content')
<section class="bg-white dark:bg-gray-900 border-b-2">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Most Highlighted Book</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Below is my best review book with <span class="font-bold">{{ $highlightPost->ratingcount }}</span> likes</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        </div>
        <a href="/post/{{ $highlightPost->id }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-10     m-auto mt-10">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-96 md:rounded-none md:rounded-l-lg" src="{{ $highlightPost->image }}" alt="">

            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $highlightPost->title }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $highlightPost->description }}</p>
            </div>
        </a>
    </div>
</section>

<div class="w-full p-8 mb-10">
    <h2 class="text-2xl font-bold mb-10">Latest Book Reviews</h2>
    <div class="w-full grid grid-cols-4 gap-4">

        @foreach ($latestPosts as $post)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="/post/{{ $post->id }}">
                <img class="rounded-t-lg" src="{{ $post->image }}" alt="" />
            </a>
            <div class="p-5">
                <a href="/post/{{ $post->id }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->description }}</p>
            </div>
        </div>

        @endforeach

    </div>
</div>


<div class="w-full bg-black text-white p-3">
    <h2 class="text-3xl font-bold">Book Series Review</h2>
    <div class="w-full grid grid-cols-3">
        @foreach ($allPosts as $post)
            <div class="max-w-sm mt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-500 dark:border-gray-400">
                <a href="/post/{{ $post->id }}">
                    <img class="rounded-t-lg" src="{{ $post->image }}" alt="" />
                </a>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    <button type="button" class="btn btn-outline-dark" a href="/post/{{ $post->id }}">Read More</button>

                </div>
            </div>
        @endforeach

    </div>

</div>
@endsection
