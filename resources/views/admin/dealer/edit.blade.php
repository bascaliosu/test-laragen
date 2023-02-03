<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.dealer.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('dealer.edit', ['dealer' => $dealer])

</x-layouts.app>