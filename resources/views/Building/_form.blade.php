<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
	<div class="pl-4">
		<div>
			Name:<br />
			{{ html()->text('buildname')->size('50%') }}
		</div>
	</div>
	<div>
		<div>
			Client:<br />
			{{ html()->text('client')->size('50%') }}
		</div>
	</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
	<div class="pl-4">
		<div>
			Date Built:<br />
			{{ html()->text('date_built')->size('31%') }}
		</div>
	</div>
	<div>
		Year Built:<br />
		{{ html()->text('year_built')->size('32%') }}
	</div>
	<div>
		Job Number:<br />
		{{ html()->text('jobnumber')->size('30%') }}
	</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
	<div class="pl-4">
		<div>
			Project ID:<br />
			{{ html()->text('project_pjid')->size('22%') }}
		</div>
	</div>
	<div>
		Address ID:<br />
		{{ html()->text('address_adrid')->size('22%') }}
	</div>
	<div>
		Number of Drawings:<br />
		{{ html()->text('numdrawings')->size('22%') }}
	</div>
	<div>
		Plan:<br />
		{{ html()->text('buildplan')->size('22%') }}
	</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
	<div class="pl-4">
		Keywords:<br />
		{{ html()->text('keywords')->size('51%') }}
		<div>
			Drawing Location:<br />
			{{ html()->text('drawinglocation')->size('50%') }}
		</div>
	</div>
	<div>
		Other Professionals Employed:<br />
		{{ html()->text('otherprofessional')->size('50%') }}
		<div>
			Building Description:<br />
			{{ html()->text('builddescription')->size('50%') }}
		</div>
	</div>
	<div class="pl-4">
		Notes:<br />
		{{ html()->textarea('buildnote')->rows(4)->cols(50) }}
		
	</div>
	<div>
		Image:<br />
		{{ html()->textarea('buildimage')->rows(4)->cols(50) }}
	</div>
	<div class="pl-4">
		Building Plan:<br />
		{{ html()->textarea('buildplan')->rows(4)->cols(50) }}
	</div>
	<div >
		Drawings:<br />
		{{ html()->textarea('drawingdescription')->rows(4)->cols(50) }}
	</div>
	<div class="pl-4">
		Manuscript Info:<br />
		{{ html()->textarea('manuscriptinfo')->rows(4)->cols(50) }}
		</div>
		<div>
			Manuscript Comment:<br />
			{{ html()->textarea('manuscriptcomment')->rows(4)->cols(50) }}
	
		</div>	
		<div class="pl-4">
			Manuscript Location:<br />
			{{ html()->text('manuscriptlocation')->size('50%') }}
		</div><div>
			Drawing Location 2:<br />
			{{ html()->text('drawinglocation2')->size('50%') }}
		</div>
	</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
	<div class="pl-4">
		Building Plan 2:<br />
		{{ html()->text('buildplan2')->size('22%') }}
	</div>
	<div >
		Suite:<br />
		{{ html()->text('bldsuite')->size('22%') }}
	</div>
	<div>
		Street Number:<br />
		{{ html()->text('bldstnmbr')->size('24%') }}
	</div>
	<div>
		Lot Number:<br />
		{{ html()->text('bldlot_number')->size('21%')}}
	</div>
	<div class="pl-4">
		Street:<br />
		{{ html()->text('bldstreet')->size('22%') }}
	</div>
	<div >
		Suburb:<br />
		{{ html()->text('bldsuburb')->size('22%') }}
	</div>
	<div >
		State:<br />
		{{ html()->text('bldstate')->size('24%')}}
	</div>
	<div>
		Post Code:<br />
		{{ html()->text('bldpostcode')->size('21%')}}
	</div>

</div>
</div>
	<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
	Submit
	</button>
	<br /><br />