@extends('layouts.default')

@section('content')
  @if($currentUser)
      Hola {{$currentUser->email}}
  @endif
@stop
