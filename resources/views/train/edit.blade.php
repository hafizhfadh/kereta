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
                    <form action="{{ route('train.update', $train->id) }}" method="post">
                      @csrf
                      @method('put')
                      <div class="field">
                        <label class="label">Nama Kereta</label>
                        <div class="control">
                          <input class="input" type="text" name="train_name" value="{{ $train->train_name }}">
                        </div>
                        @if ($errors->has('train_name'))
                          <p class="help is-danger">{{$errors->first('train_name')}}</p>
                        @endif
                      </div>

                      <div class="columns">
                        <div class="column">
                          <div class="field">
                            <label class="label">Jumlah Gerbong</label>
                            <div class="control">
                              <input class="input" type="number" name="wagon">
                            </div>
                            @if ($errors->has('wagon'))
                              <p class="help is-danger">{{$errors->first('wagon')}}</p>
                            @endif
                          </div>
                        </div>

                        <div class="column">
                          <div class="field">
                            <label class="label">Jumlah Kursi (Per-Gerbong)</label>
                            <div class="control">
                              <input class="input" type="number" name="seat">
                            </div>
                            @if ($errors->has('seat'))
                              <p class="help is-danger">{{$errors->first('seat')}}</p>
                            @endif
                          </div>
                        </div>

                        <div class="column">
                          <div class="field">
                            <label class="label">Class</label>
                            <div class="control">
                              <div class="select">
                                <select name="class">
                                  @foreach ($enum as $e)
                                    <option value="{{ $e }}">{{ $e }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            @if ($errors->has('class'))
                              <p class="help is-danger">{{$errors->first('class')}}</p>
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
