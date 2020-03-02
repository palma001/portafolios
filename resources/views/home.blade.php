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
            <h2>Trabajos Realizados</h2>
        </header>
        <div class="features">
            @foreach($works as $work)
                @if($work->showHome)
                    <article>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{$work->link}}">
                                    <h3>{{$work->title}}</h3>
                                </a>
                            </div>
                            <div class="col-3">
                                <img src="{{ Helpers::validImage("/works/{$work->image}") }}" class="img-work"/>
                            </div>
                            <div class="col-9">
                                <div class="">
                                    <p>{{ substr($work->description, 0, 251) }}<p>
                                </div>
                            </div>
                            <div class="col-12">
                                @if(count($work->equipments) > 0)
                                    <strong>Creadores:
                                        @foreach($work->equipments as $equipment)
                                            <a href="equipment/{{$equipment->id}}">
                                                {{ $equipment->name }} {{ $equipment->lastname }},
                                            </a>
                                        @endforeach
                                    </strong>
                                @endif
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
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
                        <li><a href="equipment/{{$equipment->id}}" class="button">More</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
<style>
    .img-work {
        width: 100%;
        height: 72%;
        border-radius: 5px;
        margin-top: 7px;
    }
</style>
<!-- Banner -->
