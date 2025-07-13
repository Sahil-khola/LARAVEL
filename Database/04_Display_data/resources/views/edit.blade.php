<form action="/edit-list/{{$data->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <input type="text" name="name" id="name" value="{{$data->name}}">
    <input type="email" name="email" id="name" value="{{$data->email}}">
    <input type="tel" name="phoneNumber" id="name" value="{{$data->phoneNumber}}">
    <button>Update</button>
    <a href="/user">Cancel</a>
</form>
<style>
    input,button{
        text-align: center;
        width: 240px;
        height: 40px;
        display: block;
        margin: 5px;
    }
    button{
        background-color: blue;
        color: antiquewhite;
    }
</style>
