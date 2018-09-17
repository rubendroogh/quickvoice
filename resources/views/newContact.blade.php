@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Nieuw contact</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ Route('newContactPost') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="messageInput">Naam</label>
                    <input type="text" class="form-control" name="name">
                    <small class="form-text text-muted">Vergeet niet toestemming van het contact te vragen om opgeslagen te worden, in verband met de GDPR wetgeving.</small>
                </div>
                <div class="form-group">
                    <label for="messageInput">Telefoon nummer</label>
                    <input type="text" class="form-control" name="phone_number">
                    <small class="form-text text-muted">Telefoonnummer in het volgende formaat: .</small>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
        </div>
    </div>
</div>
@endsection
