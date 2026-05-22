<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\UserBookingMail;
use App\Mail\AdminBookingMail;
use App\Models\Booking;

class CartController extends Controller
{

    public function add(Request $request)
    {
        $cart = Session::get('cart', []);

        $cart[] = [
            'name' => $request->name,
            'price' => $request->price,
        ];

        Session::put('cart', $cart);

        return response()->json([
            'success' => true,
            'cart_count' => count($cart)
        ]);
    }

    // VIEW CART

    public function view()
    {
        $cart = Session::get('cart', []);

        return view('cart', compact('cart'));
    }

    // REMOVE ITEM

    public function remove($index)
    {
        $cart = Session::get('cart', []);

        unset($cart[$index]);

        Session::put('cart', array_values($cart));

        return back();
    }

    // CLEAR CART

    public function clear()
    {
        Session::forget('cart');

        return back();
    }

    // SUBMIT BOOKING

    // public function submit(Request $request)
    // {
    //     $request->validate([
    //         'name'  => 'required',
    //         'phone' => 'required',
    //         'email' => 'required|email',
    //     ]);

    //     // GET TESTS FROM SESSION

    //     $cart = Session::get('cart', []);

    //     $testNames = collect($cart)
    //                     ->pluck('name')
    //                     ->implode(', ');

    //     // BOOKING OBJECT

    //     $booking = (object)[
    //         'name'      => $request->name,
    //         'phone'     => $request->phone,
    //         'email'     => $request->email,
    //         'test_name' => $testNames,
    //     ];

    //     // SEND MAIL TO ADMIN

    //     Mail::to(env('ADMIN_EMAIL'))
    //         ->send(new AdminBookingMail($booking));

    //     // SEND MAIL TO USER

    //     Mail::to($request->email)
    //         ->send(new UserBookingMail($booking));

    //     // CLEAR CART

    //     Session::forget('cart');

    //     // REDIRECT

    //     return redirect()
    //         ->route('cart.view')
    //         ->with('success', 'Booking submitted successfully!');
    // }


    public function submit(Request $request)
{
    $request->validate([
        'name'  => 'required',
        'phone' => 'required',
        'email' => 'required|email',
    ]);

    // GET CART
    $cart = Session::get('cart', []);

    // CHECK EMPTY CART
    if(count($cart) == 0){
        return back()->with('error', 'Cart is empty');
    }

    // TEST NAMES
    $testNames = collect($cart)
                    ->pluck('name')
                    ->implode(', ');

    // SAVE TO DATABASE
    $booking = Booking::create([
        'name'      => $request->name,
        'phone'     => $request->phone,
        'email'     => $request->email,
        'test_name' => $testNames,
    ]);

    // SEND MAIL TO ADMIN
    Mail::to(env('ADMIN_EMAIL'))
        ->send(new AdminBookingMail($booking));

    // SEND MAIL TO USER
    Mail::to($request->email)
        ->send(new UserBookingMail($booking));

    // CLEAR CART
    Session::forget('cart');

    return redirect()
        ->route('cart.view')
        ->with('success', 'Booking submitted successfully!');
}

public function removeSingle(Request $request)
{
    $cart = session()->get('cart', []);

    $index = $request->index;

    if(isset($cart[$index])){

        unset($cart[$index]);

        $cart = array_values($cart);

        session()->put('cart', $cart);
    }

    return back();
}

public function updateQty(Request $request)
{
    $cart = session()->get('cart', []);

    if($request->action == 'plus'){

        $cart[] = [
            'name' => $request->name,
            'price' => $request->price,
        ];
    }

    if($request->action == 'minus'){

        foreach($cart as $key => $item){

            if($item['name'] == $request->name){

                unset($cart[$key]);
                break;
            }
        }

        $cart = array_values($cart);
    }

    session()->put('cart', $cart);

    return response()->json([
        'success' => true
    ]);
}
}