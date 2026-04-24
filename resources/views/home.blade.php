@extends('layouts.app')

@section('content')
    <div class="container">
        <header class="radici-header">
            <h2 class="radici-title">Bentornato, {{Auth::user()->name}}. La tua chiave per il relax è attiva.</h2>
            <span class="radici-subs">Siamo felici di averti di nuovo con noi. Che tu sia qui per un viaggio d'affari o per un weekend di totale distensione, 
                tutto è pronto per rendere il tuo soggiorno impeccabile. La tua stanza, i nostri servizi e il nostro staff sono a tua completa disposizione. 
                Da dove preferisci iniziare oggi?</span>
        </header>
        <main class="radici-main">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/hotel.jpg" class="image-top-left" alt="The hotel" loading="lazy">
                    <div class="span-top-right">
                        <h4 class="span-title">Gestisci i tuoi dettagli senza pensieri.</h4>
                        <span class="card-text">Controlla lo stato della tua prenotazione, visualizza il numero della tua camera o richiedi un check-out posticipato 
                            con un semplice click. Qui puoi anche monitorare i tuoi consumi o prenotare un tavolo al nostro ristorante per questa sera. 
                            La tua comodità è la nostra priorità assoluta.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="span-top-left">
                        <h4 class="span-title">Personalizza la tua esperienza.</h4>
                        <span class="card-text">Vuoi un massaggio rilassante nella SPA o preferisci un tour guidato privato tra le bellezze della zona? Accedi 
                            alla nostra selezione di esperienze esclusive riservate ai nostri ospiti registrati. Lasciati ispirare dai nostri consigli e rendi 
                            il tuo soggiorno davvero indimenticabile.</span>
                    </div>
                    <img src="images/second.jpg" class="image-top-right" alt="The hotel" loading="lazy">
                </div>
            </div>

            <div class="row-second">
                <div class="column">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Suite di Design</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Comfort e Stile</h6>
                            <p class="card-text">Spazi accoglienti e arredi ricercati per garantirti il massimo del relax ogni notte.</p>
                            <a href="{{url('/room')}}" class="card-link">Scopri le camere</a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Vivi il Luogo</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Emozioni Locali</h6>
                            <p class="card-text">Tour esclusivi e attività curate per scoprire i tesori nascosti intorno a noi.</p>
                            <a href="{{url('/experience')}}" class="card-link">Esplora i tour</a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tutto per Te</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Relax & Wellness</h6>
                            <p class="card-text">Dalla SPA al ristorante gourmet: ogni nostra attenzione è dedicata al tuo benessere.</p>
                            <a href="{{url('/service')}}" class="card-link">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
