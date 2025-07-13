<x-layout>
    <x-slot name="title"> Log In </x-slot>
    <x-slot name="main">
        <section>
        <h1>Log In Page </h1>
        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        <br><br>
        <button type="submit" class="btn btn-primary" id="login">Log In</button>
    </section>
    </x-slot>
</x-layout>

<style>
    #login {
        width: 100px;
        margin-left: 50px;
    }
</style>

