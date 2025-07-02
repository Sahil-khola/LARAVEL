<div>
    <form action="aser" method="post">
        {{-- {{print_r($errors)}} --}}
      {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>
                {{$error}}
            </div>
        @endforeach
      @endif --}}
        @csrf
        <input type="text" name="name" placeholder="Enter name" value="{{old("name")}}"
        class="{{$errors->first("name")? "errors":""}}"
        >
        @error('name')
          {{$message}}  
        @enderror
        <br>
        <input type="password" name="password" placeholder="enter password">
          @error('password')
          {{$message}}  
        @enderror
        <br>
        <input type="email" name="email" placeholder="enter email">
          @error('email')
          {{$message}}  
        @enderror
        <br>
        <button>Submit</button>
    </form>
</div>


<style>
    input,button{
        margin: 5px;
        width: 250px;
        text-align: center;
        height: 50px;
        color: aqua;
    }
    button{
        background-color: blue;
    }
    .errors{
      /* background-color: black; */
      border: 3px solid red;
    }
</style>