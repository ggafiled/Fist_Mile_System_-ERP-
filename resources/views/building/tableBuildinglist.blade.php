@extends('adminlte::page')
@section('content')

@endsection

@section('adminlte_js')

<script>
//  $(document).ready(function() {
//     $('#tablelist').DataTable( {
//      lengthMenu: [
//             [15, 20, 50, 100, -1],
//             [15, 20, 50, 100, "All"]
//         ],
//         scrollX: !0,
//         dom: "Bfrtip",
//         buttons: [
//             "colvis",
//             "copy",
//             "csv",
//             "excel",
//             {
//                 extend: "pdf",
//                 text: "PDF",
//                 pageSize: "A4",
//                 pageOrientation: "landscape",
//                 customize: function(t) {
//                     t.defaultStyle = {
//                         font: "THSarabun",
//                         fontSize: 16
//                     };
//                 }
//             },
//             "print"
//         ],
//     } );
// } );

$(document).ready(function () {
    // Create DataTable
    var table = $('#tablelist').DataTable({
    "ordering": false,
    lengthMenu: [
            [15, 20, 50, 100, -1],
            [15, 20, 50, 100, "All"]
        ],
        scrollX: !0,
        dom: "Bfrtip",
        buttons: [
            "colvis",
            "copy",
            "csv",
            "excel",
            {
                extend: "pdf",
                text: "PDF",
                pageSize: "A4",
                pageOrientation: "landscape",
                customize: function(t) {
                    t.defaultStyle = {
                        font: "THSarabun",
                        fontSize: 16
                    };
                }
            },
            "print"
        ],
         "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };

            // Total over all pages
            building = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            layer = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            room = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            price = api
                .column( 18 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            priceSum = api
                .column( 20 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over this page
            // pageTotal = api
            //     .column( 5, { page: 'current'} )
            //     .data()
            //     .reduce( function (a, b) {
            //         return intVal(a) + intVal(b);
            //     }, 0 );

            // Update footer
            $( api.column( 6 ).footer() ).html(
                 building
            );

             $( api.column( 7 ).footer() ).html(
                layer
            );
            $( api.column( 8 ).footer() ).html(
                 room
            );
            $( api.column( 18 ).footer() ).html(
                price
            );
            $( api.column( 20 ).footer() ).html(
                priceSum
            );
        }

    });

    // Create the chart with initial data
    var container = $('<div/>').insertBefore(table.table().container());

    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Total Number of Districts',
        },
        series: [
            {
                data: chartData(table),
            },
        ],
    });

    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});

function chartData(table) {
    var counts = {};

    // Count the number of entries for each position
    table
        .column(13, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });


    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}

// $(function () {
//       $('#tablelist').excelTableFilter();
// });
</script>
@stop
