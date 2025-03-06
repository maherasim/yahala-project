<!-- Popup Modal  -->
<div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="width: 510px; height: 796px;
      background: #F2F2F2;
      border-radius: 10px;">
        <!-- Header Section -->
        <div class="modal-header" style="height: 314px;
        background-color: white;
        border-radius: 10px 10px 0 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;">

          <!-- Text aligned to the left -->
          <div style="text-align: left;">
            <h5 class="modal-title" id="popupModalLabel">Welcome to:</h5>
            <h6>YekBun Sharing section</h6>
          </div>

          <!-- Image remains centered -->
          <div class="text-center mt-3">
            <img src="{{ asset('assets/svg/svg-dialog/g10.svg')}}" alt="Illustration" class="img-fluid" />
          </div>
        </div>


        <!-- Modal Body -->
        <div class="modal-body">

          <div style="font-family: Genos;">
            <h5 class="modal-title" id="popupModalLabel">Select a Option:</h5>
            <h6>Share info with User</h6>
          </div>

          <!-- Icons Grid -->
          <div class="container my-4" style="width: 496px; height: 395px; padding: 0;">
            <div class="row row-col-3 g-4">

              <div class="col" style="margin-top: 2px;
      padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group 1000008347.svg')}}" class="card-img-top" alt="System Info"
                    style="width: 143px; height: 125px;" data-target="#modal1" data-bs-dismiss="modal">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">System</h5>
                    <p style="font-size: Genos; margin-bottom: 2px;">share System info</p>
                  </div>
                </div>
              </div>
              <div class="col" style="margin-top: 2px;
      padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008357.svg')}}" class="card-img-top" alt="Donation"
                    style="width: 143px; height: 125px;" data-target="#modal2" data-bs-dismiss="modal">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">Donation</h5>
                    <p class="card-text" style="font-size: Genos;">Create Donation</p>
                  </div>
                </div>
              </div>
              <div class="col" style="margin-top: 2px; padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group.svg')}}" class="card-img-top" alt="Surveys"
                    style="width: 143px; height: 125px; padding: 0;" data-target="#modal6" data-bs-dismiss="modal">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">Surveys</h5>
                    <p class="card-text" style="font-size: Genos;">Create Surveys</p>
                  </div>
                </div>
              </div>
              <div class="col" style="margin-top: 10px; padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008455.svg')}}" class="card-img-top" alt="Greetings"
                    style="width: 143px; height: 125px;" data-target="#modal4" data-bs-dismiss="modal">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">Greetings</h5>
                    <p class="card-text" style="font-size: Genos;">Share Greetings</p>
                  </div>
                </div>
              </div>
              <div class="col" style="margin-top: 10px; padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Ñëîé_1.svg')}}" class="card-img-top" alt="Events"
                    style="width: 143px; height: 125px;" data-target="#modal5" data-bs-dismiss="modal">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">Events</h5>
                    <p class="card-text" style="font-size: Genos;">Share Events</p>
                  </div>
                </div>
              </div>
              <div class="col" style="margin-top: 10px; padding-left: 0; padding-right: 0;">
                <div class="card text-center" style="width: 150px; height: 190px;" data-target="#modal6"
                  data-bs-dismiss="modal">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008478.svg')}}" class="card-img-top" alt="SOS"
                    style="width: 143px; height: 125px;">
                  <div class="card-body" style="width: 143px; height: 35px; padding: 0;">
                    <h5 class="card-title" style="margin: 0; font-size: Genos;">User</h5>
                    <p class="card-text" style="font-size: Genos;">Warn SOS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Secondary Modals -->
  <div class="modal fade" id="modal1_original" tabindex="-1" aria-labelledby="Modlal1">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="Width:375px; Height:812px; background-color: #f8f9fa;
        padding: 5px;
        border-radius: 10px;">
        <div class="modal-body" style="
              position: relative;
              border-radius: 10px;
              border: 2px dashed #356899
            ">
          <div style="
                width: Fixed (333px)px;
                height: Hug (761.24px)px;
                display: flex;
                border-radius: 10px;
                flex-direction: column;
                align-items: center;
                gap: 110px;

              ">

            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008335.svg') }}" alt="Illustration" data-target="#modal6"
              data-bs-dismiss="modal" style="height: 250px; width: 100%" />

            <div class="previewContainerWrapper" id="previewContainerWrapper" style="width: 100%; display: flex; gap: 10px; flex-wrap: wrap">
              <div class="previewContainer" style="
                    width: 100%;
                    height: 81px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-size: contain;
                    cursor: pointer;
                    border-radius: 10px;
                  ">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg') }}" alt="Illustration" data-target="#modal6"
                  data-bs-dismiss="modal" style="height: 96px; width: 69%" id="addImageButton" />

                <input type="file" class="fileInput" accept="image/jpg,image/png,image/jpeg,video/mp4" style="
                      opacity: 0;
                      width: 100%;
                      height: 100%;
                      position: absolute;
                      cursor: pointer;
                    " />
              </div>
            </div>
          </div>

          <div style="
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center; /* Centrage horizontal */
            gap: 50px; /* Réduit l'écart entre l'image et le texte */
            background-color: #fff;
            margin-top: 230px;
            border-radius: 10px;
            padding: 5px; /* Ajoute un peu de padding pour un espacement interne */
          ">
            <!-- Image à gauche -->
            <div style="display: flex; align-items: center; justify-content: center;">
              <img id="displayImage2" src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration"
                class="img-fluid" style="height: 40px; width: 41px; cursor: pointer;margin-left: 2px;" />
              <input type="file" id="imageUploader2" accept="image/jpg,image/png,image/jpeg,video/mp4" style="display: none;" />
            </div>

            <!-- Texte à droite -->
            <div style="
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center; /* Centrage vertical */
              gap: 2px;
              font-family: Genos;
            ">
              <h4 style="margin: 0; text-align: center;">Another Selection</h4>
              <h6 style="margin: 0; text-align: center;">File Size H 812 - W 350</h6>
              <p style="margin: 0; text-align: center;">MP4-JPG Or PNG - <span style="color: red;">Max 5 Image</span></p>
            </div>
          </div>



          <div style="
                position: absolute;
                bottom: -10%;
                left: 100px;
                width: 202px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
            <div id="backButton" data-target="#popupModal" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>

            <div id="createButton" data-target="#modal7" style="
                  outline: none;
                  width: 100px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                  gap: 5px;
                  font-family: Genos;
                ">
              Create
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Path_2-2.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--****************** Donation****************-->

  <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true " aria-labelledby="Modlal2">
    <div class="modal-dialog modal-dialog-centered" style="position: relative">

      <div class="modal-content container"
        style="background-color: #e0e0e0; width: 375px;height: 812px; padding: 0; font-family: Genos;border-radius: 10px;">

        <div style="
        width: 50px;
        height: 130px;
              position: absolute;
              top: 1%;
              right: -17%;
              border-radius: 5px;
              z-index: 1000;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              gap: 5px;
              pointer-events: auto;
            ">

          <img id="deleteButtonModal2_old" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="backButtonToModal12" data-target="#modal12" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
        </div>
        <div class="modal-body" style="width:360px ;  height: 783px; margin: 5px; padding: 0;">

          <div style="
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 10px;
          width: 322px;
          height: 54px;
          margin: 10px auto;
          padding: 3px;
          border-radius: 5px;
          background-color: #E5E5E5;
        ">

            <button id="unlimitedButton" data-target="#modal2" style="outline: none; border: none; border-radius: 10px">
              <img src="{{ asset('assets/svg/svg-dialog/donations/Frame%201000004474.svg')}}" style="width: 100%; height: 100%" />
            </button>

            <button id="limitedButton" data-target="#modal10" style="outline: none; border: none; border-radius: 10px">
              <img src="{{ asset('assets/svg/svg-dialog/donations/Frame%201000004475.svg')}}" style="width: 100%; height: 100%" />
            </button>
          </div>

          <div style="
            width: 360px;
            height: 65px;
                display: flex;
                align-items: center;
                gap: 10px;
                background-color: #e47a7d3f;
                border-radius: 10px;
                padding: 5px;
              ">
            <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}"
              alt="" />


            <div style="
              width: 250px;
              height: 53px;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  text-align: center;
                  padding: 0;
                ">
              <div style="
                    width: 210px;
                    height: 26px;
                          display: flex;
                          align-items: center;
                          text-align: center;
                          gap: 5px;
                          font-weight: 500;
                          font-size: 22px;
                          color: #64748B;

                        ">
                <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                Donation Information

                <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
              </div>
              <div style="width: 248px; height: 24px;font-size:  14px;
              color: #ed1c24; font-weight: 400;
              line-height: 14px;">
This donation will automatically end on the specified date.
              </div>
            </div>
          </div>

          <div id="previewContainerWrapperModel2" class="previewContainerWrapperModel2" style="width: 360px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17"
                data-bs-dismiss="modal"
                style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px"
                id="addImageButtonModel2_old" />

              <!-- Input Field (covering the entire container) -->
              <input type="file" class="fileInput18_old" accept="image/jpg,image/png,image/jpeg,video/mp4"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal2_old" class="image-preview-container"
                style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal2_old" style="width: 344px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 65px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 15px;">Multi Selection</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <form>

            <div class="mb-3 card border-0" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Donation Title</label>
              <input type="text" class="form-control" id="donationTitle_2" placeholder="Type Donation Title"
                style="background-color: #e0e0e0; width: 347px;height: 35px;margin-bottom: 5px;" />
            </div>

            <div class="mb-3 card border-0" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 0;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Donation duration</label>
              <div class="row">


              <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1"
                      aria-label="Datepicker 1" autocomplete="off" />
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2"
                      aria-label="Datepicker 2" style="" autocomplete="off"/>
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>

              </div>
            </div>

            <!-- Payment Methods -->
            <div class="mb-3 card border-0" style="padding: 5px; width: 360px; height: 123px; border-radius: 10px;">
              <label class="form-label" style="font-weight: bold">Payment Method</label>
              <div class="row g-3">
                <div class="col-6">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="paypal">PayPal</label>
                    <input class="form-check-input paypal" type="checkbox" id="paypal" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="gpay">GPay</label>
                    <input class="form-check-input gpay" type="checkbox" id="gpay" checked />
                  </div>
                </div>
                <div class="col-6" style="margin-top: 6px;">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="paymentOffice">Payment Office</label>
                    <input class="form-check-input paymentOffice" type="checkbox" id="paymentOffice" checked />
                  </div>
                </div>
                <div class="col-6" style="margin-top: 6px;">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="others">Others</label>
                    <input class="form-check-input others" type="checkbox" id="others" />
                  </div>
                </div>
              </div>
            </div>


          </form>

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal2">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal2_old">
              <input type="file" class="fileInputModal2_old" accept=".mp3, .wav" name="audio"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal2_old">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal2_old"
                    style="height: 14px; width: 19px" />

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal2_old">00:00</span>

                  <img id="deleteButtonMp3Modal2_old" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;" />
                </div>
              </div>
            </div>
          </div>




          <div style="
          position: absolute;
          bottom: -100%;
          left: 100px;
          width: 202px;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
        ">
            <div id="createSOSButton" data-target="#popupModal" style="
            outline: none;
            width: 50px;
            height: 40px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
          ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>



          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- donation popup hassan -->
  <div class="modal fade" id="modal10" tabindex="-1" aria-hidden="true " aria-labelledby="Modlal10">
    <div class="modal-dialog modal-dialog-centered" style="position: relative">

    <div class="modal8-right">
          <img id="deleteButtonModal10" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
          <img id="backButtonToModal11" data-target="#modal11" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
        </div>

      <div class="modal-content bg-model-image container"
        style="background-color: #e0e0e0; width: 375px;height: 812px; padding: 0; font-family: Genos;border-radius: 10px;">

        <div class="modal-body" style="width:360px ;  height: 783px; margin: 5px; padding: 0;">

          <div class="donation">

            <button id="limitedButton2"  style="outline: none; border: none; border-radius: 10px">
              <img id="unlimit_img_uc" src="{{ asset('assets/svg/svg-dialog/Frame%201000004474.svg')}}" style="display:none; width: 100%; height: 100%" />
              <img id="unlimit_img_c" src="{{ asset('assets/svg/svg-dialog/donations/Frame%201000004474.svg')}}" style="width: 100%; height: 100%" />
            </button>

            <button id="unlimitedButton2"
              style="outline: none; border: none; border-radius: 10px">
              <img id="limit_img_c" src="{{ asset('assets/svg/svg-dialog/Frame%201000004475.svg')}}" style="display:none; width: 100%; height: 100%" />
              <img id="limit_img_uc" src="{{ asset('assets/svg/svg-dialog/donations/Frame%201000004475.svg')}}" style="width: 100%; height: 100%" />
            </button>
          </div>

          <div style="
            width: 360px;
            height: 65px;
                display: flex;
                align-items: center;
                gap: 10px;
                background-color: #e47a7d3f;
                border-radius: 10px;
                padding: 5px;
              ">
            <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}"
              alt="" />


            <div style="
              width: 250px;
              height: 53px;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  text-align: center;
                  padding: 0;
                ">
              <div style="
                    width: 210px;
                    height: 26px;
                          display: flex;
                          align-items: center;
                          text-align: center;
                          gap: 5px;
                          font-weight: 500;
                          font-size: 22px;
                          color: #64748B;

                        ">
                <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                Donation Information

                <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
              </div>
              <div style="width: 248px; height: 24px;font-size:  14px;
              color: #ed1c24; font-weight: 400;
              line-height: 14px;">
              <span id="limited_note" style="display: none">
                  This donation will close automatically once the target amount is reached.
              </span>
              <span id="unlimited_note">
                This donation will automatically end on the specified date.
              </span>
              </div>
            </div>
          </div>

          <div id="previewContainerWrapperModel10" style="width: 360px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel10" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img class="addImageButtonModel2" src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17"
                data-bs-dismiss="modal"
                style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px"
                id="addImageButtonModel10" />

              <!-- Input Field (covering the entire container0) -->
              <input type="file" name="image" form="donation_form" class="fileInput10" accept="image/jpg,image/png,image/jpeg,video/mp4"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal10" class="image-preview-container image-preview-containerModal2"
                style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>


              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal10" style="width: 344px; height: 90px; display: flex;
              align-items: center; justify-content: start;
               background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 65px; text-align: center;">

                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>







            <div class="mb-3 card border-0" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
          ">
              <label for="donationTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Donation Title</label>
              <input type="text" name="title" form="donation_form" class="form-control title_field" id="donationTitle" placeholder="Type Donation Title"
                style="background-color: #e0e0e0; width: 347px;height: 35px;margin-bottom: 5px;" />
            </div>

            <div class="mb-3 card border-0" id="unlimited_duration" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 0;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Donation duration</label>


              <div class="row">
              <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" form="donation_form" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1_donation"
                      aria-label="Datepicker 1"  autocomplete="off"/>
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" form="donation_form" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2_donation"
                      aria-label="Datepicker 2" style=""autocomplete="off" />
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
              </div>


            </div>




            <div class="mb-3 card border-0" id="limited_duration" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 0;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Donation Amount</label>
              <div class="row">


              <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group" style="">
                    <input type="text" class="form-control" placeholder="Type the Amount" name="donation_amount" id="donation_amount"
                      aria-label="Type the Amount" autocomplete="off" />
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                    <div class="input-group" style="">
                        <select name="donation_amount_type" class="form-control" id="donation_amount_type">
                            <option value="currency">Currency</option>
                        </select>
                    </div>
                  </div>

              </div>


            </div>


            <!-- Payment Methods -->
            <div class="mb-3 card border-0" style="padding: 5px; width: 360px; height: 123px; border-radius: 10px;">
              <label class="form-label" style="font-weight: bold">Payment Method</label>
              <div class="row g-3">
                <div class="col-6">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="paypal">PayPal</label>
                    <input class="form-check-input paypal" name="is_paypal" value="1" form="donation_form" type="checkbox" id="paypal" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="gpay">GPay</label>
                    <input class="form-check-input gpay" name="is_gpay" value="1" form="donation_form" type="checkbox" id="gpay" checked />
                  </div>
                </div>
                <div class="col-6" style="margin-top: 6px;">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="paymentOffice">Payment Office</label>
                    <input class="form-check-input paymentOffice" name="is_payoffice" value="1" form="donation_form" type="checkbox" id="paymentOffice" checked />
                  </div>
                </div>
                <div class="col-6" style="margin-top: 6px;">
                  <div class="form-check form-switch" style="
                        background-color: #e0e0e0;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 10px;
                        padding: 5px;
                        border-radius: 7px;
                      ">
                    <label class="form-check-label" for="others">Others</label>
                    <input class="form-check-input others" name="is_other" value="1" form="donation_form" type="checkbox" id="others" />
                  </div>
                </div>
              </div>
            </div>


          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal10">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal10">
              <input type="file" class="fileInputModal10" accept=".mp3, .wav" name="audio"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal10">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal10"
                    style="height: 14px; width: 19px" />

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal10">00:00</span>

                  <img id="deleteButtonMp3Modal10" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;" />
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- donation popup end -->

  <div class="modal fade" id="modal12" tabindex="-1" aria-hidden="true" aria-labelledby="Modlal12">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #000000BF;width: 375px;
height: 812px; padding: 0px;border-radius: 10px;">
        <div style="
 width: 50px;
 height: 130px;
       position: absolute;
       top: 1%;
       right: -17%;
       border-radius: 5px;
       z-index: 1000;
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       gap: 5px;
     ">

          <img id="deleteButtonModal12" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="backButtonToModal18" data-target="#modal18" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
        </div>

        <div class="modal-body" style="
        width: 360px;
        height: 400px;
        padding: 0;
        top: 8px;
        left: 5px;
        ">

          <div style="width: 360px;
                height: 379px; background-color: white;
                border-radius: 10px;
                padding: 5px;
">
            <div style="
            width: 350px;
            height: 30;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                  top: 10px;
                ">

              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 197px;
                    height: 30px;
                    padding: 5px;

                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                      width: 130px;
                      height: 30px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}"
                    style="width: 28px; height: 28px; object-fit: cover" />
                  <div style="
                  width: 100px;
                  height: 25px;
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                        gap: 8px;
                      ">
                    <div style="
                    width: 150px;
                    height: 11px;
                    font-family: Genos;
font-size: 20px;
font-weight: 500;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                      YekBun Team

                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>

                    <div style="
                    width: 150px;
                    height: 6px;
                    font-family: Genos;
font-size: 14px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                       width: 2px;
                       height: 2px;
                       border-radius: 45%;
                       background: #00000066;
                       "></div>
                      Time & Date
                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}"
                  style="width: 25px; height: 27px; object-fit: cover; border: none;" class="img-thumbnail" />
              </div>

            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 350px;
                  height: 27px;
                  text-align: left;
                  background: #F7F7F7;
                  padding: 7px;
                  font-family: Genos;
                  margin-top: 7px;
                  margin-bottom: 7px;
                  border-radius: 5px;
                  display: flex; /* Utilisation de Flexbox */
  align-items: center; /* Centrage vertical */
  justify-content: left; /* Centrage horizontal */

                ">
              Title of Donation
            </div>

            <div style="position: relative;
  width: 350px;
  height: 256px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('assets/svg/svg-dialog/image%20222.svg')}}"
                style="width: 350px; height: 256px; object-fit: cover; border-radius: 7px; padding: 0; display: block;" />

              <div class="overlay" style="position: absolute;
                width: 275px;
                height: 43px;
                bottom: 10px;
                left: 30px;
                display: flex;
                align-items: center;
                border-radius: 20px;
                background: #FFFFFF66;
                gap: 5px;">
                <!-- Play/Pause Icon -->
                <img src="{{ asset('assets/svg/svg-dialog/Player%20Play.svg')}}"
                  style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; cursor: pointer;" />

                <!-- Waveform Image -->
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />

                <!-- Duration Display -->
                <div style="
          font-size: 18px;
          font-family: Genos;
          color: rgb(197, 197, 197);
          width: 41px;
          height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;">
                  00:00
                </div>
              </div>


            </div>



            <div style="background-color: #F2F2F2; width: 350px; height: 38px;border-radius: 10px;">
              <div style="
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    margin-top: 5px;
                  ">
                <span style="
                      font-size: 16px;
                      text-transform: capitalize;
                      font-weight: 600;
                      color: green;
                      margin-right: 10px;
                    ">5000 $</span>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 5px;
                    margin-top: 5px;
                  ">
                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: green;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: goldenrod;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>
              </div>
            </div>




          </div>


          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos;
              text-align: left;
              font-size: 12px;

">Share Option</span>
              <div style="
                width: 2px;
                height: 2;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
            </div>

            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <button id="button1Modal12" class="toggle-buttonModal12" onclick="toggleColorModal12('button1Modal12')" style="
    border: none;
    background: #1CA2ED;
    padding: 0;
    border-radius: 7px;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
              </button>

              <button id="button2Modal12" class="toggle-buttonModal12" onclick="toggleColorModal12('button2Modal12')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
              </button>

              <button id="button3Modal12" class="toggle-buttonModal12" onclick="toggleColorModal12('button3Modal12')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
              </button>

              <button id="button4Modal12" class="toggle-buttonModal12" onclick="toggleColorModal12('button4Modal12')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
              </button>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>
          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 54px;
                height: 51px;
                margin-top: 50px;
                margin-left: 150px;
              ">
            <button style="outline: none; border: none; border-radius: 10px;background: #1BC469;
            padding: 2px;
">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Path_2-2.svg')}}" style="width: 29px; height: 26px;" />
              <span style="font-family: Genos; color: white;">share</span>
            </button>
          </div>
        </div>
        <div style="
                position: absolute;
                bottom: -10%;
                left: 100px;
                width: 202px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
          <div id="backButtonToMainFrModel17" data-target="#modal6" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
          </div>


        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modal11" tabindex="-1" aria-hidden="true" aria-labelledby="Modlal11">
    <div class="modal-dialog modal-dialog-centered">




    <div class="modal8-right">
          <img id="deleteButtonModal11" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
            <img id="GoButtonToModal18" data-target="#modal10" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
            <button type="submit" form="donation_form">
          <img id="GoButtonToModal18" data-target="#modal18" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
</button>
        </div>



      <div class="modal-content bg-model-image container" style="width: 375px;
height: 812px; padding: 0px;border-radius: 10px;">

<form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data" id="donation_form">
  @csrf
    <input type="hidden" name="upid" value="0" class="upid" />
    <input type="hidden" name="type" value="Donation" />
    <input type="hidden" name="limit" value="limited" id="limit" />

        <div class="modal-body" style="
        width: 360px;
        height: 400px;
        padding: 0;
        top: 8px;
        left: 5px;
        ">

          <div style="width: 360px;
                height: 379px; background-color: white;
                border-radius: 10px;
                padding: 5px;
">
            <div style="
            width: 350px;
            height: 30;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                  top: 10px;
                ">

              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 197px;
                    height: 30px;
                    padding: 5px;

                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                      width: 130px;
                      height: 30px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}"
                    style="width: 28px; height: 28px; object-fit: cover" />
                  <div style="
                  width: 100px;
                  height: 25px;
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                        gap: 8px;
                      ">
                    <div style="
                    width: 150px;
                    height: 11px;
                    font-family: Genos;
font-size: 20px;
font-weight: 500;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                      YekBun Team

                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>

                    <div style="
                    width: 150px;
                    height: 6px;
                    font-family: Genos;
font-size: 14px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                       width: 2px;
                       height: 2px;
                       border-radius: 45%;
                       background: #00000066;
                       "></div>
                      Time & Date
                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}"
                  style="width: 25px; height: 27px; object-fit: cover; border: none;" class="img-thumbnail" />
              </div>

            </div>

            <div id="donation_title_2" style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 350px;
                  height: 27px;
                  text-align: left;
                  background: #F7F7F7;
                  padding: 7px;
                  font-family: Genos;
                  margin-top: 7px;
                  margin-bottom: 7px;
                  border-radius: 5px;
                  display: flex; /* Utilisation de Flexbox */
  align-items: center; /* Centrage vertical */
  justify-content: left; /* Centrage horizontal */

                ">
              Title of Donation
            </div>

            <div id="donation_img" style="position: relative;
  width: 350px;
  height: 256px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

              <div class="overlay" style="position: absolute;
                width: 275px;
                height: 43px;
                bottom: 10px;
                left: 30px;
                display: flex;
                align-items: center;
                border-radius: 20px;
                background: #FFFFFF66;
                gap: 5px;">
                <!-- Play/Pause Icon -->
                <img src="{{ asset('assets/svg/svg-dialog/Player%20Play.svg')}}" id="playModal7"
                  style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; cursor: pointer;" />

                <!-- Waveform Image -->
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />

                <!-- Duration Display -->
                <div style="
          font-size: 18px;
          font-family: Genos;
          color: rgb(197, 197, 197);
          width: 41px;
          height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;" id="DurationModal7">
                  00:00
                </div>
              </div>


            </div>


            <div id="unlimi_bars" style=" background-color: #F2F2F2; width: 350px; height: 38px;border-radius: 10px;">
              <div style="
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    margin-top: 5px;
                  ">
                <span id="donation_amount_2" style="
                      font-size: 16px;
                      text-transform: capitalize;
                      font-weight: 600;
                      color: green;
                      margin-right: 10px;
                    ">5000 $</span>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 5px;
                    margin-top: 5px;
                  ">
                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: green;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: goldenrod;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>
              </div>
            </div>

            <div id="limi_bars" style="display:none; background-color: #F2F2F2; width: 350px; height: 38px;border-radius: 10px;">
              <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-top: 5px;
                  ">
                <span class="date_span">start:<span id="st_date">12.10.2025</span></span>
                <span class="date_span">expire:<span id="end_date">31.10.2025</span></span>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 5px;
                    margin-top: 5px;
                  ">
                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: green;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: goldenrod;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>
              </div>
            </div>




          </div>


          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos;
              text-align: left;
              font-size: 12px;

">Share Option</span>
              <div style="
                width: 2px;
                height: 2;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
            </div>

            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">


<label id="button1Modal8_2" class="toggle-buttonModal8 " onclick="toggleColor('button1Modal8_2')">
  <input class="options_btns button1Modal8" checked="checked" type="radio" name="option_2" value="all-users">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
</label>

              <label  id="button2Modal8_2" class="toggle-buttonModal8 " onclick="toggleColor('button2Modal8_2')">
  <input class="options_btns button2Modal8" type="radio" name="option_2" value="educated">


                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
</label>

              <label  id="button3Modal8_2" class="toggle-buttonModal8 " onclick="toggleColor('button3Modal8_2')">
                <input class="options_btns button3Modal8" type="radio" name="option_2" value="cultivated">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
</label>

              <label id="button4Modal8_2" class="toggle-buttonModal8 " onclick="toggleColor('button4Modal8_2')">
                <input class="options_btns button4Modal8" type="radio" name="option_2" value="academic">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
</label>


            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="comments" name="comments" value="1" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="share" name="share" value="1"/>
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="emoji" name="emoji" value="1"/>
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>

        </div>
</form>
      </div>


    </div>
  </div>

  <div class="modal fade" id="modal18" tabindex="-1" aria-hidden="true" aria-labelledby="Modlal18">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #000000BF;width: 375px;
height: 812px; padding: 0px;border-radius: 10px;">


        <div class="modal-body" style="
        width: 360px;
        height: 400px;
        padding: 0;
        top: 8px;
        left: 5px;
        ">

          <div style="width: 360px;
                height: 467px; background-color: white;
                border-radius: 10px;
                padding: 5px;
">
            <div style="
            width: 350px;
            height: 30;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                  top: 10px;
                ">

              <div  style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 197px;
                    height: 30px;
                    padding: 5px;

                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                      width: 130px;
                      height: 30px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}"
                    style="width: 28px; height: 28px; object-fit: cover" />
                  <div style="
                  width: 100px;
                  height: 25px;
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                        gap: 8px;
                      ">
                    <div style="
                    width: 150px;
                    height: 11px;
                    font-family: Genos;
font-size: 20px;
font-weight: 500;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                      YekBun Team

                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>

                    <div style="
                    width: 150px;
                    height: 6px;
                    font-family: Genos;
font-size: 14px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                       width: 2px;
                       height: 2px;
                       border-radius: 45%;
                       background: #00000066;
                       "></div>
                      Time & Date
                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}"
                  style="width: 25px; height: 27px; object-fit: cover; border: none;" class="img-thumbnail" />
              </div>

            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 350px;
                  height: 27px;
                  text-align: left;
                  background: #F7F7F7;
                  padding: 7px;
                  font-family: Genos;
                  margin-top: 7px;
                  margin-bottom: 7px;
                  border-radius: 5px;
                  display: flex; /* Utilisation de Flexbox */
  align-items: center; /* Centrage vertical */
  justify-content: left; /* Centrage horizontal */

                ">
              Title of Donation
            </div>

            <div style="position: relative;
  width: 350px;
  height: 256px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('assets/svg/svg-dialog/image%20222.svg')}}"
                style="width: 350px; height: 256px; object-fit: cover; border-radius: 7px; padding: 0; display: block;" />

              <div class="overlay" style="position: absolute;
                width: 275px;
                height: 43px;
                bottom: 10px;
                left: 30px;
                display: flex;
                align-items: center;
                border-radius: 20px;
                background: #FFFFFF66;
                gap: 5px;">
                <!-- Play/Pause Icon -->
                <img src="{{ asset('assets/svg/svg-dialog/Player%20Play.svg')}}"
                  style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; cursor: pointer;" />

                <!-- Waveform Image -->
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />

                <!-- Duration Display -->
                <div style="
          font-size: 18px;
          font-family: Genos;
          color: rgb(197, 197, 197);
          width: 41px;
          height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;">
                  00:00
                </div>
              </div>


            </div>


            <div  style="background-color: #F2F2F2; width: 350px; height: 38px;border-radius: 10px;">
              <div style="
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    margin-top: 5px;
                  ">
                <span style="
                      font-size: 16px;
                      text-transform: capitalize;
                      font-weight: 600;
                      color: green;
                      margin-right: 10px;
                    ">5000 $</span>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 5px;
                    margin-top: 5px;
                  ">
                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: green;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: goldenrod;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>
              </div>
            </div>

            <div  style="background-color: #F2F2F2; width: 350px; height: 38px;border-radius: 10px;">
              <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-top: 5px;
                  ">
                <span style="
                      font-size: 16px;
                      text-transform: capitalize;
                      color: green;
                      font-weight: 600;
                      margin-left: 5px;
                    ">start:12.10.2024</span>
                <span style="
                      font-size: 16px;
                      text-transform: capitalize;
                      font-weight: 600;
                      color: green;
                      margin-right: 5px;
                    ">expire:31.10.2024</span>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 5px;
                    margin-top: 5px;
                  ">
                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: red;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: green;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: goldenrod;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>

                <div style="
                      width: 25%;
                      height: 5px;
                      background-color: gray;
                      border-radius: 5px;
                    "></div>
              </div>
            </div>


            <div style="
            height: 29px;
            width: 350px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 5px;
            gap: 10px;
            margin-top: 7px;
          ">
              <div style="
              display: flex;
              align-items: center;
              gap: 5px;
              width: 170px;
              height: 17px;
            ">
                <img src="{{ asset('assets/svg/svg-dialog/Group%201000003125.svg')}}" style="width: 100px; height: 16px; object-fit: cover;" />
                <span style="
                font-weight: 400;
                font-family: Genos;
                font-size: 14px;
                white-space: nowrap;
              ">
                  300+ Donate
                </span>
              </div>

              <div style="
            display: flex;
            align-items: center;
            gap: 2px;
            width: 80px;
              height: 21px;
              background: #FC4B5D;
              border-radius: 5px;
          ">
                <div style="
              width: 100%;
              height: 100%;
              font-family: Genos;
              font-size: 12px;
              display: flex;
              align-items: center;
              justify-content: center;
              gap: 2px;
              border-radius: 5px;
              color: white;
            ">

                  <div style="
                width: 2px;
                height: 2px;
                border-radius: 45%;
                background: white;
              "></div>
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000003041.svg')}}" alt="" style="width:10px; height: 10px;">

                  <div style="
                width: 2px;
                height: 2px;
                border-radius: 45%;
                background: white;
              "></div>

                  Help Us
                  <div style="
                width: 2px;
                height: 2px;
                border-radius: 45%;
                background: white;
              "></div>
                </div>
              </div>

            </div>


          </div>


          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 54px;
                height: 51px;
                margin-top: 50px;
                margin-left: 150px;
              ">
            <button style="outline: none; border: none; border-radius: 10px;background: #1BC469;
            padding: 2px;
">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Path_2-2.svg')}}" style="width: 29px; height: 26px;" />
              <span style="font-family: Genos; color: white;">share</span>
            </button>
          </div>
        </div>
        <div style="
                position: absolute;
                bottom: -10%;
                left: 100px;
                width: 202px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
          <div id="backButtonToMainFrModel17" data-target="#modal6" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
          </div>


        </div>

      </div>
    </div>
  </div>

  <!--End-->

  <div class="modal fade" id="modal3_old" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="position: relative">
      <div class="modal-content container"
        style="background-color: #e0e0e0; width: 375px; height: 719px; border-radius: 10px;padding: 0;">
        <div class="modal-body" style="width: 360px;height: 694px; padding: 0; margin: 5px; font-family: Genos;">
          <form>
            <div style="
                  display: flex;
                  align-items: center;
                  justify-content: space-around;
                  gap: 10px;
                  background-color: #e47a7d3f;
                  border-radius: 10px;
                  padding: 5px;
                ">
              <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}"
                alt="" />

              <div style="
                    display: flex;
                    flex-direction: column;
                    text-align: center;
                    padding: 0 15px;
                  ">
                <h2 style="text-transform: capitalize; font-weight: 500">
                  donation information
                </h2>
                <span style="font-size: 16px; color: #ed1c24; font-weight: 300">
                  This donation will automatically end on the specified date.
                </span>
              </div>
            </div>

            <div style="
                  border: 2px dashed gray;
                  border-radius: 10px;
                  margin: 5px 0;
                  padding: 5px;
                ">
              <div id="previewContainerWrapperModel3" style="
                    width: 100%;
                    display: flex;
                    gap: 10px;
                    flex-wrap: wrap;
                    position: relative;
                  ">
                <div class="previewContainerModel3" style="
                      width: 100%;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      background-size: contain;
                      cursor: pointer;
                      border-radius: 10px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal6"
                    data-bs-dismiss="modal" style="height: 180px; width: 100%" id="addImageButtonModel3" />

                  <input type="file" class="fileInput3" style="
                        opacity: 0;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        cursor: pointer;
                        left: 0;
                        top: 0;
                      " />
                </div>
              </div>

              <div style="
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: start;
                    gap: 50px;
                    background-color: #fff;
                    margin-top: 20px;
                    border-radius: 10px;
                    padding: 5px;
                  ">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal2" data-bs-dismiss="modal" style="height: 80px; width: 80px;margin-left: 10px;" />

                <div style="text-align: center">
                  <h4>Multi Selection</h4>
                  <h6>File Size H 812 - W 350</h6>
                  <p>MP4-JPG Or PNG - <span style="color: red;">Max 5 Image</span></p>
                </div>
              </div>
            </div>

            <div class="mb-3 card border-0" style="
                  background-color: #fff;
                  padding: 10px;
                  border-radius: 5px;
                ">
              <label for="surveyTitle" class="form-label" style="font-weight: bold">Surveys Title</label>
              <input type="text" class="form-control" id="surveyTitle" placeholder="Type Donation Title"
                style="background-color: #e0e0e0" />
            </div>

            <!-- Donation Duration -->
            <div class="mb-3 card border-0" style="
                  background-color: #fff;
                  padding: 10px;
                  border-radius: 5px;
                ">
              <label class="form-label" style="font-weight: bold">Surveys donation</label>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" style="background-color: #e0e0e0"
                    placeholder="Type the amount" />
                </div>
                <div class="col">
                  <input type="text" class="form-control" style="background-color: #e0e0e0"
                    placeholder="Type the amount" />
                </div>
              </div>
            </div>

            <div class="reaction-container shadow-sm">
              <div class="reaction-header">
                <span>Allowed Reaction2</span>
                <span>Max. 10 Letters</span>
              </div>
              <div class="reaction-item">
                <div class="reaction-icon">
                  <input type="file" id="fileUpload1" />
                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>
              <div class="reaction-item">
                <div class="reaction-icon">
                  <input type="file" id="fileUpload2" />
                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>
              <div class="reaction-item">
                <div class="reaction-icon">
                  <input type="file" id="fileUpload3" />
                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
              <div id="createSurveyInfo" data-target="#modal13" style="
                    padding: 10px;
                    outline: none;
                    border: none;
                    border-radius: 10px;
                    font-size: 18px;
                    background-color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 10px;
                  ">
                <span>Create </span>
                <img src="{{ asset('assets/svg/svg-dialog/donations/Icons_discover_copy.svg')}}" style="width: 30px; height: 100%" alt="" />
              </div>
            </div>
          </form>

          <div class="d-flex justify-content-center align-items-center;" style="
                position: absolute;
                bottom: -7%;
                width: 100%;
                display: flex;
                align-items: center;
                gap: 20px;
              ">
            <div id="backButtonToMainFrModel3" data-target="#popupModal" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>

            <button id="createSurveyInfo" data-target="#modal13" type="submit" style="
                  padding: 10px;
                  outline: none;
                  border: none;
                  border-radius: 10px;
                  font-size: 18px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  gap: 10px;
                ">
              <span>Create </span>
              <img src="{{ asset('assets/svg/svg-dialog/donations/Icons_discover_copy.svg')}}" style="width: 30px; height: 100%" alt="" />
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal7" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="
              width: 375px;
              height: 812px;
              gap: 0px;
              opacity: 0px;
              border-radius: 10px;

            ">
        <div style="
        position: absolute;
        top: 11px;
        right: 5px;
        width: 80px;
        height: 40px;
        border-radius: 10px;
        z-index: 1000; display: flex;
        align-items: center;
        background: #1c274c62;
            ">


          <!-- Image -->
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Vector.svg')}}"
            style="width: 30px; height: 30px; margin: 5px; border-radius: 5px; object-fit: cover; color:#FFFFFF;" />
          <!-- Number on the right -->
          <div id="imageCounter" style="
          font-size: 30px;
          font-weight: bold;
          font-family: Genos;
          color: white;
          width: 30px;
          height: 30px;
          display: flex;
          justify-content: center;
          align-items: center;">
            0 <!-- Replace with dynamic number if needed -->
          </div>

        </div>




        <div class="modal-body">
          <!-- الصورة الرئيسية -->
          <img id="mainImage" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/image%201425.svg')}}" class="img-fluid" style="
                position: absolute;
                top: 0%;
                left: 0%;
                width: 375px;
                height: 812px;
                border-radius: 10px;
              " alt="Main View" />
        </div>

        <div class="modal-footer border-0 d-flex justify-content-center"
          style="position: absolute; bottom: 0; left: 0; width: 100%">
          <div style="
              display: flex;
              gap: 10px;
              align-items: center;
              justify-content: space-between;
              width: 100%;
              position: absolute;
              top: -30%;
              padding: 5px;
            ">
          </div>

          <div style="
              background-color: #deeff0ab;
              border-radius: 10px;
              width: 362px;
              height: 113px;
              display: flex;
              flex-direction: column;
              gap: 10px;
              padding: 10px;
            ">
            <textarea name="" id="" placeholder="Type Your Text.." class="form-control" style="
              width: 348px;
              height: 47px;
              background-color: white;
              border-radius: 10px;
              font-weight: bold;
              font-family: Genos;
              outline: none;
              border: none;
              resize: none;
              padding: 10px;
            "></textarea>

            <div style="
              width: 349px;
              height: 45px;
              display: flex;
              gap: 30px;
              align-items: center;
              justify-content: center;
              flex-wrap: wrap;
            " id="thumbnailContainer">
              <!-- Thumbnails will be dynamically inserted here -->
            </div>
          </div>
        </div>

        </div>


      <div style="width: 50px; height: 272px; position: absolute;
              top: 4%; right: -17%; border-radius: 5px; z-index: 10000000;
              display: flex; flex-direction: column; align-items: center;
              justify-content: center; gap: 5px; pointer-events: auto
            ">

          <img id="deleteButton" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />


          <img id="shareButton" data-target="#modal8" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; z-index: 10000000; height: 100%; cursor: pointer;" />

          <img id="backButtonToModal1"  data-target="#modal1" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="shareButton" data-target="#modal8" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />
        </div>


    </div>
  </div>






  <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #e0e0e0;width: 375px;
height: 812px; padding: 0px;border-radius: 10px; gap: 0px; opacity: 0px;">

<form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="upid" value="0" class="upid" />
    <input type="hidden" name="type" value="System" />

        <div class="modal-body" style="  width: 360px; height: 400px; padding: 0; top: 8px; left: 5px; ">
          <div style="width: 360px; height2: 423px; background-color: white; border-radius: 10px; padding: 5px;">


            <div style=" width: 350px; height: 30; display: flex; justify-content: space-between; align-items: center;
                  margin: 0; top: 10px; ">



            <div style=" width: 360px; height: 65px; display: flex; align-items: center; gap: 10px;
                background-color: #e47a7d3f; border-radius: 10px; padding: 5px; ">
              <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}" alt="">
            <div style="width: 250px;height: 53px;display: flex;flex-direction: column; align-items: center;text-align: center;padding: 0;">
              <div style="width: 210px;height: 26px;display: flex;align-items: center;text-align: center; gap: 5px;font-weight: 500;font-size: 22px;color: #64748B;">
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
                  System Information
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
              </div>


              <div style="width: 248px; height: 24px;font-size:  14px;  color: #ed1c24; font-weight: 400; line-height: 14px;">
                Share System Info
              </div>



            </div>
          </div>

</div>
                <!-- here need to put image option -->

                <div id="previewContainerWrapperModel2" class="previewContainerWrapperModel2" style="width: 350px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px" class="addImageButtonModel2" id="addImageButtonModel2">

              <!-- Input Field (covering the entire container) -->
              <input type="file" name="image" required class="fileInput18" accept="image/jpg,image/png,image/jpeg,video/mp4" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal2" class="image-preview-container image-preview-containerModal2" style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal2" class="descriptionTextContainerModal2" style="width: 340px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 65px; text-align: center;">

                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
</div>

                  <!-- here image option end -->





          <div class="mb-1 card border-0" style=" background-color: #fff; margin-top:10px; padding: 10px; border-radius: 5px;">
              <label for="title_field" class="form-label" style="font-weight: bold">Type Title</label>
              <input type="text" class="form-control title_field" name="title"  id="title_field" placeholder="Type Title"
                style="background-color: #e0e0e0" />
          </div>
          <!-- ali hassan -->

          <div class="mb-3 card border-0 time_div">
              <label for="surveysTitle" class="form-label time_label">Time duration</label>
              <div class="row">
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1"
                      aria-label="Datepicker 1"  autocomplete="off"/>
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2"
                      aria-label="Datepicker 2" style="" autocomplete="off"/>
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
              </div>
          </div>

          <!-- ends -->



          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos; text-align: left; font-size: 12px;">Share Option</span>
              <div style=" width: 2px; height: 2; border-radius: 50%; background-color: #4e4e4e; "></div>
            </div>




            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <label id="button1Modal8" class="toggle-buttonModal8 " onclick="toggleColor('button1Modal8')">
  <input class="options_btns button1Modal8" checked="checked" type="radio" name="option" value="all-users">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
</label>

              <label  id="button2Modal8" class="toggle-buttonModal8 " onclick="toggleColor('button2Modal8')">
  <input class="options_btns button2Modal8" type="radio" name="option" value="educated">


                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
</label>

              <label  id="button3Modal8" class="toggle-buttonModal8 " onclick="toggleColor('button3Modal8')">
                <input class="options_btns button3Modal8" type="radio" name="option" value="cultivated">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
</label>

              <label id="button4Modal8" class="toggle-buttonModal8 " onclick="toggleColor('button4Modal8')">
                <input class="options_btns button4Modal8" type="radio" name="option" value="academic">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
</label>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input comments" name="comments" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input share" name="share" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input emoji" name="emoji" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>


          <!-- custom audio section -->

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal2">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal2">
              <input type="file" class="fileInputModal2" accept=".mp3, .wav" name="audio" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal2">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal2" style="height: 14px; width: 19px">

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal2">00:00</span>

                  <img id="deleteButtonMp3Modal2" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;">
                </div>
              </div>
            </div>
          </div>

          <!-- custom audio section ends -->



        </div>
      </div>



    <div class="modal8-right">
          <img id="deleteButtonModal2" class="deleteButtonModal2" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 50px; height: 50px" />
<button type="submit">
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 50px; height: 50px" />
</button>
          <!--<img id="backButtonToModal7" data-target="#modal7" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 50px; height: 50px" />-->
        </div>

</form>


        </div>
  </div>

  <!-- Donation model -->

  <div class="modal fade" id="modal2_old" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #e0e0e0;width: 375px;
height: 812px; padding: 0px;border-radius: 10px; gap: 0px; opacity: 0px;">

<form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="upid" value="0" class="upid" />
    <input type="hidden" name="type" value="Surveys" />

        <div class="modal-body" style="  width: 360px; height: 400px; padding: 0; top: 8px; left: 5px; ">
          <div style="width: 360px; height2: 423px; background-color: white; border-radius: 10px; padding: 5px;">


            <div style=" width: 350px; height: 30; display: flex; justify-content: space-between; align-items: center;
                  margin: 0; top: 10px; ">



            <div style=" width: 360px; height: 65px; display: flex; align-items: center; gap: 10px;
                background-color: #e47a7d3f; border-radius: 10px; padding: 5px; ">
              <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}" alt="">
            <div style="width: 250px;height: 53px;display: flex;flex-direction: column; align-items: center;text-align: center;padding: 0;">
              <div style="width: 210px;height: 26px;display: flex;align-items: center;text-align: center; gap: 5px;font-weight: 500;font-size: 22px;color: #64748B;">
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
                  Surveys
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
              </div>


              <div style="width: 248px; height: 24px;font-size:  14px;  color: #ed1c24; font-weight: 400; line-height: 14px;">
                Create Surveys
              </div>



            </div>
          </div>

</div>
                <!-- here need to put image option -->

                <div id="previewContainerWrapperModel2_3"  style="width: 350px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px" class="addImageButtonModel2"  id="addImageButtonModel2_3_0">

              <!-- Input Field (covering the entire container) -->
              <input type="file" name="image" required class="fileInput18_3_0" accept="image/jpg,image/png,image/jpeg,video/mp4" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal2_3_0" class="image-preview-container image-preview-containerModal2" style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal2_3_0" class="descriptionTextContainerModal2" style="width: 340px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 65px; text-align: center;">

                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
</div>

                  <!-- here image option end -->





          <div class="mb-1 card border-0" style=" background-color: #fff; margin-top:10px; padding: 10px; border-radius: 5px;">
              <label for="title_field" class="form-label" style="font-weight: bold">Type Title</label>
              <input type="text" class="form-control title_field" name="title"  id="title_field" placeholder="Type Title"
                style="background-color: #e0e0e0" />
          </div>
          <!-- ali hassan -->

          <div class="mb-3 card border-0 time_div">
              <label for="surveysTitle" class="form-label time_label">Time duration</label>
              <div class="row">
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1"
                      aria-label="Datepicker 1"  autocomplete="off"/>
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2"
                      aria-label="Datepicker 2" style="" autocomplete="off"/>
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
              </div>
          </div>

          <!-- ends -->



          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos; text-align: left; font-size: 12px;">Share Option</span>
              <div style=" width: 2px; height: 2; border-radius: 50%; background-color: #4e4e4e; "></div>
            </div>




            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <label id="button1Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button1Modal8_3')">
  <input class="options_btns button1Modal8" checked="checked" type="radio" name="option_3" value="all-users">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
</label>

              <label  id="button2Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button2Modal8_3')" >
  <input class="options_btns button2Modal8_3" type="radio" name="option_3" value="educated">


                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
</label>

              <label  id="button3Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button3Modal8_3')" >
                <input class="options_btns button3Modal8_3" type="radio" name="option_3" value="cultivated">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
</label>

              <label id="button4Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button4Modal8_3')" >
                <input class="options_btns button4Modal8_3" type="radio" name="option_3" value="academic">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
</label>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input comments" name="comments" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input share" name="share" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input emoji" name="emoji" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>


          <!-- custom audio section -->

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal2">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal2">
              <input type="file" class="fileInputModal2" accept=".mp3, .wav" name="audio" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal2">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal2" style="height: 14px; width: 19px">

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal2">00:00</span>

                  <img id="deleteButtonMp3Modal2" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;">
                </div>
              </div>
            </div>
          </div>

          <!-- custom audio section ends -->



        </div>
      </div>



    <div class="modal8-right">
          <img id="deleteButtonModal2_3_0"  src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 50px; height: 50px" />
<button type="submit">
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 50px; height: 50px" />
</button>
          <!--<img id="backButtonToModal7" data-target="#modal7" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 50px; height: 50px" />-->
        </div>

</form>


        </div>
  </div>

  <!-- Donation Models end -->

  <!-- Survey working Modals -->

  <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #e0e0e0;width: 375px;
height: 812px; padding: 0px;border-radius: 10px; gap: 0px; opacity: 0px;">

<form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="upid" value="0" class="upid" />
    <input type="hidden" name="type" value="Surveys" />

        <div class="modal-body" style="  width: 360px; height: 400px; padding: 0; top: 8px; left: 5px; ">
          <div style="width: 360px; height2: 423px; background-color: white; border-radius: 10px; padding: 5px;">


            <div style=" width: 350px; height: 30; display: flex; justify-content: space-between; align-items: center;
                  margin: 0; top: 10px; ">



            <div style=" width: 360px; height: 65px; display: flex; align-items: center; gap: 10px;
                background-color: #e47a7d3f; border-radius: 10px; padding: 5px; ">
              <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}" alt="">
            <div style="width: 250px;height: 53px;display: flex;flex-direction: column; align-items: center;text-align: center;padding: 0;">
              <div style="width: 210px;height: 26px;display: flex;align-items: center;text-align: center; gap: 5px;font-weight: 500;font-size: 22px;color: #64748B;">
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
                  Surveys
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
              </div>


              <div style="width: 248px; height: 24px;font-size:  14px;  color: #ed1c24; font-weight: 400; line-height: 14px;">
                Create Surveys
              </div>



            </div>
          </div>

</div>
                <!-- here need to put image option -->

                <div id="previewContainerWrapperModel2_3"  style="width: 350px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px" class="addImageButtonModel2"  id="addImageButtonModel2_3">

              <!-- Input Field (covering the entire container) -->
              <input type="file" name="image" required class="fileInput18_3" accept="image/jpg,image/png,image/jpeg,video/mp4" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal2_3" class="image-preview-container image-preview-containerModal2" style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal2_3" class="descriptionTextContainerModal2" style="width: 340px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 65px; text-align: center;">

                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
</div>

                  <!-- here image option end -->





          <div class="mb-1 card border-0" style=" background-color: #fff; margin-top:10px; padding: 10px; border-radius: 5px;">
              <label for="title_field" class="form-label" style="font-weight: bold">Survey Title</label>
              <input type="text" class="form-control title_field" name="title"  id="title_field" placeholder="Type Survey Title"
                style="background-color: #e0e0e0" />
          </div>
          <!-- ali hassan -->

          <div class="mb-3 card border-0 time_div">
              <label for="surveysTitle" class="form-label time_label">Survey duration</label>
              <div class="row">
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1"
                      aria-label="Datepicker 1"  autocomplete="off"/>
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2"
                      aria-label="Datepicker 2" style="" autocomplete="off"/>
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
              </div>
          </div>

          <!-- ends -->


          <!-- special starts -->

          <div class="mb-3 card border-0" style="
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            width: 360px;
            height: 220px;;
          ">



              <div class="reaction-header" style="margin: 0; padding: 0;">
                <span style="font-weight: bold; padding: 0;">Allowed Reaction</span>
              </div>

              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">

                  <label class="custom-file-container">
                    <input type="file" name="icon1" accept="image/*" onchange="updateLabelWithImage(event, 'iconContainer1')">
                    <div class="icon-container" id="iconContainer1" style="width: 24px; height: 24px;">
                      <img id="defaultIcon1" src="{{ asset('assets/svg/Gallery%20Add.svg')}}" alt="Icon">
                    </div>
                  </label>


                </div>
                <input type="text" name="txt1" class="form-control txt1" style="background-color: #e0e0e0" placeholder="Type the amount">
              </div>
              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">


                  <label class="custom-file-container">
                    <input type="file" name="icon2" accept="image/*" onchange="updateLabelWithImage(event, 'iconContainer2')">
                    <div class="icon-container" id="iconContainer2" style="width: 24px; height: 24px;">
                      <img id="defaultIcon2" src="{{ asset('assets/svg/Gallery%20Add.svg')}}" alt="Icon">
                    </div>
                  </label>
                </div>
                <input type="text" name="txt2" class="form-control txt2" style="background-color: #e0e0e0" placeholder="Type the amount">
              </div>
              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">


                  <label class="custom-file-container">
                    <input type="file" name="icon3" accept="image/*" onchange="updateLabelWithImage(event, 'iconContainer3')">
                    <div class="icon-container" id="iconContainer3" style="width: 24px; height: 24px;">
                      <img id="defaultIcon3" src="{{ asset('assets/svg/Gallery%20Add.svg')}}" alt="Icon">
                    </div>
                  </label>
                </div>
                <input type="text" name="txt3" class="form-control txt3" style="background-color: #e0e0e0" placeholder="Type the amount">
              </div>








          <div style="display:none; width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 25px; margin-left: -5px;" id="previewContainerMp3">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3Input">


              <input type="file" class="fileInput7" accept=".mp3, .wav" name="audio" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="assets/first-svg-dialog/Group%201000008026.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3upload">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="assets/Group%201000002312.svg" alt="Illustration" class="img-fluid" id="play" style="height: 14px; width: 19px">

                  <img src="assets/Group%201.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="assets/Group%201.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="assets/Group%201.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="assets/Group%201.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="assets/Group%201.svg" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="Duration">00:00</span>

                  <img id="deleteButtonMp3" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;">
                </div>
              </div>
            </div>
          </div>




          <div style="display:none;
          position: absolute;
          bottom: -100%;
          left: 100px;
          width: 202px;
          align-items: center;
          justify-content: center;
          gap: 10px;
        ">
            <div id="createSOSButton" data-target="#popupModal" style="
            outline: none;
            width: 50px;
            height: 40px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
          ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}">
            </div>



          </div>

        </div>


          <!-- special ends -->



          <div style=" display:none;
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos; text-align: left; font-size: 12px;">Share Option</span>
              <div style=" width: 2px; height: 2; border-radius: 50%; background-color: #4e4e4e; "></div>
            </div>




            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <label id="button1Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button1Modal8_3')">
  <input class="options_btns button1Modal8" checked="checked" type="radio" name="option_3" value="all-users">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
</label>

              <label  id="button2Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button2Modal8_3')" >
  <input class="options_btns button2Modal8_3" type="radio" name="option_3" value="educated">


                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
</label>

              <label  id="button3Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button3Modal8_3')" >
                <input class="options_btns button3Modal8_3" type="radio" name="option_3" value="cultivated">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
</label>

              <label id="button4Modal8_3" class="toggle-buttonModal8 " onclick="toggleColor('button4Modal8_3')" >
                <input class="options_btns button4Modal8_3" type="radio" name="option_3" value="academic">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
</label>
            </div>



          </div>

          <div style="display:none;">
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input comments" name="comments" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input share" name="share" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input emoji" name="emoji" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>


          <!-- custom audio section -->

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal2">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal2">
              <input type="file" class="fileInputModal2" accept=".mp3, .wav" name="audio" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal2">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal2" style="height: 14px; width: 19px">

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal2">00:00</span>

                  <img id="deleteButtonMp3Modal2" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;">
                </div>
              </div>
            </div>
          </div>

          <!-- custom audio section ends -->



        </div>
      </div>



    <div class="modal8-right">
          <img id="deleteButtonModal2_3"  src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 50px; height: 50px" />
<button type="submit">
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 50px; height: 50px" />
</button>
          <!--<img id="backButtonToModal7" data-target="#modal7" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 50px; height: 50px" />-->
        </div>

</form>


        </div>
  </div>

  <!-- Survey Models end -->

  <!-- Greeting working Modals -->

  <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #e0e0e0;width: 375px;
height: 812px; padding: 0px;border-radius: 10px; gap: 0px; opacity: 0px;">

<form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="upid" value="0" class="upid" />
    <input type="hidden" name="type" value="Greetings" />

        <div class="modal-body" style="  width: 360px; height: 400px; padding: 0; top: 8px; left: 5px; ">
          <div style="width: 360px; height2: 423px; background-color: white; border-radius: 10px; padding: 5px;">


            <div style=" width: 350px; height: 30; display: flex; justify-content: space-between; align-items: center;
                  margin: 0; top: 10px; ">



            <div style=" width: 360px; height: 65px; display: flex; align-items: center; gap: 10px;
                background-color: #e47a7d3f; border-radius: 10px; padding: 5px; ">
              <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}" alt="">
            <div style="width: 250px;height: 53px;display: flex;flex-direction: column; align-items: center;text-align: center;padding: 0;">
              <div style="width: 210px;height: 26px;display: flex;align-items: center;text-align: center; gap: 5px;font-weight: 500;font-size: 22px;color: #64748B;">
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
                  Greetings
                <div style="width: 2px;height: 2px;border-radius: 45%;background: #00000066;"></div>
              </div>


              <div style="width: 248px; height: 24px;font-size:  14px;  color: #ed1c24; font-weight: 400; line-height: 14px;">
                Share Greetings
              </div>



            </div>
          </div>

</div>
                <!-- here need to put image option -->

                <div id="previewContainerWrapperModel2_4"  style="width: 350px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px" class="addImageButtonModel2"  id="addImageButtonModel2_4">

              <!-- Input Field (covering the entire container) -->
              <input type="file" name="image" required class="fileInput18_4" accept="image/jpg,image/png,image/jpeg,video/mp4" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">

              <!-- Image Preview Section -->
              <div id="image-preview-containerModal2_4" class="image-preview-container image-preview-containerModal2" style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainerModal2_4" class="descriptionTextContainerModal2" style="width: 340px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 65px; text-align: center;">

                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
</div>

                  <!-- here image option end -->





          <div class="mb-1 card border-0" style=" background-color: #fff; margin-top:10px; padding: 10px; border-radius: 5px;">
              <label for="title_field" class="form-label" style="font-weight: bold">Type Title</label>
              <input type="text" class="form-control title_field" name="title"  id="title_field" placeholder="Type Title"
                style="background-color: #e0e0e0" />
          </div>
          <!-- ali hassan -->

          <div class="mb-3 card border-0 time_div">
              <label for="surveysTitle" class="form-label time_label">Time duration</label>
              <div class="row">
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input" style="">
                    <input type="text" class="form-control time_input_field datepicker1" placeholder="Start Date" name="start_date" id="datepicker1"
                      aria-label="Datepicker 1" autocomplete="off" />
                      <button class="btn " type="button" onclick="$('.datepicker1').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group time_input">
                    <input type="text" class="form-control time_input_field datepicker2" placeholder="Expired Date" name="end_date" id="datepicker2"
                      aria-label="Datepicker 2" style="" autocomplete="off"/>
                      <button class="btn" type="button" onclick="$('.datepicker2').datepicker('show')">
                        <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" class="time_div_img">
                      </button>
                  </div>
                </div>
              </div>
          </div>

          <!-- ends -->



          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos; text-align: left; font-size: 12px;">Share Option</span>
              <div style=" width: 2px; height: 2; border-radius: 50%; background-color: #4e4e4e; "></div>
            </div>




            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <label id="button1Modal8_4" class="toggle-buttonModal8 " onclick="toggleColor('button1Modal8_4')">
  <input class="options_btns button1Modal8" checked="checked" type="radio" name="option_4" value="all-users">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
</label>

              <label  id="button2Modal8_4" class="toggle-buttonModal8 " onclick="toggleColor('button2Modal8_4')" >
  <input class="options_btns button2Modal8_4" type="radio" name="option_4" value="educated">


                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
</label>

              <label  id="button3Modal8_4" class="toggle-buttonModal8 " onclick="toggleColor('button3Modal8_4')" >
                <input class="options_btns button3Modal8_4" type="radio" name="option_4" value="cultivated">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
</label>

              <label id="button4Modal8_4" class="toggle-buttonModal8 " onclick="toggleColor('button4Modal8_4')" >
                <input class="options_btns button4Modal8_4" type="radio" name="option_4" value="academic">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
</label>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input comments" name="comments" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input share" name="share" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" value="1" class="form-check-input emoji" name="emoji" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>


          <!-- custom audio section -->

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 20px; " id="previewContainerMp3Modal2">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3InputModal2">
              <input type="file" class="fileInputModal2" accept=".mp3, .wav" name="audio" style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;">



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;">
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3uploadModal2">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="playModal2" style="height: 14px; width: 19px">

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17" data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="DurationModal2">00:00</span>

                  <img id="deleteButtonMp3Modal2" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;">
                </div>
              </div>
            </div>
          </div>

          <!-- custom audio section ends -->



        </div>
      </div>



    <div class="modal8-right">
          <img id="deleteButtonModal2_4"  src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 50px; height: 50px" />
<button type="submit">
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 50px; height: 50px" />
</button>
          <!--<img id="backButtonToModal7" data-target="#modal7" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 50px; height: 50px" />-->
        </div>

</form>


        </div>
  </div>

  <!-- Greeting working Modals -->



  <!-- Greeting Modals old -->

  <div class="modal fade" id="modal4_old" tabindex="-1" aria-labelledby="Modlal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="Width:375px; Height:812px; background-color: #f8f9fa;
          padding: 5px;
          border-radius: 10px;">
        <div class="modal-body" style="
                position: relative;
                border-radius: 10px;
                border: 2px dashed #356899
              ">
          <div style="
                  width: Fixed (333px)px;
                  height: Hug (761.24px)px;
                  display: flex;
                  border-radius: 10px;
                  flex-direction: column;
                  align-items: center;
                  gap: 110px;

                ">
            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008335.svg')}}" alt="Illustration" data-target="#modal6"
              data-bs-dismiss="modal" style="height: 250px; width: 100%" />

            <div class="previewContainerWrapper" id="previewContainerWrapper" style="width: 100%; display: flex; gap: 10px; flex-wrap: wrap">
              <div class="previewContainer" style="
                      width: 333px;
                      height: 81px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      background-size: contain;
                      cursor: pointer;
                      border-radius: 10px;
                    ">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal6"
                  data-bs-dismiss="modal" style="height: 96px; width: 69%" id="addImageButtonModal4" />

                <input type="file" class="fileInput4" accept="image/jpg,image/png,image/jpeg,video/mp4" style="
                        opacity: 0;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        cursor: pointer;
                      " />
              </div>
            </div>
          </div>

          <div style="
              width: 333px;
              height: 80px;
              display: flex;
              align-items: center;
              justify-content: center; /* Centrage horizontal */
              gap: 50px; /* Réduit l'écart entre l'image et le texte */
              background-color: #fff;
              margin-top: 230px;
              border-radius: 10px;
              padding: 5px; /* Ajoute un peu de padding pour un espacement interne */
            ">
            <!-- Image à gauche -->
            <div style="display: flex; align-items: center; justify-content: center;">
              <img id="displayImage2" src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration"
                class="img-fluid" style="height: 40px; width: 41px; cursor: pointer;margin-left: 10px;" />
              <input type="file" id="imageUploader2" accept="image/jpg,image/png,image/jpeg,video/mp4" style="display: none;" />
            </div>

            <!-- Texte à droite -->
            <div style="
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center; /* Centrage vertical */
                gap: 3px;
                font-family: Genos;
              ">
              <h4 style="margin: 0; text-align: center;">Another Selection</h4>
              <h6 style="margin: 0; text-align: center;">File Size H 812 - W 350</h6>
              <p style="margin: 0; text-align: center;">MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span></p>
            </div>
          </div>
          <div style="display:none;
                  position: absolute;
                  bottom: -10%;
                  left: 100px;
                  width: 202px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  gap: 10px;
                ">
            <div id="sosButton" data-target="#popupModal" style="
                    outline: none;
                    width: 50px;
                    height: 40px;
                    background-color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 10px;
                  ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>

            <div id="backButtonToMainFrModel1" data-target="#modal14" style="
                    outline: none;
                    width: 100px;
                    height: 40px;
                    background-color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 10px;
                    gap: 5px;
                    font-family: Genos;
                  ">
              Create
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Path_2-2.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal14" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="
                width: 375px;
                height: 812px;
                gap: 0px;
                opacity: 0px;
                border-radius: 10px;

              ">


        <div style="
          width: 50px;
          height: 272px;
                position: absolute;
                top: 0%;
                right: -17%;
                border-radius: 5px;
                z-index: 1000;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 5px;
              ">

          <img id="deleteButtonModal14" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />


          <img id="systemButton" data-target="#modal9" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="backButtonToModal4" data-target="#modal4" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="sharebuttonto9" data-target="#modal9" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

        </div>

        <div class="modal-body">
          <!-- الصورة الرئيسية -->
          <img id="mainImageModal14" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/image%201425.svg')}}" class="img-fluid" style="
                  position: absolute;
                  top: 0%;
                  left: 0%;
                  width: 375px;
                  height: 812px;
                  border-radius: 10px;
                " alt="Main View" />
        </div>

        <div class="modal-footer border-0 d-flex justify-content-center"
          style="position: absolute; bottom: 0; left: 0; width: 100%">
          <div style="
                display: flex;
                gap: 10px;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                position: absolute;
                top: -30%;
                padding: 5px;
              ">
          </div>

          <div style="
                background-color: #deeff0ab;
                border-radius: 10px;
                width: 362px;
                height: 113px;
                display: flex;
                flex-direction: column;
                gap: 10px;
                padding: 10px;
              ">
            <textarea name="" id="" placeholder="Type Your Text.." class="form-control" style="
                width: 348px;
                height: 47px;
                background-color: white;
                border-radius: 10px;
                font-weight: bold;
                font-family: Genos;
                outline: none;
                border: none;
                resize: none;
                padding: 10px;
              "></textarea>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modal9" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #000000BF;width: 375px;
  height: 812px; padding: 0px;border-radius: 10px;">

        <div style="
                position: absolute;
                top: 0%;
                width: 50px;
                height: 168;
                right: -17%;
                border-radius: 5px;
                z-index: 1000;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 24px;
              ">
          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 50px; height: 50px" />

          <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 50px; height: 50px" />

          <img id="backButtonToModal9" data-target="#modal14" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg')}}"
            style="width: 50px; height: 50px" cursor: pointer; />
        </div>

        <div class="modal-body" style="
          width: 360px;
          height: 400px;
          padding: 0;
          top: 8px;
          left: 5px;
          ">

          <div style="width: 360px;
                  height: 423px; background-color: white;
                  border-radius: 10px;
                  padding: 5px;
  ">
            <div style="
              width: 350px;
              height: 30;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin: 0;
                    top: 10px;
                  ">

              <div style="
                      background-color: #f8f9fa;
                      border-radius: 5px;
                      display: flex;
                      align-items: center;
                      justify-content: space-between;
                      width: 197px;
                      height: 30px;
                      padding: 5px;
                    ">
                <div style="
                        display: flex;
                        align-items: start;
                        align-items: center;
                        width: 130px;
                        height: 30px;
                      ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}"
                    style="width: 28px; height: 28px; object-fit: cover" />
                  <div style="
                    width: 100px;
                    height: 25px;
                          display: flex;
                          flex-direction: column;
                          justify-content: start;
                          align-items: flex-start;
                          margin-left: 5px;
                          gap: 8px;
                        ">
                    <div style="
                      width: 150px;
                      height: 11px;
                      font-family: Genos;
  font-size: 20px;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
                            display: flex;
                            align-items: center;
                            gap: 5px;
                          ">
                      <div style="
                              width: 2px;
                              height: 2px;
                              border-radius: 45%;
                              background: #00000066;
                              "></div>

                      YekBun Team

                      <div style="
                        width: 2px;
                        height: 2px;
                        border-radius: 45%;
                        background: #00000066;
                        "></div>
                    </div>

                    <div style="
                      width: 150px;
                      height: 6px;
                      font-family: Genos;
  font-size: 14px;
  text-align: left;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
                            color: #7e7e7e;
                            display: flex;
                            align-items: center;
                            gap: 5px;
                          ">
                      <div style="
                         width: 2px;
                         height: 2px;
                         border-radius: 45%;
                         background: #00000066;
                         "></div>
                      Time & Date
                      <div style="
                        width: 2px;
                        height: 2px;
                        border-radius: 45%;
                        background: #00000066;
                        "></div>
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}"
                  style="width: 25px; height: 27px; object-fit: cover; border: none;" class="img-thumbnail" />
              </div>

              <div style="
                height: 30px;
                width: 30px;
                background: #F2F2F2;

                      border-radius: 7px;
                      display: flex; /* Utilisation de Flexbox */
    align-items: center; /* Centrage vertical */
    justify-content: center; /* Centrage horizontal */
                    ">
                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000006806.svg')}}"
                  style="width: 24px; height: 24px; object-fit: cover" />
              </div>
            </div>

            <div style="
                    font-size: 14px;
                    font-weight: 400;
                    color: gray;
                    width: 350px;
                    height: 27px;
                    text-align: left;
                    background: #F7F7F7;
                    padding: 7px;
                    font-family: Genos;
                    margin-top: 7px;
                    margin-bottom: 7px;
                    border-radius: 5px;
                    display: flex; /* Utilisation de Flexbox */
    align-items: center; /* Centrage vertical */
    justify-content: left; /* Centrage horizontal */

                  ">
              Some Text wil be here when the User have
            </div>

            <div style="position: relative;
    width: 350px;
    height: 256px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/WhatsApp%20Bild%202023-09-22%20um%2015.17%201.svg')}}"
                style="width: 350px; height: 256px; object-fit: cover; border-radius: 7px; padding: 0; display: block;" />

              <div class="overlay" style="position: absolute;
                width: 70px;
                height: 32px;
                  bottom: 10px;
                  left: 10px;
                  display: flex;
                  align-items: center;
                  border-radius: 5px;
                  background: #1C274C99;
  gap: 5px;">
                <!-- Image -->
                <img src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Vector.svg')}}"
                  style="width: 26px; height: 26px; margin: 5px; border-radius: 5px; object-fit: cover; color:#FFFFFF;" />
                <!-- Number on the right -->
                <div style="
          font-size: 30px;
          font-weight: bold;
          font-family: Genos;
          color: white;
          width: 30px;
          height: 30px;
          display: flex;
          justify-content: center;
          align-items: center;">
                  5 <!-- Replace with dynamic number if needed -->
                </div>

              </div>
              <div class="audio-icon" style="position: absolute;
                  bottom: 10px;
                  right: 10px;
                  background: rgba(0, 0, 0, 0.6);
                  width: 30px;
                  height: 30px;
                  border-radius: 50%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  color: white;
                  cursor: pointer;">
                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group 1000008129.svg')}}"
                  style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; color:#FFFFFF;" />
              </div>
            </div>


            <div style="
              height: 29px;
              width: 350px;
              display: flex;
              justify-content: space-between;
              align-items: center;
              background-color: #f8f9fa;
              border-radius: 5px;
              padding: 5px;
              gap: 10px;
              margin-top: 7px;
            ">
              <div style="
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 60%;
                height: 100%;
              ">
                <div style="
                  display: flex;
                  align-items: center;
                  gap: 3px;
                  height: 100%;
                ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Eye%20Scan.svg')}}"
                    style="width: 100%; height: 100%; object-fit: cover" />
                  <span style="font-weight: 400; font-family: Genos;
  ">123</span>
                </div>

                <div style="
                  display: flex;
                  align-items: center;
                  gap: 3px;
                  height: 100%;
                ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 100%; height: 100%; object-fit: cover" />
                  <span style="font-weight: 400; font-family: Genos;
  ">123</span>
                </div>

                <div style="
                  display: flex;
                  align-items: center;
                  gap: 3px;
                  height: 100%;
                ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg')}}" style="width: 100%; height: 100%; object-fit: cover" />
                  <span style="font-weight: 400; font-family: Genos;
  ">123</span>
                </div>

                <div style="
                  display: flex;
                  align-items: center;
                  gap: 3px;
                  height: 100%;
                ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg')}}"
                    style="width: 100%; height: 100%; object-fit: cover" />
                  <span style="font-weight: 400; font-family: Genos;
  ">123</span>
                </div>
              </div>

              <div style="
                display: flex;
                align-items: center;
                gap: 2px;
                height: 100%;
              ">
                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg')}}" style="width: 100%; height: 100%; object-fit: cover;
  " />
                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002630.svg')}}" style="width: 100%; height: 100%; object-fit: cover;;
  " />
                <span style="font-weight: 400; font-family: Genos;
  ">123</span>
              </div>
            </div>


            <div style="
              width: 350px;
              height: 30px;
              display: flex;
              background-color: white;
              justify-content: space-between;
              align-items: center;
              margin-top: 10px;
            ">
              <div style="
                width: 120px;
                height: 30px;
                display: flex;
                align-items: center;
                gap: 5px;
                height: 100%;
              ">
                <div style="padding: 3px;
                  border-radius: 4px;
                  width: 30px;
                  height: 30px;
                  background: #F2F2F2;
                  display: flex;
                  align-items: center;
                  justify-content: center;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 24px; height: 24px; object-fit: cover" />
                </div>

                <div style="padding: 3px;
                  border-radius: 4px;
                  width: 30px;
                  height: 30px;
                  background: #F2F2F2;
                  display: flex;
                  align-items: center;
                  justify-content: center;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000002356.svg')}}"
                    style="width: 24px; height: 24px; object-fit: cover" />
                </div>
                <div style="padding: 3px;
                  border-radius: 4px;
                  width: 30px;
                  height: 30px;
                  background: #F2F2F2;
                  display: flex;
                  align-items: center;
                  justify-content: center;">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/microphone-2.svg')}}"
                    style="width: 24px; height: 24px; object-fit: cover" />
                </div>
              </div>

              <div style="
                background-color: #f8f9fa;
                border-radius: 7px;
                height: 30px;
                width: auto;
                display: flex;
                align-items: center;
                gap: 5px;
                font-size: 10px;
                font-family: Genos;
                padding: 5px;
              ">
                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Pen%202.svg')}}" style="width: 24px; height: 24px" />

                <span>add a comment here</span>
              </div>
            </div>
          </div>


          <div style="
              width: 360px;
              height: 117px;
              background-color: #fff;
              margin-top: 10px;
              border-radius: 5px;
              padding: 5px;
            ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                  width: 2px;
                  height: 2px;
                  border-radius: 50%;
                  background-color: #4e4e4e;
                "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                  width: 2px;
                  height: 2px;
                  border-radius: 50%;
                  background-color: #4e4e4e;
                "></div>
              <span style="font-family: Genos;
                text-align: left;
                font-size: 12px;

  ">Share Option</span>
              <div style="
                  width: 2px;
                  height: 2;
                  border-radius: 50%;
                  background-color: #4e4e4e;
                "></div>
            </div>

            <div style="
    width: 347px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    gap: 10px;
    margin-top: 5px;
  ">
              <button id="button1Modal9" class="toggle-buttonModal9" onclick="toggleColorModal9('button1Modal9')" style="
      border: none;
      background: #1CA2ED;
      padding: 0;
      border-radius: 7px;
      cursor: pointer;
      width: 80px;
      height: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      transition: transform 0.2s ease;
    ">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
              </button>

              <button id="button2Modal9" class="toggle-buttonModal9" onclick="toggleColorModal9('button2Modal9')" style="
      border: none;
      background: #F2F2F2;
      padding: 0;
      cursor: pointer;
      width: 80px;
      height: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      border-radius: 7px;
      transition: transform 0.2s ease;
    ">
                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
              </button>

              <button id="button3Modal9" class="toggle-buttonModal9" onclick="toggleColorModal9('button3Modal9')" style="
      border: none;
      background: #F2F2F2;
      padding: 0;
      cursor: pointer;
      width: 80px;
      height: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      border-radius: 7px;
      transition: transform 0.2s ease;
    ">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
              </button>

              <button id="button4Modal9" class="toggle-buttonModal9" onclick="toggleColorModal9('button4Modal9')" style="
      border: none;
      background: #F2F2F2;
      padding: 0;
      cursor: pointer;
      width: 80px;
      height: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      border-radius: 7px;
      transition: transform 0.2s ease;
    ">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
              </button>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>




          <div style="
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  width: 54px;
                  height: 51px;
                  margin-top: 50px;
                  margin-left: 150px;
                ">
            <button style="outline: none; border: none; border-radius: 10px;background: #1BC469;
              padding: 2px;
  ">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Path_2-2.svg')}}" style="width: 29px; height: 26px;" />
              <span style="font-family: Genos; color: white;">share</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- *********** end greeting************** -->




  <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true " aria-labelledby="Modlal10">
    <div class="modal-dialog modal-dialog-centered" style="position:relative">
        <div class="modal8-right" style="top: 8%;"><img id="deleteButtonModal19"
                src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg') }}"
                style="width:100%;height:100%;cursor:pointer"> <img id="backButtonToeventPreviewModal"
                data-target="#eventPreviewModal" data-bs-toggle="modal"
                src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg') }}"
                style="width:100%;height:100%;cursor:pointer"></div>
        <div class="modal-content bg-model-image container"
            style="background-color:#e0e0e0;width:375px;padding:0;font-family:Genos;border-radius:10px">
            <div class="modal-body" style="width:360px;margin:5px;padding:0">
                <div
                    style="width:360px;height:65px;display:flex;align-items:center;gap:10px;background-color:#e47a7d3f;border-radius:10px;padding:5px">
                    <img style="width:50px;height:50px;border-radius:50%"
                        src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg') }}" alt="">
                    <div
                        style="width:250px;height:53px;display:flex;flex-direction:column;align-items:center;text-align:center;padding:0">
                        <div
                            style="width:210px;height:26px;display:flex;align-items:center;text-align:center;gap:5px;font-weight:500;font-size:22px;color:#64748b">
                            <div style="width:2px;height:2px;border-radius:45%;background:#00000066"></div>Event
                            Information<div style="width:2px;height:2px;border-radius:45%;background:#00000066"></div>
                        </div>
                        <div
                            style="width:248px;height:24px;font-size:14px;color:#ed1c24;font-weight:400;line-height:14px">
                            <span>This donation will
                                automatically end on the specified date.</span>
                        </div>
                    </div>
                </div>
                <div id="previewContainerWrapperModel19"
                    style="width:360px;height:213px;border:2px dashed gray;border-radius:10px;position:relative;margin-top:10px;margin-bottom:10px">
                    <div class="previewContainerModel19"
                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;background-size:contain;cursor:pointer;border-radius:10px;position:relative;height:100%">
                        <img class="addImageButtonModel2"
                            src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg') }}"
                            alt="Illustration" data-target="#modal17" data-bs-dismiss="modal"
                            style="height:57px;width:41px;align-self:flex-start;margin-left:150px;margin-top:10px"
                            id="addImageButtonModel19"> <input type="file" name="image"
                            form="event_form" class="fileInput19"
                            accept="image/jpg,image/png,image/jpeg,video/mp4"
                            style="opacity:0;width:100%;height:100%;position:absolute;cursor:pointer">
                        <div id="image-preview-containerModal19"
                            class="image-preview-container image-preview-containerModal2"
                            style="width:100%;height:100%;visibility:visible;border-radius:10px"></div>
                        <div id="descriptionTextContainerModal19"
                            style="width:344px;height:90px;display:flex;align-items:center;justify-content:start;background-color:#fff;margin-top:40px;border-radius:10px;margin:7px;align-self:flex-end">
                            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg') }}"
                                alt="Illustration" class="img-fluid" data-target="#modal17"
                                data-bs-dismiss="modal" style="height:41px;width:37px;margin-left:10px">
                            <div style="width:275px;height:65px;text-align:center">
                                <h6 style="font-size:22px;font-weight:500;line-height:15px;color:#64748b">File Size H
                                    812 - W 350</h6>
                                <p
                                    style="font-family:Genos;font-size:18px;font-weight:400;line-height:10px;letter-spacing:.02em;text-align:center;color:#64748b">
                                    MP4-JPG Or PNG -<span style="color:red">Max 1 Image</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card border-0"
                    style="width:360px;height:81px;background-color:#fff;padding:5px;border-radius:10px">
                    <label for="eventTitle" class="form-label"
                        style="font-weight:700;width:Hug (93px) px;height:Hug (19px) px;gap:10px;opacity:1">Event
                        Title</label>
                    <input type="text" name="title" class="form-control title_field" id="eventTitle"
                        placeholder="Type Event Title" form="event_form"
                        style="background-color:#e0e0e0;color:black;width:347px;height:35px;margin-bottom:5px">
                </div>
                <div class="mb-3 card border-0"
                    style="width:360px;background-color:#fff;padding:5px;border-radius:10px;margin-bottom:0">
                    <label for="surveysTitle" class="form-label"
                        style="font-weight:700;width:Hug (93px) px;height:Hug (19px) px;gap:10px;opacity:1">Event Date
                        & Time</label>
                    <div class="row">
                        <div class="col-6" style="border-radius:10px">
                            <div class="input-group time_input" style=""><input type="text"
                                    class="form-control time_input_field datepicker1" form="event_form"
                                    placeholder="Start Date" name="start_date" id="datepicker1_event"
                                    aria-label="Datepicker 1" autocomplete="off"><button class="btn"
                                    type="button" onclick='$(".datepicker1").datepicker("show")'><img
                                        src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg') }}"
                                        class="time_div_img"></button></div>

                            <div class="input-group time_input mt-4 mb-2" style=""><input type="time"
                                 class="form-control" style="background-color:#e0e0e0;color:black;"
                                    placeholder="Start Time" name="start_time" id="start_time"
                                    aria-label="Start Time" autocomplete="off" form="event_form">
                            </div>
                        </div>
                        <div class="col-6" style="border-radius:10px">
                            <div class="input-group time_input"><input type="text" form="event_form"
                                    class="form-control time_input_field datepicker2" placeholder="End Date"
                                    name="end_date" id="datepicker2_event" aria-label="Datepicker 2"
                                    style="" autocomplete="off"><button class="btn" type="button"
                                    onclick='$(".datepicker2").datepicker("show")'><img
                                        src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg') }}"
                                        class="time_div_img"></button></div>
                            <div class="input-group time_input mt-4 mb-2" style=""><input type="time"
                                class="form-control" style="background-color:#e0e0e0;color:black;"
                                    placeholder="End Time" name="end_time" id="end_time" form="event_form"
                                    aria-label="End Time" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $countries = App\Models\Country::all();
                    $cities = App\Models\City::all();
                @endphp
                <div class="mb-3 card border-0"
                    style="width:360px;background-color:#fff;padding:5px;border-radius:10px;margin-bottom:0">
                    <label for="surveysTitle" class="form-label"
                        style="font-weight:700;width:Hug (93px) px;gap:10px;opacity:1">Country & City</label>
                    <div class="row">
                        <div class="col-6" style="border-radius:10px">
                            <div class="input-group" style=""><select name="event_country" form="event_form"
                                class="form-control" id="event_country"  style="background-color:#e0e0e0;color:black;">
                                <option value="N/A">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{ucwords($country->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-6" style="border-radius:10px">
                            <div class="input-group" style="">
                                <select name="event_city" form="event_form"
                                    class="form-control" id="event_city"  style="background-color:#e0e0e0;color:black;">
                                    <option value="N/A">Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{ucwords($city->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="input-group mt-4 mb-2" style=""><input type="text" class="form-control" style="background-color:#e0e0e0;color:black;"
                                placeholder="Type the Amount" name="event_address" id="event_address"
                                aria-label="Type the Amount" autocomplete="off" form="event_form"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- event preview popup start --}}

<div class="modal fade" id="eventPreviewModal" tabindex="-1" aria-hidden="true"
    aria-labelledby="eventPreviewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal8-right" style="top:12%;">
            <img
                data-target="#eventModal" data-bs-toggle="modal" id="backButtonToeventModal"
                src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008247.svg') }}"
                style="width:100%;height:100%;cursor:pointer"><button type="submit" form="event_form"><img
                    id="GoButtonToModal18" data-target="#modal18"
                    src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg') }}"
                    style="width:100%;height:100%;cursor:pointer"></button></div>
        <div class="modal-content bg-model-image container"
            style="width:375px;height:660px;padding:0;border-radius:10px">
            <form method="post" action="{{ route('postpops') }}" enctype="multipart/form-data"
                id="event_form">@csrf <input type="hidden" name="upid" value="0" class="upid">
                <input type="hidden" name="type" value="Event">
                <div class="modal-body" style="width:360px;height:400px;padding:0;top:8px;left:5px">
                    <div style="width:360px;background-color:#fff;border-radius:10px;padding:5px">
                        <div
                            style="width:350px;height:30;display:flex;justify-content:space-between;align-items:center;margin:0;top:10px">
                            <div
                                style="background-color:#f8f9fa;border-radius:5px;display:flex;align-items:center;justify-content:space-between;width:197px;height:30px;padding:5px">
                                <div
                                    style="display:flex;align-items:start;align-items:center;width:130px;height:30px">
                                    <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg') }}"
                                        style="width:28px;height:28px;object-fit:cover">
                                    <div
                                        style="width:100px;height:25px;display:flex;flex-direction:column;justify-content:start;align-items:flex-start;margin-left:5px;gap:8px">
                                        <div
                                            style="width:150px;height:11px;font-family:Genos;font-size:20px;font-weight:500;text-underline-position:from-font;text-decoration-skip-ink:none;display:flex;align-items:center;gap:5px">
                                            <div style="width:2px;height:2px;border-radius:45%;background:#00000066">
                                            </div>YekBun Team<div
                                                style="width:2px;height:2px;border-radius:45%;background:#00000066">
                                            </div>
                                        </div>
                                        <div
                                            style="width:150px;height:6px;font-family:Genos;font-size:14px;text-align:left;text-underline-position:from-font;text-decoration-skip-ink:none;color:#7e7e7e;display:flex;align-items:center;gap:5px">
                                            <div style="width:2px;height:2px;border-radius:45%;background:#00000066">
                                            </div>Time & Date<div
                                                style="width:2px;height:2px;border-radius:45%;background:#00000066">
                                            </div>
                                        </div>
                                    </div>
                                </div><img
                                    src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg') }}"
                                    style="width:25px;height:27px;object-fit:cover;border:none"
                                    class="img-thumbnail">
                            </div>
                        </div>
                        <div id="event_title_2"
                            style="font-size:14px;font-weight:400;color:gray;width:350px;height:27px;text-align:left;background:#f7f7f7;padding:7px;font-family:Genos;margin-top:7px;margin-bottom:7px;border-radius:5px;display:flex;align-items:center;justify-content:left">
                            Title of Donation</div>
                        <div id="event_img"
                            style="position:relative;width:350px;height:256px;border-radius:10px;overflow:hidden;box-shadow:0 4px 6px rgba(0,0,0,.1)">

                        </div>

                        <div style="background-color: #fff; padding: 5px">
                            <div style="
                                  display: flex;
                                  align-items: center;
                                  border-radius: 10px;
                                  justify-content: space-between;
                                  background-color:#f0eeee;
                                  padding:0 4px;
                                ">
                              <img src="{{ asset('assets/svg/svg-dialog/donations/Date.svg')}}" class="img-thumbnail"
                                style="width: 40px; height: 40px; object-fit: cover" />

                              <div style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    width: 100%;
                                  ">
                                <span style="font-weight: bold; font-size: 16px">. <span id="event_st_date">14 . 12 . 2024</span> - . <span id="event_end_date">14 . 12 . 2024</span></span>
                                <div style="display: flex; align-items: center; gap: 10px">
                                  <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000002871.svg')}}" class="img-thumbnail"
                                    style="width: 12px; height: 12px; object-fit: cover" />

                                  <span style="font-size: 14px">. Start: <span id="event_st_time">16:00</span> .</span>
                                  <span style="font-size: 14px">. End: <span id="event_end_time">16:00</span> .</span>
                                </div>
                              </div>
                            </div>

                            <div style="
                                  display: flex;
                                  align-items: center;
                                  justify-content: space-between;
                                  border-radius: 10px;
                                  background-color:#f0eeee;
                                  margin-top:10px;
                                  padding:0 4px;
                                ">
                              <img src="{{ asset('assets/svg/svg-dialog/donations/Date(1).svg')}}" class="img-thumbnail"
                                style="width: 40px; height: 40px; object-fit: cover" />

                              <div style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                  ">
                                <span style="font-weight: bold; font-size: 16px" id="event_address_2">

                                </span>

                                <div style="
                                      display: flex;
                                      align-items: center;
                                      justify-content: center;
                                      gap: 5px;
                                    ">
                                  {{-- <img src="{{ asset('assets/svg/svg-dialog/donations/image%20831.svg')}}" class="img-thumbnail"
                                    style="width: 12px; height: 12px; object-fit: cover" /> --}}

                                  <span style="font-size: 14px">. <span id="event_country_2"></span> . <span id="event_city_2"></span> .</span>
                                </div>
                              </div>

                              <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000002100.svg')}}" class="img-thumbnail"
                                style="width: 40px; height: 40px; object-fit: cover" />
                            </div>
                          </div>
                    </div>
                    <div
                        style="width:360px;height:117px;background-color:#fff;margin-top:10px;border-radius:5px;padding:5px">
                        <div style="display:flex;align-items:center;gap:5px;width:130px;height:18px">
                            <div style="width:2px;height:2px;border-radius:50%;background-color:#4e4e4e"></div><img
                                src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg') }}"
                                style="width:18px;height:18px;object-fit:cover">
                            <div style="width:2px;height:2px;border-radius:50%;background-color:#4e4e4e"></div><span
                                style="font-family:Genos;text-align:left;font-size:12px">Share Option</span>
                            <div style="width:2px;height:2;border-radius:50%;background-color:#4e4e4e"></div>
                        </div>
                        <div
                            style="width:347px;height:80px;display:flex;align-items:center;justify-content:space-around;gap:10px;margin-top:5px">
                            <label id="button1Modal8_9" class="toggle-buttonModal8" style="background:rgb(242, 242, 242)"
                                onclick='toggleColor("button1Modal8_9")'><input class="options_btns button1Modal8"
                                    checked="checked" type="radio" name="option_5" value="all-users"> <img
                                    src="{{ asset('assets/svg/svg-dialog/all-users.svg') }}" alt="All Users"
                                    style="width:55px;height:55px"><span
                                    style="font-size:12px;font-weight:700;margin-top:5px;font-family:Genos;color:#fff">All
                                    Users</span></label>

                                <label id="button2Modal8_9" class="toggle-buttonModal8" style="background:rgb(242, 242, 242)"
                                onclick='toggleColor("button2Modal8_9")'><input class="options_btns button2Modal8"
                                    type="radio" name="option_5" value="educated"> <img
                                    src="{{ asset('assets/svg/svg-dialog/educated.svg') }}" alt="Educated"
                                    style="width:55px;height:55px"><span
                                    style="font-size:12px;font-weight:700;margin-top:5px;font-family:Genos;color:gray">Educated</span></label>

                                <label
                                id="button3Modal8_9" class="toggle-buttonModal8" style="background:rgb(242, 242, 242)"
                                onclick='toggleColor("button3Modal8_9")'><input class="options_btns button3Modal8"
                                    type="radio" name="option_5" value="cultivated"> <img
                                    src="{{ asset('assets/svg/svg-dialog/cultivated.svg') }}" alt="Cultivated"
                                    style="width:55px;height:55px"><span
                                    style="font-size:12px;font-weight:700;margin-top:5px;font-family:Genos;color:gray">Cultivated</span></label>

                                <label
                                id="button4Modal8_9" class="toggle-buttonModal8" style="background:rgb(242, 242, 242)"
                                onclick='toggleColor("button4Modal8_9")'><input class="options_btns button4Modal8"
                                    type="radio" name="option_5" value="academic"> <img
                                    src="{{ asset('assets/svg/svg-dialog/academic.svg') }}" alt="Academic"
                                    style="width:55px;height:55px"><span
                                    style="font-size:12px;font-weight:700;margin-top:5px;font-family:Genos;color:gray">Academic</span></label>
                        </div>
                    </div>
                    <div>
                        <div class="toggle-card">
                            <div class="toggle-item">
                                <div class="form-switch"><input type="checkbox" class="form-check-input"
                                        id="comments" name="comments" value="1" checked="checked"><label
                                        for="comments" class="form-check-label"></label></div><span>Comments</span>
                            </div>
                            <div class="toggle-item">
                                <div class="form-switch"><input type="checkbox" class="form-check-input"
                                        id="share" name="share" value="1"><label for="share"
                                        class="form-check-label"></label></div><span>Voice Comments</span>
                            </div>
                            <div class="toggle-item">
                                <div class="form-switch"><input type="checkbox" class="form-check-input"
                                        id="emoji" name="emoji" value="1"><label for="emoji"
                                        class="form-check-label"></label></div><span>Emoji</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- event preview popup end --}}


  <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content container" style="background-color: #e0e0e0; padding: 5px">
        <div class="modal-body" style="padding: 3px; position: relative">
          <div style="
                display: flex;
                align-items: center;
                justify-content: space-around;
                gap: 10px;
                background-color: #e47a7d3f;
                border-radius: 10px;
                padding: 5px;
              ">
            <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}"
              alt="" />

            <div style="
                  display: flex;
                  flex-direction: column;
                  text-align: center;
                  padding: 0 15px;
                ">
              <h2 style="text-transform: capitalize; font-weight: 500">
                donation information
              </h2>
              <span style="font-size: 16px; color: #ed1c24; font-weight: 300">
                This donation will automatically end on the specified date.
              </span>
            </div>
          </div>

          <div style="
                border: 2px dashed gray;
                border-radius: 10px;
                margin: 5px 0;
                padding: 5px;
              ">
            <div style="
                  width: 100%;
                  height: 80%;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  gap: 50px;
                ">
              <div id="previewContainerWrapperModel5" style="width: 100%; display: flex; gap: 10px; flex-wrap: wrap">
                <div class="previewContainerModel5" style="
                      width: 100%;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      background-size: contain;
                      cursor: pointer;
                      border-radius: 10px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal6"
                    data-bs-dismiss="modal" style="height: 250px; width: 100%" id="addImageButtonModel5" />

                  <input type="file" class="fileInput" style="
                        opacity: 0;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        cursor: pointer;
                      " />
                </div>
              </div>
            </div>

            <div style="
                  width: 100%;
                  display: flex;
                  align-items: center;
                  justify-content: start;
                  gap: 50px;
                  background-color: #fff;
                  margin-top: 20px;
                  border-radius: 10px;
                  padding: 5px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                data-target="#modal2" data-bs-dismiss="modal" style="height: 80px; width: 80px;margin-left: 10px;" />

              <div style="text-align: center">
                <h4>Multi Selection</h4>
                <h6>File Size H 812 - W 350</h6>
                <p>MP4-JPG Or PNG - <span style="color: red;">Max 5 Image</p>
              </div>
            </div>
          </div>

          <form>
            <div class="mb-1 card border-0" style="
                  background-color: #fff;
                  padding: 10px;
                  border-radius: 5px;
                ">
              <label for="eventTitle" class="form-label" style="font-weight: bold">Event Title</label>
              <input type="text" class="form-control" id="eventTitle" placeholder="Type Donation Title"
                style="background-color: #e0e0e0" />
            </div>

            <!-- Donation Duration -->
            <div class="mb-1 card border-0" style="
                  background-color: #fff;
                  padding: 10px;
                  border-radius: 5px;
                ">
              <label class="form-label" style="font-weight: bold">Event Date & Time
              </label>
              <div class="row g-3">
                <div class="col">
                  <input type="date" class="form-control" style="background-color: #f8f9fa; border: none"
                    placeholder="Start Date" />
                </div>
                <div class="col">
                  <input type="date" class="form-control" style="background-color: #f8f9fa; border: none"
                    placeholder="Expired Date" />
                </div>

                <div class="col">
                  <input type="date" class="form-control" style="background-color: #f8f9fa; border: none"
                    placeholder="Start Time" />
                </div>

                <div class="col">
                  <input type="date" class="form-control" style="background-color: #f8f9fa; border: none"
                    placeholder="End Time" />
                </div>
              </div>
            </div>

            <div class="card p-1">
              <h5 class="form-label">Country and City</h5>
              <div class="row g-3">
                <div class="col-6">
                  <div class="input-group icon-input-group">
                    <span class="input-group-text">
                      <i class="fas fa-globe"></i>
                    </span>
                    <select class="form-select border-0" style="background-color: #f8f9fa">
                      <option selected>Select Country</option>
                      <option value="1">Country 1</option>
                      <option value="2">Country 2</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group icon-input-group">
                    <span class="input-group-text">
                      <i class="fas fa-city"></i>
                    </span>
                    <select class="form-select border-0">
                      <option selected>Select City</option>
                      <option value="1">City 1</option>
                      <option value="2">City 2</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-group icon-input-group">
                    <span class="input-group-text">
                      <i class="fas fa-location-dot"></i>
                    </span>
                    <input type="text" class="form-control border-0" placeholder="Type the Address" />
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-1">
              <div id="eventButton" data-target="#modal15" style="
                    padding: 10px;
                    outline: none;
                    border: none;
                    border-radius: 10px;
                    font-size: 18px;
                    background-color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 10px;
                  ">
                <span>Create </span>
                <img src="{{ asset('assets/svg/svg-dialog/donations/Icons_discover_copy.svg')}}" style="width: 30px; height: 100%" alt="" />
              </div>
            </div>
          </form>

          <div class="d-flex justify-content-center align-items-center;" style="
                position: absolute;
                bottom: -7%;
                width: 100%;
                display: flex;
                align-items: center;
                gap: 20px;
              ">
            <div id="backButtonToMainFrModel5" data-target="#popupModal" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ****************** Surveys ***************** -->

  <div class="modal fade" id="modal17" tabindex="-1" aria-hidden="true" aria-labelledby="Modlal17">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="background: #000000BF;width: 375px;
height: 812px; padding: 0px;border-radius: 10px;">


        <div class="modal-body" style="
        width: 360px;
        height: 400px;
        padding: 0;
        top: 8px;
        left: 5px;
        ">

          <div style="width: 360px;
                height: 470px; background-color: white;
                border-radius: 10px;
                padding: 5px;
">
            <div style="
            width: 350px;
            height: 30;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                  top: 10px;
                ">

              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 197px;
                    height: 30px;
                    padding: 5px;

                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                      width: 130px;
                      height: 30px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}"
                    style="width: 28px; height: 28px; object-fit: cover" />
                  <div style="
                  width: 100px;
                  height: 25px;
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                        gap: 8px;
                      ">
                    <div style="
                    width: 150px;
                    height: 11px;
                    font-family: Genos;
font-size: 20px;
font-weight: 500;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                      YekBun Team

                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>

                    <div style="
                    width: 150px;
                    height: 6px;
                    font-family: Genos;
font-size: 14px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                        ">
                      <div style="
                       width: 2px;
                       height: 2px;
                       border-radius: 45%;
                       background: #00000066;
                       "></div>
                      Time & Date
                      <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}"
                  style="width: 25px; height: 27px; object-fit: cover; border: none;" class="img-thumbnail" />
              </div>

            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 350px;
                  height: 27px;
                  text-align: left;
                  background: #F7F7F7;
                  padding: 7px;
                  font-family: Genos;
                  margin-top: 7px;
                  margin-bottom: 7px;
                  border-radius: 5px;
                  display: flex; /* Utilisation de Flexbox */
  align-items: center; /* Centrage vertical */
  justify-content: left; /* Centrage horizontal */

                ">
              Title of Donation
            </div>

            <div style="position: relative;
  width: 350px;
  height: 256px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <img src="{{ asset('assets/svg/svg-dialog/28312%201.svg')}}"
                style="width: 350px; height: 256px; object-fit: cover; border-radius: 7px; padding: 0; display: block;" />

              <div class="overlay" style="position: absolute;
                width: 275px;
                height: 43px;
                bottom: 10px;
                left: 30px;
                display: flex;
                align-items: center;
                border-radius: 20px;
                background: #FFFFFF66;
                gap: 5px;">
                <!-- Play/Pause Icon -->
                <img src="{{ asset('assets/svg/svg-dialog/Player%20Play.svg')}}"
                  style="width: 20px; height: 20px; margin: 5px; border-radius: 5px; object-fit: cover; cursor: pointer;" />

                <!-- Waveform Image -->
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />
                <img src="{{ asset('assets/svg/svg-dialog/Waveform.svg')}}"
                  style="width: 86px; height: 32px; border-radius: 5px; object-fit: cover;" />

                <!-- Duration Display -->
                <div style="
          font-size: 18px;
          font-family: Genos;
          color: rgb(197, 197, 197);
          width: 41px;
          height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;">
                  00:00
                </div>
              </div>


            </div>


            <div style="
            width: 350px;
            height: 96px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: 10px;
            margin-top: 5px;
            border-radius: 10px;
            background-color: #F2F2F2;
          ">

              <div class="toggle-button" style="
              background: white;
              padding: 0;
              cursor: pointer;
              width: 90px;
              height: 85px;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              text-align: center;
              border-radius: 7px;
              transition: transform 0.2s ease;
            ">
                <img src="{{ asset('assets/svg/svg-dialog/Oval%20Copy%204.svg')}}" alt="Educated" style="width: 45px; height: 45px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos;line-height:14px;">Name</span>
                <span style="font-size: 12px; font-family: Genos;">Lastname</span>

              </div>

              <div class="toggle-button" style="
                        background: white;
                        padding: 0;
                        cursor: pointer;
                        width: 90px;
                        height: 85px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        border-radius: 7px;
                        transition: transform 0.2s ease;

                      ">
                <img src="{{ asset('assets/svg/svg-dialog/Group%201000008063.svg')}}" alt="Educated" style="width: 45px; height: 45px;" />
                <div style="
                                      display: flex;
                                      justify-content: center;
                                      align-items: center;
                                      width: 100vw;
                                      height: 100vh;
                                    ">
                  <div style="
                                        width: 60px;
                                        height: 19px;
                                        font-family: Genos;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        gap: 5px;
                                        background: #0000001A;
                                        border-radius: 5px;
                                      ">
                    <div style="
                                          width: 2px;
                                          height: 2px;
                                          border-radius: 45%;
                                          background: #00000066;
                                        "></div>
                    Neza
                    <div style="
                                          width: 2px;
                                          height: 2px;
                                          border-radius: 45%;
                                          background: #00000066;
                                        "></div>
                  </div>
                </div>

              </div>

              <div class="toggle-button" style="
                                  background: white;
                                  padding: 0;
                                  cursor: pointer;
                                  width: 90px;
                                  height: 85px;
                                  display: flex;
                                  flex-direction: column;
                                  align-items: center;
                                  justify-content: center;
                                  text-align: center;
                                  border-radius: 7px;
                                  transition: transform 0.2s ease;
                                ">
                <img src="{{ asset('assets/svg/svg-dialog/image%203.svg')}}" alt="Educated" style="width: 45px; height: 45px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos;line-height:14px;">Name</span>
                <span style="font-size: 12px; font-family: Genos;">Lastname</span>

              </div>

            </div>


            <div style="
                        height: 29px;
                        width: 350px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background-color: #f8f9fa;
                        border-radius: 5px;
                        padding: 5px;
                        gap: 10px;
                        margin-top: 7px;
                      ">
              <div style="
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          width: 170px;
                          height: 17px;
                        ">
                <img src="{{ asset('assets/svg/svg-dialog/Group%201000003125.svg')}}" style="width: 100px; height: 16px; object-fit: cover;" />
                <span style="
                            font-weight: 400;
                            font-family: Genos;
                            font-size: 14px;
                            white-space: nowrap;
                          ">
                  300+ Donate
                </span>
              </div>

              <div style="
                        display: flex;
                        align-items: center;
                        gap: 2px;
                        width: 73px;
                          height: 21px;
                          background: #FC4B5D;
                          border-radius: 5px;
                      ">
                <div style="
                          width: 100%;
                          height: 100%;
                          font-family: Genos;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                          gap: 2px;
                          border-radius: 5px;
                          color: white;
                        ">
                  <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: white;
                          "></div>
                  Vote Now
                  <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: white;
                          "></div>
                </div>
              </div>

            </div>




          </div>


          <div style="
            width: 360px;
            height: 117px;
            background-color: #fff;
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px;
          ">
            <div style="display: flex; align-items: center; gap: 5px; width: 130px; height: 18px;">
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/share.svg')}}" style="width: 18px; height: 18px; object-fit: cover" />
              <div style="
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
              <span style="font-family: Genos;
              text-align: left;
              font-size: 12px;

">Share Option</span>
              <div style="
                width: 2px;
                height: 2;
                border-radius: 50%;
                background-color: #4e4e4e;
              "></div>
            </div>

            <div style="
  width: 347px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 10px;
  margin-top: 5px;
">
              <button id="button1Modal17" class="toggle-buttonModal17" onclick="toggleColorModal17('button1Modal17')" style="
    border: none;
    background: #1CA2ED;
    padding: 0;
    border-radius: 7px;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/all-users.svg')}}" alt="All Users" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: white;">All Users</span>
              </button>

              <button id="button2Modal17" class="toggle-buttonModal17" onclick="toggleColorModal17('button2Modal17')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/educated.svg')}}" alt="Educated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Educated</span>
              </button>

              <button id="button3Modal17" class="toggle-buttonModal17" onclick="toggleColorModal17('button3Modal17')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/cultivated.svg')}}" alt="Cultivated" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Cultivated</span>
              </button>

              <button id="button4Modal17" class="toggle-buttonModal17" onclick="toggleColorModal17('button4Modal17')" style="
    border: none;
    background: #F2F2F2;
    padding: 0;
    cursor: pointer;
    width: 80px;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 7px;
    transition: transform 0.2s ease;
  ">
                <img src="{{ asset('assets/svg/svg-dialog/academic.svg')}}" alt="Academic" style="width: 55px; height: 55px;" />
                <span style="font-size: 12px; font-weight:bold; margin-top: 5px; font-family: Genos; color: gray;">Academic</span>
              </button>
            </div>



          </div>

          <div>
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>

              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>

              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="checkbox" class="form-check-input" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>
          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 54px;
                height: 51px;
                margin-top: 50px;
                margin-left: 150px;
              ">
            <button style="outline: none; border: none; border-radius: 10px;background: #1BC469;
            padding: 2px;
">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Path_2-2.svg')}}" style="width: 29px; height: 26px;" />
              <span style="font-family: Genos; color: white;">share</span>
            </button>
          </div>
        </div>
        <div style="
                position: absolute;
                bottom: -10%;
                left: 100px;
                width: 202px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
          <div id="backButtonToMainFrModel17" data-target="#modal6" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
            <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
          </div>


        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true " aria-labelledby="Modlal6">
    <div class="modal-dialog modal-dialog-centered" style="position: relative">

      <div class="modal-content container"
        style="background-color: #e0e0e0; width: 375px;height: 812px; padding: 0; font-family: Genos;border-radius: 10px;">

        <div style="
        width: 50px;
        height: 130px;
              position: absolute;
              top: 1%;
              right: -17%;
              border-radius: 5px;
              z-index: 1000;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              gap: 5px;
            ">

          <img id="deleteButton1" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}"
            style="width: 100%; height: 100%; cursor: pointer;" />

          <img id="backButtonToMainFrModel6" data-target="#modal17"
            src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008249.svg')}}" style="width: 100%; height: 100%; cursor: pointer;" />
        </div>
        <div class="modal-body" style="width:360px ;  height: 783px; margin: 5px; padding: 0;">
          <div style="
            width: 360px;
            height: 65px;
                display: flex;
                align-items: center;
                gap: 10px;
                background-color: #e47a7d3f;
                border-radius: 10px;
                padding: 5px;
              ">
            <img style="width: 50px; height: 50px; border-radius: 50%" src="{{ asset('assets/svg/svg-dialog/donations/Check%20Circle.svg')}}"
              alt="" />


            <div style="
              width: 250px;
              height: 53px;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  text-align: center;
                  padding: 0;
                ">
              <div style="
                    width: 200px;
                    height: 26px;
                          display: flex;
                          align-items: center;
                          text-align: center;
                          gap: 5px;
                          font-weight: 500;
                          font-size: 22px;
                          color: #64748B;

                        ">
                <div style="
                            width: 2px;
                            height: 2px;
                            border-radius: 45%;
                            background: #00000066;
                            "></div>

                Surveys Information

                <div style="
                      width: 2px;
                      height: 2px;
                      border-radius: 45%;
                      background: #00000066;
                      "></div>
              </div>
              <div style="width: 248px; height: 24px;font-size:  14px;
              color: #ed1c24; font-weight: 400;
              line-height: 14px;">
                This Surveys will automatically end on the specified date.
              </div>
            </div>
          </div>

          <div id="previewContainerWrapperModel6" style="width: 360px; height: 213px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 10px;margin-bottom: 10px;">
            <!-- Preview Container -->
            <div class="previewContainerModel6" style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;">

              <!-- Add Image Button (top-aligned) -->
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Object.svg')}}" alt="Illustration" data-target="#modal17"
                data-bs-dismiss="modal"
                style="height: 57px; width: 41px; align-self: flex-start;margin-left: 150px;margin-top: 10px"
                id="addImageButtonModel6" />

              <!-- Input Field (covering the entire container) -->
              <input type="file" class="fileInput6" accept="image/jpg,image/png,image/jpeg,video/mp4"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />

              <!-- Image Preview Section -->
              <div id="image-preview-container" class="image-preview-container"
                style="width: 100%; height: 100%; visibility: visible;border-radius: 10px;"></div>

              <!-- Description Text (bottom-aligned) -->
              <div id="descriptionTextContainer" style="width: 344px; height: 90px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 65px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 15px;">Multi Selection</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 15px; color: #64748B;">File Size H 812 - W
                    350</h6>
                  <p style="font-family: Genos; font-size: 18px; font-weight: 400;
             line-height: 10px; letter-spacing: 0.02em; text-align: center;
             color: #64748B;">
                    MP4-JPG Or PNG - <span style="color: red;">Max 1 Image</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <form>

            <div class="mb-3 card border-0" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Surveys Title</label>
              <input type="text" class="form-control" id="surveyTitle" placeholder="Type Donation Title"
                style="background-color: #e0e0e0; width: 347px;height: 35px;margin-bottom: 5px;" />
            </div>

            <div class="mb-3 card border-0" style="
            width: 360px;
            height: 81px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 0;
          ">
              <label for="surveysTitle" class="form-label" style="font-weight: bold;width: Hug (93px)px;
        height: Hug (19px)px;
        gap: 10px;
        opacity: 0px;
        ">Surveys duration</label>
              <div class="row">
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group" style="width: 150px; height: 35px;
                background-color: #e0e0e0;
                border-radius: 5px;
                ">
                    <input type="text" class="form-control" placeholder="Start Date" id="datepicker1Modal6"
                      aria-label="Datepicker 1" style="width: 90px; height: 35px; background-color: #e0e0e0;" />
                    <button class="btn " type="button" onclick="$('#datepicker1Modal6').datepicker('show')">
                      <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" style="width: 20px;
                  height: 20px;
                  display: flex;
                  ">
                    </button>
                  </div>
                </div>
                <div class="col-6" style="border-radius: 10px;">
                  <div class="input-group" style="width: 150px; height: 35px; background-color: #e0e0e0;
                border-radius: 5px;">
                    <input type="text" class="form-control" placeholder="Expired Date" id="datepicker2Modal6"
                      aria-label="Datepicker 2" style="width: 90px; height: 35px; background-color: #e0e0e0" />
                    <button class="btn" type="button" onclick="$('#datepicker2Modal6').datepicker('show')">
                      <img src="{{ asset('assets/svg/svg-dialog/Calendar%20Add.svg')}}" style="width: 20px;
                  height: 20px;
                  display: flex;
                  ">
                    </button>
                  </div>
                </div>
              </div>


            </div>

            <div class="mb-3 card border-0" style="
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            width: 360px;
            height: 220px;;
          ">

              <div class="reaction-header" style="margin: 0; padding: 0;">
                <span style="font-weight: bold; padding: 0;">Allowed Reaction1</span>
              </div>

              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">

                  <label class="custom-file-container">
                    <input type="file" accept="image/jpg,image/png,image/jpeg,video/mp4" onchange="updateLabelWithImage(event, 'iconContainer1')">
                    <div class="icon-container" id="iconContainer1" style="width: 24px; height: 24px;">
                      <img id="defaultIcon1_0" src="/assets/Gallery%20Add.svg'" alt="Icon" />
                    </div>
                  </label>


                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>
              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">


                  <label class="custom-file-container">
                    <input type="file" accept="image/jpg,image/png,image/jpeg,video/mp4" onchange="updateLabelWithImage(event, 'iconContainer2')">
                    <div class="icon-container" id="iconContainer2" style="width: 24px; height: 24px;">
                      <img id="defaultIcon2_0" src="/assets/Gallery%20Add.svg'" alt="Icon" />
                    </div>
                  </label>
                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>
              <span style="margin-left: 250px;padding: 0; height: 20px;">Max. 10 Letters</span>

              <div class="reaction-item" style="background-color: white;border: none;margin: 0;padding: 0;">
                <div style="width: 33px; height: 33px;">


                  <label class="custom-file-container">
                    <input type="file" accept="image/jpg,image/png,image/jpeg,video/mp4" onchange="updateLabelWithImage(event, 'iconContainer3')">
                    <div class="icon-container" id="iconContainer3" style="width: 24px; height: 24px;">
                      <img id="defaultIcon3_0" src="/assets/Gallery%20Add.svg'" alt="Icon" />
                    </div>
                  </label>
                </div>
                <input type="text" class="form-control" style="background-color: #e0e0e0"
                  placeholder="Type the amount" />
              </div>






          </form>

          <div style="width: 360px; height: 79px; border: 2px dashed gray;
          border-radius: 10px; position: relative;margin-top: 25px; margin-left: -5px;" id="previewContainerMp3">
            <!-- Preview Container -->
            <div style="display: flex; flex-direction: column; justify-content: space-between;
            align-items: center; background-size: contain; cursor: pointer;
            border-radius: 10px; position: relative; height: 100%;" id="Mp3Input">


              <input type="file" class="fileInput7" accept=".mp3, .wav" name="audio"
                style="opacity: 0; width: 100%; height: 100%; position: absolute; cursor: pointer;" />



              <!-- Description Text (bottom-aligned) -->
              <div id="description" style="width: 345px; height: 64px; display: flex;
              align-items: center; justify-content: start;
              gap: 10px; background-color: #fff; margin-top: 40px; border-radius: 10px;
              margin: 7px; align-self: flex-end;">
                <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008026.svg')}}" alt="Illustration" class="img-fluid"
                  data-target="#modal17" data-bs-dismiss="modal" style="height: 41px; width: 37px;margin-left: 10px;" />
                <div style="width: 275px; height: 47px; text-align: center;">
                  <h4 style="font-size: 26px; font-weight: 500; line-height: 20px;">Upload Audio</h4>
                  <h6 style="font-size: 22px; font-weight: 500; line-height: 20px; color: #64748B;">Mp3 or Wav File</h6>
                </div>
              </div>
            </div>

            <div style="width: 361px; height: 57px;
       border-radius: 10px; position: relative;
       margin-bottom: 10px; margin-left: 0px;
       margin-top: 5px;
       background-color: #fff; display: none;" id="Mp3upload">
              <!-- Preview Container -->
              <div style="display: flex; flex-direction: column; justify-content: space-between;
         align-items: center; background-size: contain; cursor: pointer;
         border-radius: 10px; position: relative; height: 100%;">


                <!-- Description Text (bottom-aligned) -->
                <div style="width: 340px; height: 37px; display: flex;
           align-items: center; justify-content: start;
          margin-top: 40px; border-radius: 10px;
           margin: 7px; align-self: flex-end;">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201000002312.svg')}}" alt="Illustration" class="img-fluid" id="play"
                    style="height: 14px; width: 19px" />

                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">
                  <img src="{{ asset('assets/svg/svg-dialog/Group%201.svg')}}" alt="Illustration" class="img-fluid" data-target="#modal17"
                    data-bs-dismiss="modal" style="height: 57px; width: 40px">

                  <span style="color: gray;margin-left: 5px; " id="Duration">00:00</span>

                  <img id="deleteButtonMp3" src="{{ asset('assets/svg/svg-dialog/second-svg-dialog/Group%201000008246.svg')}}" style="width: 37px; height: 37px; cursor: pointer;background-color: #F2F2F2;
             border-radius: 10px; margin-left: 40px;" />
                </div>
              </div>
            </div>
          </div>




          <div style="
          position: absolute;
          bottom: -100%;
          left: 100px;
          width: 202px;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
        ">
            <div id="createSOSButton" data-target="#popupModal" style="
            outline: none;
            width: 50px;
            height: 40px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
          ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>



          </div>

        </div>
      </div>
    </div>
  </div>



  <!--************************End **************-->









  <div class="modal fade" id="modal13" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container">
        <div class="modal-body" style="padding: 5px 0; position: relative">
          <div style="background-color: #fff; padding: 4px; border-radius: 5px">
            <div style="
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                ">
              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 70%;
                    height: 40px;
                    padding: 5px;
                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}" class="img-thumbnail"
                    style="width: 40px; height: 35px; object-fit: cover" />

                  <div style="
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                      ">
                    <div style="
                          font-size: 16px;
                          font-weight: bold;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>

                      YekBun Team

                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>
                    </div>

                    <div style="
                          font-size: 12px;
                          font-weight: 400;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #7e7e7e;
                          "></div>
                      Time & Date
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}"
                  style="width: 40px; height: 35px; object-fit: cover" class="img-thumbnail" />
              </div>
            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 100%;
                  text-align: left;
                  background-color: #f8f9fa;
                  padding: 7px;
                  margin-top: 7px;
                  border-radius: 5px;
                ">
              title donation
            </div>

            <div style="width: 100%; height: 330px">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008097.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>

            <div style="
                  width: 100%;
                  flex-direction: column;
                  display: flex;
                  align-items: center;
                  background-color: #f8f9fa;
                  border-radius: 5px;
                  padding: 5px;
                ">
              <div style="
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;
                  ">
                <div style="
                      display: flex;
                      align-items: center;
                      gap: 3px;
                      height: 100px;
                      width: 25%;
                      background-color: #fff;
                      flex-direction: column;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/donations/Oval%20Copy%204.svg')}}" class="img-thumbnail" style="
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        object-fit: cover;
                      " />
                  <p style="
                        font-size: 14px;
                        font-weight: 500;
                        text-align: center;
                        padding: 0 5px;
                      ">
                    mohamed Aliaaa
                  </p>
                </div>

                <div style="
                      display: flex;
                      align-items: center;
                      gap: 3px;
                      height: 100px;
                      width: 25%;
                      background-color: #fff;
                      flex-direction: column;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/donations/Oval%20Copy%204.svg')}}" class="img-thumbnail" style="
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        object-fit: cover;
                      " />
                  <p style="
                        font-size: 14px;
                        font-weight: 500;
                        text-align: center;
                        padding: 0 5px;
                      ">
                    mohamed Aliaaa
                  </p>
                </div>

                <div style="
                      display: flex;
                      align-items: center;
                      gap: 3px;
                      height: 100px;
                      width: 25%;
                      background-color: #fff;
                      flex-direction: column;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/donations/Oval%20Copy%204.svg')}}" class="img-thumbnail" style="
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        object-fit: cover;
                      " />
                  <p style="
                        font-size: 14px;
                        font-weight: 500;
                        text-align: center;
                        padding: 0 5px;
                      ">
                    mohamed Aliaaa
                  </p>
                </div>
              </div>

              <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 10px;
                    padding: 5px;
                    width: 100%;
                  ">
                <div style="
                      position: relative;
                      width: 60%;
                      display: flex;
                      align-items: center;
                      gap: 2px;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000003133.svg')}}" class="img-thumbnail"
                    style="width: 70%; height: 50px; object-fit: cover" />

                  <span style="font-size: 12px; font-weight: bold">+300 donate</span>
                </div>

                <button style="
                      background-color: #c53b40;
                      color: #fff;
                      padding: 5px 15px;
                      border-radius: 10px;
                      outline: none;
                      border: none;
                      font-weight: bold;
                    ">
                  vote now
                </button>
              </div>
            </div>
          </div>

          <div style="
                width: 100%;
                background-color: #fff;
                margin-top: 5px;
                border-radius: 5px;
                padding: 5px;
              ">
            <div style="display: flex; align-items: center; gap: 5px">
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000007554.svg')}}" class="img-thumbnail"
                style="width: 40px; height: 40px; object-fit: cover" />
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <span style="font-weight: 400">Share Option</span>
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
            </div>

            <div style="
                  display: flex;
                  align-items: center;
                  justify-content: space-around;
                  gap: 5px;
                  margin: 5px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008327.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008318.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>
          </div>

          <div class="mt-1">
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>
              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>
              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>

          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin: 10px;
              ">
            <button style="outline: none; border: none; border-radius: 10px">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Frame%201000007255.svg')}}" style="width: 100%; height: 100%" />
            </button>
          </div>

          <div class="d-flex justify-content-center align-items-center;" style="
                position: absolute;
                bottom: -7%;
                width: 100%;
                display: flex;
                align-items: center;
                gap: 20px;
              ">
            <div id="backButtonToMainFrModel13" data-target="#modal3" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modal15" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container">
        <div class="modal-body" style="padding: 5px 0; position: relative">
          <div style="background-color: #fff; padding: 4px; border-radius: 5px">
            <div style="
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                ">
              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 70%;
                    height: 40px;
                    padding: 5px;
                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}" class="img-thumbnail"
                    style="width: 40px; height: 35px; object-fit: cover" />

                  <div style="
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                      ">
                    <div style="
                          font-size: 16px;
                          font-weight: bold;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>

                      YekBun Team

                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>
                    </div>

                    <div style="
                          font-size: 12px;
                          font-weight: 400;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #7e7e7e;
                          "></div>
                      Time & Date
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}"
                  style="width: 40px; height: 35px; object-fit: cover" class="img-thumbnail" />
              </div>
            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 100%;
                  text-align: left;
                  background-color: #f8f9fa;
                  padding: 7px;
                  margin-top: 7px;
                  border-radius: 5px;
                ">
              Some Text wil be here when the User have
            </div>

            <div style="width: 100%; height: 330px">
              <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000008479(1).svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>
            <!-- ddd -->

            <div style="background-color: #fff; padding: 5px">
              <div style="
                    display: flex;
                    align-items: center;
                    border-radius: 10px;
                    justify-content: space-between;
                  ">
                <img src="{{ asset('assets/svg/svg-dialog/donations/Date.svg')}}" class="img-thumbnail"
                  style="width: 50px; height: 50px; object-fit: cover" />

                <div style="
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      width: 100%;
                    ">
                  <span style="font-weight: bold; font-size: 16px">. 14 . 12 . 2024 - . 16 . 12 . 2024</span>
                  <div style="display: flex; align-items: center; gap: 10px">
                    <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000002871.svg')}}" class="img-thumbnail"
                      style="width: 30px; height: 30px; object-fit: cover" />

                    <span style="font-size: 14px">. Start: 16:00 .</span>
                    <span style="font-size: 14px">. End: 16:00 .</span>
                  </div>
                </div>
              </div>

              <div style="
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    border-radius: 10px;
                  ">
                <img src="{{ asset('assets/svg/svg-dialog/donations/Date(1).svg')}}" class="img-thumbnail"
                  style="width: 50px; height: 50px; object-fit: cover" />

                <div style="
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                    ">
                  <span style="font-weight: bold; font-size: 16px">
                    . Gala Convention Center .
                  </span>

                  <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 5px;
                      ">
                    <img src="{{ asset('assets/svg/svg-dialog/donations/image%20831.svg')}}" class="img-thumbnail"
                      style="width: 30px; height: 30px; object-fit: cover" />

                    <span style="font-size: 14px">. Hannover . Ihme Platz 4-12 .</span>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000002100.svg')}}" class="img-thumbnail"
                  style="width: 50px; height: 50px; object-fit: cover" />
              </div>
            </div>
            <!-- ddd -->
          </div>

          <div style="
                width: 100%;
                background-color: #fff;
                margin-top: 5px;
                border-radius: 5px;
                padding: 5px;
              ">
            <div style="display: flex; align-items: center; gap: 5px">
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000007554.svg')}}" class="img-thumbnail"
                style="width: 40px; height: 40px; object-fit: cover" />
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <span style="font-weight: 400">Share Option</span>
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
            </div>

            <div style="
                  display: flex;
                  align-items: center;
                  justify-content: space-around;
                  gap: 5px;
                  margin: 5px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008327.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008318.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>
          </div>

          <div class="mt-1">
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>
              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>
              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>

          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin: 10px;
              ">
            <button style="outline: none; border: none; border-radius: 10px">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Frame%201000007255.svg')}}" style="width: 100%; height: 100%" />
            </button>
          </div>

          <div style="
                position: absolute;
                bottom: -5%;
                left: 0;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
              ">
            <div id="backButtonToMainFrModel15" data-target="#modal5" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal16" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-model-image container" style="height: 95vh; position: relative">
        <div class="modal-body" style="padding: 5px 0">
          <div style="background-color: #fff; padding: 4px; border-radius: 5px">
            <div style="
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  margin: 0;
                ">
              <div style="
                    background-color: #f8f9fa;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 70%;
                    height: 40px;
                    padding: 5px;
                  ">
                <div style="
                      display: flex;
                      align-items: start;
                      align-items: center;
                    ">
                  <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000003833.svg')}}" class="img-thumbnail"
                    style="width: 40px; height: 35px; object-fit: cover" />

                  <div style="
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: flex-start;
                        margin-left: 5px;
                      ">
                    <div style="
                          font-size: 16px;
                          font-weight: bold;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>

                      YekBun Team

                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #4e4e4e;
                          "></div>
                    </div>

                    <div style="
                          font-size: 12px;
                          font-weight: 400;
                          color: #7e7e7e;
                          display: flex;
                          align-items: center;
                          gap: 5px;
                          justify-content: space-between;
                        ">
                      <div style="
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: #7e7e7e;
                          "></div>
                      Time & Date
                    </div>
                  </div>
                </div>

                <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}"
                  style="width: 40px; height: 35px; object-fit: cover" class="img-thumbnail" />
              </div>
            </div>

            <div style="
                  font-size: 14px;
                  font-weight: 400;
                  color: gray;
                  width: 100%;
                  text-align: left;
                  background-color: #f8f9fa;
                  padding: 7px;
                  margin-top: 7px;
                  border-radius: 5px;
                ">
              Some Text wil be here when the User have
            </div>

            <div style="width: 100%; height: 330px">
              <img src="{{ asset('assets/svg/svg-dialog/donations/Group%201000008479(1).svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>
          </div>

          <div style="
                width: 100%;
                background-color: #fff;
                margin-top: 5px;
                border-radius: 5px;
                padding: 5px;
              ">
            <div style="display: flex; align-items: center; gap: 5px">
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000007554.svg')}}" class="img-thumbnail"
                style="width: 40px; height: 40px; object-fit: cover" />
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
              <span style="font-weight: 400">Share Option</span>
              <div style="
                    width: 5px;
                    height: 5px;
                    border-radius: 50%;
                    background-color: #4e4e4e;
                  "></div>
            </div>

            <div style="
                  display: flex;
                  align-items: center;
                  justify-content: space-around;
                  gap: 5px;
                  margin: 5px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008327.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008317.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008318.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />

              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Group%201000008319.svg')}}" class="img-thumbnail"
                style="width: 100%; height: 100%; object-fit: cover" />
            </div>
          </div>

          <div class="mt-1">
            <div class="toggle-card">
              <!-- Toggle 1 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="comments" checked />
                  <label for="comments" class="form-check-label"></label>
                </div>
                <span>Comments</span>
              </div>
              <!-- Toggle 2 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="share" />
                  <label for="share" class="form-check-label"></label>
                </div>
                <span>Voice Comments</span>
              </div>
              <!-- Toggle 3 -->
              <div class="toggle-item">
                <div class="form-switch">
                  <input type="radio" class="form-check-input" name="toggleOptions" id="emoji" />
                  <label for="emoji" class="form-check-label"></label>
                </div>
                <span>Emoji</span>
              </div>
            </div>
          </div>

          <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin-top: 5rem;
              ">
            <button style="outline: none; border: none; border-radius: 10px">
              <img src="{{ asset('assets/svg/svg-dialog/third-svg-dialog/Frame%201000007255.svg')}}" style="width: 100%; height: 100%" />
            </button>
          </div>

          <div class="d-flex justify-content-center align-items-center;" style="
                position: absolute;
                bottom: -7%;
                width: 100%;
                display: flex;
                align-items: center;
                gap: 20px;
              ">
            <div id="backButtonToMainFrModel16" data-target="#modal6" style="
                  outline: none;
                  width: 50px;
                  height: 40px;
                  background-color: #fff;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 10px;
                ">
              <img src="{{ asset('assets/svg/svg-dialog/first-svg-dialog/Group%201000008245.svg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
