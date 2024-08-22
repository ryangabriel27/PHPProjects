@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded-5 shadow-4-strong">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/img/imagem1.webp"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/img/imagem2.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/imagem3.jpeg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="index-container">
        <div class="index-content">
            <div class="imgContent">
                <img src="/img/avatar1.jpg">
            </div>
            <div class="textContent">
                <h1>SAÚDE</h1>
                <h3>exemplo</h3>
                <p>Exemplo</p>
            </div>
        </div>
    </div>
</div>
@endsection