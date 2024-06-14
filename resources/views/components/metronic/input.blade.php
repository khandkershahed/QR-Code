{{-- @props(['id', 'name','readonly'])
       <input id="{{ $id ?? '' }}" type="{{ $type ?? 'text' }}"
            class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
            placeholder="{{ $placeholder ?? '' }}" value="{{ old($name, $value ?? '') }}" {{ $readonly ? 'readonly' : '' }}/>
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror --}}
        {{-- <x-input id="full_name" type="text" name="full_name" placeholder="Enter full name"
    colSize="col-lg-8"></x-input> --}}
    @props(['id', 'type', 'name', 'placeholder' => '', 'value', 'readonly' => false])

    <input id="{{ $id }}" type="{{ $type }}"
        class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
        placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}"
        @if($readonly) readonly @endif />

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
