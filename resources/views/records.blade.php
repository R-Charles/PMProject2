<h1>{{$heading}}</h1>

@unless(count($records) == 0)
@foreach($records as $record)
<h2>
    <a href="/records/{{$record['id']}}">{{$record['title']}}</a>
</h2>
<p>
    {{$record['description']}}
</p>

@endforeach

@else
    <p>No records found</p>
@endunless