@extends('backend.app')

@section('title', 'Integration Settings')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Integration Settings</li>
        </ol>
    </nav>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

             <!-- Tab Navigation -->
         <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="google-tab" data-bs-toggle="tab" data-bs-target="#google" type="button" role="tab" aria-controls="google" aria-selected="true">Google</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="facebook-tab" data-bs-toggle="tab" data-bs-target="#facebook" type="button" role="tab" aria-controls="facebook" aria-selected="false">Facebook</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="stripe-tab" data-bs-toggle="tab" data-bs-target="#stripe" type="button" role="tab" aria-controls="stripe" aria-selected="false">Stripe</button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content p-4 border border-top-0" id="settingsTabsContent">
        <!-- Google Settings -->
        <form method="POST" action="{{ route('google.update') }}" class="tab-pane fade show active" id="google" role="tabpanel" aria-labelledby="google-tab">
            @csrf
            @method('PATCH')
            <h4>Google Settings</h4>
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label for="googleClientId" class="form-label">Google Client Id:</label>
                    <input type="text" class="form-control @error('GOOGLE_CLIENT_ID') is-invalid @enderror"
                           name="GOOGLE_CLIENT_ID" id="googleClientId"
                           placeholder="Please Enter Your Google Client Id"
                           value="{{ old('GOOGLE_CLIENT_ID', env('GOOGLE_CLIENT_ID')) }}" />
                    @error('GOOGLE_CLIENT_ID')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="googleClientSecret" class="form-label">Google Client Secret:</label>
                    <input type="text" class="form-control @error('GOOGLE_CLIENT_SECRET') is-invalid @enderror"
                           name="GOOGLE_CLIENT_SECRET" id="googleClientSecret"
                           placeholder="Please Enter Your Google Client Secret"
                           value="{{ old('GOOGLE_CLIENT_SECRET', env('GOOGLE_CLIENT_SECRET')) }}" />
                    @error('GOOGLE_CLIENT_SECRET')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save Google Settings</button>
        </form>

        <!-- Facebook Settings -->
        <form method="POST" action="{{ route('facebook.update') }}" class="tab-pane fade" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
            @csrf
            @method('PATCH')
            <h4>Facebook Settings</h4>
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label for="facebookClientId" class="form-label">Facebook Client Id:</label>
                    <input type="text" class="form-control @error('FACEBOOK_CLIENT_ID') is-invalid @enderror"
                           name="FACEBOOK_CLIENT_ID" id="facebookClientId"
                           placeholder="Please Enter Your Facebook Client Id"
                           value="{{ old('FACEBOOK_CLIENT_ID', env('FACEBOOK_CLIENT_ID')) }}" />
                    @error('FACEBOOK_CLIENT_ID')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="facebookClientSecret" class="form-label">Facebook Client Secret:</label>
                    <input type="text" class="form-control @error('FACEBOOK_CLIENT_SECRET') is-invalid @enderror"
                           name="FACEBOOK_CLIENT_SECRET" id="facebookClientSecret"
                           placeholder="Please Enter Your Facebook Client Secret"
                           value="{{ old('FACEBOOK_CLIENT_SECRET', env('FACEBOOK_CLIENT_SECRET')) }}" />
                    @error('FACEBOOK_CLIENT_SECRET')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save Facebook Settings</button>
        </form>

        <!-- Stripe Settings -->
        <form method="POST" action="{{ route('stripe.update') }}" class="tab-pane fade" id="stripe" role="tabpanel" aria-labelledby="stripe-tab">
            @csrf
            @method('PATCH')
            <h4>Stripe Settings</h4>
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label for="stripeKey" class="form-label">Stripe Key:</label>
                    <input type="text" class="form-control @error('STRIPE_KEY') is-invalid @enderror"
                           name="STRIPE_KEY" id="stripeKey"
                           placeholder="Please Enter Your Stripe Key"
                           value="{{ old('STRIPE_KEY', env('STRIPE_KEY')) }}" />
                    @error('STRIPE_KEY')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="stripeSecret" class="form-label">Stripe Secret:</label>
                    <input type="text" class="form-control @error('STRIPE_SECRET') is-invalid @enderror"
                           name="STRIPE_SECRET" id="stripeSecret"
                           placeholder="Please Enter Your Stripe Secret"
                           value="{{ old('STRIPE_SECRET', env('STRIPE_SECRET')) }}" />
                    @error('STRIPE_SECRET')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save Stripe Settings</button>
        </form>
       </div>
        </div>
     </div>
    </div>
 </div>
</div>

@endsection
