@extends('layout.admin')

@section('content')
   
        <banner-admin-component :banner="{{json_encode($banners)}}"/>
    
@endsection
