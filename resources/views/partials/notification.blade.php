<script>

let url = location.href.replace(/\/$/, "");

if (location.hash) {
    const hash = url.split("#");
    $('#vert-tabs-tab a[href="#' + hash[1] + '"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(() => {
        $(window).scrollTop(0);
    }, 400);
}

    @if(Session::has('notification'))

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    
    var type = "{{ Session::get('notification.alert_type') }}";
   //but the type var gets assigned with default value(info)
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
    @endif
</script>