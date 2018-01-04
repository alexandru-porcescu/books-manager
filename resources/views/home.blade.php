@extends('layouts.app')

@section('title', __('home.title'))

@section('js')
        <script src="@asset('/assets/home.min.js')"></script>
@endsection

@section('content')
            <div class="container" id="content">
                <h2 class="catchcopy">{{ __('home.catchcopy') }}</h2>
                <span class="lead">{{ __('home.lead') }}</span>
                <hr class="half">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-barcode icon" aria-hidden="true"></i>
                        <h3>{{ __('home.row.barcode.title') }}</h3>
                        <p>{{ __('home.row.barcode.text') }}</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-list icon" aria-hidden="true"></i>
                        <h3>{{ __('home.row.list.title') }}</h3>
                        <p>{{ __('home.row.list.text') }}</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-code icon" aria-hidden="true"></i>
                        <h3>{{ __('home.row.opensource.title') }}</h3>
                        <p>{{ __('home.row.opensource.text') }}</p>
                    </div>
                </div>
            </div>
@endsection
