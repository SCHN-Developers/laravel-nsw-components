    <div class="nsw-forms">
        <div class="nsw-form-group">
            <label for="{{ $id }}" class="nsw-form-label">{{ $label }}</label>
            <select 
                {{ $attributes->except('options')->merge(['class' => 'nsw-form-select']) }}
                aria-describedby="{{ "$name--help $name--error" }}" 
                @error($attributes->whereStartsWith('wire:model')->first()) aria-invalid="true" @enderror
                @error("$name") aria-invalid="true" @enderror
                >
                <option value="">Please select</option>
                @foreach ($options as $option)
                        <option value="{{ $option }}">{{ ucwords($option) }}</option>
                @endforeach
            </select>
            @if($attributes->whereStartsWith('wire:model')->first() != null)
                @error($attributes->whereStartsWith('wire:model')->first())     
                    <span id="{{"$name--error"}}" class="nsw-form-helper nsw-form-helper--error"> {{$message }}</span>
                @enderror   
            @else
                @error("$name")
                    <span id="{{"$name--error"}}" class="nsw-form-helper nsw-form-helper--error">{{ $message }}</span>
                @enderror   
            @endif
        </div>
    </div>