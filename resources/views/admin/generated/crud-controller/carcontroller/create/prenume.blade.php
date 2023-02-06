<x-laragen::input.group label="{{ __trans('cruds.car.fields.prenume') }}" for="25" :errors="$errors->get('car.prenume')" >
    <x-laragen::input.select name="car.prenume" id="25" wire:model.defer="car.prenume" >        <option value="" selected>{{ trans('global.choose') }}</option>
                                    <option value="1">test 1</option>
                            <option value="0">test 2</option>
                        </x-laragen::input.select>
</x-laragen::input.group>