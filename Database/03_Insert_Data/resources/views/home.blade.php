<form action="form" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter name">
    <input type="email" name="email" id="email" placeholder="Enter email">
    <input type="number" name="phone" id="phone" placeholder="Enter number">
    <button>Submit</button>
</form>
<style>
    input,button{
        display: inline-block;
        width: 240px;
        height: 45px;
        margin: 5px;
        text-align: center;
    }
    button{

background-color: blue;
color: aliceblue;

}
</style>