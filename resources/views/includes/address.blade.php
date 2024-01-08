{{ isset($address->suite) ? $address->suite." " : '' }}
{{ $address->stnmbr ?? '' }}
@if(!strlen($address->stnmbr))
	{{ $address->lot_number ?? '' }} 
@endif 
{{ isset($address->street) ? $address->street." " : '' }}
{{ isset($address->suburb) ? $address->suburb." " : '' }}
{{ isset($address->state) ? ". ".strtoupper($address->state)." " : '' }}
{{ isset($address->postcode) ? $address->postcode." " : '' }}