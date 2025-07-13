
<form action="search" method="post">
    @csrf
    <input type="search" name="search" id="search" placeholder="Search"> <button>Search</button>
    <button>Delete</button>
<table border="2">
    <tr>
        <th>Select</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Operation<th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td><input type="checkbox" name="id[]" value="{{$item->id}}"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phoneNumber}}</td>
            <td>
                <a href="delete/{{$item->id}}">Delete</a>
                <a href="edit/{{$item->id}}">Edit</a>
            </td>

        </tr>
    @endforeach
</table>
{{$data->links()}}
</form>
<style>
    .w-5.h-5{
        width: 2px;
    }
</style>