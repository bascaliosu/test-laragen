<?php
namespace App\Http\Livewire\GeneratedTraits\User;

use App\Models\User;
                use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public User $user;

                                            
    public function mount(User $user)
    {
        $this->user = $user;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->user->save();

        return redirect()->route('laragen.admin.users.index');
    }

    public function rules(): array
    {
        return [
                                                                    'user.name' => [
                                                                                                                ],
                                                                    'user.email' => [
                                                                                                                ],
                    ];
    }
}
