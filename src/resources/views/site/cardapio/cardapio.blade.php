@extends('layout.site')

@section('content')



    @include('site.cardapio.pagetitle')
    @include('site.cardapio.portifolio')
   
   

@push('plugins')
<script src="{{ asset('davilla/js/mixitup.js') }}"></script>
@endpush

@endsection
