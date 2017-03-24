@extends('layouts.app')

@section('content')
<hero 
    bg-image={{ URL::to('/') }}/images/main-hero-image.jpg 
    :search="true" 
    hero-title="Making Your Realty Reality."
    :full-screen="true"
    :white-font-color="true"
    sub-text="Looking for a home to buy? Search from thousands of real-time listings for sale in New York. Start by entering your search preferences."></hero>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 center">
                    <h1>Discover home trend in your market</h1>
                    <h4>Hand-selected by local experts, these homes — curated by design, amenities, and neighborhood — provide a visual snapshot of the most sought-after properties around.</h4>
                    <button class="btn-primary btn-lg">Tour the area</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="diamond-background">
            <div class="container center-section home-neighborhood-container">
                <div class="col-xs-12 col-sm-6">
                    <div class="center home-neighborhood-container-content">
                        <h2 class="home-neighborhood-title">Partner with trusted talent</h2>
                        <p class="home-neighborhood-text">Understand real estate with experts your can trust. Our agents are pioneers in their markets, and consistently rank high in customer statsfication.</p>
                        <button class="btn-primary btn-lg">Find an Agent</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive center-block home-image" src="/images/main-agent.jpg" alt="Professional Agents" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container home-neighborhoods-container">
            <div class="row">
                <div class="col-xs-12 center">
                    <h1>Explore our neighborhoods</h1>
                    <h4>No one knows are cities as well as we do. Browse our neighborhood guides to learn about the most desirable places to live in New York.</h4>
                </div>
            </div>
            <main-neighborhoods></main-neighborhoods>
            <button class="btn-primary btn-lg center-button">See More Neighborhoods</button>
        </div>
    </section>
@endsection
