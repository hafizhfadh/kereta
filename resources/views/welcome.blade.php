@extends('layouts.app')

@section('content')
  <section>
    <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="https://images.pexels.com/photos/433301/pexels-photo-433301.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Adventrip Situs Pemesanan Tiket Kereta Online</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/78791/railway-bernina-railway-lagalb-bernina-78791.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Satu Solusi Untuk Perjalanan Kereta Anda</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/221281/pexels-photo-221281.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Dapatkan Diskon, Potongan Harga, dan Promo</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://images.pexels.com/photos/159252/bernina-railway-sweeping-viaduct-brusion-bernina-159252.jpeg?w=1290&h=970&auto=compress&cs=tinysrgb" alt="" width="640" height="310" />
          <div class="title">Pesan Tiket Kereta Tanpa Repot</div>
        </div>
      </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </section>

  <section class="columns m-t-20">
    <div class="column is-11">
      <div class="card">
        <div class="card-header">
          <h3 class="card-header-title">Booking Ticket</h3>
        </div>
        <div class="card-content">
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Dari</label>
                <div class="control">
                  <select class="input" type="text" placeholder="Stasiun Asal" name="stasiun_keberangkatan" id="dari"></select>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <label class="label">Ke</label>
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
                  <input class="input" type="date">
                </div>
              </div>
            </div>

            <div class="column is-hidden" id="pulang">
              <div class="field">
                <label class="label">Pulang</label>
                <div class="control">
                  <input id="datepickerDemo" class="input" type="date" placeholder="Tahun/Bulan/Tanggal">
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
                <label class="label">Penumpang</label>
                <div class="control">
                  <div class="select">
                    <select>
                      <option>Dewasa +3thn</option>
                      <option>Bayi -3thn</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="field">
                <label class="label">Pencarian Tiket</label>
                <div class="control">
                  <button class="button is-link">Cari</button>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script type="text/javascript">
  document.getElementById("pulangPergi").addEventListener ("click", change);
      function change() {
              var nav = document.getElementById("pulang");
              var className = nav.getAttribute("class");
              if(className == "column is-hidden") {
                  nav.className = "column is-active";
              } else {
                  nav.className = "column is-hidden";
              }
      }
    $('#dari').select2({
      placeholder: 'Cari',
      ajax: {
        url: '/api/schedule/search',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
              return {
                text: item.stasiun_keberangkatan,
                id: item.stasiun_keberangkatan
              }
            })
          };
        },
        cache: true
      }
    });
    $('#ke').select2({
      placeholder: 'Cari',
      ajax: {
        url: '/api/schedule/search',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
              return {
                text: item.stasiun_keberangkatan,
                id: item.stasiun_keberangkatan
              }
            })
          };
        },
        cache: true
      }
    });
  </script>
@endpush
