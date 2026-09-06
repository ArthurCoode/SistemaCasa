<!DOCTYPE html>

<html lang="en">

<head>

    @include('home.head')

</head>

<body>

    @include('home.nav')

    <div class="container mt-3 col-md-6">

        <h4 class="mb-3">Cadastrar Novo Alimento</h4>

        <form id="cadAlimento">

            <div class="mb-3">

                <label for="nomeAlimento" class="form-label">
                    Nome do Alimento
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="nomeAlimento"
                    name="nomeAlimento"
                    required
                >

            </div>

            <div class="mb-3">

                <label for="tipoAlimento" class="form-label">
                    Tipo do Alimento
                </label>

                <select name="tipoAlimento" id="tipoAlimento" class="form-control">
                    <option value="">Selecione..</option>
                    <option value="Fruta">Fruta</option>
                    <option value="Legume">Legume</option>
                    <option value="Cereal">Cereal</option>
                    <option value="Condimento">Condimento</option>
                    <option value="deCesta">De Cesta</option>
                </select>

            </div>

            <div class="mb-3">

                <label for="quantidadeAlimento" class="form-label">
                    Quantidade
                </label>

                <input
                    type="number"
                    class="form-control"
                    id="quantidadeAlimento"
                    name="quantidadeAlimento"
                    required
                >

            </div>

            <button type="submit" class="btn btn-success">

                <i class="fa fa-save"></i>
                Cadastrar

            </button>

            <a href="#" class="btn btn-secondary" onclick="voltarParaLista()">

                <i class="fa fa-arrow-left"></i>
                Voltar

            </a>

        </form>

    </div>

    @include('home.footerjs')

    <script src="{{ asset('assets/js/formulario_alimento.js') }}"></script>

</body>

</html>