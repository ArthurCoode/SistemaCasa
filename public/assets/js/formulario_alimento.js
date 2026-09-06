$('#cadAlimento').on('submit', function(e){
    e.preventDefault();  

    const data = {
        nomeAlimento: $('#nomeAlimento').val(),
        tipoAlimento: $('#tipoAlimento').val(),
        quantidade: $('#quantidadeAlimento').val()
    }

    $.ajax({
        url: window.location.origin + '/api/criarAlimento',
        method: 'POST',
        data: data,
        success: function() {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Alimento cadastrado com sucesso!',
                showConfirmButton: false,
                timer: 2000
            });  

            setTimeout(() => {
                window.location.href = 'listar_alimentos'
            }, 2000);
        },
        error: function(xhr) {
            console.error(xhr);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Erro ao cadastrar alimento.'
            });
            
        }
    })
})

$('#editAlimento').on('submit', function(e){
    e.preventDefault();  

    const data = {
        alimento_id: window.alimento.alimento_id,
        nomeAlimento: $('#nomeAlimento').val(),
        tipoAlimento: $('#tipoAlimento').val(),
        quantidade: $('#quantidadeAlimento').val()
    }

    $.ajax({
        uri: window.location.origin + '/api/atualizarAlimento',
        method: 'POST',
        data: data, //data
        success: function() {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Alimento atualizado com sucesso!',
                showConfirmButton: false,
                timer: 2000
            });  

            setTimeout(() => {
                window.location.href = 'listar_alimentos'
            }, 2000);
        },
        error: function(xhr) {
            console.error(xhr);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Erro ao atualizar  alimento.'
            });
            
        }
    })
})

function voltarParaLista() {
    window.location.href = 'listar_alimentos'
}

$(document).ready(function() {  
    if(window.alimento) {
        $('#nomeAlimento').val(window.alimento.nomeAlimento);
        $('#tipoAlimento').val(window.alimento.tipoAlimento);
        $('#quantidadeAlimento').val(window.alimento.quantidade);
    }
})