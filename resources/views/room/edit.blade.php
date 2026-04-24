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
        form {
            max-width: 700px;
            margin: 40px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 22px;
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-weight: 600;
            color: #1f3b2d;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .form-control {
            height: 48px;
            border-radius: 14px;
            border: 1px solid #d8dfda;
            background: #f9fbfa;
            padding: 0 14px;
            font-size: 1rem;
            transition: all 0.25s ease;
        }

        .form-control:focus {
            border-color: #2f5b47;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(47, 91, 71, 0.12);
            outline: none;
        }

        textarea.form-control {
            height: auto;
            padding: 14px;
            resize: vertical;
            min-height: 120px;
        }

        .button-edit {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #2c5a46, #3d745d);
            color: #ffffff;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            cursor: pointer;
        }

        .button-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(44, 90, 70, 0.25);
        }
    </style>
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Attenzione! Alcuni dati inseriti non sono corretti. Correggili per poter continuare.</h4>
            <hr>
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="room-header">
        <h1 class="room-title">Suite & Dimore</h1>
        <span class="room-subs">Dove ogni risveglio ha un sapore nuovo.</span>
    </header>

    <main class="room-main">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action='{{url("room/{$room->id}")}}'>
                    {{ csrf_field() }}  
                    {{ method_field('PATCH') }}
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nome Camera</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$room->name}}">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="price_per_night" class="form-label">Tariffa a notte (€)</label>
                        <input name="price_per_night" class="form-control" value="{{$room->price_per_night}}">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" value="{{$room->description}}" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="button-edit">Change</button>
                </form>
            </div>
        </div>
    </main>
@endsection