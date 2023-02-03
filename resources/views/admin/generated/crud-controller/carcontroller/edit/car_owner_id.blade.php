<x-laragen::input.group label="{{ __trans('cruds.car.fields.car_owner_id') }}" for="1" :errors="$errors->get('car.car_owner_id')" >
    <x-laragen::input.select name="car.car_owner_id" id="1" wire:model.defer="car.car_owner_id" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                    @foreach($owners as $item)
                <option value="{{ $item->id }}">
                    {{$item->}}                </option>
            @endforeach
            </x-laragen::input.select>
</x-laragen::input.group>