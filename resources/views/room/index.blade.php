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
        .row-form {
            margin: 50px 0;
        }

        .row-form .col-md-12 {
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .row-form form .row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .row-form .col-md-2,
        .row-form .col-md-3 {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-width: 180px;
        }

        .form-control {
            height: 52px;
            border: 1px solid #d8dfda;
            border-radius: 14px;
            padding: 0 16px;
            font-size: 1rem;
            background: #f9fbfa;
            transition: all 0.25s ease;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #2f5b47;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(47, 91, 71, 0.12) !important;
            outline: none;
        }

        .form-text {
            margin-top: 8px;
            padding-left: 4px;
            font-size: 0.9rem;
            color: #6f6f6f;
        }

        #btn-aggiungi {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #2c5a46, #3d745d);
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            margin-top: 0;
        }

        #btn-aggiungi:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(44, 90, 70, 0.25);
        }
    </style>
@endsection

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <header class="room-header">
        <h1 class="room-title">Suite & Dimore</h1>
        <span class="room-subs">Dove ogni risveglio ha un sapore nuovo.</span>
    </header>
    
    <main class="room-main">
        <div class="row">
            <div class="col-md-6">
                <span class="room-intro">L'innovazione non è mai stata così accogliente. Abbiamo trasformato la complessità della tecnologia in un gesto semplice, 
                    per offrirti un’esperienza di soggiorno dove ogni dettaglio è pensato per anticipare i tuoi desideri.</span>
            </div>
            <div class="col-md-6">
                <span class="room-intro">Dimentica le attese e immergiti nel comfort. Qui, il futuro dell'ospitalità incontra la tradizione dell'accoglienza, 
                    lasciandoti solo il piacere di vivere ogni istante e di lasciarti viziare dalla nostra cura per i particolari.</span>
            </div>
        </div>
        @if (Auth::user()->role_id != 4)
            <div class="row-form">
                <div class="col-md-12">
                    <form action="{{route('room.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-3">
                                <input name="name" class="form-control" placeholder="Nome Camera">
                                <div class="form-text">Es: Suite Presidenziale</div>
                            </div>
                            <div class="col-md-2">
                                <select name="type" class="form-control">
                                    <option value="single">Singola</option>
                                    <option value="double">Doppia</option>
                                    <option value="suite">Suite</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                                <div class="form-text">Tipologia</div>
                            </div>
                            <div class="col-md-2">
                                <input name="price_per_night" class="form-control" placeholder="0.00">
                                <div class="form-text">Tariffa a notte (€)</div>
                            </div>
                            <div class="col-md-3">
                                <select name="is_available" class="form-control">
                                    <option value="1">Disponibile</option>
                                    <option value="0">Occupata</option>
                                </select>
                                <div class="form-text">Stato attuale</div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" id="btn-aggiungi" class="btn btn-success" value="Aggiungi">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif

        <div class="row-room">
            <div class="col-md-12">
                @if (isset($rooms) && $rooms->count() > 0)
                    <div id="cardContainer" class="row">
                        @foreach ($rooms as $room)
                            <div class="card" style="width: 18rem;" data-id="{{$room->id}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$room->name}}</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Categoria: <strong>{{ ucfirst($room->type) }}</strong></h6>
                                    <p class="card-text">
                                        Prezzo: €{{ number_format($room->price_per_night, 2) }}<br>
                                        Stato: {{$room->is_available ? '✅ Libera' : '❌ Occupata'}}
                                    </p>
                                    <a href='{{url("room/$room->id")}}' class="card-link">Show</a>
                                    @if (Auth::user()->role_id != 4)<a href='{{url("room/$room->id/destroy")}}' class="card-link">Delete</a>@endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h4>Camere in allestimento</h4>
                @endif
            </div>
        </div>
    </main>

    

    <script type="application/javascript">
        // AGGIUNTA CAMERA
        $('#btn-aggiungi').on('click', function(event) {
            event.preventDefault();
        
            let data = {
                'name': $('input[name="name"]').val(),
                'type': $('select[name="type"]').val(),
                'price_per_night': $('input[name="price_per_night"]').val(),
                'is_available': $('select[name="is_available"]').val(),
                '_token': $('input[name="_token"]').val(), 
            };

            $.ajax({
                url: "/room",
                type: "POST",
                dataType: 'json',
                data: data,
                success: function(response) {
                    let r = response.data;
                    let stato = r.is_available == 1 ? '✅ Libera' : '❌ Occupata';
                    
                    // Creazione dinamica della nuova card
                    var nuovaCard = `
                        <div class="col-md-4 mb-3 card-room-wrapper" data-id="${r.id}">
                            <div class="card p-3">
                                <h4>${r.name}</h4>
                                <p>Categoria: <strong>${r.type}</strong></p>
                                <p>Prezzo: €${parseFloat(r.price_per_night).toFixed(2)}</p>
                                <p>Stato: ${stato}</p>
                                <div class="mt-2">
                                    <button class="btn btn-danger btn-sm btn-elimina" data-id="${r.id}">Elimina</button>
                                </div>
                            </div>
                        </div>`;

                    $('#cardContainer').append(nuovaCard);

                    // Reset campi
                    $('input[name="name"]').val('');
                    $('input[name="price_per_night"]').val('');
                },
                error: function() { console.log('Errore durante l\'inserimento'); }
            });
        });

    </script>
@endsection
