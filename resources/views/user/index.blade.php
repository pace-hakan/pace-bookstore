{{-- @extends('layouts.app') --}}

@foreach ($users as $user)
    {{$user->name}}
@endforeach
