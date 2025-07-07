<table border="5">
    <thead>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
    </thead>
    <tbody>
 @foreach ($users as $user)
     <tr>
        <td>{{$user->ID}}</td>
        <td>{{$user->Name}}</td>
        <td>{{$user->email}}</td>
     </tr>
 @endforeach
    </tbody>
</table>