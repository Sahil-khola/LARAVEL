<div>
    <h1>Add New User</h1>
    <form action="AddUser" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name" value="{{old("name")}}"
        class="{{$errors->first("name") ? "error" : ""}}"
        >
        <span>
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <input type="text" name="email" placeholder="Enter email" value="{{old("email")}}">
        <span>
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <br>
        <input type="text" name="city" placeholder="Enter city"
        class="{{$errors->first("city")?"error": ""}}"
        >
        <span>
            @error('city')
                {{ $message }}
            @enderror
        </span>
        <br>
        <button>Add New User</button>
    </form>
</div>
<style>
    button,
    input {
        height: 34px;
        width: 200px;
        text-align: center;
        margin: 4px
    }

    button {
        background-color: blue;
        color: white;
    }

    .error {
        border: 5px solid red;
    }
</style>
