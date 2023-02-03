<x-laragen::input.group label="{{ __trans('cruds.user.fields.email') }}" for="15" :errors="$errors->get('user.email')" >
    <x-laragen::input.text placeholder="email" name="user.email" id="15" wire:model.defer="user.email" />
</x-laragen::input.group>