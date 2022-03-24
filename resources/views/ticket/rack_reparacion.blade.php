@foreach ($racks as $item)

@if ($item->r1 == NULL)
    <div class="form-group col-2">
        <input class="form-check-input" type="checkbox" value="1" name="r1" id="r1">
        <input type="hidden" value="1" name="rack" id="rack">
        <label class="form-check-label" for="flexCheckDefault">
        1
        </label>
    </div>
@else
    <div class="form-group col-2">
        <input class="form-check-input" type="checkbox" checked disabled>
        <input type="hidden" value="1" name="r1" id="r1">
        <label class="form-check-label" for="flexCheckDefault">
        1
        </label>
    </div>
@endif

@if ($item->r2 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r2" id="r2">
    <input type="hidden" value="2" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      2
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r2" id="r2">
    <label class="form-check-label" for="flexCheckDefault">
      2
    </label>
  </div>
@endif

@if ($item->r3 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r3" id="r3">
    <input type="hidden" value="3" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      3
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r3" id="r3">
    <label class="form-check-label" for="flexCheckDefault">
      3
    </label>
  </div>
@endif

@if ($item->r4 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r4" id="r4">
    <input type="hidden" value="4" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      4
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r4" id="r4">
    <label class="form-check-label" for="flexCheckDefault">
      4
    </label>
  </div>
@endif

@if ($item->r5 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r5" id="r5">
    <input type="hidden" value="5" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      5
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r5" id="r5">
    <label class="form-check-label" for="flexCheckDefault">
      5
    </label>
  </div>
@endif

@if ($item->r6 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r6" id="r6">
    <input type="hidden" value="6" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      6
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r6" id="r6">
    <label class="form-check-label" for="flexCheckDefault">
      6
    </label>
  </div>
@endif

@if ($item->r7 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r7" id="r7">
    <input type="hidden" value="7" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      7
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r7" id="r7">
    <label class="form-check-label" for="flexCheckDefault">
      7
    </label>
  </div>
@endif

@if ($item->r8 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r8" id="r8">
    <input type="hidden" value="8" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      8
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r8" id="r8">
    <label class="form-check-label" for="flexCheckDefault">
      8
    </label>
  </div>
@endif

@if ($item->r9 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r9" id="r9">
    <input type="hidden" value="9" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      9
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r9" id="r9">
    <label class="form-check-label" for="flexCheckDefault">
      9
    </label>
  </div>
@endif

@if ($item->r10 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r10" id="r10">
    <input type="hidden" value="10" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      10
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r10" id="r10">
    <label class="form-check-label" for="flexCheckDefault">
      10
    </label>
  </div>
@endif

@if ($item->r151 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r151" id="r151">
    <input type="hidden" value="151" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      151
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r151" id="r151">
    <label class="form-check-label" for="flexCheckDefault">
      151
    </label>
  </div>
@endif

@if ($item->r152 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r152" id="r152">
    <input type="hidden" value="152" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      152
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r152" id="r152">
    <label class="form-check-label" for="flexCheckDefault">
      152
    </label>
  </div>
@endif

@if ($item->r153 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r153" id="r153">
    <input type="hidden" value="153" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      153
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r153" id="r153">
    <label class="form-check-label" for="flexCheckDefault">
      153
    </label>
  </div>
@endif

@if ($item->r154 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r154" id="r154">
    <input type="hidden" value="154" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      154
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r154" id="r154">
    <label class="form-check-label" for="flexCheckDefault">
      154
    </label>
  </div>
@endif

@if ($item->r155 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r155" id="r155">
    <input type="hidden" value="155" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      155
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r155" id="r155">
    <label class="form-check-label" for="flexCheckDefault">
      155
    </label>
  </div>
@endif

@if ($item->r156 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r156" id="r156">
    <input type="hidden" value="156" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      156
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r156" id="r156">
    <label class="form-check-label" for="flexCheckDefault">
      156
    </label>
  </div>
@endif

@if ($item->r157 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r157" id="r157">
    <input type="hidden" value="157" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      157
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r157" id="r157">
    <label class="form-check-label" for="flexCheckDefault">
      157
    </label>
  </div>
@endif

@if ($item->r158 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r158" id="r158">
    <input type="hidden" value="158" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      158
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r158" id="r158">
    <label class="form-check-label" for="flexCheckDefault">
      158
    </label>
  </div>
@endif

@if ($item->r159 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r159" id="r159">
    <input type="hidden" value="159" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      159
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r159" id="r159">
    <label class="form-check-label" for="flexCheckDefault">
      159
    </label>
  </div>
@endif

@if ($item->r160 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r160" id="r160">
    <input type="hidden" value="160" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      160
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r160" id="r160">
    <label class="form-check-label" for="flexCheckDefault">
      160
    </label>
  </div>
@endif

@if ($item->r161 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="1" name="r161" id="r161">
    <input type="hidden" value="161" name="rack" id="rack">
    <label class="form-check-label" for="flexCheckDefault">
      161
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="1" name="r161" id="r161">
    <label class="form-check-label" for="flexCheckDefault">
      161
    </label>
  </div>
@endif

@endforeach
