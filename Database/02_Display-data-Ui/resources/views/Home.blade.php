<div>
    <h1>Home Page</h1>
    <pre>
    {{-- {{ print_r($users) }} --}}
    </pre>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
