<x-laragen::input.group label="{{ __trans('cruds.car.fields.name') }}" for="24" :errors="$errors->get('car.name')" >
    <x-laragen::input.select name="car.name" id="24" wire:model.defer="car.name" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                                    <option value="test_name_1">name 1</option>
                            <option value="test_name_2">name 2</option>
                        </x-laragen::input.select>
</x-laragen::input.group>