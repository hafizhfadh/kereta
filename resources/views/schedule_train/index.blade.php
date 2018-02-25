@extends('layouts.app')

@section('content')
<div class="column">
    <div class="card">
        <div calss="card-header">
            <div class="column">
                <p class="card-header-title">
                 Train Shcedule
                </p>
            </div>
        </div>
        <div class="card-content">
            <table class="table is-stripped" id="datatable">
                <thead>
                    <tr>
                        <th><abbr title="No KA">No KA</abbr></th>
                        <th>Nama Kereta</th>
                        <th><abbr title="Stasiun Keberangkatan">Stasiun Keberangkatan</abbr></th>
                        <th><abbr title="Waktu Keberangkatan">Waktu Keberangkatan</abbr></th>
                        <th><abbr title="Stasiun Kedatangan">Stasiun Kedatangan</abbr></th>
                        <th><abbr title="Waktu Kedatangan">Waktu Kedatangan</abbr></th>
                        <th><abbr title="Waktu Yang Ditempuh">Waktu Yang Ditempuh</abbr></th>
                        <th><abbr title="action">Action</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $x = 1
                    @endphp
                    @foreach($data as $a)
                    <tr>
                        <th>{{ $x }}</th>
                        <td>{{ $a->nama_kereta }}</td>
                        <td>{{ $a->stasiun_keberangkatan }}</td>
                        <td>{{ $a->waktu_keberangkatan }}</td>
                        <td>{{ $a->stasiun_kedatangan }}</td>
                        <td>{{ $a->waktu_kedatangan }}</td>
                        <td>{{ $a->waktu_yang_ditempuh }}</td>
                        <td>
                            <div class="columns">
                                <div class="column">
                                    <a href="train_schedule/{{$a->id}}/edit" class="button is-warning fa fa-edit"></a>
                                </div>
                                <div class="column">
                                    <form action="train_schedule/{{$a->id}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" name="button" class="button is-danger fa fa-trash"></button>
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
                    <a href="{{ route('train_schedule.create') }}" class="button fa fa-plus"></a>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
  <script type="text/javascript">
  $(document).ready( function() {
    $('#datatable').dataTable();
  } );
  </script>
@endpush