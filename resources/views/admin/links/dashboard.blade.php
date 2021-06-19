@extends('layouts.master')
@section('top_nav')
    @include('admin.includes.topnav')
@endsection
@section('left_nav')
    @include('admin.includes.leftnav')
@endsection
@section('breadcrumb')
    @include('admin.includes.breadcrumb')
@endsection
@section('panels_stat')
    @include('admin.includes.panels')
@endsection
@section('content')
    <h1>le tableau de board de administrateur</h1>
@endsection

