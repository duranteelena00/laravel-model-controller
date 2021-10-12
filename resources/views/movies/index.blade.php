<div class="card">
    @foreach($movies as $movie) 
        <div>
            <h1>Title: {{ $movie->title }}</h1>
            <h2>Original Title: {{ $movie->original_title }}</h2>
            <p>Nationality: {{ $movie->nationality }}</p>
            <p>Release date: {{ $movie->date }}</p>
            <p>Vote: {{ $movie->vote }}</p>
            <hr>
        </div>
    @endforeach
</div>