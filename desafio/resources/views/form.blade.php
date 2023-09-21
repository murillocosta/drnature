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
        <form action="/pedidos" method="POST" class='mt-5'>
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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

                        <input type="email" name="email" id="email" class="" value="{{ old('email') }}"
                            placeholder="nome@exemplo.com">
                        <label for="email" class="form-label mb-1">SEU E-MAIL</label>

                    </div>
                </div>
            </div>
            {{-- fim email --}}
            {{-- nome --}}
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="nome" id="nome" class="" placeholder="Nome completo"
                            value="{{ old('nome') }}">
                        <label for="nome" class="form-label ml-1">SEU NOME COMPLETO</label>


                    </div>
                </div>

                {{-- fim nome --}}
                {{-- telefone --}}
                <div class="col-3">
                    <div class="mb-3 form-label-group form-label__container">
                        <input type="text" name="celular" id="celular" class=" " placeholder=""
                            value="{{ old('celular') }}">
                        <label for="celular" class="form-label ml-1">CELULAR (DDD)</label>

                    </div>
                </div>
                {{-- fim telefone --}}
                {{-- cpf --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="cpf" id="cpf" class=" " placeholder=""
                            value="{{ old('cpf') }}">
                        <label for="cpf" class="form-label ml-1">CPF</label>

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

                        <span class="form-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home icon-md">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </span>

                        <input type="text" name="cep" id="cep" class="" placeholder="">
                        <label for="email" class="form-label mb-1">CEP DO ENDEREÇO</label>

                    </div>
                </div>
            </div>
            {{-- FIM CEP --}}
            <div class="row">
                {{-- RUA --}}
                <div class="col-10">
                    <div class="mb-3 form-label__container">

                        <span class="form-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icon-md">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </span>

                        <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">
                        <label for="email" class="form-label mb-1">ENDEREÇO</label>

                    </div>
                </div>
                {{-- FIM RUA --}}
                {{-- Nº RUA --}}
                <div class="col-2">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="numero" id="numero" class=" " placeholder="">
                        <label for="numero" class="form-label ml-1">NÚMERO</label>

                    </div>
                </div>
            </div>
            {{-- FIM Nº RUA --}}
            <div class="row">
                {{-- COMPLEMENTO --}}
                <div class="col-4">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="complemento" id="complemento" class=" " placeholder="">
                        <label for="complemento" class="form-label ml-1">COMPLEMENTO</label>
                    </div>
                </div>
                {{-- FIM COMPLEMENTO --}}
                {{-- BAIRRO --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="bairro" id="bairro" class=" " placeholder="">
                        <label for="bairro" class="form-label ml-1">BAIRRO</label>
                    </div>
                </div>
                {{-- FIM BAIRRO --}}
                {{-- CIDADE --}}
                <div class="col-3">
                    <div class="mb-3 form-label__container">
                        <input type="text" name="cidade" id="cidade" class=" " placeholder="">
                        <label for="cidade" class="form-label ml-1">CIDADE</label>
                    </div>
                </div>
                {{-- FIM CIDADE --}}
                {{-- ESTADO --}}
                <div class="col-2">
                    <div class="mb-3 form-label__container">
                        <input maxlength="2" type="text" name="estado" id="estado" class=" "
                            placeholder="">
                        <label for="estado" class="form-label ml-1">ESTADO</label>
                    </div>
                </div>
                {{-- FIM ESTADO --}}
            </div>
            {{-- OPCOES DE ENTREGA --}}
            <div class="row pb-4">
                <p class="instrucoes">Opções de Entrega:</p>
                <section>
                    <input type="hidden" name="entrega" id="entrega" value="Ecônomico">
                    <div class="mb-2">
                        <div class="col-12 entrega d-flex justify-between align-middle entrega-inativa">
                            <div class="d-flex justify-start col-11">
                                <div class="small-circle mt-1" id='circle-1'></div>
                                <div class="mx-2">
                                    <h3>Econômico
                                    </h3>
                                    <p>8 dias úteis a partir da postagem</p>
                                </div>
                            </div>
                            <p class="mt-1 preco">R$ 13,70</p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-12 entrega d-flex justify-between align-middle entrega-inativa">
                            <div class="d-flex justify-start col-11">
                                <div class="small-circle mt-1 small-circle-inativo" id='circle-2'></div>
                                <div class="mx-2">
                                    <h3>Expresso
                                    </h3>
                                    <p>7 dias úteis a partir da postagem</p>
                                </div>
                            </div>
                            <p class="mt-1 preco">R$ 50,19</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="pb-4 pt-2">
                <div class="row align-items-center">

                    <div class="col-6">
                        <div class=" d-flex text-success text-start  mt-3 md-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-lock icon-sm mt-2">
                                <rect x="3" y="11" width="18" height="11" rx="2"
                                    ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <p class="mt-1">Você está em uma página segura.</p>
                        </div>
                    </div>
                    <div class="col-6 ">


                        <button type="submit" value="CONTINUAR"
                            class="btn float-end btn-primary d-flex align-middle justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-lock icon-sm mb-2">
                                <rect x="3" y="11" width="18" height="11" rx="2"
                                    ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <p class="btn-text mb-2">CONTINUAR</p>
                        </button>


                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="/js/cep.js"></script>
    <script src="/js/masks.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>
