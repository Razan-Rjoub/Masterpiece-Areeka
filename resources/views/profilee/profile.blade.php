<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-9" >
            <div class="card mb-4">
                <h4 class="card-header">Profile Details</h4>
                <!-- Account -->
                <div class="card-body">
                    <form method="POST" action="{{ route('editprofile') }}" enctype="multipart/form-data">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img style="width: 200px;" src="{{ $user->image }}" alt="user-avatar"
                                class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-warning me-2 mb-3" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg" name="image" />
                                </label>
                                <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                    <i class="mdi mdi-reload d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>
                        @error('image')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="card-body pt-2 mt-1">
                        @csrf
                        <div class="row mt-2 gy-4">
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ $user->name }}" autofocus />
                                    <label for="name">Name</label>
                                </div>
                                @error('name')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="john.doe@example.com" />
                                    <label for="email">E-mail</label>
                                </div>
                                @error('email')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input type="text" id="phoneNumber" name="phone" class="form-control"
                                        placeholder="+962 7" value="{{ $user->phone }}" />
                                    <label for="phoneNumber">Phone Number</label>
                                </div>
                                @error('phone')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-3">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" value="{{ $user->Address }}" />
                                    <label for="address">Address</label>
                                </div>
                                @error('address')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-warning me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary btn-outline-danger">Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <!-- Your form content goes here -->
                    </form>
                </div>
            </div>
      
        </div>
    </div>
</div>

</div>


