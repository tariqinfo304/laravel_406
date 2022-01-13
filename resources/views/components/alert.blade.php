<div>
    <p>{{ $name}}</p>
    <ul>
        @foreach($list as $row)
            <li>{{ $row }}</li>
        @endforeach
    </ul>
</div>