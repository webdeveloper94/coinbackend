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


    public function savecoin(Request $request){
       
        // $request->validate([
        //     'user_id' => 'required|integer',
        //     'total' => 'required|integer',
        // ]);

        
        // dd($request->all());



        // CSRF tokenni tekshirish
        $request->validate([
            '_token' => 'required',
            'total' => 'required|integer',
            'user_id' => 'required|exists:users,id', // Foydalanuvchi ID mavjudligini tekshirish
        ]);

        // Foydalanuvchi ma'lumotlarini olish

        // Sovrin miqdori
        $total = $request->input('total');
        $user_id = $request->input('user_id');

        // Foydalanuvchining mavjud tangalarini olish
        $coins = Coin::where('user_id', $user_id)->first();

        if ($coins) {
            // Agar foydalanuvchida tanga bor bo'lsa, yangi tangalarni qo'shamiz
            $coins->total += $total;
            $coins->save();
        } else {
            // Agar foydalanuvchida tangalar mavjud bo'lmasa, yangi yozuv yaratamiz
            Coin::create([
                'user_id' => $user_id,
                'total' => $total,
            ]);
        }

        // Sovrinni muvaffaqiyatli yangilash haqida javob yuborish
        return redirect()->back()->with('success', 'Tangalar yangilandi!');
    }

        
    }

