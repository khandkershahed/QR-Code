<div class="row">
    @foreach ($templates as $template)
        <div class="col-xl-2 col-6">
            <label for="radio-card-{{ $template['id'] }}" class="radio-card">
                <input type="radio" name="qr_template" value="{{ $template['value'] }}"
                    id="radio-card-{{ $template['id'] }}" />
                <div class="code-template">
                    <span class="check-icon"></span>
                    <div class="card-content">
                        <img width="100px" src="{{ $template['image_url'] }}"
                            alt="" />
                    </div>
                </div>
            </label>
        </div>
    @endforeach
</div>
