@extends('layouts.app')

@section('content')
    <div class="column">
        <div class="columns is-responsive is-marginless is-centered">
            <div class="column">
              @if ($errors->has('success'))
                <article class="message is-success">
                  <div class="message-body">
                    {{$errors->first('success')}}
                  </div>
                </article>
              @endif
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                        <a href="{{ route('train.create') }}" class="button is-default m-t-10 m-r-10"><i class="fa fa-plus"></i></a>
                    </header>

                    <div class="card-content table__wrapper">
                      <table class="table is-striped is-narrow is-hoverable is-fullwidth pricing__table" id="datatable">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Kereta</th>
                            <th>Jumlah Gerbong</th>
                            <th>Jumlah Kursi</th>
                            <th>Jenis Kelas Tersedia</th>
                            <th>Harga</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $x = 1
                          @endphp
                          @foreach ($train as $a)
                            <tr>
                              <td>{{ $x }}</td>
                              <td>{{ $a->train_name }}</td>
                              <td>{{ $a->wagons[0]->train_id }}</td>
                              <td>{{ $a->wagons[0]->train_id }}</td>
                              <td>{{ $a->wagons[0]->class }}</td>
                              <td>{{ "Rp. ".number_format($a->wagons[0]->price,2,",",".") }}</td>
                              <td>
                                <div class="columns is-multiline is-gapless">
                                  <div class="column is-12">
                                    <a href="{{ route('train.edit', $a->id) }}" class="button is-warning is-block"><i class="fa fa-edit"></i></a>
                                  </div>
                                  <div class="column is-12 m-t-10">
                                    <a href="#" class="button is-danger is-block" onclick="event.preventDefault();document.getElementById('delete-form').submit();"><i class="fa fa-trash "></i></a>

                                    <form id="delete-form" action="{{ route('train.destroy', $a->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                        @method('delete')
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
                </nav>
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