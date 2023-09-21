<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pedido;

use Illuminate\Support\Facades\Validator;

class SubmitController extends Controller
{


    public function pedidos(){
        $pedidos = Pedido::all();

        return view('pedidos', ['pedidos' => $pedidos]);
    }

    public function store(Request $request){
        // $pedido = new Pedido;

        // $pedido->email = $request->email;
        // $pedido->nome = $request->nome;
        // $pedido->celular = $request->celular;
        // $pedido->cpf = $request->cpf;
        // $pedido->cep = $request->cep;
        // $pedido->logradouro = $request->logradouro;
        // $pedido->numero = $request->numero;
        // $pedido->complemento = $request->complemento;
        // $pedido->bairro = $request->bairro;
        // $pedido->cidade = $request->cidade;
        // $pedido->estado = $request->estado;
        // $pedido->entrega = $request->entrega;

        // $pedido-> save();

        // return redirect('/pedidos');

        // Define as regras de validação
        $rules = [
            'email' => 'required|email',
            'nome' => [
                'required',
                'max:50',
                function ($attribute, $value, $fail) {
                    // Verifica se o nome tem pelo menos dois sobrenomes
                    $nomes = explode(' ', $value);
                    if (count($nomes) < 3) {
                        $fail('O campo ' . $attribute . ' deve ter pelo menos dois sobrenomes.');
                    }
                },
            ],
            'celular' => 'required',
            'cpf' => 'required|cpf',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required|max:2',
            'entrega' => 'required',
        ];

    // Define mensagens personalizadas de erro
    $messages = [
        'required' => 'O campo :attribute é obrigatório.',
        'email' => 'Por favor, insira um endereço de email válido.',
        'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
    ];

    // Valida os dados do formulário
    $validator = Validator::make($request->all(), $rules, $messages);

    // Verifica se a validação falhou
    if ($validator->fails()) {
        return redirect('/')
            ->withErrors($validator)
            ->withInput();
    }

    // Crie e salve o pedido apenas se a validação passar
    $pedido = new Pedido;

    $pedido->email = $request->email;
    $pedido->nome = $request->nome;
    $pedido->celular = $request->celular;
    $pedido->cpf = $request->cpf;
    $pedido->cep = $request->cep;
    $pedido->logradouro = $request->logradouro;
    $pedido->numero = $request->numero;
    $pedido->complemento = $request->complemento;
    $pedido->bairro = $request->bairro;
    $pedido->cidade = $request->cidade;
    $pedido->estado = $request->estado;
    $pedido->entrega = $request->entrega;

    $pedido->save();

    return redirect('/pedidos');
    }
}
