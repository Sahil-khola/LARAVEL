<form action="/home" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter Name">
    @error('name'){{$message}}@enderror

  
    <input type="password" name="c" id="password" placeholder="Enter Password">
    @error('password'){{$message}}@enderror

   
    <input type="email" name="email" id="email" placeholder="Enter Email">
    @error('email'){{$message}}@enderror

    <button>Submit</button>

</form>

<style>
    input,
    button {
        display: block;
        width: 250px;
        height: 59px;
        margin: 8px;
        text-align: center;
    }

    button {
        background-color: blue;
        border: rgb(135, 128, 128);
    }
</style>
