<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.owner.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('owner.create')

</x-layouts.app>