@foreach($offices as $office)
    <button class="office-btn">{{ $office->name }}</button>
@endforeach