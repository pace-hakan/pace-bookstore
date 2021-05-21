@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-1">ADD A BOOK</h4>
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
                <div class="card-body">
                    <form action="{{route('prefix.book.store')}}" method="post" class="form-group">
                        @csrf
                        <h4>Title</h4>
                        <div class="pb-4"><input type="text" name="title" id="title" class="pl-2 form-control input-lg" placeholder="Write the book title" /></div>
                        <h4>Description</h4>
                        <div class="pb-4"><textarea name="description" id="description" class="p-2 form-control" rows="7" placeholder="Write the book description"></textarea></div>
                        <div class="p-1"><input type="submit" value="SUBMIT" class="btn btn-primary" /></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
