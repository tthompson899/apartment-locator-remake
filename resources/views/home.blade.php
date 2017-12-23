@extends('layouts.app')

@section('content')
@include('partials.nav')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          {{-- import the carousel --}}
          @include('partials.carousel')
        </div>
    </div>
</div>
@endsection
