	
<!-- Search-Section -->
		<form style="padding-top:20px;">
			<h1 align='center'>Search Property </h1><br/>
  <div class="form-row">
  	<div class="form-group col-md-1"></div>
                
                <div class="form-group col-md-2">
                      <label style="font-size:15px;">Mode <span class="text-danger">*</span></label>
                          <select class='form-control form-control-sm'>
							<option value="any">any</option>
							<option value="potato-chips">Rent</option>
							<option value="chips-and-salsa">Sale</option>
						</select>
                      
                </div>



                 <div class="form-group col-md-2">
                      <label style="font-size:15px;">Property type <span class="text-danger">*</span></label>
                          <select class=" form-control form-control-sm" name='property_type1' required >
              <option value="any">All</option>

                         @foreach($property_type1 as $property_type)
                            <option value='{{$property_type->property_type}}'> 
                              @if($property_type->property_type == 2 )  Building  @else Land  @endif 

                        @endforeach
                    </select>
                      
                </div>



                 <div class="form-group col-md-2">
                      <label style="font-size:15px;">State  <span class="text-danger">*</span></label>
                         <select id="state-list" class="state form-control form-control-sm" name='state_id' required >
							<option value="any">All</option>

		                     @foreach($states1 as $state)
		                        <option value='{{$state->state_id}}'> {{$state->state->name}} </option>
		                    @endforeach
		                </select>
                      
                </div>



                 <div class="form-group col-md-2">
                      <label style="font-size:15px;">Lga  <span class="text-danger">*</span></label>
                         <select id="lga-list" class="lgaa form-control form-control-sm" name='lga_id' required>
                            <option value='' hidden selected> Select LGA *</option>
                            <option value="any">All</option>
                             @foreach($lgas1 as $lga)
                                <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->lga_id}}' style='display:none;' disabled> {{$lga->lga->name}} </option>
                            @endforeach
                        </select>
                      
                </div>


                 <div class="form-group col-md-2">
                     <br/> <br/>
					<input type="submit" value="search" class='btn btn-success'>
                      
                </div>


  	<div class="form-group col-md-1"></div>

 </div>


</form>

