

=======
>>>>>>> 0d0a304a5e213288a7e08a922fa1e3cc8fc06e3b
$(document).ready(function () {

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
});
=======
>>>>>>> 0400bbb8318f17563995f56f186e2eb24fc11273
