$(document).ready(function () {
    // Máscara para CPF (formato: 000.000.000-00)
    $("#cpf").mask("000.000.000-00");

    // Máscara para telefone (formato: (00) 00000-0000)
    $("#celular").mask("(00) 00000-0000");

    // Máscara para CEP (formato: 00000-000)
    $("#cep").mask("00000-000");
});
