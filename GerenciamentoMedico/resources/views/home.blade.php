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
                <h1>SAÚDE EM DIA, VIDA MELHOR!</h1>
                <h3>Agende, gerencie e cuide da sua saúde com facilidade e eficiência.</h3>
                <p>Transforme a forma como você gerencia consultas e cuida da saúde com nosso sistema intuitivo. Projetado para médicos e pacientes, nossa plataforma simplifica o agendamento e o gerenciamento de consultas, garantindo uma experiência mais eficiente e organizada. Com uma interface amigável e recursos poderosos, você pode se concentrar no que realmente importa: sua saúde e bem-estar.</p>
            </div>
        </div>
    </div>
    <div class="index-container">
        <div class="index-content">
            <div class="textContent">
                <h1>AUTOCUIDADO E ORGANIZAÇÃO SIMPLIFICADOS.</h1>
                <h3>Conecte-se ao seu bem-estar com facilidade e clareza.</h3>
                <p>Experimente uma nova abordagem para cuidar de si mesmo com nosso sistema. Facilite o gerenciamento de suas consultas, promova o autocuidado e mantenha tudo organizado em um só lugar. Nossa plataforma intuitiva torna o acompanhamento da sua saúde mais simples e eficaz, permitindo que você se concentre no que realmente importa: seu bem-estar.</p>
            </div>
            <div class="imgContent">
                <img src="/img/avatar2.png">
            </div>
        </div>
    </div>
</div>
@endsection