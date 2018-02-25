@extends('layouts.app')

@section('content')
  <div class="column">
      <div class="columns is-responsive is-marginless is-centered">
          <div class="column">

            {{-- @if ($errors->has('train_id'))
              <article class="message is-danger is-small">
                <div class="message-body">
                  {{$errors->first('train_id')}}
                </div>
              </article>
            @endif --}}

              <nav class="card">
                  <header class="card-header">
                      <p class="card-header-title">
                          Tambah Data Kereta
                      </p>
                  </header>

                  <div class="card-content">
                    <form action="{{ route('train.store') }}" method="post">
                      @csrf
                      <div class="field">
                        <label class="label">Nama Kereta</label>
                        <div class="control">
                          <input class="input" type="text" name="train_name">
                        </div>
                        @if ($errors->has('train_name'))
                          <p class="help is-danger">{{$errors->first('train_name')}}</p>
                        @endif
                      </div>

                      <div class="columns">

                        <div class="column">
                          <div class="field">
                            <label class="label">Jumlah Gerbong Eksekutif</label>
                            <div class="control">
                              <input class="input" type="number" name="exec_seat">
                            </div>
                            @if ($errors->has('exec_seat'))
                              <p class="help is-danger">{{$errors->first('exec_seat')}}</p>
                            @endif
                          </div>
                        </div>

                        <div class="column">
                          <div class="field">
                            <label class="label">Jumlah Gerbong Bisnis</label>
                            <div class="control">
                              <input class="input" type="number" name="bus_seat">
                            </div>
                            @if ($errors->has('bus_seat'))
                              <p class="help is-danger">{{$errors->first('bus_seat')}}</p>
                            @endif
                          </div>
                        </div>

                        <div class="column">
                          <div class="field">
                            <label class="label">Jumlah Gerbong Ekonomi</label>
                            <div class="control">
                              <input class="input" type="number" name="eco_seat">
                            </div>
                            @if ($errors->has('eco_seat'))
                              <p class="help is-danger">{{$errors->first('eco_seat')}}</p>
                            @endif
                          </div>
                        </div>

                      </div>

                      <div class="field">
                        <label class="label">Harga Tiket</label>
                        <div class="control">
                          <input class="input" type="number" name="price">
                        </div>
                        @if ($errors->has('price'))
                          <p class="help is-danger">{{$errors->first('price')}}</p>
                        @endif
                      </div>

                      <div class="field is-grouped">
                        <div class="control">
                          <button class="button is-link" type="submit">Submit</button>
                        </div>
                        <div class="control">
                          <a class="button is-text" href="{{ route('train.index') }}">Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
              </nav>
          </div>
      </div>
  </div>
@endsection
