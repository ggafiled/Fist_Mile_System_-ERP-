pdfMake.fonts = {
    THSarabun: {
      normal: 'THSarabun.ttf',
      bold: 'THSarabun-Bold.ttf',
      italics: 'THSarabun-Italic.ttf',
      bolditalics: 'THSarabun-BoldItalic.ttf'
    }
 }

$.extend(true, $.fn.dataTable.defaults, {
    "language": {
              "sProcessing": "กำลังดำเนินการ...",
              "sLengthMenu": "แสดง_MENU_ แถว",
              "sZeroRecords": "ไม่พบข้อมูล",
              "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
              "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
              "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
              "sInfoPostFix": "",
              "sSearch": "ค้นหา:",
              "sCopy": "คัดลอก",
              "sUrl": "",
              "oPaginate": {
                            "sFirst": "เริ่มต้น",
                            "sPrevious": "ก่อนหน้า",
                            "sNext": "ถัดไป",
                            "sLast": "สุดท้าย"
              }
     }
});

// var table = $('#mytables').DataTable({
    
//     initComplete: function () {
//         // Apply the search
//         this.api().columns().every( function () {
//             var that = this;

//             $( 'input', this.footer() ).on( 'keyup change clear', function () {
//                 if ( that.search() !== this.value ) {
//                     that
//                         .search( this.value )
//                         .draw();
//                 }
//             } );
//         } );
//     },
//     "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
//     "scrollX": true,
//     dom: 'Bfrtip',
//     buttons: [
//         'copy', 'csv', 'excel', 
    
//         {
//             "extend": 'pdf', // ปุ่มสร้าง pdf ไฟล์
//             "text": 'PDF', // ข้อความที่แสดง
//             "pageSize": 'A4',   // ขนาดหน้ากระดาษเป็น A4   
//             pageOrientation: 'landscape',      
//             "customize":function(doc){ // ส่วนกำหนดเพิ่มเติม ส่วนนี้จะใช้จัดการกับ pdfmake
//                 // กำหนด style หลัก
//                 doc.defaultStyle = {
//                     font:'THSarabun',
//                     fontSize:16                                 
//                 };
//             }
//         }, // สิ้นสุดกำหนดพิเศษปุ่ม pdf
//         'print' , 'pageLength'
//     ],

// });

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable({
      "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
      "scrollX": true,
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 
    
        {
            "extend": 'pdf', // ปุ่มสร้าง pdf ไฟล์
            "text": 'PDF', // ข้อความที่แสดง
            "pageSize": 'A4',   // ขนาดหน้ากระดาษเป็น A4   
            pageOrientation: 'landscape',      
            "customize":function(doc){ // ส่วนกำหนดเพิ่มเติม ส่วนนี้จะใช้จัดการกับ pdfmake
                // กำหนด style หลัก
                doc.defaultStyle = {
                    font:'THSarabun',
                    fontSize:16                                 
                };
            }
        }, // สิ้นสุดกำหนดพิเศษปุ่ม pdf
        'print' , 'pageLength'
    ],
      
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );


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

$("div[id^='show_hide_password_'] button").each(function (i) {
    $(this).on("click", function () {
        if ($('#show_hide_password_' + (i + 1) + ' input').attr("type") == "text") {
            $('#show_hide_password_' + (i + 1) + ' input').attr('type', 'password');
            $('#show_hide_password_' + (i + 1) + ' i').addClass("fa-eye-slash");
            $('#show_hide_password_' + (i + 1) + ' i').removeClass("fa-eye");
        } else if ($('#show_hide_password_' + (i + 1) + ' input').attr("type") == "password") {
            $('#show_hide_password_' + (i + 1) + ' input').attr('type', 'text');
            $('#show_hide_password_' + (i + 1) + ' i').removeClass("fa-eye-slash");
            $('#show_hide_password_' + (i + 1) + ' i').addClass("fa-eye");
        }
    });
});

$('#user-photo-action').on('click', async function () {
    Swal.fire({
        title: 'เปลี่ยนรูปภาพโปรไฟล์',
        html: '<input type="url" id="userimage" class="swal2-input" placeholder="วางลิงค์รูปภาพของคุณ"></input>',
        confirmButtonText: 'บันทึก',
        showCloseButton: true,
        showCancelButton: true,
        cancelButtonText: "ยกเลิก",
        preConfirm: () => {
            var urlRegex = /(https?:\/\/.*\.(?:png|jpg|jpeg))/;
            let userimage = Swal.getPopup().querySelector('#userimage')
                .value
            if (userimage === '' || !urlRegex.test(userimage)) {
                Swal.showValidationMessage(
                    `ที่อยู่ไฟล์รูปภาพไม่ถูกต้อง`)
            }
            return {
                userimage: userimage
            }
        }
    }).then((result) => {
        var formData = new FormData();
        formData.append("image", result.value.userimage);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    'content')
            }
        });
        $.ajax("{{ URL::to('/') }}/setUserImage", {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data, status, xhr) {
                Swal.fire("รายงานผล", "เปลี่ยนรูปภาพสำเร็จแล้ว",
                    "success").then(function () {
                    location.reload();
                });
            },
            error: function (jqXhr, textStatus, errorMessage) {
                Swal.showValidationMessage(
                    `ที่อยู่ไฟล์รูปภาพไม่ถูกต้อง`);
            }
        });
    })
});
$('#btnLogout').on('click', function () {
    $('#logout-form').submit();
});

$(document).ready(function() {
    $('#example1').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    
});

// $(document).ready(function() {
//     $('#example1').DataTable( {
    
//         "footerCallback": function ( row, data, start, end, display ) {
//             var api = this.api(), data;    
//             // Remove the formatting to get integer data for summation
//             var intVal = function ( i ) {
//                 return typeof i === 'string' ?
//                     i.replace(/[\$,]/g, '')*1 :
//                     typeof i === 'number' ?
//                         i : 0;
//             };
//             // Total over all pages
//             total = api
//                 .column( 5 )
//                 .data()
//                 .reduce( function (a, b) {
//                     return intVal(a) + intVal(b);
//                 }, 0 );

//             // Total over this page
//             pageTotal = api
//                 .column( 5, { page: 'current'} )
//                 .data()
//                 .reduce( function (a, b) {
//                     return intVal(a) + intVal(b);
//                 }, 0 );

//             // Update footer
//             $( api.column( 5 ).footer() ).html(
//                 pageTotal +'ห้อง'
//             );
//         }
//     } );
// } );



// $(document).ready(function(){
//     $('.deleteForm').click(function(evt){
//        evt.preventDefault();
//        swal({
//            title:"คุณต้องการลบข้อมูลหรือไม่ ?"
//        })
//     })
// })