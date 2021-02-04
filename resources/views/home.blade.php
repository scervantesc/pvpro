@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h4><span id="hello"></span>, {{ Auth::user()->name}}</h4>
@stop

@section('content')
<div class="col-md-10">

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/hello.js"></script>
@stop

    {{--<div class="card-deck">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <ul class="list-group">
                @forelse($users as $user)
                    <li class="list-group-item"><small>{{ $user->nombre}} - {{$user->last_login->diffForHumans()}}</small></li>
                @empty
                @endforelse
                </ul>
            </div>
        </div>
    </div>--}}