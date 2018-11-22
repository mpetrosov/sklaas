@extends('master')

@section('header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<title>Document</title>
    
@endsection

@section('content')
    <br/>
    
    <div class="row justify-content-left wishlist">
        <h1 class="wish-header">Verlanglijst</h1>
            @foreach ($items as $item)
            <table class="table table bordered">
            <tr> 
                <td>{{$item->name}}</td>
                <td>{{$item->desc}}</td>
                <td>{{$item->link}}</td>  
                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </tr>
        @endforeach 
    </div>

@endsection

@section('footer')
<div class="footer-img"><img src="../img/saint-nicholas-2965161_1280.jpg" ></div>  
@endsection