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
                <h3>В настоящий момент сайт находится на стадии разработки!</h3>
                <p>Для заказа свяжитесь с нами по телефону:</p>
                <p><a class="phone_main" href="tel:+79260985808">+7 (926) 098-58-08</a></p>
                <div class="social">
                    <a href="tg://resolve?domain=@kirill_race">
                        <svg class="sprite_icon">
                            <use xlink:href="#tg_icon"></use>
                        </svg>
                    </a>
                    <a href="https://wa.me/79260985808">
                        <svg class="sprite_icon">
                            <use xlink:href="#ws_icon"></use>
                        </svg>
                    </a>
                </div>
                <x-consultation-form.form  title="Запрос на подбор запчастей"></x-consultation-form.form>
            </div>
        </div>
    </header>
@endsection

