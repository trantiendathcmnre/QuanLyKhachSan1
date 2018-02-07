@extends('layout.master')

@section('NoiDung')
<h1>Laravel</h1>
@if($khoahoc != "")
{{"Co khoa hoc ".$khoahoc}}
@else
{{"Khong co khoa hoc"}}
@endif

@for( $i = 0; $i < 10 ; $i++ ) 
 {{$i}}
@endfor 
@endsection