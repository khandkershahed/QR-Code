   <div class="row">
       <div class="d-flex flex-column flex-md-row rounded-0  p-10 bg-light">
           <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px bg-white"
               role="tablist">
               <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                   <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0 active" data-bs-toggle="tab"
                       href="#kt_vtab_pane_41" aria-selected="false" role="tab" tabindex="-1">
                       <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                       <span class="d-flex flex-column align-items-start">
                           <span class="fs-4 fw-bold">COLOR</span>
                       </span>
                   </a>
               </li>
               <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                   <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0" data-bs-toggle="tab"
                       href="#kt_vtab_pane_51" aria-selected="false" role="tab" tabindex="-1">
                       <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                       <span class="d-flex flex-column align-items-start">
                           <span class="fs-4 fw-bold">FONT STYLE</span>
                       </span>
                   </a>
               </li>
               <li class="nav-item w-100" role="presentation">
                   <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0" data-bs-toggle="tab"
                       href="#kt_vtab_pane_61" aria-selected="true" role="tab">
                        <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                       <span class="d-flex flex-column align-items-start">
                           <span class="fs-4 fw-bold">Button Color</span>
                       </span>
                   </a>
               </li>
               {{-- <li class="nav-item w-100" role="presentation">
                   <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0" data-bs-toggle="tab"
                       href="#kt_vtab_pane_71" aria-selected="true" role="tab">
                        <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                       <span class="d-flex flex-column align-items-start">
                           <span class="fs-4 fw-bold">Frame Color</span>
                       </span>
                   </a>
               </li> --}}
           </ul>

           <div class="tab-content w-100 bg-white p-3" id="myTabContent">
               <div class="tab-pane fade active show" id="kt_vtab_pane_41" role="tabpanel">
                   <div class="row py-5">
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="secondary_color_text">Background color</label>
                           <input type="color" name="background_color" value="{{ $nfc_card->background_color }}" oninput="changeBackgroundColor()"
                               class="form-control form-control-solid">
                       </div>
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="secondary_color_text">Title color </label>
                           <input type="color" name="title_color" value="{{ $nfc_card->title_color }}" oninput="changeTitleColor()"
                               class="form-control form-control-solid">
                       </div>
                   </div>
               </div>

               <div class="tab-pane fade" id="kt_vtab_pane_51" role="tabpanel">
                   <div class="row py-5">
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="Font">Font</label>
                           <select class="form-select form-select-sm form-select-solid" data-control="select2"
                               name="font_family" data-placeholder="Select an option">
                               <option></option>
                               <option value="bebas_neue" @selected($nfc_card->font_family == 'bebas_neue' )>Bebas Neue</option>
                               <option value="raleway" @selected($nfc_card->font_family == 'raleway' )>Raleway</option>
                           </select>
                       </div>
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="Font">Title Font Size</label>
                           <input type="number" name="font_size" value="{{ $nfc_card->font_size }}" id="" oninput="changeFontSize()"
                               class="form-control form-control-sm form-control-solid">
                       </div>
                   </div>
               </div>

               <div class="tab-pane fade " id="kt_vtab_pane_61" role="tabpanel">
                   <div class="row py-5">
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="buttonContact">Contact Button Background Color</label>
                           <input type="color" name="button_bg_color" value="{{ $nfc_card->button_bg_color }}" oninput="contactBgColor()"
                               class="form-control form-control-solid">
                       </div>
                       <div class="col-lg-6 offset-lg-3 align-items-center mb-3">
                           <label for="buttonContact">Contact Button Title Color</label>
                           <input type="color" name="button_title_color" value="{{ $nfc_card->button_title_color }}" oninput="contactTitleColor()"
                               class="form-control form-control-solid">
                       </div>
                   </div>
               </div>

               {{-- <div class="tab-pane fade " id="kt_vtab_pane_71" role="tabpanel">
                   <div class="row py-5">
                       <div class="col-lg-6 offset-lg-3 align-items-center">
                           <label for="formColor">Frame Color Color</label>
                           <input type="color" name="frame_color" value=""
                               class="form-control form-control-solid">
                       </div>
                   </div>
               </div> --}}
           </div>
       </div>
   </div>

  