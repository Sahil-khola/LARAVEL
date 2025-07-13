<form action="/update/{{$data->id}}" method="post">
 @csrf
<input type="hidden" name="_method" value="PUT">
<input type="text" name="name" value="{{$data->name}}">
<br><br>
<input type="text" name="email" value="{{$data->email}}">
<br><br>
<input type="text" name="phoneNumber" value="{{$data->phoneNumber}}">
<br><br>
<button>Update</button>
</form>