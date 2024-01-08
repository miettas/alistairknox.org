<p>	
	<h4>
		@if($directory->dirid < 14 || $directory->dirid == 24 )
			<a href="{{action('DirectoriesController@show', [$directory->dirid-1])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
			<a href="{{action('DirectoriesController@show', [$directory->dirid+1])}}" style="button type='button' class='btn' ">Next ></a>
		@else
			@if($directory->dirid == 14)
				<a href="{{action('DirectoriesController@show', [13])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [18])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 15)
				<a href="{{action('DirectoriesController@show', [18])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [17])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 16)
				<a href="{{action('DirectoriesController@show', [17])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [20])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 17)
				<a href="{{action('DirectoriesController@show', [15])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [16])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 18)
				<a href="{{action('DirectoriesController@show', [14])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [15])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 19)
				<a href="{{action('DirectoriesController@show', [20])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [24])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 20)
				<a href="{{action('DirectoriesController@show', [16])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [19])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 24)
				<a href="{{action('DirectoriesController@show', [19])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
				<a href="{{action('DirectoriesController@show', [25])}}" style="button type='button' class='btn' ">Next ></a>
			@endif
			@if($directory->dirid == 25)
				<a href="{{action('DirectoriesController@show', [24])}}" style="button type='button' class='btn' ">< Previous</a>
			@endif

		@endif
	</h4>
</p>