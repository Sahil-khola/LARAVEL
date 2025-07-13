<form action="insert" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter Name">
    <br><br>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <br><br>
    <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Enter phoneNumber">
    <br><br>
    <button>Submit</button>
</form>