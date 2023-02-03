<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.user.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('user.show', ['user' => $user])

</x-layouts.app>