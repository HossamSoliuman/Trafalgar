<label for="cars">Choose a car:</label>
<select  name="cars" id="cars">
    @foreach($getProvience as $getProviences )
     <optgroup label="{{ $getProviences->province }}">
         @php $gettown = $getProviences->townData @endphp
           @foreach($gettown as $gettowns )
           
             <option value="volvo">{{ $gettowns->town.",".$getProviences->province}}</option>
             
             @endforeach
             </optgroup>
    @endforeach
</select>