@extends('layouts.app')
@section('content')
  <div class="column">
    <div class="card">
      <div class="card-header">
        <div class="columns">
          <div class="column">
            <p class="card-header-title">
              Create Schedule Trains
            </p>
          </div>
        </div>
      </div>

      <div class="card-content">
      <div class="columns">
        <div calss="column">
          <a herf="{{ route('train_schedule.index') }}"class="button is-light fa fa-home"></a>
          </div>
          </div>
        <form class="form-vertical" action="{{ route('train_schedule.store') }}" method="post">
      {{ csrf_field()}}
          <div class="field">
            <label class="label">Nama Kereta</label>
              <div class="control">
                <select class="input" type="text" name="nama_kereta" id="trains"></select>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Keberangkatan</label>
                  <div class="control">
                    <select class="input" type="text" placeholder="Stasiun Keberangkatan" name="stasiun_keberangkatan" id="departure_station"></select>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Keberangkatan</label>
                  <div class="control">
                    <input class="input" type="time" name="waktu_keberangkatan">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Stasiun Kedatangan</label>
                  <div class="control">
                    <select class="input" type="text" placeholder="Stasiun Kedatangan" name="stasiun_kedatangan" id="arived_station"></select>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Kedatangan</label>
                  <div class="control">
                    <input class="input" type="time" name="waktu_kedatangan">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label class="label">Waktu Perjalanan</label>
                  <div class="control">
                    <input class="input" type="time" name="waktu_yang_ditempuh">
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

@push('scripts')
  <script type="text/javascript">
  $('#trains').select2({
    placeholder: 'Cari',
    ajax: {
      url: '/api/train/search',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.train_name,
              id: item.train_name
            }
          })
        };
      },
      cache: true
    }
  });
  $('#arived_station').select2({
    placeholder: 'Cari',
    ajax: {
      url: '/api/station/search',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.nama_st,
              id: item.nama_st
            }
          })
        };
      },
      cache: true
    }
  });
  $('#departure_station').select2({
    placeholder: 'Cari',
    ajax: {
      url: '/api/station/search',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.nama_st,
              id: item.nama_st
            }
          })
        };
      },
      cache: true
    }
  });
  </script>
@endpush

@push('style')
  <style media="screen">

  </style>
@endpush
