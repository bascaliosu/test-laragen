<x-laragen::input.group label="{{ __trans('cruds.car-type.fields.name') }}" for="33" :errors="$errors->get('carType.name')" >
    <x-laragen::input.text placeholder="name" name="carType.name" id="33" wire:model.defer="carType.name" />
</x-laragen::input.group>