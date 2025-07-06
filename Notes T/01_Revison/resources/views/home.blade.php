<div>
<form action="/user" method="post">

    {{-- {{print_r($errors)}} --}}
{{-- @foreach ($errors->all() as $error)
    {{ $error }}
@endforeach --}}
    @csrf
    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter name">
    @error('name')
    {{$message}}
    @enderror
    <br>

    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter email">
     @error('email')
    {{$message}}
    @enderror<br>
    <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Enter password"><br>
      @error('email')
    {{$message}}
    @enderror<br>
    <button>Submit</button>
</form>
</div>

<style>
    input,button{
    width: 200px;
    height: 40px;
    text-align: center;
    margin: 4px
}
</style>