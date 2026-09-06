function listarAlimentos() {
    $.ajax({
        url: 'api/listarAlimentos',
        method: 'GET',
        dataType: 'json',

        success: function (response) {
            const tbody = $("#tabelaAlimentos tbody");
            tbody.empty();

            if (response.length === 0) {
                tbody.append('<tr><td colspan="3">Nenhum alimento encontrado.</td></tr>');
            } else {
                response.forEach(function (alimento, index) {
                    const linha = `
                        <tr>
                            <td>${alimento.alimento_id}</td>
                            <td>${alimento.nomeAlimento}</td>
                            <td>${alimento.tipoAlimento}</td>
                            <td>${alimento.quantidade}</td>
                            <td>
                                <button class="btn btn-sm btn-primary me-1" onclick="editarAlimento(${alimento.alimento_id})">
                                    <i class="fa fa-edit"></i>
                                </button>

                                <button class="btn btn-sm btn-danger" onclick="deletarAlimeneto(${alimento.alimento_id})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    tbody.append(linha);
                });
            }
        },

        error: function (xhr) {
            console.error(xhr);
            const tbody = $("#tabelaGames tbody");
            tbody.html('<tr><td colspan="3">Erro ao listar alimentos.</td></tr>');

        }
    });
}

function editarAlimento(id) {
    window.location.href = 'editar_alimentos/' + id;
}

function deletarAlimeneto(id) {
    Swal.fire({
    title: 'Tem certeza?',
    text: "O alimento será removido permanentemente!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Sim, deletar!',
    cancelButtonText: 'Cancelar'
}).then((result) => {

    if (result.isConfirmed) {
        $.ajax({
            url: window.location.origin + '/api/deletarAlimento/' + id, // URL absoluta
            method: 'DELETE',
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Deletado!',
                    text: response.message,
                    timer: 1500,
                    showConfirmButton: false
                });
                listarAlimentos(); // atualiza a tabela
            },

            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: xhr.responseJSON?.message || 'Erro ao deletar alimento.'
                });
            }
        });
    }
});
}

$(document).ready(function() {
    listarAlimentos();
})