@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-responsive" style="margin-top: 10px">
        <thead>
            <th>NO</th>
            <th>Booking</th>
            <th>Token</th>
            <th>CREATED AT</th>
            <th colspan="2">ACTION</th>
        </thead>
        <tbody>
            @foreach($customer_tickets as $customer_ticket)
            <tr>
                <td>{{ $customer_ticket->id }}</td>
                <td>{{ $customer_ticket->id_booking }}</td>
                <td>{{ $customer_ticket->remember_token }}</td>
                <td>{{ $customer_ticket->created_at }}</td>
                <td>
                    <a href="{{ route('customer_ticket.show', $customer_ticket->id) }}" class="btn">Detail</a>
                    <form action="{{route('customer_ticket.destroy', $customer_ticket->id)}}" method="post">
                    {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn" type="Delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

@endsection

@push('scripts')
  <script type="text/javascript">
  $(document).ready( function() {
    $('#datatable').dataTable( {
      "LengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );
  } );
  </script>
@endpush

@push('style')
  <style media="screen">
    .pricing__table {
        width: 100%;
        overflow-x: auto;
    }

    .table__wrapper {
        overflow-x: auto;
    }
  </style>
@endpush