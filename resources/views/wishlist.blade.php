@extends('master')

@section('header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<title>Document</title>
    
@endsection

@section('content')

    <br/>
    <div class="row justify-content-left wishlist">
        <h1 class="wish-header">Verlanglijst</h1>
        <div class="wish">

        </div>
    </div>
    
    <div class="row justify-content-center"> 
        <form method="POST" action="/">
                @csrf
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="je naam">
                <small class="form-text text-muted"> </small>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  placeholder="wenscadeau">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  placeholder="beschrijvnig">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  placeholder="link">
            </div>
            <button type="submit" class="btn btn-success">toevoegen</button>
        </form>
</div>
@endsection

@section('footer')
<div class="footer-img"><img src="../img/saint-nicholas-2965161_1280.jpg" ></div>  
@endsection