<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.user.fields.email') }}" for="36" :errors="$errors->get('user.email')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.user.fields.email')}}" name="user.email" id="36" wire:model.defer="user.email" />
</x-laragen::input.group>