@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="hero-section">
    <div class="container">
        <!-- Шапка -->
        <header class="hero-header">
            <div class="logo">
                <img src="/img/logo_white.svg" alt="Logo">
            </div>
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
        </header>

        <!-- Информационный блок -->
        <div class="hero-content">
            <h1 class="hero-title">Оригинальные автозапчасти <br>с самой быстрой доставкой</h1>
            <p class="hero-phone">
                <a href="tel:+79260985808">+7 (926) 098-58-08</a>
            </p>
            <a href="#order" class="button">Заказать онлайн</a>
            <img src="/img/tg_qr.svg" alt="QR Code" class="hero-qr">
            <a href="https://t.me/raceauto" class="hero-tg-link">https://t.me/raceauto</a>
        </div>

        <!-- Подвал -->
        <footer class="hero-footer">
            <p>Все права защищены © 2025</p>
            <img src="/img/logo-mini.svg" alt="Logo Mini">
        </footer>
    </div>
</section>
@endsection

