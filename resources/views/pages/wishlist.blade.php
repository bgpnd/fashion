@extends('layouts.default')
@section('title')
Wishlist
@stop
@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <i class="fa fa-angle-right"></i>
            <li class="active">WISH LIST</li>
        </ol>
        <h1 class="page-title">WISH LIST</h1>
        <table class="checkout">
            <colgroup>
            <col class="col-md-10">
            <col class="col-md-2">
            <col class="col-md-2">
            <col class="col-md-2">
        </colgroup>
        <tr>
            <td>product name</td>
            <td>price</td>
            <td>remove</td>
            <td>add to cart</td>
        </tr>
        <tr>
            <td>
                <img src="assets/img/8-back.jpg">
                <a href="#">Eellentes sagittis sodales accum etiam lobortis purus dictum</a>
            </td>
            <td>
                <span class="money"><i class="fa fa-eur"></i>55.00</span>
            </td>
            <td>
                <span class="btn-remove"><a href="#"><i class="fa fa-close"></i></a></span>
            </td>
            <td>
                <a class="btn btn-pink-black" id="slide-pick-next">
                    <span>ADD TO CART</span>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="assets/img/7-back.jpg">
                <a href="#">Eellentes sagittis sodales accum etiam lobortis purus dictum</a>
            </td>
            <td>
                <span class="money"><i class="fa fa-eur"></i>55.00</span>
            </td>
            <td>
                <span class="btn-remove"><a href="#"><i class="fa fa-close"></i></a></span>
            </td>
            <td>
                <a class="btn btn-pink-black" id="slide-pick-next">
                    <span>ADD TO CART</span>
                </a>
            </td>
        </tr>
    </table>
</div>
</div>
@stop