@extends('layouts.default')
@section('title')
Register
@stop
@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <i class="fa fa-angle-right"></i>
            <li class="active">CREAT ACCOUNT</li>
        </ol>
        <h1 class="page-title">REGISTER</h1>
    </div>
    <div class="row">
        <div class="col-md-9 register">
            <span>First Name</span>
            <input type="text" name="firstname" class="form-control">
            <span>Last Name</span>
            <input type="text" name="lastname" class="form-control">
            <span>Your Email</span><i>*</i>
            <input type="email" name="email" class="form-control">
            <span>Your Password</span><i>*</i>
            <input type="password" name="password" class="form-control">
            <a class="btn btn-pink-black" id="slide-pick-next">
                <span>CREATE AN ACCOUNT</span>
            </a>
        </div>
    </div>
</div> 
@stop