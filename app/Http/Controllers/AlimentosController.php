<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimentos;
use Iluminate\Database\Illuminate\Database\QueryException;
use Exception;

class AlimentosController extends Controller
{

    //CRUD - Create Read Update Delete - Criar ler Atualizar Apagar
    public function listarAlimentos()
    {
        try {
            $alimentos = Alimentos::all();

            return response()->json($alimentos, 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro ao listar alimentos",
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function criarAlimento(Request $request)
    {
        try {

            $request->validate(
                [
                    'nomeAlimento' => 'required|string|max:100',
                    'tipoAlimento' => 'required|string|max:50',
                    'quantidade' => 'required|integer'
                ]
            );

            $alimento = Alimentos::create($request->all());

            return response()->json([
                'message' => 'Alimento cadastrado com sucesso',
                'data' => $alimento
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro ao cadastrar alimento",
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function atualizarAlimento(Request $request)
    {

        $id = $request->input('alimento_id');
        try {

            $request->validate(
                [
                    'nomeAlimento' => 'required|string|max:100',
                    'tipoAlimento' => 'required|string|max:50',
                    'quantidade' => 'required|integer'
                ]
            );

            $alimento = Alimentos::find($id);

            if (!$alimento) {
                return response()->json(["message" => "Alimento não encontrado"], 404);
            }

            $alimento->update($request->all());

            return response()->json([
                'message' => 'Alimento atualizado com sucesso',
                'data' => $alimento
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro ao atualizar alimento",
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function deletarAlimento(Request $request, $id)
    {

        try {

            $alimento = Alimentos::find($id);

            if (!$alimento) {
                return response()->json(["message" => "Alimento não encontrado"], 404);
            }

            $alimento->delete();

            return response()->json([
                'message' => 'Alimento deletado com sucesso',
                'data' => $alimento
            ], 201);
            
        } catch (Exception $e) {
            return response()->json([
                'message' => "Erro inseperado ao deletar alimento",
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
