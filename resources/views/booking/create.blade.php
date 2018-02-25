@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Create Data Booking
            </p>
          </div>
        </div>
      </div>
      <div class="card-content">
        <div class="columns">
          <div class="column">
            <a href="{{ route('booking.index') }}"class="button is-light fa fa-home"></a>
        </div>
        </div>
        <form class="form-vertical" action="{{ route('booking.store') }}" method="post">
          {{ csrf_field() }}
          <div class="field">
            <label class="label">Nama Customer</label>
              <div class="control">
                <input class="input" type="string" placeholder="Nama Customer" name="nama_customer">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Tanggal Pesan<label>
                  <div class="control">
                    <input class="input" type="date" placeholder="Tanggal Pesan" name="tanggal_pesan">
                  </div>
                </div>
              </div>
              </div>
              <div class="columns">
                <div class="column">
                <div class="field">
                  <label class="label">Nama Kereta</label>
                  <div class="control">
                    <input class="input" type="string" placeholder="Nama Kereta" name="nama_kereta">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="string" placeholder="Stasiun Keberangkatan" name="stasiun_keberangkatan"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                  <input class="input" type="string" placeholder="Stasiun Kedatangan" name="stasiun_kedatangan"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Keberangkatan</label>
                  <div class="control">
                  <input class="input" type="time" placeholder="Waktu Keberangkatan" name="waktu_keberangkatan"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Kedatangan</label>
                  <div class="control">
                  <input class="input" type="time" placeholder="Waktu Kedatangan" name="waktu_kedatangan"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Jumlah Tiket</label>
                  <div class="control">
                  <input class="input" type="string" placeholder="Jumlah Tiket" name="jumlah_tiket"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Tarif (Per Tiket)</label>
                  <div class="control">
                  <input class="input" type="string" placeholder="Tarif (Per Tiket)" name="tarif_pertiket"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Total Bayar</label>
                  <div class="control">
                  <input class="input" type="string" placeholder="Total Bayar" name="total_bayar"></textarea>
                  </div>
                </div>
              </div>
            </div>
              <div class="column">
                <div class="m-t-30">
                  <button class="button is-link fa fa-save" type="submit"></button>
                </div
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
