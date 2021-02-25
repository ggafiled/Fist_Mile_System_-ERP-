<div>
    <div>
        <div class="row justify-content-between mb-auto">
            <div class="col-lg-10 col-md-10 col-xl-10 col-sm-8">
                <div class="header d-flex align-content-center align-items-center">
                    <h2>{{ __('User Role & Permission') }}</h2>
                    <span class="ml-3 ml-xs-auto text-black-50">{{ $role_count }} {{ __('Roles') }}</span>
                </div>
            </div>
            @livewire('user-role-permission-create-popup')
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <h5>{{ __('List of role on systems') }}</h5>
            <div class="container-fluid mx-auto mt-2 mb-2" wire:ignore>
                <div class="row mx-auto justify-content-center">
                    <table id="tableRole" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    ลำดับ
                                </th>
                                <th>
                                    ชื่อบทบาท
                                </th>
                                <th>
                                    ชื่อที่ใช้แสดง
                                </th>
                                <th>
                                    คำอธิบาย
                                </th>
                                <th>
                                    สิทธิ์การเข้าถึง
                                </th>
                                <th width="10%">
                                    จัดการ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($roles)
                            @foreach($roles as $role)
                            <tr>
                                <td wire:key="{{ $role->id }}" s>
                                    {{ $role->id }}
                                </td>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    {{ $role->display_name }}
                                </td>
                                <td>
                                    {{ $role->description }}
                                </td>
                                <td>
                                    @foreach($role->permissions as $permission)
                                    <span class='badge badge-pill badge-info mr-1'>
                                        {{ $permission->name }}
                                    </span>
                                    @endforeach
                                </td>
                                <td width="10%">
                                    <div class='d-flex'>
                                        <div class='btn btn-sm btn-delete text-danger' wire:click="click">
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
                                                fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                                <path
                                                    d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z' />
                                                <path fill-rule='evenodd'
                                                    d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' />
                                            </svg></div>
                                        <div class='btn btn-sm btn-edit text-warning'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
                                                fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                <path
                                                    d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                                            </svg></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
