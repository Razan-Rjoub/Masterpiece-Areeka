{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}
<form method="POST" action="{{ route('password.update') }}" enctype="multipart/form-data">
    <div class="card-body pt-2 mt-1">
        @csrf
        @method('put')
        <div class="row mt-2 gy-4">
            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                    <input class="form-control" type="password" id="password" name="current_password"
                        autofocus />
                    <label for="name">Current Password</label>
                    @if ($errors->updatePassword->has('current_password'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->updatePassword->first('current_password') }}
                            </div>
                        @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                    <input class="form-control" type="password" id="password" name="password"
                        autofocus />
                    <label for="name">New Password</label>
                    @if ($errors->updatePassword->has('password'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->updatePassword->first('password') }}
                            </div>
                        @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating form-floating-outline mb-3">
                    <input class="form-control" type="password" id="password" name="password_confirmation"
                        autofocus />
                    <label for="name">Confirm Password</label>
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