@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="pt-2">LIST OF THE BOOKS</h4>
                    <a href="{{route('book.create')}}"><span class="fas fa-plus-circle fa-2x pt-2" /></a>
                </div>
                <div class="card-body">
                    <x-alert />
                    <h3 class="card-title">
                        {{'BASLIK'}}
                    </h3>
                    <p class="card-text">
                        {{"SDASDASD"}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection