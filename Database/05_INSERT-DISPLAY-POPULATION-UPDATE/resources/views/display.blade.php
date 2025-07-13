<div>
    <table border="2">
   <form action="search" method="get">
    <input type="search" name="search" id="search" placeholder="Search" value="{{old("search")}}"> <button>Search</button>
    <thead>
        <button>Delete</button>
        <tr>
            <th>Select</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Opeartion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{$item->id}}" style="width: 20px"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phoneNumber}}</td>
            <td>
                <a href="delete/{{$item->id}}">delete</a>
                <a href="edit/{{$item->id}}">edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}
</div>
</form>
<style>
    div{
        margin-left: 50px;
    }
    input{
        display: inline-block;
        text-align: center
        border-radius: 10px;
        border: 3px solid black;
        border-radius: 10px;
        text-align: center;
        width: 180px;
        height: 35px;
    }
    button{
        margin: 10px;
        background-color: blue;
        color: white;
        width: 100px;
        height:35px;
        border: 3px solid black;
         border-radius: 10px;
    }
    .w-5.h-5{
        width: 20px;
    }
</style>