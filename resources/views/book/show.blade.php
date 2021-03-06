@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2 pb-0 mb-0">BOOK INFORMATION</h4>
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
                <div class="card-body d-flex justify-content-left">
                    <div>
                        <h4>Title</h4>
                        <div class="pb-4">{{$book->title}}</div>
                        <h4>Description</h4>
                        <div class="pb-4">{{$book->description}}</div>
                        <div class="pb-2"><span class="font-weight-bold pr-2">Created at</span> {{$book->created_at}}</div>
                        <div class="pb-2"><span class="font-weight-bold pr-2">Modified at</span> {{$book->updated_at}}</div>
                        <div class="pt-4">
                            <a href="{{route('prefix.book.edit', $book->id)}}" class="btn btn-primary mr-2">EDIT</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                DELETE
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">CONFIRM DELETE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you wanna delete this book?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <form action="{{route('prefix.book.destroy', $book->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">YES</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal --}}
            </div>
        </div>
    </div>
</div>
@endsection
