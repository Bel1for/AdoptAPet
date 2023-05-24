@extends('layout')

@section('title') Pricing @endsection

@section('main')
    <main>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Pricing</h1>
            <p class="fs-5 text-body-secondary"> Subscription Plans</p>
            <p class="fs-5 text-body-secondary"> A generous monthly plan for every company size</p>
        </div>
        <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">STARTER</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$6.99<small class="text-body-secondary fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> 5 000 verifications / month</li>
                            <li>Live-chat & Email support</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">PROFESSIONAL</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>50 000 verifications / month</li>
                            <li>Live-chat & Email support</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">BUSINESS</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$79<small class="text-body-secondary fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>250 000 verifications / month</li>
                            <li>Live-chat & Email support</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">ENTERPRICE</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$199<small class="text-body-secondary fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>1 Million verifications / month</li>
                            <li>Phone, live-chat & email support</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <p class="fs-5 text-body-secondary"> Pay as you go</p>
            <p class="fs-5 text-body-secondary">or top-up your account with never-expiring pay-as-you-go credits</p>
        </div>
        <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">10 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$19</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">25 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$39</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">50 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$59</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">100 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$89</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">250 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$169</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">500 000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$259</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">1 Million</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$399</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">5 Million</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>verifications</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">$999</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

