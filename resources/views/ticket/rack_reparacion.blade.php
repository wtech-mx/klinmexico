@foreach ($racks as $item)

@if ($item->r1 == NULL)
    <div class="form-group col-2">
        <input class="form-check-input" type="checkbox" value="1" name="r1" id="r1">
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
    <input class="form-check-input" type="checkbox" value="2" name="r2" id="r2">
    <label class="form-check-label" for="flexCheckDefault">
      2
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="2" name="r2" id="r2">
    <label class="form-check-label" for="flexCheckDefault">
      2
    </label>
  </div>
@endif

@if ($item->r3 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="3" name="r3" id="r3">
    <label class="form-check-label" for="flexCheckDefault">
      3
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="3" name="r3" id="r3">
    <label class="form-check-label" for="flexCheckDefault">
      3
    </label>
  </div>
@endif

@if ($item->r4 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="4" name="r4" id="r4">
    <label class="form-check-label" for="flexCheckDefault">
      4
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="4" name="r4" id="r4">
    <label class="form-check-label" for="flexCheckDefault">
      4
    </label>
  </div>
@endif

@if ($item->r5 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="5" name="r5" id="r5">
    <label class="form-check-label" for="flexCheckDefault">
      5
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="5" name="r5" id="r5">
    <label class="form-check-label" for="flexCheckDefault">
      5
    </label>
  </div>
@endif

@if ($item->r6 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="6" name="r6" id="r6">
    <label class="form-check-label" for="flexCheckDefault">
      6
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="6" name="r6" id="r6">
    <label class="form-check-label" for="flexCheckDefault">
      6
    </label>
  </div>
@endif

@if ($item->r7 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="7" name="r7" id="r7">
    <label class="form-check-label" for="flexCheckDefault">
      7
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="7" name="r7" id="r7">
    <label class="form-check-label" for="flexCheckDefault">
      7
    </label>
  </div>
@endif

@if ($item->r8 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="8" name="r8" id="r8">
    <label class="form-check-label" for="flexCheckDefault">
      8
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="8" name="r8" id="r8">
    <label class="form-check-label" for="flexCheckDefault">
      8
    </label>
  </div>
@endif

@if ($item->r9 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="9" name="r9" id="r9">
    <label class="form-check-label" for="flexCheckDefault">
      9
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="9" name="r9" id="r9">
    <label class="form-check-label" for="flexCheckDefault">
      9
    </label>
  </div>
@endif

@if ($item->r10 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="10" name="r10" id="r10">
    <label class="form-check-label" for="flexCheckDefault">
      10
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="10" name="r10" id="r10">
    <label class="form-check-label" for="flexCheckDefault">
      10
    </label>
  </div>
@endif

@if ($item->r11 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="11" name="r11" id="r11">
    <label class="form-check-label" for="flexCheckDefault">
      11
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="11" name="r11" id="r11">
    <label class="form-check-label" for="flexCheckDefault">
      11
    </label>
  </div>
@endif

@if ($item->r12 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="12" name="r12" id="r12">
    <label class="form-check-label" for="flexCheckDefault">
      12
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="12" name="r12" id="r12">
    <label class="form-check-label" for="flexCheckDefault">
      12
    </label>
  </div>
@endif

@if ($item->r13 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="13" name="r13" id="r13">
    <label class="form-check-label" for="flexCheckDefault">
      13
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="13" name="r13" id="r13">
    <label class="form-check-label" for="flexCheckDefault">
      13
    </label>
  </div>
@endif

@if ($item->r14 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="14" name="r14" id="r14">
    <label class="form-check-label" for="flexCheckDefault">
      14
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="14" name="r14" id="r14">
    <label class="form-check-label" for="flexCheckDefault">
      14
    </label>
  </div>
@endif

@if ($item->r15 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="15" name="r15" id="r15">
    <label class="form-check-label" for="flexCheckDefault">
      15
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="15" name="r15" id="r15">
    <label class="form-check-label" for="flexCheckDefault">
      15
    </label>
  </div>
@endif

@if ($item->r16 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="16" name="r16" id="r16">
    <label class="form-check-label" for="flexCheckDefault">
      16
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="16" name="r16" id="r16">
    <label class="form-check-label" for="flexCheckDefault">
      16
    </label>
  </div>
@endif

@if ($item->r17 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="17" name="r17" id="r17">
    <label class="form-check-label" for="flexCheckDefault">
      17
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="17" name="r17" id="r17">
    <label class="form-check-label" for="flexCheckDefault">
      17
    </label>
  </div>
@endif

@if ($item->r18 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="18" name="r18" id="r18">
    <label class="form-check-label" for="flexCheckDefault">
      18
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="18" name="r18" id="r18">
    <label class="form-check-label" for="flexCheckDefault">
      18
    </label>
  </div>
@endif

@if ($item->r19 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="19" name="r19" id="r19">
    <label class="form-check-label" for="flexCheckDefault">
      19
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="19" name="r19" id="r19">
    <label class="form-check-label" for="flexCheckDefault">
      19
    </label>
  </div>
@endif

@if ($item->r20 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="20" name="r20" id="r20">
    <label class="form-check-label" for="flexCheckDefault">
      20
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="20" name="r20" id="r20">
    <label class="form-check-label" for="flexCheckDefault">
      20
    </label>
  </div>
@endif

@if ($item->r21 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="21" name="r21" id="r21">
    <label class="form-check-label" for="flexCheckDefault">
      21
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="21" name="r21" id="r21">
    <label class="form-check-label" for="flexCheckDefault">
      21
    </label>
  </div>
@endif

@if ($item->r22 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="22" name="r22" id="r22">
    <label class="form-check-label" for="flexCheckDefault">
      22
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="22" name="r22" id="r22">
    <label class="form-check-label" for="flexCheckDefault">
      22
    </label>
  </div>
@endif

@if ($item->r23 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="23" name="r23" id="r23">
    <label class="form-check-label" for="flexCheckDefault">
      23
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="23" name="r23" id="r23">
    <label class="form-check-label" for="flexCheckDefault">
      23
    </label>
  </div>
@endif

@if ($item->r24 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="24" name="r24" id="r24">
    <label class="form-check-label" for="flexCheckDefault">
      24
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="24" name="r24" id="r24">
    <label class="form-check-label" for="flexCheckDefault">
      24
    </label>
  </div>
@endif

@if ($item->r25 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="25" name="r25" id="r25">
    <label class="form-check-label" for="flexCheckDefault">
      25
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="25" name="r25" id="r25">
    <label class="form-check-label" for="flexCheckDefault">
      25
    </label>
  </div>
@endif

@if ($item->r26 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="26" name="r26" id="r26">
    <label class="form-check-label" for="flexCheckDefault">
      26
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="26" name="r26" id="r26">
    <label class="form-check-label" for="flexCheckDefault">
      26
    </label>
  </div>
@endif

@if ($item->r27 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="27" name="r27" id="r27">
    <label class="form-check-label" for="flexCheckDefault">
      27
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="27" name="r27" id="r27">
    <label class="form-check-label" for="flexCheckDefault">
      27
    </label>
  </div>
@endif

@if ($item->r28 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="28" name="r28" id="r28">
    <label class="form-check-label" for="flexCheckDefault">
      28
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="28" name="r28" id="r28">
    <label class="form-check-label" for="flexCheckDefault">
      28
    </label>
  </div>
@endif

@if ($item->r29 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="29" name="r29" id="r29">
    <label class="form-check-label" for="flexCheckDefault">
      29
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="29" name="r29" id="r29">
    <label class="form-check-label" for="flexCheckDefault">
      29
    </label>
  </div>
@endif

@if ($item->r30 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="30" name="r30" id="r30">
    <label class="form-check-label" for="flexCheckDefault">
      30
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="30" name="r30" id="r30">
    <label class="form-check-label" for="flexCheckDefault">
      30
    </label>
  </div>
@endif

@if ($item->r31 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="31" name="r31" id="r31">
    <label class="form-check-label" for="flexCheckDefault">
      31
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="31" name="r31" id="r31">
    <label class="form-check-label" for="flexCheckDefault">
      31
    </label>
  </div>
@endif

@if ($item->r32 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="32" name="r32" id="r32">
    <label class="form-check-label" for="flexCheckDefault">
      32
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="32" name="r32" id="r32">
    <label class="form-check-label" for="flexCheckDefault">
      32
    </label>
  </div>
@endif

@if ($item->r33 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="33" name="r33" id="r33">
    <label class="form-check-label" for="flexCheckDefault">
      33
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="33" name="r33" id="r33">
    <label class="form-check-label" for="flexCheckDefault">
      33
    </label>
  </div>
@endif

@if ($item->r34 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="34" name="r34" id="r34">
    <label class="form-check-label" for="flexCheckDefault">
      34
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="34" name="r34" id="r34">
    <label class="form-check-label" for="flexCheckDefault">
      34
    </label>
  </div>
@endif

@if ($item->r35 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="35" name="r35" id="r35">
    <label class="form-check-label" for="flexCheckDefault">
      35
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="35" name="r35" id="r35">
    <label class="form-check-label" for="flexCheckDefault">
      35
    </label>
  </div>
@endif

@if ($item->r36 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="36" name="r36" id="r36">
    <label class="form-check-label" for="flexCheckDefault">
      36
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="36" name="r36" id="r36">
    <label class="form-check-label" for="flexCheckDefault">
      36
    </label>
  </div>
@endif

@if ($item->r37 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="37" name="r37" id="r37">
    <label class="form-check-label" for="flexCheckDefault">
      37
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="37" name="r37" id="r37">
    <label class="form-check-label" for="flexCheckDefault">
      37
    </label>
  </div>
@endif

@if ($item->r38 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="38" name="r38" id="r38">
    <label class="form-check-label" for="flexCheckDefault">
      38
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="38" name="r38" id="r38">
    <label class="form-check-label" for="flexCheckDefault">
      38
    </label>
  </div>
@endif

@if ($item->r39 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="39" name="r39" id="r39">
    <label class="form-check-label" for="flexCheckDefault">
      39
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="39" name="r39" id="r39">
    <label class="form-check-label" for="flexCheckDefault">
      39
    </label>
  </div>
@endif

@if ($item->r40 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="40" name="r40" id="r40">
    <label class="form-check-label" for="flexCheckDefault">
      40
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="40" name="r40" id="r40">
    <label class="form-check-label" for="flexCheckDefault">
      40
    </label>
  </div>
@endif

@if ($item->r41 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="41" name="r41" id="r41">
    <label class="form-check-label" for="flexCheckDefault">
      41
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="41" name="r41" id="r41">
    <label class="form-check-label" for="flexCheckDefault">
      41
    </label>
  </div>
@endif

@if ($item->r42 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="42" name="r42" id="r42">
    <label class="form-check-label" for="flexCheckDefault">
      42
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="42" name="r42" id="r42">
    <label class="form-check-label" for="flexCheckDefault">
      42
    </label>
  </div>
@endif

@if ($item->r43 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="43" name="r43" id="r43">
    <label class="form-check-label" for="flexCheckDefault">
      43
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="43" name="r43" id="r43">
    <label class="form-check-label" for="flexCheckDefault">
      43
    </label>
  </div>
@endif

@if ($item->r44 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="44" name="r44" id="r44">
    <label class="form-check-label" for="flexCheckDefault">
      44
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="44" name="r44" id="r44">
    <label class="form-check-label" for="flexCheckDefault">
      44
    </label>
  </div>
@endif

@if ($item->r45 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="45" name="r45" id="r45">
    <label class="form-check-label" for="flexCheckDefault">
      45
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="45" name="r45" id="r45">
    <label class="form-check-label" for="flexCheckDefault">
      45
    </label>
  </div>
@endif

@if ($item->r46 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="46" name="r46" id="r46">
    <label class="form-check-label" for="flexCheckDefault">
      46
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="46" name="r46" id="r46">
    <label class="form-check-label" for="flexCheckDefault">
      46
    </label>
  </div>
@endif

@if ($item->r47 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="47" name="r47" id="r47">
    <label class="form-check-label" for="flexCheckDefault">
      47
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="47" name="r47" id="r47">
    <label class="form-check-label" for="flexCheckDefault">
      47
    </label>
  </div>
@endif

@if ($item->r48 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="48" name="r48" id="r48">
    <label class="form-check-label" for="flexCheckDefault">
      48
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="48" name="r48" id="r48">
    <label class="form-check-label" for="flexCheckDefault">
      48
    </label>
  </div>
@endif

@if ($item->r49 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="49" name="r49" id="r49">
    <label class="form-check-label" for="flexCheckDefault">
      49
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="49" name="r49" id="r49">
    <label class="form-check-label" for="flexCheckDefault">
      49
    </label>
  </div>
@endif

@if ($item->r50 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="50" name="r50" id="r50">
    <label class="form-check-label" for="flexCheckDefault">
      50
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="50" name="r50" id="r50">
    <label class="form-check-label" for="flexCheckDefault">
      50
    </label>
  </div>
@endif

@if ($item->r51 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="51" name="r51" id="r51">
    <label class="form-check-label" for="flexCheckDefault">
      51
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="51" name="r51" id="r51">
    <label class="form-check-label" for="flexCheckDefault">
      51
    </label>
  </div>
@endif

@if ($item->r52 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="52" name="r52" id="r52">
    <label class="form-check-label" for="flexCheckDefault">
      52
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="52" name="r52" id="r52">
    <label class="form-check-label" for="flexCheckDefault">
      52
    </label>
  </div>
@endif

@if ($item->r53 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="53" name="r53" id="r53">
    <label class="form-check-label" for="flexCheckDefault">
      53
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="53" name="r53" id="r53">
    <label class="form-check-label" for="flexCheckDefault">
      53
    </label>
  </div>
@endif

@if ($item->r54 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="54" name="r54" id="r54">
    <label class="form-check-label" for="flexCheckDefault">
      54
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="54" name="r54" id="r54">
    <label class="form-check-label" for="flexCheckDefault">
      54
    </label>
  </div>
@endif

@if ($item->r55 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="55" name="r55" id="r55">
    <label class="form-check-label" for="flexCheckDefault">
      55
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="55" name="r55" id="r55">
    <label class="form-check-label" for="flexCheckDefault">
      55
    </label>
  </div>
@endif

@if ($item->r56 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="56" name="r56" id="r56">
    <label class="form-check-label" for="flexCheckDefault">
      56
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="56" name="r56" id="r56">
    <label class="form-check-label" for="flexCheckDefault">
      56
    </label>
  </div>
@endif

@if ($item->r57 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="57" name="r57" id="r57">
    <label class="form-check-label" for="flexCheckDefault">
      57
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="57" name="r57" id="r57">
    <label class="form-check-label" for="flexCheckDefault">
      57
    </label>
  </div>
@endif

@if ($item->r58 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="58" name="r58" id="r58">
    <label class="form-check-label" for="flexCheckDefault">
      58
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="58" name="r58" id="r58">
    <label class="form-check-label" for="flexCheckDefault">
      58
    </label>
  </div>
@endif

@if ($item->r59 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="59" name="r59" id="r59">
    <label class="form-check-label" for="flexCheckDefault">
      59
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="59" name="r59" id="r59">
    <label class="form-check-label" for="flexCheckDefault">
      59
    </label>
  </div>
@endif

@if ($item->r60 == NULL)
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" value="60" name="r60" id="r60">
    <label class="form-check-label" for="flexCheckDefault">
      60
    </label>
  </div>
@else
<div class="form-group col-2">
    <input class="form-check-input" type="checkbox" checked disabled>
    <input type="hidden" value="60" name="r60" id="r60">
    <label class="form-check-label" for="flexCheckDefault">
      60
    </label>
  </div>
@endif

@endforeach
