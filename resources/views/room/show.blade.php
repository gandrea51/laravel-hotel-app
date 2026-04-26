@extends('layouts.app')
@section('styles')
    <style>
        .room-header {
            padding: 70px 40px;
            text-align: center;
            background: linear-gradient(135deg, #24382d, #3f6453);
            border-radius: 24px;
            color: #ffffff;
            margin-bottom: 50px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .room-title {
            margin: 0;
            font-size: 3.2rem;
            font-weight: 700;
            letter-spacing: -1px;
        }

        .room-subs {
            display: block;
            margin-top: 18px;
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.88);
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .room-main {
            margin-top: 30px;
        }

        .room-main .row {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .room-main .col-md-6 {
            flex: 1;
            min-width: 320px;
            padding: 35px;
            background: #ffffff;
            border-radius: 22px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-main .col-md-6:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 38px rgba(0, 0, 0, 0.12);
        }

        .room-intro {
            display: block;
            font-size: 1.08rem;
            line-height: 1.9;
            color: #4b4b4b;
        }
        .span-top {
            padding: 50px 40px;
            text-align: center;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }

        .span-right {
            flex: 1;
            padding: 35px;
            background: #ffffff;
            border-radius: 22px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .span-left {
            flex: 1;
            display: flex;
        }

        .span-left .image-top-right {
            width: 100%;
            height: auto;
            border-radius: 22px;
            object-fit: cover;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .col-md-12 {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .room-name {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            color: #1f3b2d;
            margin-bottom: 20px;
        }

        .list-group {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .list-group-item {
            padding: 14px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            font-size: 1rem;
            color: #444;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .btn-link {
            display: inline-block;
            margin-top: 10px;
            color: #1f3b2d;
            font-weight: 600;
            text-decoration: none;
            transition: opacity 0.2s ease;
        }

        .btn-link:hover {
            opacity: 0.7;
        }

        .span-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1f3b2d;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1.05rem;
            line-height: 1.9;
            color: #4b4b4b;
        }
    </style>
@endsection
@section('content')
    <header class="room-header">
        <h1 class="room-title">Suite & Dimore</h1>
        <span class="room-subs">Dove ogni risveglio ha un sapore nuovo.</span>
    </header>
    <main class="room-main">
        <div class="row">
            <div class="col-md-12">
                <div class="span-top">
                    <h4 class="span-title">Il Tuo Spazio di Libertà</h4>
                    <span class="card-text">Scopri un ambiente dove ogni dettaglio è stato curato per offrirti un riposo rigenerante. Linee pulite, materiali ricercati 
                        e un'atmosfera sospesa nel tempo creano il rifugio perfetto per le tue notti. Che tu sia qui per una sosta veloce o per un lungo soggiorno, 
                        questa camera è pensata per farti sentire esattamente dove vorresti essere: a casa.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="span-left">
                    <img src="https://placehold.co/600x400" class="image-top-right" alt="The hotel" loading="lazy">
                </div>
                <div class="span-right">
                    <span class="room-name">{{$room->name}}</span>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Type: <strong>{{$room->type}}</strong></li>
                        <li class="list-group-item">Price per night: <strong>{{$room->price_per_night}}€</strong></li>
                        <li class="list-group-item">Capacity: <strong>{{$room->capacity}}</strong><i class="fa-solid fa-person"></i></li>
                        <li class="list-group-item">{{$room->description}}</li>
                        @if (Auth::user()->role_id != 4)<li class="list-group-item"><a href='{{url("room/$room->id/edit")}}' class="btn btn-link">Edit</a></li>@endif
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection