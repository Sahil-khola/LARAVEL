<div>
    <h1>Log In</h1>
    @if (session("message"))
        <h4>{{session("message")}}</h4>
    @endif
    @if (session("name"))
        <h4>{{session("name")}}</h4>
    @endif
    {{-- {{session()->reflash()}} --}}
    {{session()->keep(["name"])}}
    <form action="login" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <br><br>
        <button>Submit</button>
    </form>
</div>

<style>
    input,button{
        width: 230px;
        height: 50px;
        text-align: center;
  box-shadow: 12px 12px 12px 2px black;
        font-size: 15px;
    }
    button{
        background-color: blue;
        

    }
    h4{
        background-color: red;
  display: inline-block;
  width: 230px;
  height: 50px;
  text-align: center;
  text-justify: center;
  padding: 15px;
  box-sizing: border-box;
  color: white;
  box-shadow: 12px 12px 12px 2px black;
  border: 3px solid;

    }
</style>