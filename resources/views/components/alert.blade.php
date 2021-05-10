<div class="mt-4 mb-2">
    @if (session()->has('message'))
        <div class="alert alert-success">{{session()->get('message')}}</div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif
</div>