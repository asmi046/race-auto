@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <header>
        <div class="container">
            <div class="redline">
                <div class="logo">
                    <img src="{{ asset('img/logo.svg') }}" alt="{{ config('seo.title_postfix') }}}">
                </div>
            </div>
        </div>
    </header>
@endsection

