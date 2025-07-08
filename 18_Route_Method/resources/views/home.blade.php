<div>
    <H1>Home Page</H1>
    <form action="/home" method="post">
        {{-- <input type="hidden" name="_method" value="put"> --}}
        <input type="hidden" name="_method" value="delete">
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @csrf
        <input type="text" name="name" id="name" placeholder="enter user name">
        <br><br>
        <input type="password" name="password" id="password" placeholder="enter password">
        <br><br>
        <button>Submit</button>
    </form>
</div>
