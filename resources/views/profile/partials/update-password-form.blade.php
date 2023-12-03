
<form method="POST" action="{{ route('password.update') }}" enctype="multipart/form-data">
    <div class="card-body pt-2 mt-1">
        @csrf
        @method('put')
        <div class="row mt-2 gy-4">
            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                      <label for="name">Current Password</label><input class="form-control" type="password" id="password" name="current_password"
                        autofocus />
                  
                    @if ($errors->updatePassword->has('current_password'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->updatePassword->first('current_password') }}
                            </div>
                        @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                    <label for="name">New Password</label> <input class="form-control" type="password" id="password" name="password"
                        autofocus />
                   
                    @if ($errors->updatePassword->has('password'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->updatePassword->first('password') }}
                            </div>
                        @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                   <label for="name">Confirm Password</label>  <input class="form-control" type="password" id="password" name="password_confirmation"
                        autofocus />
                   
                    @if ($errors->updatePassword->has('password_confirmation'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->updatePassword->first('password_confirmation') }}
                            </div>
                        @endif
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-warning me-2">Save changes</button>

        </div>
        @if (session('status') === 'password-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600 dark:text-gray-400"
        >{{ __('Saved.') }}</p>
    @endif
    </form>