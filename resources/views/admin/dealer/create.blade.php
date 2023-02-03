<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.dealer.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('dealer.create')

</x-layouts.app>