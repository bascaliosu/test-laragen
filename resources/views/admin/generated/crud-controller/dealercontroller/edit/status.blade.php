<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status') }}" for="36" :errors="$errors->get('dealer.status')" >
    <x-laragen::input.select name="dealer.status" id="36" wire:model.defer="dealer.status" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                                </x-laragen::input.select>
</x-laragen::input.group>