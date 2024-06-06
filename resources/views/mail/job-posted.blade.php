<h2>
    {{ $job->title }}
</h2>
<p>
    congrats you win
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing</a>

</p>
