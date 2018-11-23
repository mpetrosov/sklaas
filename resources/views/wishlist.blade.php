@extends('master')

@section('header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
{{-- <link rel="stylesheet" href="{{asset('js/app.js')}}"> --}}
<title>Document</title>
    
@endsection

@section('content')

    <br/>   
    <div class="row justify-content-center"> 
        <form method="POST" action="/">
                @csrf
            <div class="form-group">
                <label for=""></label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <br>
            {{ Session::get('message')}}
            <hr>
            Totaal verlanglijstjes in deze pagina: {{$items->count()}}<br>
            Totaal verlanglijstjes: {{$items->total()}}
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
            {{ $items->links() }}
@endsection
@section('javascript')
    
<script>
     
    </script>
@endsection

@section('footer')
<div class="footer-img"><img src="../img/saint-nicholas-2965161_1280.jpg" ></div>  
@endsection