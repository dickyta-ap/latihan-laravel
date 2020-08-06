@extends('layouts.master')

@section('content')
    <h2> INI HALAMAN CREATE </h2>
@endsection

@push('scripts')
<script>
  var wrappers = document.getElementsByClassName("wrappers");
  var items = ["ini", "contoh"];

  console.log("ini items: ", items)
</script>
@endpush