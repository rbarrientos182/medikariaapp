<!DOCTYPE html>
@extends('layouts.default')

@section('content')
  @if($currentUser)
      Hola {{$currentUser->nombre}}
  @endif
@stop
