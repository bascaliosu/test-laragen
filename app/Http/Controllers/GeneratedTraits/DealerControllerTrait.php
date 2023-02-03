<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\Dealer;

trait DealerControllerTrait
{
    public function index()
    {
        return view('admin.dealer.index');
    }

    public function create()
    {
        return view('admin.dealer.create');
    }

    public function edit(Dealer $dealer)
    {
        return view('admin.dealer.edit', compact('dealer'));
    }

    public function show(Dealer $dealer)
    {
        return view('admin.dealer.show', compact('dealer'));
    }
}
