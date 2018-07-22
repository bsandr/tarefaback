<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function criarCliente(Request $request) {

        $novoCliente = new Client;

        $novoCliente->id = $request->id;
        $novoCliente->Nome = $request->Nome;
        $novoCliente->Endereço = $request->Endereço;
        $novoCliente->Telefone = $request->Telefone;
        $novoCliente->Status = $request->Status;
        $novoCliente->Crédito = $request->Crédito;

        $novoCliente = save();
    }

    public function lerCliente($id) {

    $Client = Client::findorfail($id);
    return response()->json([$Client]);
    }
        
    public function atualizarcCliente(Request $request, $id) {

    $Client = Client::findorfail($id);

        if($request->Nome){
        $Client->Nome = $request->Nome;
        }

        if($request->Endereço){
            $Client->Endereço = $request->Endereço;
            }

        if($request->Telefone){
        $Client->Telefone = $request->Telefone;
        }

        if($request->Status){
        $Client->Status = $request->Status;
        }

        if($request->Crédito){
        $Client->Crédito= $request->Crédito;
        }

        $Client->save();
    }

    public function deletarCliente($id) {

        Client::destroy($id);
    }
}
