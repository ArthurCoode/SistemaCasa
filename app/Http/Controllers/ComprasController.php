<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Compras;

class ComprasController extends Controller
{
    public function criarCompras(Request $request)
    {
        $dadosValidados = $request->validate(
            [
                'nomeCompra' => 'required|string|max:100',
                'tipoCompra' => 'required|string|max:50',
                'quantidade' => 'required|integer',
                'valor' => 'required|numeric' // numeric para aceitar decimais
            ]
        );

        try {

            $compras = Compras::create($dadosValidados);

            return response()->json([
                'message' => 'Compra registrada com sucesso!',
                'data' => $compras
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao registrar compra',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function listarCompras()
    {
        try {
            $compras = Compras::all();

            return response()->json($compras, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao listar as compras',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function atualizarCompras(Request $request, $id)
    {

        $dadosValidados = $request->validate(
            [
                'nomeCompra' => 'sometimes|required|string|max:100',
                'tipoCompra' => 'sometimes|required|string|max:50',
                'quantidade' => 'sometimes|required|integer',
                'valor' => 'sometimes|required|numeric'
            ]
        );


        try {

            $compras = Compras::find($id);

            if (!$compras) {
                return response()->json(['message' => 'Compra não localizada.'], 404);
            }


            $compras->update($dadosValidados);


            return response()->json([
                'message' => 'Compra atualizada com sucesso',
                'data' => $compras
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro ao atualizar compra",
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function deletarCompras($id)
    {
        try {
            $compras = Compras::find($id);

            if (!$compras) {
                return response()->json(['message' => 'Compra não localizada.'], 404);
            }

            $compras->delete();

            return response()->json([
                'message' => 'Compra deletada com sucesso',
                'data' => $compras
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro ao deletar compra",
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
