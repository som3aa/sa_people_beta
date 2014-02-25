@extends('backend.layouts.master')

@section('title')
    all pages
@stop

@section('content')

    <h1>Pages :</h1>
    <p>here is all of my Page</p>

    <?php print_r($pages) ?>

@stop