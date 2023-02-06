<x-laragen::input.group label="{{ __trans('cruds.car.fields.prenume') }}" for="25" :errors="$errors->get('car.prenume')" >
    <x-laragen::input.text type="number" placeholder="prenume" name="car.prenume" id="25" wire:model.defer="car.prenume" />
</x-laragen::input.group>