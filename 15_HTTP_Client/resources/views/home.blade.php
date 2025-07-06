<div>
<h1>HOME PAGE</h1>
<pre>
    {{-- {{print_r($data)}} --}}
</pre>
<ol>
    <li>Name - <b>{{$data->name}}</b></li>
    <li>UserName - <b>{{$data->username}}</b></li>
    <li>Email - <b>{{$data->email}}</b></li>
    <li>Phone Number - <b>{{$data->phone}}</b></li>
    <li>Address - <b>{{$data->address->city}}</b></li>
    <li>Website - <b>{{$data->website}}</b></li>
    <li>Company - <b>{{$data->company->name}}</b></li>
    <li>Catch Phrase - <b>{{$data->company->bs}}</b></li>
</ol>
</div>
