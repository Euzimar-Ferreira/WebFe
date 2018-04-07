
//Definição dos Campos de Data
$(document).ready(function () {
    var teste = {
        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
            'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ],
        weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'sab'],
        cancel: 'Cancer',
        done: 'OK',
    }
    $('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        cancel: 'Cancelar',
        i18n: teste,
    });
    // Método para pular campos teclando ENTER
    $('.pula').on('keypress', function(e){
        var tecla = (e.keyCode?e.keyCode:e.which);
        if(tecla == 13){
            campo = $('.pula');
            indice = campo.index(this);
            if(campo[indice+1] != null){
                proximo = campo[indice + 1];
                proximo.focus();
                e.preventDefault(e);
            }
        }
    });
    // Método para consultar o CEP
    $('#cep').on('blur', function(){
        if($.trim($("#cep").val()) != ""){
            //$("#mensagem").html('(Aguarde, consultando CEP ...)');
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
                if(resultadoCEP["resultado"]){
                    $("#endereco").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                    $("#bairro").val(unescape(resultadoCEP["bairro"]));
                    $("#cidade").val(unescape(resultadoCEP["cidade"]));
                    $("#uf").val(unescape(resultadoCEP["uf"]));
                }
                // $("#mensagem").html('');
            });				
        }			
    });
    //validação das senhas
    $("#frmCadastro").submit(function(){
            //Aqui se quiser pode fazer outras validações, mas nesse caso farei apenas a validação de ambos campos de senha.
            if($("#senha").val() == $("#repetirSenha").val()){
                document.getElementById("pass").style.display="none";
                    return true;
            } else {
                document.getElementById("pass").style.display="block";
            return false; // Aqui ele irá cancelar o submit tenha seja inválido ambas senhas.
            }
            
    });
});