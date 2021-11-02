@extends('layout.admin')

@section('content')
   
        <about-admin-component :about="{{json_encode($about)}}"/>
    
@endsection
