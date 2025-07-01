<ol>
    <li><a href="home">Home</a></li>
    <li><a href="user">User</a></li>
    <li><a href="about">About</a></li>
    {{-- <li><a href="contact">contact</a></li> --}}
    <li><a href="{{URL::to("contact")}}"contact</a></li>
</ol>
<style>
    ol{
        list-style-type: none;
        display: flex;
        justify-content: space-around;
        font-size: 30px;
        background-color: gray;
        
    }
    a{
        text-decoration: none;
        color: black

    }
</style>