<div class="grid grid-cols-1 sm:grid-cols-2 gap=6">

	<div class="pl-6">
		<p>	
			ID: <br />
			{{ html()->text('imgid')->size('100%') }}
		</p><p>
			Image Name:<br />
			{{ html()->text('imgname')->size('100%') }}
		</p><p>
			Path:<br />
			{{ html()->text('imgpath')->size('100%') }}
		</p><p>
			Extension:<br />
			{{ html()->text('imgextension')->size('100%') }}
		</p><p>
			Alternative text: <br />
			{{ html()->text('alt')->size('100%') }}
		</p><p>
			Caption:<br />
			{{ html()->text('caption')->size('100%') }}
		</p><p>
			Credit:<br />
			{{ html()->text('credit')->size('100%') }}
		</p><p>
			Buildings ID:<br />
			{{ html()->text('buildings_buildid')->size('100%') }}
		</p><p>
			People ID:<br />
			{{ html()->text('people_ppid')->size('100%') }}
		</p><p>
			Directories ID:<br />
			{{ html()->text('mydirectories_dirid')->size('100%') }}
		</p><p>
			Chapters ID:<br />
			{{ html()->text('chapters_chapid')->size('100%') }}
		</p>
	
		<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
			Submit
		</button>
		<br /><br />
	</div>
</div>
