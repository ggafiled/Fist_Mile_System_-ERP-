@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between mb-auto">
        <div class="header d-flex align-content-center align-items-center">
            <h2>{{ __('Agenda Schedule') }}</h2>
            <span class="ml-3 ml-xs-auto text-black-50">{{ $event_count }} {{ __('Events (today)') }}</span>
        </div>
    </div>
    {!! $calendar->calendar() !!}
    <br/>
</div>
@endsection

@section('adminlte_js')
{!! $calendar->script() !!}
<script>
    $(function() {
        $( ".fc-daygrid-day" ). addClass( 'context-menu-one');
        $.contextMenu({
            selector: '.context-menu-one',
            callback: function(key, options) {
                switch(key){
                    case 'edit':
                        console.log('edit ' + $(this).data('date'));
                        break;
                    case 'cut':
                        console.log('cut ' + $(this).data('date'));
                        break;
                    case 'copy':
                        console.log('copy ' + $(this).data('date'));
                        break;
                    case 'paste':
                        console.log('paste ' + $(this).data('date'));
                        break;
                    case 'delete':
                        console.log('delete ' + $(this).data('date'));
                        break;
                }
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "cut": {name: "Cut", icon: "cut"},
               copy: {name: "Copy", icon: "copy"},
                "paste": {name: "Paste", icon: "paste"},
                "delete": {name: "Delete", icon: "delete"},
                "sep1": "---------",
                "quit": {name: "Quit", icon: function(){
                    return 'context-menu-icon context-menu-icon-quit';
                }}
            }
        });
});
</script>
@endsection
