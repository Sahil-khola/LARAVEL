<div>
    <h1>
    @if (session('message'))
        <h1>welcome {{ session('message') }}</h1>
    @else
    </h1>
    <h4>session not found</h4>
    @endif
</div>
