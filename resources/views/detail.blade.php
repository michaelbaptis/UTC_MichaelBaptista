@extends('layout.master')
@section('title', 'Post Book Detail')
@section('content')
    <div class="container mx-auto ">
        <h1 class="text-5xl font-bold">
            Detaail Buku
        </h1>

        <h2>
            Title : {{$book->title}} - {{$book->Detail->year}}
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis molestiae nisi quia, possimus aperiam soluta eveniet fuga delectus sequi nobis maxime, neque nulla adipisci qui. Obcaecati quas asperiores sed sunt? <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat rerum ad quam voluptatum fugit corporis distinctio sed sit sunt animi. Est itaque assumenda quam vero perspiciatis rem odit illo odio.</p>
        <h2>
            Category : {{$book->Category->category}}
        </h2>
        <h2>
            Author : {{$book->Detail->author}}
        </h2>
        <h2>
            Publisher : {{$book->Detail->publisher}}
        </h2>

        <p>
            Description: <br>
            {{$book->Detail->description}}
        </p>
    </div>
@endsection
