<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.user.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.users.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('user.index')

</x-layouts.app>