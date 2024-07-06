<style>
.window {
  width: 400px;
  margin: auto;
  border: 7px solid #1d505d;
  border-radius: 5px;
  box-shadow: 0px 20px 46px 2px #bcc6ff;
  cursor: n-resize;
}

.window img {
  width: 100%;
  object-fit: cover;
  object-position: top;
  height: 270px;
  transition: 8s all ease;
}

.window img:hover {
  object-position: bottom;
}

.credit {
  font-weight: 300;
  text-align: center;
  margin-top: 6rem;
  color: #b6bee8;
  font-size: 14px;
}

.credit:hover span {
  color: #e91e63;
}

.credit:hover a {
  color: #e91e63;
  border-color: #e91e63;
}

.credit span {
  color: #b6bee8;
  transition: ease all 200ms;
}

.credit a {
  color: #b6bee8;
  transition: ease-in all 700ms;
  -webkit-text-decoration: none;
  text-decoration: none;
  border-bottom: 2px solid #b6bee8;
}

.credit a:hover {
  color: #fff;
  box-shadow: inset 0 -5.5rem 0 #e91e63;
  border-bottom: 2px solid #e91e63;
}

</style>



<div class="row mt-10">
    @foreach ($templates as $template)
        <div class="col-lg-3 position-relative">
            <div>
                <input type="radio" class="btn-check template-btn-check" name="nfc_template"
                    value="{{ $template['value'] }}" id="{{ $template['value'] }}" />
                <label
                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                    for="{{ $template['value'] }}" style="">
                    <div class="window">
                        <img src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
                      </div>
                </label>
            </div>
        </div>
    @endforeach
</div>
