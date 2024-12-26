<?php

namespace App\Http\Controllers;

use App\Http\Requests\CongtyStoreRequest;
use App\Http\Resources\CongtyResource;
use App\Models\Congty;
use Illuminate\Http\Request;

class CongtyController extends Controller
{
    public function index(Request $request)
    {
        //lấy tham số từ request
        $search = $request->input('search');
        $perPage = $request->input('per_page', 5);
        //Query cơ bản
        $query = Congty::query();

        if ($search) {
            $query->where('ten', 'like', '%' . $search . '%');
            $query->orWhere('ten_viet_tat', 'like', '%' . $search . '%');
        }
        $query->orderBy('created_at', 'desc');

        $congties = $query->paginate($perPage);
        return CongtyResource::collection($congties);
    }

    public function store(CongtyStoreRequest $request)
    {
        $congty = Congty::create([
            'ten' => $request->ten,
            'ten_viet_tat' => $request->ten_viet_tat,
            'sdt' => $request->sdt,
            'dia_chi' => $request->dia_chi,
            'trang_thai' => $request->trang_thai,
        ]);
        return new CongtyResource($congty);
    }

    public function show(Congty $congty)
    {
        return new CongtyResource($congty);
    }

    public function update(CongtyStoreRequest $request, Congty $congty)
    {
        $congty->update([
            'ten' => $request->ten,
            'ten_viet_tat' => $request->ten_viet_tat,
            'sdt' => $request->sdt,
            'dia_chi' => $request->dia_chi,
            'trang_thai' => $request->trang_thai,
        ]);
        return new CongtyResource($congty);
    }

    //destroy and destroyMany

    public function destroy(Congty $congty)
    {
        Congty::destroy($congty);
        return response()->json(['message' => 'Xóa thành công']);
    }
}
