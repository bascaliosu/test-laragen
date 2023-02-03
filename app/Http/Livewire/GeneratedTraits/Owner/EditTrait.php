<?php
namespace App\Http\Livewire\GeneratedTraits\Owner;

use App\Models\Owner;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public Owner $owner;

                        
    public function mount(Owner $owner)
    {
        $this->owner = $owner;
                                }

    public function submit()
    {
        $this->validate();

        $this->owner->save();

        return redirect()->route('laragen.admin.owners.index');
    }

    public function rules(): array
    {
        return [
                                                                    'owner.name' => [
                                                                                                                ],
                    ];
    }
}
