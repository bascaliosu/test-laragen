<x-laragen::input.group label="{{ __trans('cruds.dealer.fields.status2') }}" for="37" :errors="$errors->get('dealer.status2')" >
    <x-laragen::input.select name="dealer.status2" id="37" wire:model.defer="dealer.status2" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                                </x-laragen::input.select>
</x-laragen::input.group>