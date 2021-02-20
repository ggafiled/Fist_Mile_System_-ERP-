var table = $("#tableUser").DataTable({
    processing: true,
    serverSide: true,
    retrieve: true,
    orderCellsTop: true,
    fixedHeader: true,
    ajax: "/user_raw",
    columns: [{
            className: "dt-center",
            orderable: false,
            render: function(data, type, full, meta) {
                return meta.row + 1;
            }
        },
        {
            className: "dt-center",
            data: "image",
            render: function(data, type, row) {
                if (data == null || data.trim() == "") {
                    return '<img src="https://iruimbatam.com/img/no-user-image.jpg" class="rounded  img-thumbnail mw-100" width="48px" height="48px"/>';
                } else {
                    return (
                        '<img src="' +
                        data +
                        '" class="rounded  img-thumbnail mw-100" width="48px" height="48px"/>'
                    );
                }
            }
        },
        {
            className: "dt-center",
            data: "status"
        },
        {
            className: "dt-center",
            data: "role",
            render: function(data, type, row) {
                return (
                    "<div class='badge badge-success badge-outlined'>" +
                    data +
                    "</div>"
                );
            }
        },
        {
            data: "name"
        },
        {
            data: "email"
        },
        {
            className: "dt-center",
            data: "email_verified_at",
            render: function(data, type, row) {
                if (data == null || data.trim() == "") {
                    return "<div class='badge badge-warning'>ยังไม่ได้ยืนยันบัญชี</div>";
                } else {
                    return "<div class='badge badge-success'>ยืนยันบัญชีแล้ว</div>";
                }
            }
        },
        {
            className: "data-control",
            orderable: false,
            render: function(data, type, row) {
                return (
                    "<div class='d-flex justify-content-around'>" +
                    "<div class='btn btn-sm btn-danger btn-delete'> ลบ </div>" +
                    "<div class='btn btn-sm btn-warning btn-edit'> แก้ไข </div>" +
                    "</div>"
                );
            }
        }
    ]
});
$("#tableUser tbody").on("click", "td.data-control .btn-delete", function(e) {
    e.preventDefault();
    var tr = $(this).closest("tr");
    var row = table.row(tr);
    var user = table.row(row).data();
    if (user != null) {
        Swal.fire({
            title: "ต้องการลบบัญชีการใช้งานนี้ใช่หรือไม่?",
            text: "เรื่อง " + user.name,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "ยกเลิก",
            confirmButtonText: "ลบ",
            focusCancel: true
        }).then(result => {
            if (result.value) {}
        });
    }
});

$("#btn-clear").on("click", function() {
    $("#username").val("");
    $("#useremail").val("");
    $("#username").focusTextToEnd();
    table
        .search("")
        .columns()
        .search("")
        .draw();
});
$("#username", this).on("keyup change", function() {
    if (table.column(2).search() !== this.value) {
        table
            .column(2)
            .search(this.value)
            .draw();
    }
});
$("#useremail", this).on("keyup change", function() {
    if (table.column(3).search() !== this.value) {
        table
            .column(3)
            .search(this.value)
            .draw();
    }
});