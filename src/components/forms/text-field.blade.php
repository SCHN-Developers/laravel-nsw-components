<div class="nsw-forms nsw-m-bottom-sm">
   
   <div class="nsw-forms">
    <div class="nsw-form-group">
        <label for="{{ $id }}" class="nsw-form-label">{{ $label }}</label> 
        @if(isset($helpText))<span id="{{ "$name--help"}}" class="nsw-form-helper">{{ $helpText ?? ''}}</span>@endif
            <input 
                {{ $attributes->except('class')->merge(['class' => 'nsw-form-input']) }}
                aria-describedby="{{ "$name--help $name--error" }}" 
                @error($attributes->whereStartsWith('wire:model')->first()) aria-invalid="true" @enderror
                >
      
        @if($attributes->whereStartsWith('wire:model')->first() != null)
            @error($attributes->whereStartsWith('wire:model')->first())     
                <span id="{{"$name--error"}}" class="nsw-form-helper nsw-form-helper--error">{{ str_replace('form data.','',$message) }}</span>
            @enderror   
       @else
            @error("$name")
                <span id="{{"$name--error"}}" class="nsw-form-helper nsw-form-helper--error">{{ $message }}</span>
            @enderror   
       @endif
      
    </div>
    </div>
</div>
