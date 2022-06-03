@extends('layouts.master')
@section('title', 'Welcome')
@section('welcome')
<div class="container">
    @section('sidebar')
    @parent
    <br>
    Welcome in My App
    @stop
    <p>This is appended to the master sidebar.</p>
</div>
@stop