
<div class="grid grid-cols-1 sm:grid-cols-2 gap=6">

	<div class="pl-6">

		<label class="block">
			<span class="text-gray-600" for="adrid">ID: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="addresses-adrid" type="text" name="adrid" value="{{ $address->adrid }}">
			@else
				<input class="form-input block w-full" id="addresses-adrid" type="text" name="adrid" >
			@endif
		</label>
		<label class="block">
			<span class="text-gray-600"  for="suite">Suite: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="address-suite" type="text" name="suite" value="{{ $address->suite }}">
			@else
				<input class="form-input block w-full" id="address-suite" type="text" name="suite">
			@endif
		</label>

		<label class="block">
			<span class="text-gray-600" for="stnmbr">Street Number: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="address-stnmbr" type="text" name="stnmbr" value="{{ $address->stnmbr }}">
			@else
				<input class="form-input block w-full" id="address-stnmbr" type="text" name="stnmbr">
			@endif
		</label>

		<label class="block">
			<span class="text-gray-600" for="lot_number">Lot Number: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="address-lot_number" type="text" name="lot_number" value="{{ $address->lot_number }}">
			@else
				<input class="form-input block w-full" id="address-lot_number" type="text" name="lot_number">
			@endif
		</label>

		<label class="block">
			<span class="text-gray-600" for="street">Street: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="address-suburb" type="text" name="suburb" value="{{ $address->street }}">
			@else
				<input class="form-input block w-full" id="address-suburb" type="text" name="suburb">
			@endif
		</label>

		<label class="block">
			<span class="text-gray-600" for="suburb">Suburb: </span>
			@if(isset($address))
				<input class="form-input block w-full" id="address-suburb" type="text" name="suburb" value="{{ $address->suburb }}">
			@else
				<input class="form-input block w-full" id="address-suburb" type="text" name="suburb">
			@endif
		</label>

	</div>

	<div class="pl-6">

	
<label class="block">
	<span class="text-gray-600" for="postcode">Postcode: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-postcode" type="text" name="postcode" value="{{ $address->postcode }}">
	@else
		<input class="form-input block w-full" id="address-postcode" type="text" name="postcode">
	@endif
</label>

<label class="block">
	<span class="text-gray-600" for="state">State: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-state" type="text" name="state" value="{{ $address->state }}">
	@else
		<input class="form-input block w-full" id="address-state" type="text" name="state">
	@endif
</label>

<label class="block">
	<span class="text-gray-600" for="municipality">Municipality: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-municipality" type="text" name="municipality" value="{{ $address->municipality }}">
	@else
		<input class="form-input block w-full" id="address-municipality" type="text" name="municipality">
	@endif
</label>

<label class="block">
	<span class="text-gray-600"  for="sla">SLA: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-sla" type="text" name="sla" value="{{ $address->sla }}">
	@else
		<input class="form-input block w-full" id="address-sla" type="text" name="sla">
	@endif
</label>

<label class="block">
	<span class="text-gray-600"  for="building_id">Building ID: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-qbuilding_id" type="text" name="building_id" value="{{ $address->building_id }}">
	@else
		<input class="form-input block w-full" id="address-building_id" type="text" name="building_id">
	@endif
	</label>

<label class="block">
	<span class="text-gray-600" for="plan_id">Plan ID: </span>
	@if(isset($address))
		<input class="form-input block w-full" id="address-qid" type="text" name="plan_plid" value="{{ $address->plan_plid }}">
	@else
		<input class="form-input block w-full" id="address-plid" type="text" name="plan_id">
	@endif
</label>
</div>
<br />
<div></div></div>
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
