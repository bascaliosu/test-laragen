<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status2') }}" for="37" :errors="$errors->get('dealer.status2')" >
    <x-laragen::input.text placeholder="status2" name="dealer.status2" id="37" wire:model.defer="dealer.status2" />
</x-laragen::input.group>