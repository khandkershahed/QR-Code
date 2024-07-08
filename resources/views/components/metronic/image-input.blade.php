<style>
    .image-picker {
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: .475rem;
        display: inline-block;
        position: relative;
    }

    .image-picker .previewImage {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 100%;
        border-radius: .313rem;
        height: 100px;
        width: 100px;
    }

    .image-picker .picker-edit {
        align-items: center;
        background-color: #fff;
        display: flex;
        height: 25px;
        justify-content: center;
        position: absolute;
        right: -10px;
        text-align: center;
        top: -10px;
        width: 25px;
    }

    .image-picker .picker-edit,
    .image-picker .previewImage {
        border: .063rem solid #e9ecef;
        box-shadow: 0 5px 20px rgba(173, 181, 189, .2);
    }

    .image-picker .picker-edit label {
        cursor: pointer;
    }
</style>
@props(['id' => '', 'name', 'source' => ''])

<div class="d-block">
    <div class="image-picker">
        <div class="image previewImage" id="{{ $id ?? 'image-input' }}-preview"
            style="
          background-image: url('https://mydigitalnfccard.com/web/media/avatars/user.png');
        ">
        </div>
        <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip" data-placement="top"
            data-bs-original-title="Change Image">
            <label>
                <svg class="svg-inline--fa fa-pen" id="profileImageIcon" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z">
                    </path>
                </svg>
                <input id="{{ $id ?? 'image-input' }}" type="file"
                    class="form-control @error($name)is-invalid @enderror" name="{{ $name }} d-none" accept="image/*"
                    {{ $attributes }} onchange="previewFile(this)" />
            </label>
        </span>
    </div>
    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
</div>


{{-- <div class="row gx-1">
    <div class="col-10">
        <input id="{{ $id ?? 'file-input' }}" type="file" class="form-control @error($name)is-invalid @enderror"
            name="{{ $name }}" accept="image/*" {{ $attributes }} onchange="previewFile(this)" />

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-2 mt-n7">
        <img id="{{ $id ?? 'file-input' }}-preview" src="{{ $source ? $source : '' }}" alt="Image Preview"
            class="img-thumbnail" style="display: {{ $source ? 'block' : 'none' }};" width="55px" height="68px">
    </div>
</div> --}}

<script>
    function previewFile(input) {
        var file = input.files[0];
        var preview = document.getElementById(input.id + '-preview');
        var reader = new FileReader();

        if (file && file.size > 2 * 1024 * 1024) { // 2MB
            alert("File size must be less than 2MB");
            input.value = ''; // Clear the input
            preview.src = '';
            preview.style.display = 'none';
            return;
        }

        if (file) {
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>
