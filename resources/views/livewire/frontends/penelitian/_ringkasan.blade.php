<x-card>
    <x-card-body>

        @include('livewire.backends.penelitian._info')

        <div class="form-group">
            @if($errors->has('ringkasan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ringkasan') }}
                    </div>
            @endif
            <x-label for="ringkasan">
                <strong>Ringkasan</strong>
            </x-label>
            <textarea wire:model="comment" row="4" class="form-control w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="comment" placeholder="Your message here...">{{ old('comment') }}</textarea>
        </div>
    </x-card-body>

    
</x-card>