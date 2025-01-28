
@php
    $systemSetting = App\Models\SystemSetting::first();
@endphp

{{-- app icone --}}
<link rel="shortcut icon" type="image/x-icon" href="{{ isset($systemSetting->favicon) && !empty($systemSetting->favicon) ? asset($systemSetting->favicon) : asset('frontend/images/shortcut_icon.jpg') }}" />

<script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
 <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/kaiadmin.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/fonts.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}" />

<link rel="stylesheet" href="{{asset('backend/assets/js/dropify.css')}}">
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://unpkg.com/dropify/dist/css/dropify.min.css">
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
{{-- Sweet Alert css --}}
<link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/css/toastr.css') }}" rel="stylesheet" type="text/css">

{{-- ck-editor start --}}
<style>
    .ck-editor__editable[role="textbox"] {
        min-height: 150px;
    }
</style>
{{-- ck-editor end --}}

@stack('styles')