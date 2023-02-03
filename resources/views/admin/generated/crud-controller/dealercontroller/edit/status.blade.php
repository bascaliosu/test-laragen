<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status') }}" for="36" :errors="$errors->get('dealer.status')" >
    <x-laragen::input.text placeholder="status" name="dealer.status" id="36" wire:model.defer="dealer.status" />
</x-laragen::input.group>