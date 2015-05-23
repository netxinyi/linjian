
@if($attributes  && count($attributes) > 0)
    @foreach($attributes as $attr)
    <div class="form-group">
          <label for="attr_{{$attr->attr_id}}" class="col-sm-4 control-label">{{$attr->attr_name}}：</label>
          <div class="col-sm-8">
                @if($attr->attr_type == \App\Enum\ProductEnum::ATTR_INPUT)
                    <input type="text" class="form-control" name="attr[{{$attr->attr_id}}]" id="attr_[{{$attr->attr_id}}]" value="{{$attr->attr_values}}">
                @elseif($attr->attr_type == \App\Enum\ProductEnum::ATTR_SELECT)
                    <select class="chosen-select chosen-transparent form-control" id="attr_{{$attr->attr_id}}">
                         @foreach(explode("\n",$attr->attr_values) as $value)
                         <option>{{$value}}</option>
                         @endforeach
                     </select>
                @elseif($attr->attr_type == \App\Enum\ProductEnum::ATTR_CHECKBOX)
                    @foreach(explode("\n",$attr->attr_values) as $value)
                        <label class="checkbox-inline">
                            <input type="checkbox" name="attr[{{$attr->attr_id}}]" id="attr[{{$attr->attr_id}}]" value="{{$value}}">
                            {{$value}}
                        </label>
                    @endforeach
                @elseif($attr->attr_type == \App\Enum\ProductEnum::ATTR_RADIO)
                        @foreach(explode("\n",$attr->attr_values) as $value)
                            <label class="radio-inline">
                                <input type="radio" name="attr[{{$attr->attr_id}}]" id="attr[{{$attr->attr_id}}]" value="{{$value}}">
                                {{$value}}
                            </label>
                        @endforeach
                @endif
          </div>
    </div>
    @endforeach
@endif