@extends('layouts.app')
@section('content')
<div class="column">
  <div class="card">
  <div class="card-header">
    <div class="coloumns">
      <div class="column">
        <p class="card-header-title">
        Customer
        </p>    
      </div>
    </div>
  </div>

  <div class="card-content">
    <div class="columns">
      <a href="{{ route('customer.create') }}"class="button is-light fa fa-plus"></a>
    </div>

    <table class="table is-striped is-narrow is-hoverable is-fullwidth" id="datatable">
      <thead>
        <tr>
          <th><abbr title="Position">No</abbr></th>
          <th><abbr title="no_id">No Identitas</abbr></th>
          <th><abbr title="titel">Titel</abbr></th>
          <th><abbr title="nama_customer">Nama Customer</abbr></th>
          <th><abbr title="telp_customer">No Telphone</abbr></th>
          <th></th>
        </tr>
      </thead>
      
      <tbody>
        @php
        $x = 1
        @endphp
        @foreach($data as $a)
        <tr>
          <th>{{ $x }}</th>
          <td>{{ $a->no_id }}</td>
          <td>{{ $a->titel }}</td>
          <td>{{ $a->nama_customer}}</td>
          <td>{{ $a->telp_customer}}</td>
          <td>
            <div class="columns">
              <div class="column">
                <a href="customer/{{$a->id}}/edit" class="button is-warning fa fa-edit"></a>
              </div>
              <div class="column">
                <form action="customer/{{$a->id}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete">
                <button type="submit" name="button" class="button is-danger"><i class="fa fa-trash"></i></button>
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
  .pricing__table{
    width: 100%;
    overflow-x: auto;
  }
    
    .table__wrapper {
      overflow-x: auto;
    }
    </style>
@endpush