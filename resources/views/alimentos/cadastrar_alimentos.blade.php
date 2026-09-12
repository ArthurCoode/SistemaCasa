<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body>
    @include('home.nav')

    <div class="container mt-4 col-md-6 col-lg-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex align-items-center mb-4">
                    <div class="icon-circle bg-success-subtle text-success me-3">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div>
                        <h4 class="mb-0">Cadastrar Novo Alimento</h4>
                        <small class="text-muted">Preencha os dados do item</small>
                    </div>
                </div>

                <form id="cadAlimento" novalidate>

                    <div class="mb-3">
                        <label for="nomeAlimento" class="form-label fw-semibold">
                            Nome do Alimento
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="nomeAlimento"
                            name="nomeAlimento"
                            placeholder="Ex: Arroz, Feijão, Maçã..."
                            required
                        >
                        <div class="invalid-feedback">
                            Informe o nome do alimento.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipoAlimento" class="form-label fw-semibold">
                            Tipo do Alimento
                        </label>
                        <select name="tipoAlimento" id="tipoAlimento" class="form-select" required>
                            <option value="">Selecione..</option>
                            <option value="Fruta">🍎 Fruta</option>
                            <option value="Legume">🥕 Legume</option>
                            <option value="Cereal">🌾 Cereal</option>
                            <option value="Condimento">🧂 Condimento</option>
                            <option value="deCesta">🧺 De Cesta</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione o tipo do alimento.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="quantidadeAlimento" class="form-label fw-semibold">
                            Quantidade
                        </label>
                        <input
                            type="number"
                            class="form-control"
                            id="quantidadeAlimento"
                            name="quantidadeAlimento"
                            min="0"
                            step="1"
                            placeholder="0"
                            required
                        >
                        <div class="invalid-feedback">
                            Informe uma quantidade válida.
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success flex-fill">
                            <i class="fa fa-save me-1"></i>
                            Cadastrar
                        </button>

                        <a href="#" class="btn btn-outline-secondary" onclick="voltarParaLista()">
                            <i class="fa fa-arrow-left me-1"></i>
                            Voltar
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>

    @include('home.footerjs')

    <script src="{{ asset('assets/js/formulario_alimento.js') }}"></script>

    <style>
        .icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }
    </style>

</body>
</html>