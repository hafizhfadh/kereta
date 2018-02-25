@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Edit Data
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ route('customer.update', $data->id) }}" method="post">
        {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
          <div class="field">
            <label class="label">Nomor Identitas</label>
              <div class="control">
                <input class="input" type="integer" value="{{ $data->no_id }}" name="no_id">
              </div>
            </div>

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Titel</label>
                  <div class="control">
                    <div class="select">
                    <select value="{{ $data->titel }}" name="titel">
                        <option value="tuan">Tuan</option>
                        <option value="nyonya">Nyonya</option>
                        <option value="nona">Nona</option>
                    </select>
                    </div>
                 </div>
                </div>
              </div>
              </div>
          
              <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Nama Customer</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->nama_customer }}" name="nama_customer">
                  </div>
                </div>
              </div>
              </div>

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">No Telephone</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->telp_customer }}" name="telp_customer">
                  </div>
                </div>
              </div>

              <div class="column m-t-30">
                <button type="submit" class="button is-success">Done</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script type="text/javascript">

  </script>
@endpush

@push('style')
  <style media="screen">

  </style>
@endpush
