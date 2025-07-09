<div>
    <h1>Log In</h1>
    <form action="logIn" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder=" Enter Name ">
        <input type="password" name="password" id="password" placeholder="Enter Password">
     <button>Submit</button>
    </form>
</div>
<style>
    input,button{
        display: block;
        width: 220px;
        height:50px;
        margin: 5px;
        text-align: center;
         font-size:15px;
    }
    
    button{
        background-color: blue;
         font-size:25px;

    }
</style>