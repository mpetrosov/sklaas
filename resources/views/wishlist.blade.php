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
    <div class="row justify-content-center"> 
        <form method="POST" action="/">
                @csrf
            {{-- <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="je naam">
                <small class="form-text text-muted"> </small>
            </div> --}}
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="name" placeholder="wenscadeau">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control"  name="desc" placeholder="beschrijvnig">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="link" placeholder="link">
                <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
            </div>
            <button type="submit" class="btn btn-success">toevoegen</button>
        </form>
    </div>

            <h1 class="wish-header">Verlanglijst</h1>
                <table class="table table bordered"> 
                    @foreach ($items as $item)
               
                <tr> 
                    <td>{{$item->name}}</td>
                    <td>{{$item->desc}}</td>
                    <td>{{$item->link}}</td>  
                    <td><form action="/wishlist/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                    </td> 
                </tr>
            @endforeach 
            </table> 
@endsection

@section('footer')
<div class="footer-img"><img src="../img/saint-nicholas-2965161_1280.jpg" ></div>  
@endsection