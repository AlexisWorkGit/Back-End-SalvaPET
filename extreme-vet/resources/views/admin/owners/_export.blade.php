<table>
    <thead>
        <tr>
            <th align="center" width="10">{{__('id')}}</th>
            <th align="center" width="20">{{__('Code')}}</th>
            <th align="center" width="20">{{__('Name')}}</th>
            <th align="center" width="20">{{__('Gender')}}</th>
            <th align="center" width="20">{{__('Phone')}}</th>
            <th align="center" width="20">{{__('Email')}}</th>
            <th align="center" width="20">{{__('Address')}}</th>
            <th align="center" width="20">{{__('Total')}}</th>
            <th align="center" width="20">{{__('Paid')}}</th>
            <th align="center" width="20">{{__('Due')}}</th>
        </tr>
    </thead>
    <tbody>
    @foreach($owners as $owner)
        <tr>
            <td align="center">{{ $owner['id'] }}</td>
            <td align="center">{{ $owner['code'] }}</td>
            <td align="center">{{ $owner['name'] }}</td>
            <td align="center">{{ $owner['gender'] }}</td>
            <td align="center">{{ (string) $owner['phone'] }}</td>
            <td align="center">{{ $owner['email'] }}</td>
            <td align="center">{{ $owner['address'] }}</td>
            <td align="center">{{ formated_price($owner['total']) }}</td>
            <td align="center">{{ formated_price($owner['paid']) }}</td>
            <td align="center" style="@if($owner['due']>0) color:red; @else color:#28a745; @endif">{{ formated_price($owner['due']) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>