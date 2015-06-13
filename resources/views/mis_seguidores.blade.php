@foreach($seguidores as $seguidor)
    <tr>
        <th>{{App\User::where('id',$seguidor->idol_id)->first()->name}}</th>
        <br/>
    </tr>

@endforeach