<div class="card-header">#{{ $offer->getId() }} - {{ $offer->getTitle() }}</div>
<div class="card-body">
    {!! $offer->getContent() !!}

    <h5>Cities</h5>
    @foreach($offer->getCities() as $city)
        {{ $city }} <br>
    @endforeach
</div>