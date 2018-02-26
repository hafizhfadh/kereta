@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless">
            <div class="column is-6">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">
                        {!! $chart->html() !!}
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
  {!! Charts::scripts() !!}
  {!! $chart->script() !!}
@endpush
