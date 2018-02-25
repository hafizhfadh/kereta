@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Edit Data Booking
              </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ url('booking/'.$data->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
          <div class="field">
            <label class="label">Nama Customer</label>
              <div class="control">
                <input class="input" type="text" value="{{ $data->nama_customer }}" name="nama_customer">
              </div>
            </div>

          <div class="columns">
            <div class="column">
                <div class="field">
                  <label class="label">Tanggal Pesan</label>
                  <div class="control">
                    <input class="input" type="date" value="{{ $data->tanggal_pesan }}" name="tanggal_pesan">
                  </div>
                </div>
            </div>
          </div>
        

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Nama Kereta</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->nama_kereta }}" name="nama_kereta">
                  </div>
                </div>
              </div>
            </div>

          <div class="columns">
          <div class="column">
                <div class="field">
                  <label class="label">Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->stasiun_keberangkatan }}" name="stasiun_keberangkatan">
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->stasiun_kedatangan }}" name="stasiun_kedatangan">
                  </div>
                </div>
                </div>
                </div>
                
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="time" value="{{ $data->waktu_keberangkatan }}" name="waktu_keberangkatan">
                  </div>
                </div>
                </div>
      
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Kedatangan</label>
                  <div class="control">
                    <input class="input" type="time" value="{{ $data->waktu_kedatangan }}" name="waktu_kedatangan">
                  </div>
                </div>
                </div>
                </div>
              
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Jumlah Tiket</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->jumlah_tiket }}" name="jumlah_tiket">
                  </div>
                </div>
            </div>
        
              <div class="column">
                <div class="field">
                  <label class="label">Tarif Per Tiket</label>
                  <div class="control">
                    <input class="input" type="text" value="{{ $data->tarif_pertiket }}" name="tarif_pertiket">
                  </div>
                </div>
              </div>  

            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Total Bayar</label>
                  <div class="control">
                    <input class="input" type="string" value="{{ $data->total_bayar }}" name="total_bayar">
                  </div>
                </div>
              </div>
              </div>              


              <div class="column m-t-30">
                <button class="button is-success fa fa-check"></button>
              </div>
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
