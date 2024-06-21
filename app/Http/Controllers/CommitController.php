<?php

namespace App\Http\Controllers;

use App\Models\Commit;
use App\Http\Requests\StoreCommitRequest;
use App\Http\Requests\UpdateCommitRequest;

class CommitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('commit');
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
    public function store(StoreCommitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commit $commit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commit $commit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommitRequest $request, Commit $commit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commit $commit)
    {
        //
    }
}
