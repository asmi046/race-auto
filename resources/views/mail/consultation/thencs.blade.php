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

            <div class="contacts">
                <h3>Благодарим за обращение!</h3>
                <p>Все детали по телефону:</p>
                <p><a href="tel:+79260985808">+7 (926) 098-58-08</a></p>

            </div>
        </div>
    </header>
@endsection
