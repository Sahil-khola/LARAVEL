@extends('layout')

@section('title','LogIn Page')

@section('contant')
    <form action="" method="get">
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <br><br>
        <input type="submit" value="Login"
    </form>
@endsection
