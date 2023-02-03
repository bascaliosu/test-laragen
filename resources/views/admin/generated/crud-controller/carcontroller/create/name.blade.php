<x-laragen::input.group label="{{ __trans('cruds.car.fields.name') }}" for="24" :errors="$errors->get('car.name')" >
    <x-laragen::input.text placeholder="name" name="car.name" id="24" wire:model.defer="car.name" />
</x-laragen::input.group>