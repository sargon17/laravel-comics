@extends('../layouts.detail')
{{--------------------------------------------------------------------------}}

@section('title')
    {{$comics[$id]['title']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('series')
    {{$comics[$id]['series']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('price')
    {{$comics[$id]['price']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('description')
    {{$comics[$id]['description']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('artists')
    @foreach ($comics[$id]['artists'] as $artist)
        <span class="artist">{{ $artist }}</span>,
    @endforeach
@endsection
{{--------------------------------------------------------------------------}}

@section('writers')
    @foreach ($comics[$id]['writers'] as $writer)
        <span class="artist">{{ $writer }}</span>,
    @endforeach
@endsection
{{--------------------------------------------------------------------------}}

@section('thumb')
    {{$comics[$id]['thumb']}}
@endsection
{{--------------------------------------------------------------------------}}

@section('sale_date')
    {{$comics[$id]['sale_date']}}
@endsection
{{--------------------------------------------------------------------------}}
