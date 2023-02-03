<x-laragen::input.group label="{{ __trans('cruds.user.fields.name') }}" for="14" :errors="$errors->get('user.name')" >
    <x-laragen::input.text placeholder="name" name="user.name" id="14" wire:model.defer="user.name" />
</x-laragen::input.group>