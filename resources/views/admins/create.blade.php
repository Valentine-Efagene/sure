@extends('layouts.admin_dashboard')

@section('content')
    <div class="main-container"></div>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 mb-30">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p show active" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Create Sub Admin</h4>
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input name="id" id="id"
                                                                class="form-control form-control-lg @error('id') is-invalid @enderror"
                                                                value="{{ $id }}" readonly type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input name="password" id="password" class="form-control form-control-lg @error('password')
                                                                                @enderror" type="password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="Update">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
