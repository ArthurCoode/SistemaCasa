<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
</head>

<body>
    @include('home.nav')

    <div class="container mt-4 col-md-10 col-lg-8">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h4 class="mb-0">Gestão de Alimentos</h4>
                <small class="text-muted">Lista de itens cadastrados</small>
            </div>
            <a href="/cadastrar_alimentos" class="btn btn-success">
                <i class="fa fa-plus me-1"></i>
                Novo Alimento
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="tabelaAlimentos">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-3">#</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th class="text-end pe-3">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <div id="listaVazia" class="text-center text-muted py-5 d-none">
                    <i class="fa fa-box-open fa-2x mb-2 d-block"></i>
                    Nenhum alimento cadastrado ainda.
                </div>
            </div>
        </div>

    </div>

    @include('home.footerjs')

    <script src="{{ asset('assets/js/gestao_alimentos.js') }}"></script>

</body>

</html>
