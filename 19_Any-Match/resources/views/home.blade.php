<div>
    
<form action="user" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf
    <input type="text" name="name" placeholder="enter user name">
    <br><br>
    <input type="password" name="password" id="password" placeholder="enter password">
    <br><br>
    <button>Submit</button>
</form>

</div>
