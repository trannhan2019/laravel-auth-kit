<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CongtyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ten' => $this->ten,
            'ten_viet_tat' => $this->ten_viet_tat,
            'sdt' => $this->sdt,
            'dia_chi' => $this->dia_chi,
            'trang_thai' => $this->trang_thai
        ];
    }
}
