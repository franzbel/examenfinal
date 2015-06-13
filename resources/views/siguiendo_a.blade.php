@foreach($sigo_a as $idolo)
    <tr>
        <th>{{App\User::where('id',$idolo->idol_id)->first()->name}}</th>
        <br/>
    </tr>

@endforeach