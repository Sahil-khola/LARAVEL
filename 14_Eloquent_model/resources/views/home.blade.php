<div>
    <h1>HOME PAGE</h1>
</div>



<table border="2">
    <thead>
        <th>ID</th>
        <th>Name</th>
        {{-- <th>Email</th> --}}
        <th>City</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                {{-- <td> {{ $user->ID }}</td> --}}
                <td> {{ $user->id }}</td>
                {{-- <td> {{ $user->Name }}</td> --}}
                <td> {{ $user->name }}</td>
                {{-- <td> {{ $user->email }}</td> --}}
                <td> {{ $user->city }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
