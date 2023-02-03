<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.owner.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.owners.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('owner.index')

</x-layouts.app>