@extends('backend.layouts.master')

@section('title')
    QHN - Connection
@endsection

@section('content')
    <section class="pb-4">
        <!-- Panel -->
        <div class="card text-center">
            <a href="{{ $renderUrlLogin }}"><h3 class="card-header primary-color white-text">Connect New Account</h3></a>
        </div>
        <!-- Panel -->

    </section>

    <div class="container">
        @if(Session::has('getAccessTokenError'))
            <div class="alert alert-danger" role="alert" data-mdb-color="danger">
                {{ Session::get('getAccessTokenError')  }}
            </div>
        @endif

        <section class="mb-5">

            <div class="row border p-4 d-flex mb-4">
                <!-- Subheading -->
                @foreach($userSettings as $userSetting)
                    <div class="card" style="max-width: 22rem">
                        <img src="{{ $userSetting->fb_avatar }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $userSetting->fb_name }}</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="btn btn-primary btn-block">Button</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </section>
    </div>

@endsection
