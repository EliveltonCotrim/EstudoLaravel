@extends('Property.master')


@section('content')


    <div class="container my-3 col-6">
        <h3>Listagem de produtos</h3>
        <?php

        if (!empty($propriedades)) {
            echo "<table class='table table-striped table-hover'>";
            echo "<thead class='bg-primary'>
                        <th style='color:white'>Título</th>
                        <th style='color:white'>Valor de Locação</th>
                        <th style='color:white'>Valor de compra</th>
                        <th style='color:white'>Ações</th>
                    </thead>";
            foreach ($propriedades as $propriedade) {
                $linkReadMode = url('/imoveis/' . $propriedade->name);
                $linkEditItem = url('/imoveis/editar/' . $propriedade->name);
                $linkRemoverItem = url('/imoveis/remover/' . $propriedade->name);

                echo "<tr>
                                                <td>{$propriedade->title}</td>
                                                <td>R$ " .
                    number_format($propriedade->rental_price, 2, ',', '.') .
                    "</td>
                                                <td>R$ " .
                    number_format($propriedade->sale_price, 2, ',', '.') .
                    "</td>
                        <td>
                            <a href='{$linkReadMode}'><buttom class='btn btn-success'>Ver mais</a>
                            <a href='{$linkEditItem}'><buttom class='btn btn-primary'>Editar</a>
                            <a href='{$linkRemoverItem}'><buttom class='btn btn-danger mx-auto'>Deletar</a>
                        </td>
                    </tr>";
            }
            echo '</table>';
        }
        ?>
    </div>
@endsection
