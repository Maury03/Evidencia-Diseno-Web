@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Actividad</th> 
          <th>Tipo</th> 
          <th>Calificacion</th>
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($calificacions as $calificacion) 
          <tr> 
            <td><a>{{ $calificacion->actividad }}</a></td> 
            <td><a>{{ $calificacion->tipo }}</a></td> 
            <td><a>{{ $calificacion->calificacion }}</a></td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection 