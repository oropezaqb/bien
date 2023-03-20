<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomer;
use App\Models\Customer;

class FreeBookController extends Controller
{
    public function store(StoreCustomer $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                $customer = new Customer([
                    'name' => request('name'),
                    'email_address' => request('email_address'),
                ]);
                $customer->save();
            });
            return view('free-book.thank-you');
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }
    public function download()
    {
        return \Storage::download('assets/books/Bakit_Ako_Magbabayad_ng_Tax_by_BienOropeza.pdf');
    }
    public function translateError($e)
    {
        switch ($e->getCode()) {
            //case '23000':
                //return "Bill number for this supplier is already recorded.";
        }
        return $e->getMessage();
    }
}
