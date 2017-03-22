@extends('layouts.app')

@section('content')
<hero 
    bg-image={{ URL::to('/') }}/images/main-hero-image.jpg 
    :search="true" 
    hero-title="Making Your Realty Reality."
    :full-screen="true"
    :white-font-color="true"
    sub-text="Looking for a home to buy? Search from thousands of real-time listings for sale in New York. Start by entering your search preferences."></hero>
<div class="container">
    <section class="section"> More Content Yay</section>
</div>
@endsection
