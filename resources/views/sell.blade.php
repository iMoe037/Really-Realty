@extends('layouts.app')

@section('content')
<hero 
    bg-image={{ URL::to('/') }}/images/sell-hero-image.jpg 
    hero-title="Sell your home with Us"
    :white-font-color="true"
    sub-text="Whether you’re looking for answers or ready to sell, we’ll help you with data and expertise specific to your area."></hero>
<sell-form></sell-form>

<section class="section container">
    <div class="center">
        <h1>Our agents, your advantage</h1>
        <h4>As a local real estate brokerage, trust that we know your area, and that we'd connect you to a trusted agent.</h4>
    </div>
    <div class="row sell-container center-section">
        <div class="col-xs-12 col-sm-6">
            <img class="img-responsive center-block" src="/images/store-front.jpg" alt="Visit our brokerage" />
            
        </div>
        <div class="col-xs-12 col-sm-6 center">
            <h3 class="sell-stats-header">Our seasoned experts and knowledge of the market position your home to find the best buyer.</h3>
            <div class="row sell-stats-background">
                <div class="col-xs-6 sell-stats-container left">
                    <p class="sell-stats-value">20x</p>
                    <p class="sell-stats-field">Our average sales volume compared to the national average</p>
                </div>
                <div class="col-xs-6 sell-stats-container right">
                    <p class="sell-stats-value">$8B</p>
                    <p class="sell-stats-field">Annualized sales volume of our current agent population*</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container center">
        <h1>Your home, everywhere</h1>
        <h5>Our Agents will market, and advertise your home to the right target audience across the most effective channels. Our knowledge and experience will elevate the style and story of your home.</h5>
    </div>
    <div class="row diamond-background margin-top">
        <div class="container center-section">
            <div class="col-xs-12 col-sm-6">
                <div class="sell-info-container center">
                    <p class="sell-info-title">Few days on market means more value for you</p>
                    <p class="sell-info-text">Backed by experience, data, and strategy, Our listings spend few days on market than the industry average</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img class="img-responsive center-block sell-image" src="/images/for-sale.jpeg" alt="Sell your home" />
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container-fluid sell-legal-background">
        <div class="sell-legal-size">
            <p>All information contained on this page was obtained from sources deemed reliable but is subject to errors, omissions, changes in price, condition, sales, or withdrawal without notice. No guarantee, warranty, or representation of any kind is made regarding the completeness or accuracy of the information contained herein.</p>
            <p> &copy; {{ config('app.name' )}}, All Rights Reserved. This information may not be copied, used, or distributed without {{ config('app.name') }}’  consent.</p>
        </div>
    </div>
</section>
@endsection
