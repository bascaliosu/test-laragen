<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.owner.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('owner.edit', ['owner' => $owner])

</x-layouts.app>