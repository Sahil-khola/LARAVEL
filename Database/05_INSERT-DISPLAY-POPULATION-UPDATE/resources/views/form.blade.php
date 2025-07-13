<h1>FORM PAGE</h1>
<form action="form-data" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" id="email" placeholder="Enter Email">
    <br>
    <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number">
    <br>
    <button>Submit</button>
</form>
<style>
    input,button{
        display: block;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid black;
        text-align: center;
        width: 240px;
        height: 45px;
    }
    button{
        background-color: blue;
        color: white;
    }
</style>