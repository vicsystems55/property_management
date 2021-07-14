@extends('layouts.dashboard')

@section('page-styles')

<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/dropzone/min/dropzone.min.css">
<link rel="stylesheet" href="{{config('app.url')}}dashmix/assets/js/plugins/flatpickr/flatpickr.min.css">

@endsection

@section('content')

<main id="main-container">
    <!-- Quick Menu -->
    {{-- <div class="bg-body-dark">
        <div class="content">
            
        </div>
    </div> --}}
    <!-- END Quick Menu -->

    <!-- Page Content -->
    <div class="content">

        <div class="card col-md-10 mx-auto">
            <div class="card-body">
                <h4>Submit Request</h4>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Project Title:</label>
                        <input type="text" class="form-control" placeholder="Create a project title">
                    </div>
                    <div class="form-group">
                        <label for="">Start Date:</label>
                        <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">

                    </div>

                    <div class="form-group">
                        <label for="">End Date:</label>
                        <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">

                    </div>

                    <div class="form-group">
                        <label for="">Project Type:</label>
                            <select name="" id="" class="form-control">
                                <option value="">--Select Project Type--</option>
                                <option value="Bungalow">Bungalow</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="">Enter Location:</label>
                        <input type="text" class="form-control" placeholder="Where will the building be located">

                    </div>

                    <div class="form-group">
                        <label for="">Budget:</label>
                        <input type="text" class="js-rangeslider" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">

                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block shadow">Submit</button>
                    </div>

                    
                </form>
            </div>
        </div>


        
       
     
    </div>
    <!-- END Page Content -->
</main>

@section('page-script')


        <!-- Page JS Plugins -->
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/dropzone/min/dropzone.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/flatpickr/flatpickr.min.js"></script>

        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
        <script>jQuery(function(){Dashmix.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs', 'pw-strength']);});</script>
    

@endsection

@endsection

