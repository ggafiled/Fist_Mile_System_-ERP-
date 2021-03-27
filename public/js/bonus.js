$(document).ready(function() {
    $(".deleteForm").click(function(evt) {
        evt.preventDefault();
        var form = $(this).closest("form");
        Swal.fire({
            title: "Are you sure?"
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
});

$(document).ready(function() {
    $("#example1").DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ]
    });
});

