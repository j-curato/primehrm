<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bbb as $loan)
        <tr>
            <td>{{ $loan->cbu }}</td>
            <td>{{ $loan->savings }}</td>
        </tr>
    @endforeach
    </tbody>
</table>