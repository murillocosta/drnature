<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário - Doutor Nature</title>
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="container bg-light">
        <form class='mt-5'>
            {{-- Dados Pessoais --}}
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center mb-2">
                        <span class="circle">1</span>
                        <h2 class="mb-0 ms-2">Dados Pessoais</h2>
                    </div>
                    <p class="mb-3 d-block instrucoes">
                        Digite seus dados pessoais abaixo para iniciar a sua compra.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 form-label__container">

                        <span class="form-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail icon-md">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </span>

                        <input type="email" name="email" id="email" class="form-input form-control"
                            placeholder="nome@exemplo.com">
                        <label for="email" class="form-label ">SEU E-MAIL</label>
                        <div class="invalid-feedback">Informe um endereço de e-mail válido.</div>
                    </div>
                </div>
            </div>
            {{-- fim email --}}
            {{-- nome --}}
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 form-label__container">
                        <input type="email" name="email" id="email" class="form-input form-control"
                            placeholder="Nome completo">
                        <label for="email" class="form-label ml-1">SEU NOME COMPLETO</label>
                        <div class="invalid-feedback">Informe um nome válido.</div>
                    </div>
                </div>

                {{-- fim nome --}}
                {{-- telefone --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="tel" name="telefone" id="telefone" class="form-input form-control"
                            placeholder="(XX)XXXXX-XXXX">
                        <label for="telefone" class="form-label ml-1">CELULAR (DDD)</label>
                        <div class="invalid-feedback">Informe número válido.</div>
                    </div>
                </div>
                {{-- fim telefone --}}
                {{-- cpf --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="cpf" id="cpf" class="form-input form-control"
                            placeholder="XXX.XXX.XXX-XX">
                        <label for="cpf" class="form-label ml-1">CPF</label>
                        <div class="invalid-feedback">Informe um CPF válido.</div>
                    </div>
                </div>
                {{-- fim cpf --}}
            </div>

            {{-- Fim Dados Pessoais --}}
            {{-- endreço de entrega --}}
            {{-- endereço --}}
            <div class="row">
                <div class="col-12 ">
                    <div class="d-flex align-items-center mb-2">
                        <span class="circle">2</span>
                        <h2 class="mb-0 ms-2">Endereço de Entrega</h2>
                    </div>
                    <p class="mb-3 d-block instrucoes">
                        Digite o CEP para onde vamos enviar o seu pedido abaixo.
                    </p>
                </div>
            </div>
            {{-- CEP --}}
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 form-label__container">
                        <span form-icon>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home icon-md">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </span>
                        <input type="text" name="cep" id="cep" class="form-input form-control"
                            placeholder="XXXXX-XXX">
                        <label for="cpf" class="form-label ml-1">CEP DO ENDEREÇO</label>
                        <div class="invalid-feedback">Informe um CEP válido.</div>
                    </div>
                </div>
            </div>
            {{-- FIM CEP --}}
            <div class="row">
                {{-- RUA --}}
                <div class="col-10">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="endereco" id="endereco" class="form-input form-control"
                            placeholder="">
                        <label for="endereco" class="form-label ml-1">ENDEREÇO</label>
                        <div class="invalid-feedback">Informe um endereço válido.</div>
                    </div>
                </div>
                {{-- FIM RUA --}}
                {{-- Nº RUA --}}
                <div class="col-2">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="numeroRUa" id="numeroRUa" class="form-input form-control"
                            placeholder="">
                        <label for="numeroRUa" class="form-label ml-1">NÚMERO</label>
                        <div class="invalid-feedback">Informe um número válido.</div>
                    </div>
                </div>
            </div>
            {{-- FIM Nº RUA --}}
            <div class="row">
                {{-- COMPLEMENTO --}}
                <div class="col-4">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="complemento" id="complemento" class="form-input form-control"
                            placeholder="">
                        <label for="complemento" class="form-label ml-1">COMPLEMENTO</label>
                    </div>
                </div>
                {{-- FIM COMPLEMENTO --}}
                {{-- BAIRRO --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="bairro" id="bairro" class="form-input form-control"
                            placeholder="">
                        <label for="bairro" class="form-label ml-1">BAIRRO</label>
                    </div>
                </div>
                {{-- FIM BAIRRO --}}
                {{-- CIDADE --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="cidade" id="cidade" class="form-input form-control"
                            placeholder="">
                        <label for="cidade" class="form-label ml-1">CIDADE</label>
                    </div>
                </div>
                {{-- FIM CIDADE --}}
                {{-- ESTADO --}}
                <div class="col-2">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="estado" id="estado" class="form-input form-control"
                            placeholder="">
                        <label for="estado" class="form-label ml-1">ESTADO</label>
                    </div>
                </div>
                {{-- FIM ESTADO --}}
            </div>




        </form>
    </div>
    </div>
    <script src="/js/scripts.js"></script>
</body>

</html>
