
	<!-- find home -->
	<div class="section find-home bg-second">
		<div class="container">
			<div class="section-head">
				<h4>FIND PROPERTY</h4>
				<div class="underline"></div>
				<div class="underline2"></div>
			</div>
			<form action="{{ route('Searchlisting') }}" method="GET">

				<div class="input-field col s12">
						<select name='property_type' required >
							<option value="" selected hidden>Property type </option>
					   @foreach($property_type1 as $property_type)
						  <option value='{{$property_type->property_type}}'> 
							@if($property_type->property_type == 2 )  Building  @else Land  @endif 

					  @endforeach
				  </select>
					
			  </div>


			  
					<div class="input-field col s12">
						<select name='state_id' required >
							<option value="" selected hidden>State  </option>				
					   @foreach($states1 as $state)
						  <option value='{{$state->state_id}}'> {{$state->state->name}} </option>
					  @endforeach
				  </select>
				
				  </div>


				  <div class="input-field col s12">
				   <select id="lga-list" class="lgaa" name='lga_id' required>
					  <option value='' hidden selected> Select LGA *</option>
					   @foreach($lgas1 as $lga)
						  <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->lga_id}}' style='display:none;' disabled> {{$lga->lga->name}} </option>
					  @endforeach
				  </select>
				
		  </div>
				<button type="submit" class="button-default" value="search">SEARCH</button>
			</form>
		</div>
	</div>
	<!-- end find home -->

	