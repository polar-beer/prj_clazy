@extends('layouts.app')

@section('title')
TOP(SP)
@endsection

@section('content')
{{--<!--   nav   -->--}}
<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    {{--<!--  Home -->--}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Clazy') }} -->
                    </a>


                    {{--<!--  hamburger toggle -->--}}
                    <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    {{--<!--  hamburger toggle elements -->--}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <i class="fas fa-user-circle fa-7x"></i>

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <a class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('ろぐあうと') }}
                                </a>
                                <form id     ="logout-form"
                                action ="{{ route('logout') }}"
                                method ="POST"
                                style  ="display: none;">
                                @csrf
                                </form>

                                <!-- <a class="aaa" href=""><i class="fas fa-external-link-alt fa-7x"></i></a> -->
                                <a class="dropdown-item"
                                href="{{ route('Clazy.firstInformation') }}">
                                {{ __('かんりがめん') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
</header>

{{--<!--   main  -->--}}
<div class="box container">
    <div class="row">
        {{--<!--   logo  -->--}}
        <div class="col-lg-12">
              <img src="{{ asset ('img/sp_logo.png') }}">
        </div>
    </div>

    {{--<!--   input  -->--}}
    <div class="row">
        <div class="col-lg-12">
        <a href="{{ route('Clazy.create') }}">
            <input id="sbox1"
                   name="s"
                   type="text"
                   style="width: 800px; height: 60px;"
                   placeholder="つかったら入力しよ〜" />
        </a>
        </div>
    </div>
</div>

@section('content')
