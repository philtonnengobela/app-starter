@extends('layouts.app')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="page-title">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4">
                    <div class="page-title-content">
                        <h3>Dashboard</h3>
                        <p class="mb-2">Welcome Front Foot Dashboard</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumbs"><a href="#">Home </a><span><i
                                class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stats</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-primary"><span><i
                                                class="ri-wallet-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>432568</h3>
                                        <p>Last Balance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-secondary"><span><i
                                                class="ri-wallet-2-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>245860</h3>
                                        <p>Hold Balance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-success"><span><i
                                                class="ri-wallet-3-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>25.35</h3>
                                        <p>Current Rate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-danger"><span><i
                                                class="ri-wallet-3-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>22.56</h3>
                                        <p>Bounce Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div id="user-activity" class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h4 class="card-title">Expenses</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="activity"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Unpaid Bills</h4>
                    </div>
                    <div class="card-body">
                        <div class="unpaid-content">
                            <ul>
                                <li>
                                    <p class="mb-0">Service</p>
                                    <h5 class="mb-0">Youtube Chanel</h5>
                                </li>
                                <li>
                                    <p class="mb-0">Issued</p>
                                    <h5 class="mb-0">March 17, 2021</h5>
                                </li>
                                <li>
                                    <p class="mb-0">Payment Due</p>
                                    <h5 class="mb-0">17 Days</h5>
                                </li>
                                <li>
                                    <p class="mb-0">Paid</p>
                                    <h5 class="mb-0">0.00</h5>
                                </li>
                                <li>
                                    <p class="mb-0">Amount to pay</p>
                                    <h5 class="mb-0">$ 532.69</h5>
                                </li>
                                <li>
                                    <p class="mb-0">Payment Method</p>
                                    <h5 class="mb-0">Paypal</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="credit-card visa">
                            <div class="type-brand">
                                <h4>Debit Card</h4>
                                <img src="images/cc/visa.png" alt="">
                            </div>
                            <div class="cc-number">
                                <h6>1234</h6>
                                <h6>5678</h6>
                                <h6>7890</h6>
                                <h6>9875</h6>
                            </div>
                            <div class="cc-holder-exp">
                                <h5>Saiful Islam</h5>
                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="credit-card payoneer">
                            <div class="type-brand">
                                <h4>Debit Card</h4>
                                <img src="images/cc/payoneer.png" alt="">
                            </div>
                            <div class="cc-number">
                                <h6>1234</h6>
                                <h6>5678</h6>
                                <h6>7890</h6>
                                <h6>9875</h6>
                            </div>
                            <div class="cc-holder-exp">
                                <h5>Saiful Islam</h5>
                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Balance Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-balance">
                                    <p>Total Balance</p>
                                    <h2>$221,478</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="balance-stats active">
                                    <p>Last Month</p>
                                    <h3>$42,678</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="balance-stats">
                                    <p>Expenses</p>
                                    <h3>$1,798</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="balance-stats">
                                    <p>Taxes</p>
                                    <h3>$255.25</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="balance-stats">
                                    <p>Debt</p>
                                    <h3>$365,478</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="most-selling-items"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction History</h4>
                        <a href="#">See more</a>
                    </div>
                    <div class="card-body">
                        <div class="invoice-content">
                            <ul>
                                <li class="d-flex justify-content-between active">
                                    <div class="d-flex align-items-center">
                                        <div class="invoice-user-img me-3"><img src="images/avatar/1.jpg" alt=""
                                                width="50"></div>
                                        <div class="invoice-info">
                                            <h5 class="mb-0">Terry P. Camacho</h5>
                                            <p>5 january 2021 at 10.15 pm</p>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="mb-2">+450.00</h5>
                                        <span class=" text-white bg-success">Paid</span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="invoice-user-img me-3"><img src="images/avatar/2.jpg" alt=""
                                                width="50"></div>
                                        <div class="invoice-info">
                                            <h5 class="mb-0">John L. Foster</h5>
                                            <p>5 january 2021 at 10.15 pm</p>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="mb-2">+450.00</h5>
                                        <span class=" text-white bg-warning">Due</span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="invoice-user-img me-3"><img src="images/avatar/3.jpg" alt=""
                                                width="50"></div>
                                        <div class="invoice-info">
                                            <h5 class="mb-0">John C. Adams</h5>
                                            <p>5 january 2021 at 10.15 pm</p>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="mb-2">+450.00</h5>
                                        <span class=" text-white bg-danger">Cancel</span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="invoice-user-img me-3"><img src="images/avatar/4.jpg" alt=""
                                                width="50"></div>
                                        <div class="invoice-info">
                                            <h5 class="mb-0">Weston P. Thomas</h5>
                                            <p>5 january 2021 at 10.15 pm</p>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="mb-2">+450.00</h5>
                                        <span class=" text-white bg-success">Paid</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Goals Budget</h4>
                    </div>
                    <div class="card-body">
                        <div class="budget-content">
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-grow-2">
                                        <div class="budget-icon me-3 mt-1"><img src="images/social/facebook.png"
                                                alt="" width="40"></div>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h5 class="mb-1">Facebook Ads</h5>
                                                <p class="mb-0"><strong>75 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-grow-2">
                                        <div class="budget-icon me-3 mt-1"><img src="images/social/youtube.png"
                                                alt="" width="40"></div>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h5 class="mb-1">Youtube Premium</h5>
                                                <p class="mb-0"><strong>25 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-grow-2">
                                        <div class="budget-icon me-3 mt-1"><img src="images/social/spotify.png"
                                                alt="" width="40"></div>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h5 class="mb-1">Spotify Music</h5>
                                                <p class="mb-0"><strong>50 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-grow-2">
                                        <div class="budget-icon me-3 mt-1"><img src="images/social/skype.png"
                                                alt="" width="40"></div>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h5 class="mb-1">Skype Premium</h5>
                                                <p class="mb-0"><strong>45 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 45%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-grow-2">
                                        <div class="budget-icon me-3 mt-1"><img src="images/social/envato.png"
                                                alt="" width="40"></div>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h5 class="mb-1">Envato Element</h5>
                                                <p class="mb-0"><strong>35 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    style="width: 35%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
