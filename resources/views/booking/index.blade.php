@extends('layouts.app')
@section('content')
    <div class="column is-9">
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">
                    Booking
                </p>
            </div>
            <div class="card-content table__wrapper">
                <a href="{{ route('booking.create') }}"class="button is-light fa fa-plus"></a>
                <table class="table is-stripped pricing__table" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Tanggal Pesan</th>
                            <th>Nama Kereta</th>
                            <th>Stasiun Keberangkatan</th>
                            <th>Stasiun Kedatangan</th>
                            <th>Waktu Keberangkatan</th>
                            <th>Waktu Kedatangan</th>
                            <th>Jumlah Tiket</th>
                            <th>Tarif (Per Tiket)</th>
                            <th>Total Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $x = 1
                        @endphp
                        @foreach($data as $a)
                        <tr>
                            <th>{{ $x }}</th>
                            <td>{{ $a->nama_customer}}</td>
                            <td>{{ $a->tanggal_pesan}}</td>
                            <td>{{ $a->nama_kereta}}</td>
                            <td>{{ $a->stasiun_keberangkatan}}</td>
                            <td>{{ $a->stasiun_kedatangan}}</td>
                            <td>{{ $a->waktu_keberangkatan}}</td>
                            <td>{{ $a->waktu_kedatangan}}</td>
                            <td>{{ $a->jumlah_tiket}}</td>
                            <td>{{ $a->tarif_pertiket}}</td>
                            <td>{{ $a->total_bayar}}</td>
                            <td>
                                <div class="columns">
                                    <div class="column">
                                        <a href="booking/{{$a->id}}/edit" class="button is-warning fa fa-edit"></a>
                                    </div>
                                    <div class="column">
                                        <form action="booking/{{$a->id}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" name="button" class=" button is-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @php
                        $x++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
        <table widht="120%">
        <thead>
        <th width="40%"><a href="{{ URL::to('downloadExcel/xls') }}"><button class="button btn-warning">Download Excel xls</button></a></th>
		<th width="40%"><a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="button btn-warning">Download Excel xlsx</button></a></th>
        <th width="40%"><a href="{{ URL::to('downloadExcel/csv') }}"><button class="button btn-warning">Download CSV</button></a><th>
        </thead>
        </table>
        
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