<h1>Profile Page</h1>
@if(session("name"))
    <h1>Welcome, {{ session('name') }}</h1>
    <h1>Your Password is {{ session('password') }}</h1>
@else
<h1>No user Found in session</h1><a href="form">LogIn</a>
    
@endif

<a href="logOut">Log Out</a>