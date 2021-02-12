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
    
    @foreach(Session::get('notification') as $noti)
    var type = "{{ $noti['alert_type'] }}";
    switch(type){
        case 'info':
            toastr.info("{{ $noti['message'] }}");
            break;

        case 'warning':
            toastr.warning("{{ $noti['message'] }}");
            break;

        case 'success':
            toastr.success("{{ $noti['message'] }}");
            break;

        case 'error':
            toastr.error("{{  $noti['message'] }}");
            break;
    }
    @endforeach

    @endif
</script>