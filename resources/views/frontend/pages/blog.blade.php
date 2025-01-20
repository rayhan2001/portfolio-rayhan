@extends('layouts.frontend.app')
@section('title', 'Blog')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');

        .blog-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }

        .waviy {
            position: relative;
            -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0, 0, 0, .2));
            font-size: 60px;
        }

        .waviy span {
            font-family: 'Alfa Slab One', cursive;
            position: relative;
            display: inline-block;
            color: #000000;
            text-transform: uppercase;
            animation: waviy 2.5s infinite;
            animation-delay: calc(.2s * var(--i));

        }

        @keyframes waviy {

            0%,
            40%,
            100% {
                transform: translateY(0)
            }

            20% {
                transform: translateY(-20px)
            }
        }
    </style>
    <section class="blog-section">
        <div class="waviy">
            <span style="--i:1">c</span>
            <span style="--i:2">o</span>
            <span style="--i:3">m</span>
            <span style="--i:4">i</span>
            <span style="--i:5">n</span>
            <span style="--i:6">g</span>
            <span style="--i:7">s</span>
            <span style="--i:8">o</span>
            <span style="--i:9">o</span>
            <span style="--i:10">n</span>
            <span style="--i:11">😊</span>
        </div>
    </section>
@endsection
