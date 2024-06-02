<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JogoResource extends JsonResource
{
   
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'professor_id' => $this->professor_id,
            'grupo_1_id' => $this->grupo_1_id,
            'grupo_2_id' => $this->grupo_2_id,
            'grupo_3_id' => $this->grupo_3_id,
            'grupo_4_id' => $this->grupo_4_id,
            'grupo_1_palavras' => $this->grupo_1_palavras,
            'grupo_2_palavras' => $this->grupo_2_palavras,
            'grupo_3_palavras' => $this->grupo_3_palavras,
            'grupo_4_palavras' => $this->grupo_4_palavras,
            'data' => $this->data
        ];
    }
}
