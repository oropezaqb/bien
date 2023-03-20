<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return redirect(route('free-book.thank-you'))->with('success', 'Thank you! You may now download your free copy of the book.');;
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }
}
