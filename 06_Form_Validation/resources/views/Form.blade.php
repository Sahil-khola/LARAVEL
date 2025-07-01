<div>
    <form action="/Adduser" method="POST">
        @csrf
          {{-- @foreach ($errors->all() as $error)
              <div style="background-color: red; color:white">
                {{$error}}
              </div>
          @endforeach --}}
        <div>
            <label for="name">Name</label>
            <input type="text" name="userName" placeholder="Enter User Name" id="name">
            <span style="background-color: rgb(233, 122, 122); color: aliceblue;">@error('userName'){{$message}}
            @enderror</span>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter User email" id="email">
            <span>@error("email"){{$message}}
            @enderror</span>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter User password" id="password">
            <span>@error("password"){{$message}}
            @enderror</span>
        </div>

        <div>
            <h4>Skills : </h4>
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" id="Php" value="Php">

            <label for="sql">SQL</label>
            <input type="checkbox" name="skills[]" id="sql" value="Sql">

            <label for="Laravel">Laravel</label>
            <input type="checkbox" name="skills[]" id="Laravel" value="Laravel">
            <span>@error("skills"){{$message}}
            @enderror</span>
        </div>

        <div>
            <h4>Gender : </h4>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="Male">
             <span>@error("gender"){{$message}}
            @enderror</span>
        </div>
        <button>Submit</button>
    </form>
</div>
