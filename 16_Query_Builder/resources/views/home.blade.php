<div>
    <pre>

        {{ print_r($user) }}
    </pre>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($user as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->Name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
