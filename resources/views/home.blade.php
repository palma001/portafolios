@extends('layouts.app_front')
@section('title', $setting->header_title)
@section('favicon', Helpers::validImage("/settings/favicon/{$setting->favicon}"))
@section('facebook', $setting->facebook_link)
@section('twitter', $setting->twitter_link)
@section('instagram', $setting->instagram_link)
@section('phone', $setting->phone)
@section('email', $setting->email)
@section('address', $setting->address)
@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h1>
                    {{
                        $setting->title_page
                    }}
                </h1>
                <p>
                    {{
                        $setting->subtitle_page
                    }}
                </p>
            </header>
            <p>
                {{
                    $setting->description_page
                }}
            </p>
        </div>
        <span class="image object">
            <img src="{{ Helpers::validImage("/settings/image_page/{$setting->image_page}") }}" alt="" style="max-height: 400px;" />
        </span>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Erat lacinia</h2>
        </header>
        <div class="features">
            <article>
                <span class="icon fa-gem"></span>
                <div class="content">
                    <h3>Portitor ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-paper-plane"></span>
                <div class="content">
                    <h3>Sapien veroeros</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-rocket"></span>
                <div class="content">
                    <h3>Quam lorem ipsum</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-signal"></span>
                <div class="content">
                    <h3>Sed magna finibus</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Equipo de Trabajo</h2>
        </header>
        <div class="posts">
            @foreach($equipments as $equipment)
                <article>
                    <a href="#" class="image">
                        <img src="{{ Helpers::validImage("equipments/{$equipment->image}") }}" alt="" style="width: 320px; height: 320px; border-radius: 100%; margin: auto" />
                    </a>
                    <h3>{{ strtoupper($equipment->name) }} {{ strtoupper($equipment->lastname) }}</h3>
                    <p>{{ $equipment->description }}</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
<!-- Banner -->
