<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\Owner;

trait OwnerControllerTrait
{
    public function index()
    {
        return view('admin.owner.index');
    }

    public function create()
    {
        return view('admin.owner.create');
    }

    public function edit(Owner $owner)
    {
        return view('admin.owner.edit', compact('owner'));
    }

    public function show(Owner $owner)
    {
        return view('admin.owner.show', compact('owner'));
    }
}
