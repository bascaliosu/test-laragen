<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.dealer.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.dealers.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('dealer.index')

</x-layouts.app>