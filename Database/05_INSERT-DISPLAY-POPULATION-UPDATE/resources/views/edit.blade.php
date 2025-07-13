<form action="/edit-list/{{$data->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" id="name" placeholder="Enter Name" value="{{$data->name}}">
    <br>
    <input type="text" name="email" id="email" placeholder="Enter Email" value="{{$data->email}}">
    <br>
    <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" value="{{$data->phoneNumber}}">
    <br>
    <button>Update</button>
</form>
<style>
    input,button{
        display: block;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid black;
        text-align: center;
        width: 240px;
        height: 45px;
    }
    button{
        background-color: blue;
        color: white;
        margin: 3px;
    }
    a{
        text-decoration: none;
        color: white;
        display: block;
        box-sizing: border-box
         border-radius: 10px;
        border: 1px solid black;
       width: 240px;
        height: 45px;   
        text-align: center;
        background-color: blue;
    }
</style>