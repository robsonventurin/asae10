<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;

class VendaController extends Controller
{
    function telaCadastro() {
        $cliente = Cliente::all();
        return view('cadastrar_venda', [ "clientes" => $cliente]);
    }
    
    function telaListar() {
        $lista = Venda::all();
        return view('listar_vendas', [ "vendas" => $lista]);
    }

    function adicionar(Request $req) {
        $valor_total = $req->input("valor_total");
        $valor_total = str_replace('R$ ', '', str_replace(',','.', str_replace('.', '', $valor_total)));

        $v = new Venda();
        $v->id_cliente = $req->input("id_cliente");
        $v->descricao = $req->input("descricao");
        $v->valor_total = $valor_total;

        if ($v->save()) {
            $msg = "Venda para '" . $v->cliente->nome . "' adicionada com sucesso.";
        } else {
            $msg = "Venda não foi adicionada. Favor entrar em contato com o suporte.";
        }
        
        return view('resultado', [ "mensagem" => $msg]);
    }
}
