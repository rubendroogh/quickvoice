@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ Route('sendSMS') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="messageInput">Bericht</label>
                    <input type="text" class="form-control" name="message" placeholder="Voer bericht in">
                </div>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
        </div>
    </div>
</div>
@endsection
