<div>
    <form action="Adduser" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="userName" placeholder="Enter User Name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter User email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter User password" id="password">
        </div>

        <div>
        <h4>Skills : </h4>
        <label for="php">PHP</label>
        <input type="checkbox" name="Skills" id="Php" value="Php">

        <label for="sql">SQL</label>
        <input type="checkbox" name="Skills" id="sql" value="Sql">

        <label for="Laravel">Laravel</label>
        <input type="checkbox" name="Skills" id="Laravel" value="Laravel">
        </div>

        <div>
            <h4>Gender : </h4>
            <label for="male">Male</label>
          <input type="radio" name="gender" id="male" value="Male">
            <label for="female">Female</label>
          <input type="radio" name="gender" id="female" value="Male">
        </div>
       <button>Submit</button>
    </form>
</div>
