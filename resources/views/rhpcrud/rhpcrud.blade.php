@extends('../layout.apprhp');
@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
          <h3 class="panel-title">RHP Crud</h3>
    </div>
    <div class="panel-body">
        <h3>List</h3>
        @if (count($listR)>0)
        <ul>
            @foreach ($listR as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        @endif
        

    </div>
</div>
@endsection