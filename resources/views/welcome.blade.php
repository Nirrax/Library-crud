@extends('layouts.app')

@section('content')
<style>
    html{
        background: rgb(220,220,220);
    }
</style>
<header class="py-5 bg-image-full" style="background-image: url('https://www.passporttoeden.com/wp-content/uploads/2022/09/DarkAcademiaLibraries_TrinityCollegeLibrary-1-of-1.jpg');padding-top: 0px;background-position: center">
    <div class="text-center my-5">
        <h1 class="text-white fs-3 fw-bolder">Your Library</h1>
    </div>
</header>
<section class="py-5 bg-grey">
    <div class="container my-5">
        <div class="row justify-content-left">
            <div class="col-lg-6">
                <h2>LOREM IPSUM</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos consectetur ducimus dignissimos soluta, quo culpa facere ullam suscipit, officia placeat repellat iure dolorem in beatae officiis? Hic, iure aspernatur.</p>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam id atque veniam natus adipisci magni ullam doloribus aliquam facilis iste fugit quo, eveniet ipsa ut quibusdam consectetur sunt, enim debitis.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://static.polityka.pl/_resource/res/path/ac/24/ac24434f-469c-4b2a-9729-9a4e3491b8de_f1400x900" alt="..." class="img-thumbnail">
            </div>
        </div>
    </div>
</section>
@endsection