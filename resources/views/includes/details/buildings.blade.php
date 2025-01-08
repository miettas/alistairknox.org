@if(strlen($building->client))	
	<strong>Client:</strong> {!!$building->client!!}
@endif
<!--address-->
@if(!empty($building->address) && strlen($building->address->suburb))<br />
	<strong>Address:</strong>  
	{!! $address = addressString($building->address->suite,$building->address->lot_number,$building->address->stnmbr,$building->address->street,$building->address->suburb,$building->address->postcode,$building->address->state); !!}
<br />
@endif
@if(strlen($building->date_built)>1) 
	<strong>Plan Dated:</strong> {!! $building->date_built !!}
@elseif(strlen($building->year_built)>1)
	<strong>Year Built:</strong> {!! $building->year_built !!}
	<br />
@endif
@if(strlen($building->jobnumber))
	<strong>Job Number:</strong> {!!$building->jobnumber!!}
	<br />
@endif
<!-- drawing info -->
@if(strlen($building->builddescription)>1)
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Description:</strong> {!!$building->builddescription!!}
	</div>
	<br />
@endif
@if(strlen($building->builddescription2)>1)
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Description:</strong> {!!$building->builddescription2!!}
	</div>
	<br />
@endif
@if(strlen($building->drawinglocation)>1)
	<strong>Drawing Location:</strong> {!!$building->drawinglocation!!}
	<br />
@endif
@if(strlen($building->drawinglocation2)>1)
	<strong>Drawing Location:</strong> {!!$building->drawinglocation2!!}
	<br />
@endif
<!--manuscript info-->
@if(strlen($building->manuscriptlocation)>1)
	<strong>Manuscript Location:</strong> {!!$building->manuscriptlocation!!}
	<br />
@endif
@if(strlen($building->manuscriptinfo)>1)
	<strong>Manuscript Info:</strong> {!!$building->manuscriptinfo!!}
	<br />
@endif
@if(strlen($building->manuscriptcomment)>1)
	<strong>Manuscript Comment:</strong> {!!$building->manuscriptcomment!!}
	<br />
@endif 
<!--images-->
@if(strlen($building->buildplan)>6)
	<strong>Plans:</strong><br />
	<div style="margin-left:20px">
		<a href="{!!url('BuildingsController/edit', [$building->buildid])!!}">{!!$building->buildplan!!}</a>
	</div>
	<br />
@endif
@if(strlen($building->buildplan2)>1)
	<strong>Plans:</strong> {!!$building->buildplan2!!}
	<br />
@endif

@if(strlen($building->keywords)>1)
	<strong>Keywords:</strong> {!!$building->keywords!!}
	<br />
@endif
@if(strlen($building->otherprofessional)>1)
	<strong>Other Professional Employed:</strong> {!!$building->otherprofessional!!}
@endif
<!--notes-->
@if(strlen($building->buildnote)>1)
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Notes:</strong> {!!$building->buildnote!!}
	</div>
	<br />
@endif