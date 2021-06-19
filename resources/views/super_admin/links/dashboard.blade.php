@extends('layouts.master')
@section('top_nav')
    @include('super_admin.includes.topnav')
@endsection
@section('left_nav')
    @include('super_admin.includes.leftnav')
@endsection
@section('breadcrumb')
    @include('super_admin.includes.breadcrumb')
@endsection
@section('panels_stat')
    @include('super_admin.includes.panels')
@endsection
@section('content')
    <h1>le tableau de board du super administrateur</h1>
@endsection

