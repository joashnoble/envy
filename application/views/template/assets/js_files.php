<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="assets/js/enquire.min.js"></script>
<script type="text/javascript" src="assets/js/pace.js"></script>
<script type="text/javascript" src="assets/plugins/download.js"></script>

<!-- Load Enquire -->

<script type="text/javascript" src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="assets/plugins/velocityjs/velocity.ui.min.js"></script>


<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->
<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="assets/js/application.js"></script>
<script type="text/javascript" src="assets/demo/demo.js"></script>
<script type="text/javascript" src="assets/demo/demo-switcher.js"></script>


<!-- PNotify -->
<script type="text/javascript" src="assets/plugins/notify/pnotify.core.js"></script>
<script type="text/javascript" src="assets/plugins/notify/pnotify.buttons.js"></script>
<script type="text/javascript" src="assets/plugins/notify/pnotify.nonblock.js"></script>

<script src="assets/js/blockUI.js" type="text/javascript"></script>
<script src="assets/js/loadImg.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/plugins/printThis.js"></script>

<script type="text/javascript" src="assets/plugins/sweet-alert/sweetalert.min.js"></script> <!-- //sweetalert -->

<!-- barcode -->

<script src="assets/plugins/barcode/JsBarcode.all.js"></script>
<script type="text/javascript" src="assets/plugins/jquerykey.js"></script>

<script>
$( document ).ready(function() {
        $('form').submit(function() {
          return false;
        });

        $('.modal-dialog').draggable({
              handle: ".modal-header"
        });


});
var showinitializeprint=function(){
    $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Initializing Printing...</h4>',
        css: {
        border: 'none',
        padding: '15px',
        backgroundColor: 'none',
        opacity: 1,
        zIndex: 20000,
    } });
    $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
};
$(document).key('alt+a', function() {
    window.open('Employee','_self');
});

$(document).key('alt+p', function() {
    window.open('PaySlip','_self');
});

$(document).key('alt+t', function() {
    window.open('SchedTimein','_self');
});

$(document).key('alt+x', function() {
    window.open('Dashboard','_self');
});

</script>
