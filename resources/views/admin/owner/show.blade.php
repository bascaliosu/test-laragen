<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.owner.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('owner.show', ['owner' => $owner])

</x-layouts.app>