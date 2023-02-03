<?php
namespace App\Http\Livewire\GeneratedTraits\Dealer;

use App\Models\Dealer;
            use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public Dealer $dealer;

                                                                
    public function mount(Dealer $dealer)
    {
        $this->dealer = $dealer;
                                                                        }

    public function submit()
    {
        $this->validate();

        $this->dealer->save();

        return redirect()->route('laragen.admin.dealers.index');
    }

    public function rules(): array
    {
        return [
                                                                    'dealer.status' => [
                                                                                                                ],
                                                                    'dealer.status2' => [
                                                                                                                ],
                                                                    'dealer.status3' => [
                                                                                                                ],
                    ];
    }
}
