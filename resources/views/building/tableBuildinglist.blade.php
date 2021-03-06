@extends('adminlte::page')
@section('content')
<style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

    div.dataTables_wrapper {
        width: 4500px;
        height: 750px;
        margin: 0 auto;
    }

    th {
        white-space: nowrap;
    }

	div.dataTables_wrapper {
		width: 4500px;
		margin: 0 auto;
	}
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    th { white-space: nowrap; }

</style>

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark">
                <h3>
                    <center>{{ __('BUILDING LIST TABLE') }}
                </h3>
                </center>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="tablelist" style="width:100%">
                        <thead>
                            <tr class="info"
                            >
                                {{-- <th width="3%">#</th> --}}
                                <th>อาคาร</th>
                                <th>fm-code</th>
                                <th>ชื่อผู้ติดต่อ</th>
                                <th>เบอร์โทร</th>
                                <th width="1%">พื้นที่ น.</th>
                                <th width="1%">จำนวนอาคาร</th>
                                <th width="1%">ชั้น</th>
                                <th width="1%">ห้อง</th>
                                <th>ที่อยู่</th>
                                <th>สัญญา</th>
                                <th>วันลงนามสัญญา</th>
                                <th>เมือง</th>
                                <th>เขต</th>
                                <th>จังหวัด</th>
                                <th>รหัสไปรษณีย์</th>
                                <th>Latitude</th>
                                <th>Longtude </th>
                                <th>ราคาต่อ ตรม </th>
                                <th>เวลาในการปฏิบัติงาน </th>
                                <th>ยอดเงิน </th>
                                <th>Developer </th>
                                <th>Grade </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                {{-- <th scope="row">{{$row->id}}</th> --}}
                                <td>{{$row->buildingId}}</td>
                                <td>{{$row->fmCode}}</td>
                                <td>{{$row->contactName}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->area}}</td>
                                <td>{{$row->numberLayer}}</td>
                                <td>{{$row->floor}}</td>
                                <td>{{$row->roomNumber}}</td>
                                <td>{{$row->detailAdress}}</td>
                                <td>{{$row->contract}}</td>
                                <td>{{$row->contracttime}}</td>
                                <td>{{$row->city}}</td>
                                <td>{{$row->zone}}</td>
                                <td>{{$row->province}}</td>
                                <td>{{$row->postalCode}}</td>
                                <td>{{$row->latitude}}</td>
                                <td>{{$row->longtude}}</td>
                                <td>{{$row->priceSquare}}</td>
                                <td>{{$row->workingTime}}</td>
                                <td>{{$row->blance}}</td>
                                <td>{{$row->developer}}</td>
                                <td>{{$row->grade}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                                <th colspan="6" style="text-align:right">Total:</th>
                                <th></th>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
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
        //  "footerCallback": function ( row, data, start, end, display ) {
        //     var api = this.api(), data;

        //     // Remove the formatting to get integer data for summation
        //     var intVal = function ( i ) {
        //         return typeof i === 'string' ?
        //             i.replace(/[\$,]/g, '')*1 :
        //             typeof i === 'number' ?
        //                 i : 0;
        //     };

        //     // Total over all pages
        //     building = api
        //         .column( 6 )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     layer = api
        //         .column( 7 )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     room = api
        //         .column( 8 )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     price = api
        //         .column( 18 )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     priceSum = api
        //         .column( 20 )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     // Total over this page
        //     pageTotal = api
        //         .column( 5, { page: 'current'} )
        //         .data()
        //         .reduce( function (a, b) {
        //             return intVal(a) + intVal(b);
        //         }, 0 );

        //     // Update footer
        //     $( api.column( 6 ).footer() ).html(
        //          building
        //     );

        //      $( api.column( 7 ).footer() ).html(
        //         layer
        //     );
        //     $( api.column( 8 ).footer() ).html(
        //          room
        //     );
        //     $( api.column( 18 ).footer() ).html(
        //         price
        //     );
        //     $( api.column( 20 ).footer() ).html(
        //         priceSum
        //     );
        // }

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
        .column(12, { search: 'applied' })
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

$(function () {
      $('#tablelist').excelTableFilter();
});
</script>
@stop
