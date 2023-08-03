@extends('varenykyAdmin::app')

@section('title', __('varenykyLocale::admin.countries.create.title'))

@section('content_header')
    <strong>{{ __('varenykyLocale::admin.countries.create.title') }}</strong>
@stop

@section('save-btn', route('admin.countries.store'))
@section('back-btn', route('admin.countries.index'))

@section('content')

        <form action="{{ route('admin.countries.store') }}" method="POST" id="nopulpForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card border p-3">
                        <div class="form-group mb-3">
                            <label for="name"
                                class="@if ($errors->has('name')) text-danger @endif">{{ __('varenyky::labels.name') }}</label>
                            <input id="name" type="text" placeholder="{{ __('varenyky::labels.name') }}..."
                                name="name" class="form-control @if ($errors->has('name')) is-invalid @endif"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="iso"
                                class="@if ($errors->has('iso')) text-danger @endif">{{ __('varenykyLocale::labels.iso') }}</label>
                            <input id="iso" type="text" placeholder="{{ __('varenykyLocale::labels.iso') }}..."
                                name="iso" class="form-control @if ($errors->has('iso')) is-invalid @endif"
                                value="{{ old('iso') }}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection
