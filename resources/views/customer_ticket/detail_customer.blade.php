@extends('layouts.app')

@section('content')
        <a class="navbar-brand" href="{{ route('customer_ticket.index') }}">Back</a>

<h1>Showing {{ $customer_ticket->id_booking }}</h1>

<strong>Dibuat:</strong> {{ $customer_ticket->created_at }}<br>

    <div class="jumbotron text-center">
        <p>
            <strong>No:</strong> {{ $customer_ticket->id }}<br>
            <strong>Booking:</strong> {{ $customer_ticket->id_booking }}<br>
        </p>
    </div>
@stop
