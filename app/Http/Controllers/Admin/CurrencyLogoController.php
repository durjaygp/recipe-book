<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurrencyLogo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrencyLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = CurrencyLogo::whereStatus(1)->latest()->get();
        return view('backEnd.logo.index',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'logo' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create or update your CurrencyLogo model here
            $currencyLogo = new CurrencyLogo();
            $currencyLogo->name = $request->name;
            $currencyLogo->logo = $request->logo;
            $currencyLogo->description = $request->description;
            $currencyLogo->status = $request->status;
            $currencyLogo->save();

            // Redirect with success message
            return redirect()->back()->with('success', 'Currency Logo created successfully');

        } catch (QueryException $e) {
            // Handle database-related errors
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());

        } catch (\Exception $e) {
            // Handle other general errors
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            // Create or update your CurrencyLogo model here
            $currencyLogo = CurrencyLogo::find($id);
            $currencyLogo->delete();

            // Redirect with success message
            return redirect()->back()->with('success', 'Deleted Logo successfully');

        } catch (QueryException $e) {
            // Handle database-related errors
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());

        } catch (\Exception $e) {
            // Handle other general errors
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
