<h3>{{ $adr->buildings->buildname }}</h3>
			
		<p>
			{{ isset($adr->suite) ? $adr->suite." " : '' }}
			{{ $adr->stnmbr or '' }}
			@if(strlen($adr->stnmbr)<1){{ $adr->lot_number or '' }}@endif 
			{{ isset($adr->street) ? $adr->street." " : '' }}
			{{ isset($adr->suburb) ? $adr->suburb." " : '' }}
			{{ isset($adr->state) ? ". ".strtoupper($adr->state)." " : '' }}
			{{ isset($adr->postcode) ? $adr->postcode." " : '' }}
		</p>
		<p>
			@if (Auth::check())<a href="{{url('AddressesController/edit', [$adr->adrid])}}">( Edit )</a>@endif
		</p>