@if (session()->has('message') OR session()->has('error'))
<div class="mt-4 mb-2">
    @if (session()->has('message'))
        <div class="alert alert-success m-4">{{session()->get('message')}}</div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger m-4">{{session()->get('error')}}</div>
    @endif
</div>
@endif