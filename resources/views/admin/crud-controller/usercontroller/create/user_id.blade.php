<div class="form-group">
    <label class="form-label required" for="cars">Cars</label>
    <x-select-list
        class="form-control"
        id="car_user"
        name="user.car_user"
        wire:model="user.car_user"
        :options="{{Car::all()->pluck("","id")->asArray()}}"
        multiple
    />
    <div class="validation-message">
        errorMessage
    </div>
</div>

