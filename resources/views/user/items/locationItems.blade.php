

<tr class="items accounts">
    <td><input type="text" name=""></td>
        <td>
            <select name="item_id[]" class="searchSelect selectItem">
                <option>Chooes Item</option>
                @foreach($items as $item )
                <option value="{{$item->id}}">
                   {{$item->code}}
                </option>
                @endforeach
            </select>
</td>
<td><input class="itemTransferQnty" type="number" name="qnt[]" max="" name="" value=""  class="quantity" placeholder="0"></td>
        <td><input type="text"  value="" name="unit[]" class="itemTransferUnit" readonly></td>
        <td><input type="text"  value="" name="desc[]" class="itemTransferDesc" readonly></td>
        <td><input type="text"  value="" name="price[]" class="itemTransferprice" readonly></td>
        <!-- <td>
        <select name="tax_id">
            <option>
                choose unit of measure
            </option>
            
        </select>
    </td> -->
    <td>
        <button type="button" class="deleteAccountRow d-none"><i class="fas fa-trash-alt"></i></button></td>
    </tr>
         