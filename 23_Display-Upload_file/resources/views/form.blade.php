<form action="form" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="file">
    <br><br>
    <button>Submit</button>
</form>
