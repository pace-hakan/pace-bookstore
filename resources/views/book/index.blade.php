@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2 pb-0 mb-0">LIST OF THE BOOKS</h4>
                    <a href="{{route('prefix.book.create')}}" class="btn btn-primary pt-2">ADD BOOK</a>
                </div>
                <x-alert />
                <div class="card-body">

                    <div class="card-title">Click on the titles to edit the entry.</div>
                    <p class="card-text">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">DESCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)                    {{-- @foreach ($books as $book) --}}
                                <tr>
                                    <th scope="row">@php echo $loop->iteration @endphp</th>
                                    <td><a href="{{route('prefix.book.show', $book->id)}}">{{$book->title}}</a></td>
                                    <td>{{$book->description}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="card-title" colspan="3">There are no books in your account.</td>
                                </tr>
                                @endforelse
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection