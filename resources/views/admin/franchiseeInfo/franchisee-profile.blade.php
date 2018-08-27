@extends('admin.franchiseeInfo.franchisee-info')
@section('title')
    User Information
    @endsection

@section('content')
    <p>User Name : {{ Session::get('franchiseeName') }}</p>
    @endsection