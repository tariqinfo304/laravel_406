<div>
    
    <ul>
        @foreach($list as $row)
            <li>{{ $row["name"] }}</li>
        @endforeach
    </ul>
</div>