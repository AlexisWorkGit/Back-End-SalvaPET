<table>
    <thead>
        <tr>
            <th align="center" width="10">{{__('id')}}</th>
            <th align="center" width="10">{{__('Owner id')}}</th>
            <th align="center" width="20">{{__('Code')}}</th>
            <th align="center" width="20">{{__('Name')}}</th>
            <th align="center" width="20">{{__('Gender')}}</th>
            <th align="center" width="20">{{__('DOB')}}</th>
        </tr>
    </thead>
    <tbody>
    @foreach($animals as $animal)
        <tr>
            <td align="center">{{ $animal['id'] }}</td>
            <td align="center">{{ $animal['owner_id'] }}</td>
            <td align="center">{{ $animal['code'] }}</td>
            <td align="center">{{ $animal['name'] }}</td>
            <td align="center">{{ $animal['gender'] }}</td>
            <td align="center">{{ (string) $animal['dob'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>