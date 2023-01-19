@extends('layaouts.plantilla')
@section('title','Cursos '.$id)

@section('content')
<!--<h2>bienvenido al curso de: <?php //echo $id;?></h2>-->
<h2>bienvenido al curso de: {{$id}} </h2>
@endsection

