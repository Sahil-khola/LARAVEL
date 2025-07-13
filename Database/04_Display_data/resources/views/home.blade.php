<h1>HOME PAGE</h1>
<table border="2">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Operation</th>
    </tr>
</thead>
<tbody>
    @foreach ($data as $item)
    <tr>
     <td>{{$item->id}}</td>
     <td>{{$item->name}}</td>
     <td>{{$item->email}}</td>
     <td>{{$item->phoneNumber }}</td>
     <td>
        <a href={{'delete/'.$item->id}}>Delete</a>
        <a href="{{'edit/'.$item->id}}">Edit</a>
    
    </td>
    </tr>
    @endforeach
</tbody>
</table>
