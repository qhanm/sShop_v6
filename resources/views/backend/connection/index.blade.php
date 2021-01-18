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
                    <div class="col-md-3 mb-3">
                        <section>
                            <div class="card">
                                <img class="card-img-top" src="{{ $userSetting->fb_avatar }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><strong>{{ $userSetting->fb_name }}</strong></h4>
                                    <a href="{{ route('admin.connection.getUserVideos', ['fbAccountId' => $userSetting->fb_account_id]) }}" class="btn btn-primary">Go</a>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
