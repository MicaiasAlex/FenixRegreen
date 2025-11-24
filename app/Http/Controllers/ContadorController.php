<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ContadorController extends Controller
{
    public function incrementar()
    {
        // Verifica se existe um registro
        $contador = DB::table('contadors')->first();

        // Se não existir, cria um
        if (!$contador) {
            DB::table('contadors')->insert([
                'total_downloads' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $contador = DB::table('contadors')->first();
        }

        // Incrementa o total_downloads
        DB::table('contadors')
            ->where('id', $contador->id)
            ->update([
                'total_downloads' => $contador->total_downloads + 1,
                'updated_at' => now(),
            ]);

        return response()->json([
            'message' => 'Download contabilizado com sucesso!',
            'total_downloads' => $contador->total_downloads + 1,
        ]);
    }

    public function downloadPdf()
{
    // Caminho correto do PDF dentro de /public
    $filePath = public_path('manual.pdf');

    // Verifica se o PDF existe
    if (!file_exists($filePath)) {
        return response()->json([
            'error' => 'Arquivo PDF não encontrado.'
        ], 404);
    }

    // Verifica se há registro no contador
    $contador = DB::table('contadors')->first();

    if (!$contador) {
        DB::table('contadors')->insert([
            'total_downloads' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $contador = DB::table('contadors')->first();
    }

    // Incrementa o contador
    DB::table('contadors')
        ->where('id', $contador->id)
        ->update([
            'total_downloads' => $contador->total_downloads + 1,
            'updated_at' => now(),
        ]);

    // Retorna o arquivo para download
    return response()->download($filePath, 'manual.pdf');
}

}
