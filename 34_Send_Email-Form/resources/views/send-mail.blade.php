<form action="mail-send" method="post">
    @csrf
    <input type="email" name="to" placeholder="Enter Email Address" required><br><br>
    <input type="text" name="subject" placeholder="Enter Email Subject" required><br><br>
    <textarea type="text" name="msg" placeholder="Enter Email Message" required></textarea><br><br>
        <button>Submit</button>
</form>
