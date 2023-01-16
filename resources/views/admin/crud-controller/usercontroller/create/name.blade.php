<div class="form-group">
    <label for="26">
        name
        <input type="text"
               id="26"
               name="user.name"
               class="form-control"
               placeholder="name"
               wire:model.defer="user.name"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
