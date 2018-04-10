
//Definição dos Campos de Data
$(document).ready(function () {
    var teste = {
        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
            'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ],
        monthsShort: ['jan', 'fev', 'mar', 'abr', 'maio', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'],
        weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'sab'],

        monthsShort: ['jan', 'fev', 'mar', 'abr', 'maio', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'],
        weekdaysFull: ['domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado'],
        weekdaysShort: ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sáb'],
        weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        done: 'OK',
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Ok',
        cancel: 'Cancelar',
    }
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        i18n: teste,
        showDaysInNextAndPreviousMonths: true,
        yearRange:100,
        selectMonths: true,
        labelMonthNext: 'Proximo Mês',
        labelMonthPrev: 'Mês Anterior',
        labelMonthSelect: 'Selecionar Mês',
        labelYearSelect: 'Selecionar Ano',
        showMonthsShort: true,
        maxDate: new Date(),
        minDate: new Date(1900,0,1),
        defaultDate: new Date(),
        showClearBtn:true,
        closeOnSelect: false,
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

function PreviewImage(arquivo) { 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("image").files[0]);
    var extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
    if (extensao != '.jpg' && extensao != '.png') 
    {
        document.getElementById("msgAvatar").style.display = 'block'; 
        oFReader.onload = function (oFREvent) { 
            document.getElementById("visual").src = '/storage/avatarUser/default.png'; 
        };
    } else {
        document.getElementById("msgAvatar").style.display = 'none';
        oFReader.onload = function (oFREvent) { 
            document.getElementById("visual").src = oFREvent.target.result; 
        }; 
    }
};
function abrir() { 
    $ ('#datebirth').click();
}