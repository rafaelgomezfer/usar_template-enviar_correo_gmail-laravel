@extends('layout')

@section('content')

    @if(session()->has('flash'))
    <div class="container">
        <div class="row">
            <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                <strong>Genial!</strong> {{session()->get('flash')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
    <!-- about -->
    @include('partials.about')

    <!-- project -->
    @include('partials.project')

    <!-- resume -->
    @include('partials.resume')

    <!-- CONTACT -->
    @include('partials.contact')

@stop
