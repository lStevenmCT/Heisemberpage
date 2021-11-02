@extends('layout.admin')

@section('content')
   
        <portafolio-admin-component :portafolio="{{json_encode($portafolio)}}"/>
    
@endsection
