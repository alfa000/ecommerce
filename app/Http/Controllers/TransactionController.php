<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['nullable', 'email'],
            'address' => ['required'],
            'payment_method' => ['required'],
            'name_on_card' => ['required'],
            'card_number' => ['required'],
            'pop' => ['required', 'image'],
        ]);

        if ($request->file('pop')) {
            $file = $request->file('pop');
            $img_path = $file->store("pop", 'public');
        }


        DB::transaction(function () use($request, $img_path) {
            $transaction = Transaction::create([
                'user_id' => Auth::user()->id,
                'checkout_date' => date('Y-m-d H:i:s'),
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'payment_method' => $request->payment_method,
                'name_on_card' => $request->name_on_card,
                'card_number' => $request->card_number,
                'pop' => $img_path,
                'total' => $request->total,
            ]);

            foreach (Auth::user()->cart as $cart) {
                DetailTransaction::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $cart->product_id,
                    'qty' => $cart->qty,
                ]);

                Cart::destroy($cart->id);
            }

        });

        return redirect(route('home'))->with('success', 'Your Transaction Success!');
    }

    public function update(Transaction $transaction)
    {
        if ($transaction->status == 'waiting') {
            $transaction->update(['status' => 'processing']);
        }else if ($transaction->status == 'processing') {
            $transaction->update(['status' => 'finish']);
        }
        return redirect(route('transaction.index'))->with('success', 'Data Saved!');
    }
}
