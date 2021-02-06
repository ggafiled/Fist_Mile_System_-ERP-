@extends('adminlte::page')

@section('content')
<div class="container">
    <div id="custom-target"></div>
    <div class="row">
        <div class="col-sm-4 col-lg-3">
            <div class="widget">
                <div class="user-photo">
                        <img src="{{ $user->image ? $user->image : asset('/image/noimage.jpg') }}"
                            alt="User Photo">
                        <span id="user-photo-action" class="user-photo-action">กดที่นี่เพื่อเปลี่ยนรูปภาพ</span>
                </div>
                <div>
                    <div class="nav flex-column nav-tabs h-100 pt-2" id="vert-tabs-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill"
                            href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                            aria-selected="true"><i class="fas fa-user pr-1"></i>แก้ไขข้อมูลส่วนตัว</a>
                        <a class="nav-link" id="vert-tabs-password-tab" data-toggle="pill" href="#vert-tabs-password"
                            role="tab" aria-controls="vert-tabs-password" aria-selected="false"><i
                                class="fas fa-sign-out-alt pr-1"></i>รหัสผ่าน</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-9">
            <div class="card-body">
                <h4>User Information</h4>
                <div class="row">
                    <div class="col-md">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-profile" role="tabpanel"
                                aria-labelledby="vert-tabs-profile-tab">
                                <div class="content">
                                    <div class="page-title">
                                        <h2> แก้ไขข้อมูลส่วนตัว </h2>
                                    </div><!-- /.page-title -->

                                    <div class="bg-white rounded pl-5 pt-3 pr-5 pb-5 ml-5 mr-5 mb-5">
                                        <h3 class="page-title mt-0 pt-0">
                                            ข้อมูลทั่วไป

                                            <a href="#" class="btn btn-primary btn-xs pull-right">บันทึก</a>
                                        </h3>
                                        <form id="profileform" method="POST"
                                            action="{{ route('users.update') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>ชื่อ-นามสกุล</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name') ? old('name'): $user->name }}"
                                                        required>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            ชื่อบัญชีไม่ถูกต้อง
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label>อีเมล์</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="{{ old('email') ? old('email'): $user->email }}"
                                                        required>
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            กรอกอีเมล์ใหม่
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <input id="btnSave" type="submit" class="btn btn-primary float-right"
                                                value="บันทึก" />

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-password" role="tabpanel"
                                aria-labelledby="vert-tabs-password-tab">
                                <div class="content">
                                    <div class="page-title">
                                        <h2> เปลี่ยนรหัสผ่าน </h2>
                                    </div><!-- /.page-title -->

                                    <div class="bg-white rounded pl-5 pt-3 pr-5 pb-5 ml-5 mr-5 mb-5">
                                        <h3 class="page-title mt-0 pt-0">
                                            รหัสผ่าน

                                            <a href="#" class="btn btn-primary btn-xs pull-right">บันทึก</a>
                                        </h3>
                                        <form id="passwordform" method="POST"
                                            action="{{ route('users.password.update') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md">
                                                    <label>รหัสผ่านปัจจุบัน</label>
                                                    <div class="input-group" id="show_hide_password_1">
                                                        <input type="password" class="form-control pwd"
                                                            id="currentPassword" name="currentPassword"
                                                            aria-describedby="validationTooltipPasswordPrepend"
                                                            value="{{ old('currentPassword') }}"
                                                            required>
                                                        <span class="input-group-append">
                                                            <button class="btn btn-default input-group-text reveal"
                                                                type="button"><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></button>
                                                        </span>
                                                        @error('currentPassword')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>รหัสผ่านใหม่</label>
                                                    <div class="input-group" id="show_hide_password_2">
                                                        <input type="password" class="form-control pwd" id="newPassword"
                                                            name="newPassword"
                                                            aria-describedby="validationTooltipPasswordPrepend"
                                                            value="{{ old('newPassword') }}" required>
                                                        <span class="input-group-append">
                                                            <button class="btn btn-default input-group-text reveal"
                                                                type="button"><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></button>
                                                        </span>
                                                        @error('newPassword')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>ยืนยันรหัสผ่านใหม่</label>
                                                    <div class="input-group" id="show_hide_password_3">
                                                        <input type="password" class="form-control pwd"
                                                            id="confirmPassword" name="confirmPassword"
                                                            aria-describedby="validationTooltipPasswordPrepend"
                                                            value="{{ old('confirmPassword') }}"
                                                            required>
                                                        <span class="input-group-append">
                                                            <button class="btn btn-default input-group-text reveal"
                                                                type="button"><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></button>
                                                        </span>
                                                        @error('confirmPassword')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <input id="btnSave" type="submit" class="btn btn-primary float-right"
                                                value="บันทึก" />

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

    @section("css")
    <style>
        .page-title {
            border-bottom: 1px solid #e9e9e9;
            margin: 0px 0px 30px 0px;
            padding: 0px 0px 20px 0px;
        }

        .user-photo img {
            height: auto;
            width: 100%;
        }

        .user-photo {
            background-color: #fff;
            border: 2px dashed #e9e9e9;
            padding: 15px;
            position: relative;
        }

        .widget {
            margin-bottom: 30px;
        }

        .widget .menu-advanced {
            background-color: #fff;
            list-style: none;
            margin: 0px;
            padding: 20px;
        }

        .widget .menu-advanced li {
            display: block;
            color: #444;
            width: 100%;
            border-radius: 5px;
        }

        .widget .menu-advanced li a {
            color: #444;
            display: block;
            padding: 10px 15px;
            width: 100%;
        }

        .user-photo-action {
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.85);
            bottom: 15px;
            color: #363636;
            left: 15px;
            padding: 8px 0px;
            position: absolute;
            text-align: center;
            right: 15px;
        }

    </style>
    @stop

        @section('adminlte_js')
        @include('partials.notification')
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $(document).ready(function () {

                $("div[id^='show_hide_password_'] button").each(function (i) {
                    $(this).on("click", function () {
                        if ($('#show_hide_password_' + (i + 1) + ' input').attr("type") ==
                            "text") {
                            $('#show_hide_password_' + (i + 1) + ' input').attr('type',
                                'password');
                            $('#show_hide_password_' + (i + 1) + ' i').addClass("fa-eye-slash");
                            $('#show_hide_password_' + (i + 1) + ' i').removeClass("fa-eye");
                        } else if ($('#show_hide_password_' + (i + 1) + ' input').attr(
                            "type") == "password") {
                            $('#show_hide_password_' + (i + 1) + ' input').attr('type', 'text');
                            $('#show_hide_password_' + (i + 1) + ' i').removeClass(
                                "fa-eye-slash");
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

        </script>
        @stop
