<?php

namespace App\Http\Controllers;

use App\Models\CurrencyLogo;
use App\Models\Social;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::latest()->get();
        return view('backEnd.socials.index',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.socials.create');
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
                'icon' => 'required',
                'link' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create or update your CurrencyLogo model here
            $currencyLogo = new Social();
            $currencyLogo->name = $request->name;
            $currencyLogo->icon = $request->icon;
            $currencyLogo->link = $request->link;
            $currencyLogo->status = $request->status;
            $currencyLogo->save();

            // Redirect with success message
            return redirect()->back()->with('success', 'Social created successfully');

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
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
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
            $currencyLogo = Social::find($id);
            $currencyLogo->delete();

            // Redirect with success message
            return redirect()->back()->with('success', 'Deleted successfully');

        } catch (QueryException $e) {
            // Handle database-related errors
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());

        } catch (\Exception $e) {
            // Handle other general errors
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
