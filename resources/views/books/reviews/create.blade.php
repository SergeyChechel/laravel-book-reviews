@extends('layouts.app')

@section('content')

    <h1 class="mb-10 text-2xl">Add Review for {{$book->title}}</h1>

    <form action="{{route('books.reviews.store', $book)}}" method="POST">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="5" required 
        class="input mb-4"></textarea>

        <label for="rating">Rating</label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">Select a Rating</option>
            @for($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <button type="submit" class="btn mt-4">Add Review</button>
    </form> 

@endsection