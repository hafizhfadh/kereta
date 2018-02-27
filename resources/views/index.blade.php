@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Stations
            </p>
          </div>
        </div>
      </div>
      <div class="card-content">
        <div class="columns">
          <!-- <a href="{{ route('station.create') }}"class="button is-info">Create</a> -->
        </div>
        <div>
          <table class="table is-striped is-narrow is-hoverable is-fullwidth" id="datatable">
            <thead>
              <tr>
                <th><abbr title="Position">No</abbr></th>
                <th>Nama Stasiun</th>
                <th>Kode Stasiun</th>
                <th>Kota</th>
                <th>Alamat Stasiun</th>
                <th>No Telp Stasiun</th>
                <th>Action</th>
              </tr>
            </thead>
            <!-- <tbody>
              <?php $n=1 ?>
              @foreach($data as $a)
              <tr>
                <th>{{ $n }}</th>
                <td>{{ $a->nama_st }}</td>
                <td>{{ $a->kode_st}}</td>
                <td>{{ $a->kota}}</td>
                <td>{{ $a->alamat_st }}</td>
                <td>{{ $a->tlp_st }}</td>
                <td>
                  <div class="columns">
                    <div class="column">
                      <a href="station/{{$a->id}}/edit" class="button is-warning">Edit</a>
                    </div>
                    <div class="column">
                      <form action="station/{{$a->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" name="button" class="button is-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              <?php $n++ ?>
              @endforeach
            </tbody> -->
          </table>
        </div>
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

  </style>
@endpush