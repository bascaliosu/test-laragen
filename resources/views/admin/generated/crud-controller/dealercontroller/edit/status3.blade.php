<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status3') }}" for="38" :errors="$errors->get('dealer.status3')" >
    <x-laragen::input.text placeholder="status3" name="dealer.status3" id="38" wire:model.defer="dealer.status3" />
</x-laragen::input.group>