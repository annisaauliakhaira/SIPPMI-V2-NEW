<div>
    <x-slot name="css">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <style>

                {
                    margin: 0;
                    padding: 0
                }

                html {
                    height: 100%
                }

                p {
                    color: grey
                }

                #heading {
                    text-transform: uppercase;
                    color: #673AB7;
                    font-weight: normal
                }

                #msform {
                    text-align: center;
                    position: relative;
                    margin-top: 20px
                }

                #msform fieldset {
                    background: white;
                    border: 0 none;
                    border-radius: 0.5rem;
                    box-sizing: border-box;
                    width: 100%;
                    margin: 0;
                    padding-bottom: 20px;
                    position: relative
                }

                .form-card {
                    text-align: left
                }

                #msform fieldset:not(:first-of-type) {
                    display: none
                }

                #msform input,
                #msform textarea {
                    padding: 8px 15px 8px 15px;
                    border: 1px solid #ccc;
                    border-radius: 0px;
                    margin-bottom: 25px;
                    margin-top: 2px;
                    width: 100%;
                    box-sizing: border-box;
                    font-family: montserrat;
                    color: #2C3E50;
                    background-color: #ECEFF1;
                    font-size: 16px;
                    letter-spacing: 1px
                }

                #msform input:focus,
                #msform textarea:focus {
                    -moz-box-shadow: none !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    border: 1px solid #673AB7;
                    outline-width: 0
                }

                #msform .action-button {
                    width: 100px;
                    background: #673AB7;
                    font-weight: bold;
                    color: white;
                    border: 0 none;
                    border-radius: 0px;
                    cursor: pointer;
                    padding: 10px 5px;
                    margin: 10px 0px 10px 5px;
                    float: right
                }

                #msform .action-button:hover,
                #msform .action-button:focus {
                    background-color: #311B92
                }

                #msform .action-button-previous {
                    width: 100px;
                    background: #616161;
                    font-weight: bold;
                    color: white;
                    border: 0 none;
                    border-radius: 0px;
                    cursor: pointer;
                    padding: 10px 5px;
                    margin: 10px 5px 10px 0px;
                    float: right
                }

                #msform .action-button-previous:hover,
                #msform .action-button-previous:focus {
                    background-color: #000000
                }

                .card {
                    z-index: 0;
                    border: none;
                    position: relative
                }

                .purple-text {
                    color: #673AB7;
                    font-weight: normal
                }

                .steps {
                    font-size: 25px;
                    color: gray;
                    margin-bottom: 10px;
                    font-weight: normal;
                    text-align: right
                }

                .fieldlabels {
                    color: gray;
                    text-align: left
                }

                #progressbar {
                    margin-bottom: 30px;
                    overflow: hidden;
                    color: lightgrey
                }

                #progressbar .active {
                    color: #673AB7
                }

                #progressbar li {
                    list-style-type: none;
                    font-size: 15px;
                    width: 20%;
                    float: left;
                    position: relative;
                    font-weight: 400
                }

                #progressbar #informasi_dasar:before {
                    font-family: FontAwesome;
                    text-align: center;
                    position: relative;
                    content: "\f129"
                }

                #progressbar #ringkasan:before {
                    font-family: FontAwesome;
                    text-align: center;
                    content: "\f15c"
                }

                #progressbar #peneliti:before {
                    font-family: FontAwesome;
                    text-align: center;
                    content: "\f007"
                }

                #progressbar #anggaran_biaya:before {
                    font-family: FontAwesome;
                    text-align: center;
                    content: "\f155"
                }

                #progressbar #confirm:before {
                    font-family: FontAwesome;
                    text-align: center;
                    content: "\f00c"
                }

                #progressbar li:before {
                    width: 50px;
                    height: 50px;
                    line-height: 45px;
                    display: block;
                    font-size: 20px;
                    color: #ffffff;
                    background: lightgray;
                    border-radius: 50%;
                    margin: 0 auto 10px auto;
                    padding: 2px
                }

                #progressbar li:after {
                    content: '';
                    width: 100%;
                    height: 2px;
                    background: lightgray;
                    position: absolute;
                    left: 0;
                    top: 25px;
                    z-index: -1
                }

                #progressbar li.active:before,
                #progressbar li.active:after {
                    background: #673AB7
                }

                .progress {
                    height: 20px
                }

                .progress-bar {
                    background-color: #673AB7
                }

                .fit-image {
                    width: 100%;
                    object-fit: cover
                }

        </style>
    </x-slot>
    <x-card>
        <form action="#" method="get" wire:submit.prevent="store">
            <x-card-body>
                @csrf
                <x-card-header>
                    <div>
                        <h4 class="fs-title">Create Usulan Penelitian</h4>
                    </div>
                </x-card-header>
                <!-- progressbar -->
                <ul id="progressbar" class="text-center">
                    <li class="active" id="informasi_dasar" ><strong>Informasi Dasar</strong></li>
                    <li class="active" id="ringkasan"><strong>Ringkasan</strong></li>
                    <li class="" id="peneliti"><strong>Peneliti</strong></li>
                    <li class="" id="anggaran_biaya"><strong>Anggaran Biaya</strong></li>
                    <li class="" id="confirm"><strong>Submit</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div> <br> <!-- fieldsets -->
                <fieldset>
                    <div class="form-card">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="fs-subtitle">Step 2 - 5</h2>
                            </div>
                        </div> 
                        @include('livewire.frontends.penelitian.tambah._info')
                        @include('livewire.frontends.penelitian.tambah._form_ringkasan')
                    </div> 
                </fieldset>                
                <div class="mt-2">
                    <button type="button" wire:click="back" class="btn btn-primary">Back</button>
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </x-card-body>
        </form>
    </x-card>
</div>
