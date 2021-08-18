@extends('Property.master')

@section('content')
    <div class="container my-3">
        <form action="{{ route('imoveis.store') }}" method="post">
            @csrf
            <div class="container col-5">

                <h4>Formúlario de cadastro : Imóveis</h4>

                <div class="form-group">
                    <label for="title" class="form-label">Título do imóvel</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Descrição</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="rental_price">Valor de Locação</label>
                    <input type="number" class="form-control" type="text" name="rental_price" id="rental_price">
                </div>

                <div class="form-group">
                    <label class="form-label" for="sale_price">Valor de Compra</label>
                    <input type="number" class="form-control" type="text" name="sale_price" id="sale_price">
                </div>


                <button class="btn btn-success my-3" type="submit">Cadastar imóvel</button>
            </div>
        </form>
    </div>
@endsection
