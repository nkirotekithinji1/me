@if($term = request('term'))
  <div class="alert alert-info">
    <p>Search Results For: <strong>{{ $term }}</strong></p>
  </div>
@endif