@extends('layouts.app')

@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <h4 class="card-header-title">AAAA</h4>
      </div>
      <div class="card-content">
        <table class="table table-bordered table-responsive" style="margin-top: 10px" id="datatable">
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
                    <td>{{ $customer_ticket->booking->nama_customer }}</td>
                    <td>{{ $customer_ticket->token }}</td>
                    <td>{{ $customer_ticket->created_at }}</td>
                    <td>
                        <a href="{{ route('customer_ticket.show', $customer_ticket->id) }}" class="button">Detail</a>
                        <form action="{{route('customer_ticket.destroy', $customer_ticket->id)}}" method="post">
                        {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="button" type="Delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
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
