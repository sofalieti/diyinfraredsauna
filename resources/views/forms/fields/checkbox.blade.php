<div class="form-check">
    <input type="hidden" value="" name="form[{{$field->form->id}}][{{$field->id}}]"/>
    <input class="form-check-input" name="form[{{$field->form->id}}][{{$field->id}}]" type="checkbox" value="1" id="field_{{$field->id}}" {{ $field->required ? "required2" : "" }}>
    <label class="form-check-label" for="field_{{$field->id}}">
        {{$field->name}} {!! $field->required ? "<span class='form-required-star'>*</span>" : "" !!}
    </label>
</div>