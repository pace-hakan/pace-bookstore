@extends('layouts.app')
<? $r=0; ?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2">LIST OF THE BOOKS</h4>
                    <a href="{{route('prefix.book.create')}}"><span class="fas fa-plus-circle fa-2x pt-2" /></a>
                </div>
                <div class="card-body">
                    <x-alert />
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
@foreach ($allBooks as $book)
                                <tr>
                                    <th scope="row"><?=++$r;?></th>
                                    <td><a href="{{route('prefix.book.edit', $book->id)}}">{{$book->title}}</a></td>
                                    <td>{{$book->description}}</td>
                                </tr>
@endforeach
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection