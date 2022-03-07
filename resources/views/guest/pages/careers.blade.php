@extends('guest.layouts.app')

@section('content')
    <div id="careers">
        <div class="content">
            <div class="hero-section">
                @include('guest.snippets.hero-shapes')
                @include('guest.layouts.header')
                <div class="text-content">
                    <p>CAREERS</p>
                    <h3 class="mb5 font-bold">The future is here!
                        <br>Future where work is fun.
                    </h3>
                    <p>We're looking for front-end, back-end, blockchain developers. Game engineers, designers or 3D artist, and
                        adventurers, builders, thinkers, and missionaries to join our team and our powerful mission to bring the
                        decentralized gaming and metaverse to the entire planet.</p>
                    <div class="btn-container mt5">
                        <a href="https://angel.co/" target="_blank">
                            <img class="button_svg" src="{{ url('images/button_svg.svg') }}" alt="button"/>
                            <p class="button_text">APPLY TODAY</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="second-section">
                <div class="shape-box-1"></div>
                <div class="shape-box-2"></div>
                <img id="img_2" src="{{ url('images/automata_2.png') }}" alt="">
                <img id="img_3" src="{{ url('images/Polygon.png') }}" alt="">
                <div class="text-content">
                    <h3 class="mb5 font-bold">Perks and Benefits<br>
                        Development</h3>
                    <p>Automata offers a wider range of outstanding benefits that allow each employee to tailor a benefits package that meets his or her specific needs.</p>
                    <p>We work in a dynamic environment and all of our employees our guaranteed to acquire new skills and improve their personal development. We offer competitive salary and lot of time off.</p>
                    <img id="img_1" src="{{ url('images/layer_4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
    {{-- <script src="{{ asset('js/pages/guests/buynow/index.js') }}"></script> --}}
@stop
