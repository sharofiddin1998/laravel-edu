
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>{{ $title ?? 'Admin paneliga xush kelibsiz' }}</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
      <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="/plugins/switchery/switchery.min.css">
      <script src="/assets/js/modernizr.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Summernote css -->
        <link href="/plugins/summernoZte/summernote.css" rel="stylesheet" />
      <!-- Select2 -->

        <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />

        <link href="/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      <script>
         function checkAvailability() {
         $("#loaderIcon").show();
         jQuery.ajax({
         url: "check_availability.php",
         data:'username='+$("#sadminusername").val(),
         type: "POST",
         success:function(data){
         $("#user-availability-status").html(data);
         $("#loaderIcon").hide();
         },
         error:function (){}
         });
         }
      </script>
   </head>

   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
        <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">


                   <a href="index.php" class="logo">
                       <span>
                           <img src="/assets/images/logo.png" alt="" height="60">
                       </span>

                   </a>

                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>


                        </ul>
                        <ul class="nav navbar-nav" style=" width: 50%; margin-top: 23px; color: red;">
                              <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><b>Today Trending News : </b><b>For any Website or Project Development Contact </b> nowdemy@gmail.com</marquee>


                        </ul>

                       {{-- <div id="google_translate_element">

                                        </div> --}}
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">


                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>

                                        <h5>Hi, Mayuri K.</h5>
                                    </li>

                                    <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a></li>

                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <x-sidebar></x-sidebar>
            {{ $slot }}


<footer class="footer text-center">
    Footer
 </footer>
 </div>
</div>
<!-- END wrapper -->
<script>
var resizefunc = [];
</script>
<!-- jQuery  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/livewire-sortable.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>
<script src="/plugins/switchery/switchery.min.js"></script>

<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

<script src="/plugins/summernote/summernote.min.js"></script>
<!-- Select 2 -->
<script src="/plugins/select2/js/select2.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
$(document).ready(function() {
$('#example').DataTable( {
 dom: 'Bfrtip',
 buttons: [
     'copyHtml5',
     'excelHtml5',
     'csvHtml5',
     'pdfHtml5'
 ]
});
});
$(document).ready(function() {
$('#example1').DataTable( {
 dom: 'Bfrtip',
 buttons: [
     'copyHtml5',
     'excelHtml5',
     'csvHtml5',
     'pdfHtml5'
 ]
});
});
</script>
<script>

jQuery(document).ready(function(){

 $('.summernote').summernote({
     height: 240,                 // set editor height
     minHeight: null,             // set minimum height of editor
     maxHeight: null,             // set maximum height of editor
     focus: false                 // set focus to editable area after initializing summernote
 });
 // Select2
 $(".select2").select2();

 $(".select2-limiting").select2({
     maximumSelectionLength: 2
 });
});
</script>
<script src="/plugins/switchery/switchery.min.js"></script>

<!--Summernote js-->
<script src="/plugins/summernote/summernote.min.js"></script>
{{--
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> --}}
{{-- <style>
.goog-logo-link {
 display:none !important;
}

.goog-te-gadget{
 color: transparent;
}
.goog-te-gadget .goog-te-combo {
 margin: 0px 0;
 padding: 8px;
 color: #000;
 background: #eeee;
}
#google_translate_element{
 padding-top: 13px;
 position: absolute;
 top: 7px;
 right:100px;
}
</style> --}}
<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        });
</script>
<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '#editors' ) )
        .catch( error => {
            console.error( error );
        });
</script>
</body>
</html>


