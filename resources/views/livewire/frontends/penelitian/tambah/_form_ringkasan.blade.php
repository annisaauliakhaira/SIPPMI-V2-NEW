<div class="row">
    <div class="col-lg-2">
        <x-label for="ringkasan">
            <strong>Ringkasan</strong>
        </x-label>
    </div>
    <div class="col-lg-10" >
        <div class="form-group">
            <textarea wire:model.lazy="ringkasan" class="form-control" rows="8" placeholder="Your message here...">{{ old('ringkasan') }}</textarea>
        </div>
    </div>
</div>