$(document).ready(function () {
    $("#cep").blur(function () {
        // Obtenha o valor do CEP do campo de entrada
        var cep = $(this).val();

        // Remova caracteres não numéricos do CEP
        cep = cep.replace(/\D/g, "");

        // Verifique se o CEP possui 8 dígitos
        if (cep.length === 8) {
            // Faça a solicitação AJAX para a API ViaCEP
            $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
                if (!("erro" in data)) {
                    // Preencha os campos com os dados retornados pela API
                    $("#logradouro").val(data.logradouro);
                    $("#estado").val(data.uf);
                    $("#cidade").val(data.localidade);
                    $("#bairro").val(data.bairro);
                } else {
                    alert("CEP não encontrado.");
                }
            });
        } else {
            alert("CEP inválido. Certifique-se de inserir 8 dígitos.");
        }
    });
});
