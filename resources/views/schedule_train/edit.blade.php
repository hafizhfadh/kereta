@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Edit Data Train Schedule
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
        <form class="form-vertical" action="{{ url('train_schedule/'.$data->id) }}" method="post">
        {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
          <div class="field">
            <label class="label">Nama Kereta</label>
              <div class="control">
                <input class="input" type="text" value="{{ $data->nama_kereta }}" name="nama_kereta">
              </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Stasiun keberangkatan</label>
                <div class="control">
                  <input class="input" type="text" value="{{ $data->stasiun_keberangkatan }}" name="stasiun_keberangkatan">
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">waktu keberangkatan</label>
                <div class="control">
                  <input class="input" type="time" value="{{ $data->waktu_keberangkatan }}" name="waktu_keberangkatan" require>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">stasiun kedatangan</label>
                <div class="control">
                  <input class="input" name="stasiun_kedatangan" value="{{ $data->stasiun_kedatangan }}"></input>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">waktu kedatangan</label>
                <div class="control">
                  <input class="input" type="time" value="{{ $data->waktu_kedatangan }}" name="waktu_kedatangan" require>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">waktu yang ditempuh</label>
                <div class="control">
                  <input class="input" type="time" value="{{ $data->waktu_yang_ditempuh }}" name="waktu_yang_ditempuh" require>
                </div>
              </div>
            </div>
          </div>
          <div class="columns m-t-30 is-gapless">
            <div class="column">
              <a href="{{ route('train_schedule.index') }}"class="button is-light fa fa-home"></a>
            </div>
            <div class="column">
              <button class="button is-success fa fa-check" type="submit"></button>
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
