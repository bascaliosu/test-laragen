<x-laragen::input.group label="{{ __trans('cruds.car.fields.type_id') }}" for="5" :errors="$errors->get('car.type_id')" >
    <x-laragen::input.select name="car.type_id" id="5" wire:model.defer="car.type_id" >        <option value="" disabled selected>{{ trans('global.choose') }}</option>
                    @foreach($carTypes as $item)
                <option value="{{ $item->id }}">
                    {{$item->}}                </option>
            @endforeach
            </x-laragen::input.select>
</x-laragen::input.group>