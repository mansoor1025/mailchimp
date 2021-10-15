<?php $count = 0; ?>
@foreach($get_contact_list as $value)
        <?php $count++; ?>
          <tr class="odd">
              <td>{{$count}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->first_name}}</td>
              <td>{{$value->last_name}}</td>           
              <td>{{$value->phone_number}}</td>
              <td>{{$value->pin_code}}</td>
              <td>{{$value->address}}</td>
              <td>
              <button type="reset" class="btn btn-warning me-1 waves-effect waves-float waves-light" onclick="edit({{$value->id}})">Edit</button>
              <button type="reset" class="btn btn-danger me-1 waves-effect waves-float waves-light" onclick="contact_delete({{$value->id}})">Delete</button>
              </td>
          </tr>
@endforeach  