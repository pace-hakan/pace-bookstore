@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2">EDIT THE BOOK</h4>
                    <a href="{{route('prefix.book.index')}}"><span class="fas fa-arrow-alt-circle-left fa-2x pt-2" /></a>
                </div>
                <x-alert />
                @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body d-flex justify-content-center">
                @endif
                    <form action="{{route('prefix.book.update', $book->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <h4>Title</h4>
                        <div class="pb-4"><input type="text" name="title" id="title" class="pl-2" value="{{$book->title}}" /></div>
                        <h4>Description</h4>
                        <div class="pb-4"><textarea name="description" id="description" class="p-2" rows="7" cols="64">{{$book->description}}</textarea></div>
                        <div class="p-1"><input type="submit" value="Update" /></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
