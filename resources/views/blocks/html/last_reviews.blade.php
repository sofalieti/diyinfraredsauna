@if($reviews)
@include('reviews._items', ['reviews' => $reviews, 'show_all_link' => true, 'h2' => 'Сustomers testimonials'])
@endif