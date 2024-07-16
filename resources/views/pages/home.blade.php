@extends('layout.app')
@section('page-title', 'Homepage')


@section('jumbo-tron')
    <section class="container-jumbo">
    </section>
@endsection


@section('info')

<section class="container-site-pages">
    <ul>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            digital comics
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            dc merchandise
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            subscription
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            comic shop locator
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            dc power visa
        </li>
    </ul>

</section>

@endsection

