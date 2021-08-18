@extends('Property.master')

@section('content')

    <div class="container my-3">
        <?php

    if (!empty($property)) {

        foreach ($property as $pro) {
    ?>
        <h2>Título do Imóvel: <?= $pro->title ?></h2>
        <p>Descrição: <?= $pro->description ?></p>
        <p>Valor de locação: <?= number_format($pro->rental_price, 2, ',', '.') ?></p>
        <p>Valor de venda: <?= number_format($pro->sale_price, 2, ',', '.') ?></p>

        <?php

        }
    }

    ?>
    </div>
@endsection
