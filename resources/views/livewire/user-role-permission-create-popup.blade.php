<div>
    <div class="row justify-content-between mb-auto">
        <div class="header d-flex align-content-center align-items-center">
            <h2>{{ __('User Role & Permission') }}</h2>
            <span class="ml-3 ml-xs-auto text-black-50">{{ $role_count }} {{ __('Roles') }}</span>
        </div>
        <div>
            <button type="button" class="btn btn-secondary" wire:$toggle="role_count">
                <i class="fa fa-plus"></i> <span>{{ __('Add New Role') }}</span>
            </button>
        </div>
    </div>
</div>
