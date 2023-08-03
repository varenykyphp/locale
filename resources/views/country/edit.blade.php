@extends('varenykyAdmin::app')

@section('title', __('varenykyLocale::admin.country.edit.title'))

@section('content_header')
    <strong>{{ __('varenykyLocale::admin.country.edit.title') }}</strong>
@stop

@section('save-btn', route('admin.country.update', $country))
@section('back-btn', route('admin.country.index'))

@section('content')
    <form action="{{ route('admin.country.update', $country) }}" method="POST" id="nopulpForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card border p-3">
                    <div class="form-group mb-3">
                        <label for="page_name"
                            class="@if ($errors->has('name')) text-danger @endif">{{ __('varenyky::labels.name') }}</label>
                        <input id="page_name" type="text" placeholder="{{ __('varenyky::labels.name') }}..."
                            name="name" class="form-control @if ($errors->has('name')) is-invalid @endif"
                            value="{{ $country->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="iso"
                            class="@if ($errors->has('iso')) text-danger @endif">{{ __('varenykyLocale::labels.iso') }}</label>
                        <input id="iso" type="text" placeholder="{{ __('varenykyLocale::labels.iso') }}..."
                            name="iso" class="form-control @if ($errors->has('name')) is-invalid @endif"
                            value="{{ $country->iso }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
