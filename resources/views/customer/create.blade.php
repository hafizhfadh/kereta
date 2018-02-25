@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Create Data
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
      <div class="columns">
      <div class="column">
      <a href="{{ route('customer.index') }}" class="button is-light fa fa-home"></a>
      </div>
      </div>
      <form class="form-vertical" action="{{ route('customer.store') }}" method="post">
      {{ csrf_field() }}
        <div class="field">
          <label class="label">Nomor Identitas</label>
            <div class="control">
              <input class="input" type="integer" placeholder="Nomor Identitas" name="no_id">
            </div>
          </div>

          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Titel</label>
                <div class="control">
                  <div class="select">
                  <select name="titel" type="enum">
                      <option value="Tuan">Tuan</option>
                      <option value="Nyonya">Nyonya</option>
                      <option value="Nona">Nona</option>
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
                  <input class="input" type="string" placeholder="Nama Customer" name="nama_customer">
                </div>
              </div>
            </div>
            </div>

          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">No Telephone</label>
                <div class="control">
                  <input class="input" type="text" placeholder="No Telephone" name="telp_customer"maxlength="10">
                </div>
              </div>
            </div>

                    <div class="column m-t-30">
                <button type="submit" class="button is-link fa fa-save"></button>
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
