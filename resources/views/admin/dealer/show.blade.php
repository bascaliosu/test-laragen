<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.dealer.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('dealer.show', ['dealer' => $dealer])

</x-layouts.app>