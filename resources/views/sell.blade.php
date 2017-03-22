@extends('layouts.app')

@section('content')
<hero 
    bg-image={{ URL::to('/') }}/images/sell-hero-image.jpg 
    hero-title="Sell your home with Us"
    :white-font-color="true"
    sub-text="Whether you’re looking for answers or ready to sell, we’ll help you with data and expertise specific to your area."></hero>
<sell-form></sell-form>
@endsection
