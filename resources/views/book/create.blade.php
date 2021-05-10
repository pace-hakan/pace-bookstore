@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2">ADD A BOOK</h4>
                    <a href="{{route('prefix.book.index')}}"><span class="fas fa-arrow-alt-circle-left fa-2x pt-2" /></a>
                </div>
                <div class="card-body">
                    <x-alert />
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{route('prefix.book.store')}}" method="post" class="d-flex justify-content-between">
                        @csrf
                        <input type="text" name="title" id="title" class="p-3" placeholder="Type the book title" />
                        <textarea name="description" id="description" class="p-2" rows="1" cols="34" placeholder="Type a descrition to the book"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
