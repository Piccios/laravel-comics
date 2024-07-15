@extends('layout.app')
@section('page-title', 'Homepage')

@section('header')
    <section class="container-header">

    </section>

@section('jumbo-tron')
    <section class="container-jumbo">
        <div><p>current series</p></div>
    </section>
@endsection

@section('main-content')
    <section class="list-products">
        @foreach ($comics as $comic)
    <article class="series_comics">
            <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
            <p>
                {{$comic['title']}}
            </p>
        </article>
        @endforeach
        <div><p>Load more</p></div>
    </section>
@endsection



