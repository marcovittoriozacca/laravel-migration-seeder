@extends('layouts.app')

@section('title', 'Home')

@section('main')
{{-- dynamic content --}}
<table class="table table-striped">
    <thead class="text-center">
        <tr>
            @foreach ($columns as $col)
            @if ($loop->remaining >= 2 )
            <th scope="col">
                {{$col}}
            </th>
            @endif
            @endforeach
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($trains as $train)            
        <tr>
          <th scope="row">{{$train['id']}}</th>
          @foreach ($train->toArray() as $train_info)
          @if (!$loop->first && $loop->remaining >= 2)    
          <td>
            {{$train_info}}
          </td>
          @endif
          @endforeach
        </tr>
        @endforeach
    </tbody>
  </table>


  <h1>Treni in partenza da oggi in poi</h1>


<table class="table table-striped">
    <thead class="text-center">
        <tr>
            @foreach ($columns as $col)
            @if ($loop->remaining >= 2 )
            <th scope="col">
                {{$col}}
            </th>
            @endif
            @endforeach
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($today_trains as $train)            
        <tr>
            <th scope="row">{{$train['id']}}</th>
            @foreach ($train->toArray() as $train_info)
            @if (!$loop->first && $loop->remaining >= 2)    
            <td>
            {{$train_info}}
            </td>
            @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>

@endsection