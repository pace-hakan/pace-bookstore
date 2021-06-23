@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2 pb-0 mb-0">EDIT THE BOOK</h4>
                    <a href="{{route('prefix.book.index')}}" class="btn btn-primary pt-2">BACK</a>
                </div>
                <x-alert />
                @if ($errors->any())
                <div class="alert alert-danger m-4">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <form action="{{route('prefix.book.update', $book->id)}}" method="post" class="form-group">
                        @csrf
                        @method('patch')
                        <h4>Title</h4>
                        <div class="pb-4"><input type="text" name="title" id="title" class="pl-2 form-control" value="{{$book->title}}" /></div>
                        <h4>Description</h4>
                        <div class="pb-4"><textarea name="description" id="description" class="p-2 form-control" rows="7" cols="64">{{$book->description}}</textarea></div>
                        <div class="pb-2 text-secondary"><span class="font-weight-bold pr-2">Created at</span> {{$book->created_at}}</div>
                        <div class="pb-2 text-secondary"><span class="font-weight-bold pr-2">Modified at</span> {{$book->updated_at}}</div>
                        <div class="pt-4">
                            <input type="submit" value="UPDATE" class="btn btn-primary mr-2" />
                            <a href="{{route('prefix.book.show', $book->id)}}" class="btn btn-danger">CANCEL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
