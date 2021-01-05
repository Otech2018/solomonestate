	
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
                          <select class='form-control form-control-sm'>
							<option value="any">any</option>
							<option value="potato-chips">Potato chips</option>
							<option value="chips-and-salsa">Chips and salsa</option>
							<option value="cookies">Cookies</option>
							<option value="doritos">Doritos</option>
							<option value="pringles">Pringles</option>
							<option value="hot-pockets">Hot pockets</option>
						</select>
                      
                </div>



                 <div class="form-group col-md-2">
                      <label style="font-size:15px;">State  <span class="text-danger">*</span></label>
                         <select id="state-list" class="state form-control form-control-sm" name='state_id' required >
							<option value="any">All</option>

		                     @foreach($states1 as $state)
		                        <option value='{{$state->id}}'> {{$state->name}} </option>
		                    @endforeach
		                </select>
                      
                </div>



                 <div class="form-group col-md-2">
                      <label style="font-size:15px;">Lga  <span class="text-danger">*</span></label>
                         <select id="lga-list" class="lgaa form-control form-control-sm" name='lga_id' required>
                            <option value='' hidden selected> Select LGA *</option>
                            <option value="any">All</option>
                             @foreach($lgas1 as $lga)
                                <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->id}}' style='display:none;' disabled> {{$lga->name}} </option>
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

