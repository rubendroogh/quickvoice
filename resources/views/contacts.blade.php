@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Contacten</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
				<thead>
					<tr>
						<th scope="col">Naam</th>
						<th scope="col">Telefoon nummer</th>
						<th scope="col">Opties</th>
    				</tr>
  				</thead>
  				<tbody>
  					@foreach($contacts as $contact)
	    				<tr>
							<th scope="row">{{ $contact->name }}</th>
							<td>{{ $contact->phone_number }}</td>
							<td></td>
	    				</tr>
    				@endforeach
    				<tr>
    					<td>
    						<a href="{{ Route('newContact') }}">+ Voeg nieuw contact toe...</a>
    					</td>
    					<td></td>
    					<td></td>
    				</tr>
  				</tbody>
			</table>
        </div>
    </div>
</div>
@endsection
