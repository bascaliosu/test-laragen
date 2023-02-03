<x-laragen::input.group label="{{ __trans('cruds.owner.fields.name') }}" for="28" :errors="$errors->get('owner.name')" >
    <x-laragen::input.text placeholder="name" name="owner.name" id="28" wire:model.defer="owner.name" />
</x-laragen::input.group>