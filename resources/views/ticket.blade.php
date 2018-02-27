@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Booking Ticket
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
                  <input class="input" type="text" placeholder="Stasiun Asal" value="{{ $ticket->booking->stasiun_kedatangan }}" disabled>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <label class="label">Stasiun Tujuan</label>
                <div class="control">
                  <input class="input" type="text" value="{{$ticket->booking->stasiun_kedatangan}}" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Pergi</label>
                <div class="control">
                  <input class="input" type="text" value="{{$ticket->booking->waktu_keberangkatan}}" disabled>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <label class="label">Pulang</label>
                <div class="control">
                  <input class="input" type="text" value="{{$ticket->booking->waktu_pulang}}" disabled>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <div class="control">
                  <label class="label">Jumlah Tiket</label>
                  <input type="text" class="input" value="{{$ticket->booking->jumlah_tiket}}" disabled>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Payments
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ route('buy-ticket') }}" method="post">
          @csrf
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Jumlah Tiket</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Stasiun Asal" value="{{ $ticket->booking->jumlah_tiket}}" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Harga Per Tiket</label>
            <div class="control">
              <input class="input" type="text" name="nama_kereta" value="{{ "Rp. ".number_format($a->tarif_pertiket,2,",",".") }}" disabled>
            </div>
          </div>
          <div class="field">
            <label class="label">Jumlah Pembayaran</label>
            <div class="control">
              <input type="text" class="input" value="{{ "Rp. ".number_format($price,2,",",".") }}" disabled>
            </div>
          </div>
          <div class="column">
              <div class="field">
                <div class="control">
                  <button class="button is-link"> </button>
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
