<select>
 @foreach(config('score') as $key => $type)
   <option value="{{ $key }}">{{ $type['label'] }}</option>
 @endforeach
</select>