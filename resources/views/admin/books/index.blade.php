@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('home') }}">Dashboard</a> /
                Books
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>ISBN</th>
                            <th>Pages</th>
                            <th>Editorial</th>
                            <th>Year Edition</th>
                            <th>Date Edition</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration + ($books->currentPage() - 1) * $books->perPage() }}</td>
                                <td>
                                    <img src="{{ $book->image }}" alt="{{ $book->title }}" width="50">
                                </td>
                                <td>{{ $book->title }}</td>
                                <td>{{ Str::limit($book->description, 20, '...') }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->num_pages }}</td>
                                <td>{{ $book->editorial }}</td>
                                <td>{{ $book->year_edition }}</td>
                                <td>{{ $book->date_edition }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
