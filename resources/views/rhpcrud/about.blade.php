@extends('layout.apprhp');
@section('content')

<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">About</h3>
      </div>
      <div class="panel-body">
            {{-- Truyền theo with --}}
            {{-- <h3>{{ $name }}</h3>   --}}

            {{-- Truyền theo compact --}}
            <h3>{{ $nameR}}</h3>

      </div>
</div>


@endsection

