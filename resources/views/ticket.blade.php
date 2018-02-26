@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Ticket
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ route('buy-ticket') }}" method="post">
          @csrf
          <div class="field">
            <label class="label">Nama Customer</label>
            <div class="control">
              <input type="text" name="nama_customer" class="input" value="{{$ticket->booking->nama_customer}}" disabled>
            </div>
          </div>
          <div class="field">
            <label class="label">Nama Kereta</label>
            <div class="control">
              <input class="input" type="text" name="nama_kereta" value="{{$ticket->booking->nama_kereta}}" disabled>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Stasiun Keberangkatan</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Stasiun Asal" value="{{ $ticket->booking->stasiun_kedatangan }}">
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <label class="label">Stasiun Tujuan</label>
                <div class="control">
                  <select class="input" type="text" placeholder="Stasiun Asal" name="stasiun_kedatangan" id="ke"></select>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Pergi</label>
                <div class="control">
                  <input class="input" type="date" name="waktu_keberangkatan">
                </div>
              </div>
            </div>

            <div class="column is-hidden" id="pulang">
              <div class="field">
                <label class="label">Pulang</label>
                <div class="control">
                  <input class="input" type="date" name="waktu_pulang">
                </div>
              </div>
            </div>

            <div class="column m-t-40">
              <div class="field">
                <div class="control">
                  <input id="pulangPergi" type="checkbox" class="switch is-rounded">
                  <label for="pulangPergi">Pulang Pergi?</label>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <div class="control">
                  <label class="label">Jumlah Tiket</label>
                  <input type="text" name="jumlah_tiket" class="input" max="4">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script type="text/javascript">

  </script>
@endpush

@push('style')
  <style media="screen">

  </style>
@endpush
