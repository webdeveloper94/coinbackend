<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Http\Requests\StoreCoinRequest;
use App\Http\Requests\UpdateCoinRequest;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coin $coin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coin $coin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoinRequest $request, Coin $coin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coin $coin)
    {
        //
    }


    public function saveCoin(Request $request){
       
        $request->validate([
            'user_id' => 'required|integer',
            'total' => 'required|integer',
        ]);

        // Foydalanuvchi ma'lumotlarini topish
        $coin = Coin::where('user_id', $request->input('user_id'))->first();

        if ($coin) {
            // Agar ma'lumot mavjud bo'lsa, totalni yangilang
            $coin->total = $request->input('total');
            $coin->save();
        } else {
            // Agar ma'lumot yo'q bo'lsa, yangi yozuv qo'shish
            Coin::create([
                'user_id' => $request->input('user_id'),
                'total' => $request->input('total'),
            ]);
        }

        //return response()->json(['message' => 'Ma\'lumot muvaffaqiyatli saqlandi.']);
        return redirect()->route('show_user', ['user_id' => $request->user_id]);
        //dd($request->all());

        
    }
}
