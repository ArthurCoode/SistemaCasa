<!DOCTYPE html>
<html lang="en">
<head>
@include('home.head')
</head>
<body>
    @include('home.nav')
    <div class="container mt-3 col-md-6">
        <table class="table table-hover" id="tabelaAlimentos">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
         <tbody>
         </tbody>
        </table>
    </div>

    @include('home.footerjs')

    <script src="{{asset('assets/js/gestao_alimentos.js')}}"></script>
    
</body>
</html>