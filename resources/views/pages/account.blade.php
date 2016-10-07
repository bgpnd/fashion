@extends('layouts.default')
@section('title')
Account
@stop
@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <i class="fa fa-angle-right"></i>
            <li class="active">account</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-15">
            <h1 class="page-title">MY ACCOUNT</h1>
            <h4>ORDER HISTORY</h4>
            <table class="accounttable">
                <colgroup>
                <col class="col-md-4">
                <col class="col-md-4">
                <col class="col-md-4">
                <col class="col-md-4">
                <col class="col-md-4">
            </colgroup>
            <tr>
                <td>order</td>
                <td>date</td>
                <td>payment status</td>
                <td>fulfillment status</td>
                <td>total</td>
            </tr>
            <tr>
                <td>
                    <a href="#">#1031</a>
                </td>
                <td>
                    <span>Apr, 04 2014</span>
                </td>
                <td>
                    <span class="money">Authorized</span>
                </td>
                <td>
                    <span>Unfulfilled</span>
                </td>
                <td>
                    <span class="money">
                        <i class="fa fa-eur"></i>164.68
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-5">
        @include('includes.sidebar-account')
    </div>
</div> 
</div>
@stop