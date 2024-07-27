<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();   
        return view('admin.user.index', compact('users'));
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
    public function store(Request $request)
    {
        //
    }
        /**
     *  Update disale
     */
    public function updateDisable(Request $request, string $id){
        try {
            $user = User::findOrFail($id);
            $disable = $user['disable'];
            if($disable == 0){
                $newDisable = 1;
            }else{
                $newDisable = 0;
            }
            $user->update([
                'disable' => $newDisable
            ]);
            return redirect()->route('admin.user.index');
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['error' => 'Error']);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()
            ->route('admin.user.index')
            ->with('success', 'Deleted user successfully');
    }
}
