@extends('Property.master')

@section('content')

    <div class="container my-3">
        <?php
        $property = $property[0];
        // var_dump($property);
        ?>

        <form class="form" action="<?= url('imoveis/update', ['id' => $property->id]) ?>" method="post">
            @csrf
            @method('PUT');
            <div class="container col-5">
                <h3>Formúlario de Edição: Imóveis</h3>

                <div class="form-group">
                    <label for="title" class="form-label">Título do imóvel</label>
                    <input class="form-control" type="text" name="title" id="title" value="<?= $property->title ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">Descrição</label>
                    <textarea class="form-control" name="description" id="description" cols="30"
                        rows="10"><?= $property->description ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="rental_price">Valor de Locação</label>
                    <input class="form-control" type="text" name="rental_price" id="rental_price"
                        value="<?= $property->rental_price ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="sale_price">Valor de Compra</label>
                    <input class="form-control" type="text" name="sale_price" id="sale_price"
                        value="<?= $property->sale_price ?>">
                </div>


                <a href="http:<?= url('/imoveis') ?>"><button class="btn btn-primary">Cancelar</button></a>
                <button type="submit" class="btn btn-success my-3">Atualizar imóvel</button>

            </div>
        </form>
    </div>

@endsection
