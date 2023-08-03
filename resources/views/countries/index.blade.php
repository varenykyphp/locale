@extends('varenykyAdmin::app')

@section('title', __('varenykyLocale::admin.countries.index.title'))

@section('content_header')
    <strong>{{ __('varenykyLocale::admin.countries.index.title') }}</strong>
@stop

@section('create-btn', route('admin.countries.create'))

@section('content')
    <div class="card border p-3">
        <table class="table">
            <thead>
                <tr class="">
                    <th>{{ __('varenyky::labels.name') }}</th>
                    <th>{{ __('varenykyLocale::labels.iso') }}</th>
                    <th width="350"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->iso }}</td>
                        <td align="right">
                            @include('varenykyAdmin::actions', ['route' => 'admin.countries', 'entity' => $country])
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">{{ __('varenyky::labels.empty') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
