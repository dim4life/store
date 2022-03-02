@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title') - Vuexy Vuejs, HTML & Laravel Admin Dashboard Template</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">
<link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/css/waitMe/waitMe.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/extensions/sweetalert2.min.css">

{{-- Include core + vendor Styles --}}
@include('panels/styles')

</head>

{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp

<body class="vertical-layout vertical-menu-modern 1-column {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{($configData['theme'] === 'light') ? '' : $configData['theme'] }} data-menu="vertical-menu-modern" data-col="1-column"  data-layout="{{ $configData['theme'] }}">

<!-- BEGIN: Content-->
<div class="app-content content">
<div class="content-wrapper">
<div class="content-body">

{{-- Include Startkit Content --}}
@yield('content')

</div>
</div>
</div>
<!-- End: Content-->

{{-- include default scripts --}}
@include('panels/scripts')

<script>
var choice1 = null, choice2 = null, choice3 = null;
$(document).ready(function() {
    $('#exampleModalScrollable').modal('show');
    $("#startApplication").click(function(){
    $('#exampleModalScrollable').modal('hide');
    $("#admission1").slideToggle("slow");
    }); 
    
    const firstName = $('#first_name').val();
    const lastName = $('#last_name').val();
    const email =  $('#email').val();
    const password = $('#password').val();
    const cpassword = $('#cpassword').val();
    const choice1 = $('#choice1').val();
    const choice2 = $('#choice2').val();
    const choice3 = $('#choice3').val();
    
   
    
    
    });

    $('#btn_admission').click(function(){
        
        
        if($('#first_name').val() === ''){
            // console.log('First Name can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "First Name can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if($('#last_name').val() === ''){
            // console.log('Last Name can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "Last Name can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if($('#email').val() === ''){
            // console.log('Email can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "Email can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if($('#password').val() === ''){
            // console.log('password can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "password can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if($('#password').val() !== $('#cpassword').val()){
            // console.log('Password does not match!');
            Swal.fire({
                title: "Error!",
                text: "Password does not match!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else{
            waitme("cont_card");
            setTimeout(function(){
                hidewaitme("cont_card");
                $("#step1").hide();
                $("#step2").slideToggle("slow"); 
            },2000); 
            
        }

        $('#btn_continue').click(function(){
        
        
        if(choice1 === null || choice1 === ''){
            // console.log('First Name can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "First Choice can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if(choice2 === null || choice2 === ''){
            // console.log('Last Name can not be empty!');
            Swal.fire({
                title: "Error!",
                text: "Second Choice can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else if(choice3 === null || choice3 === ''){
            // console.log('Password does not match!');
            Swal.fire({
                title: "Error!",
                text: "Third Choice can not be empty!",
                type: "error",
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
        else{
            waitme("cont_card");
            setTimeout(function(){
                hidewaitme("cont_card");
                $("#step2").hide();
                $("#step1").show("fast"); 
            },2000); 
        }
        
    });

    $("#choice1").change(function () {
    choice1 = $("#choice1 :selected").attr('value');
});
$("#choice2").change(function () {
    choice2 = $("#choice2 :selected").attr('value');
});
$("#choice3").change(function () {
    choice3 = $("#choice3 :selected").attr('value');
});
});   

// $('#btn_admission').one('click', function(e){
    // 	$("#step1").hide();
    //     $("#step2").slideToggle("slow");
    // });

    
    
    
    
    
    function waitme(element) {
        $("#"+element).waitMe({
            
            
            effect : 'ios',
            
            
            text : '',
            
            
            bg : 'rgba(255,255,255,0.7)',
            
            
            color : '#000',
            
            
            maxSize : '',
            
            
            waitTime : -1,
            
            
            textPos : 'vertical',
            
            
            fontSize : '',
            
            
            source : '',
            
            
            onClose : function() {}
            
            
        });
    }
    
    function hidewaitme(element) {
        $("#"+element).waitMe("hide");
    }

    
    // $('#btn_continue').click(function(){
    // 	$("#step2").hide();
    //     $("#dashboard-ecommerce").show("slow");
    // });
    
    
    
    </script>
    <script src="http://127.0.0.1:8000/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="http://127.0.0.1:8000/js/scripts/forms/select/form-select2.js"></script>
    <script src="http://127.0.0.1:8000/js/waitMe/waitMe.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/extensions/sweetalert2.all.min.js"></script>
    </body>
    </html>
