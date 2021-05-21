@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-1">EDIT THE BOOK</h4>
                    <a href="{{route('prefix.book.index')}}" class="btn btn-primary">BACK</a>
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
                @endif
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('prefix.book.update', $book->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <h4>Title</h4>
                        <div class="pb-4"><input type="text" name="title" id="title" class="pl-2" value="{{$book->title}}" /></div>
                        <h4>Description</h4>
                        <div class="pb-4"><textarea name="description" id="description" class="p-2" rows="7" cols="64">{{$book->description}}</textarea></div>
                        <h4>Date created</h4>
                        <div class="pb-4 text-secondary">{{\Carbon\Carbon::createFromTimestamp(strtotime($book->created_at))->format('d-m-Y H:i:s')}}</div>
                        <h4>Date last modified</h4>
                        <div class="pb-4 text-secondary">{{\Carbon\Carbon::createFromTimestamp(strtotime($book->updated_at))->format('d-m-Y H:i:s')}}</div>
                        <div class="p-1">
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
