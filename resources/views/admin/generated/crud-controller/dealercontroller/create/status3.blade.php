<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status3') }}" for="38" :errors="$errors->get('dealer.status3')" >
    <x-laragen::input.select name="dealer.status3" id="38" wire:model.defer="dealer.status3" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                                </x-laragen::input.select>
</x-laragen::input.group>