<?php
if (isset($_POST['nama_pelaku'])){
    echo "<pre>";print_r($_POST);
}
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WBS | DPMPTSP Prov. Jateng</title>
    <link rel="icon" type="gif/ico" href="{{asset('img/logoPTSP.png')}}" />
    <meta name="description" content="WBS DPMPTSP Prov Jateng">
    <meta name="author" content="DPMPTSP Prov Jateng | 2018">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/front/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/front/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/front/main.css')}}">
    {{--seko admin--}}
    <link rel="stylesheet" href="{{asset('adminpublic/css/plugins/iCheck/custom.css')}}">
    <link rel="stylesheet" href="{{asset('adminpublic/css/plugins/steps/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('adminpublic/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('adminpublic/css/style.css')}}">

    <!-- script
    ================================================== -->


    <script src="{{asset('js/front/modernizr.js')}}"></script>
    <script src="{{asset('js/front/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            cursor: inherit;
            display: block;
        }
    </style>
</head>
<body id="top">
    <!-- header
    ================================================== -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('header')


    <!-- FORM
    ================================================== -->

    @yield('form')



    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    @yield('sikil')
    <!-- Java Script
        ================================================== -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/front/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/front/plugins.js')}}"></script>
    <script src="{{asset('js/front/main.js')}}"></script>
    <script src="{{asset('js/validate.js')}}"></script>

    <script src="{{asset('adminpublic/js/plugins/steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('adminpublic/js/plugins/validate/jquery.validate.min.js')}}"></script>


    <script>
        $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                    /*if (currentIndex === 3) { //if last step
                        //remove default #finish button
                        $('#form').find('a[href="#finish"]').remove();
                       /!* //append a submit type button
                        $('#form .actions li:last-child').append('<button type="submit" id="submit" value="submit" class="btn-large"><span class="fa fa-chevron-right"></span></button>');*!/
                    }*/
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);
                    /*console.log(form);*/
                    // Submit form input
                    form.submit();
                    /*console.log(form.serialize());*/
                }
            }).validate({
                errorPlacement: function (error, element)
                {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        required: "#status"
                    }
                }
            });
        });
    </script>

</body>
</html>
