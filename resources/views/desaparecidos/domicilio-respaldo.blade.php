<form>


	<div class="form-group"> <!-- Tipo de domicilio -->
        <label for="tipoDireccion" class="control-label">Tipo de domicilio</label>
        <select class="form-control" id="tipoDireccion">
            
            <option value="WI">Personal</option>
            <option value="WY">Trabajo</option>
        </select>                    
    </div>

    <div class="form-group"> <!-- Calle -->
        <label for="calle" class="control-label">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle" placeholder="Girasoles">
    </div>    

    <div class="form-group"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Street Address 1</label>
        <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Street address, P.O. box, company name, c/o">
    </div>                    
                            
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Street Address 2</label>
        <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Apartment, suite, unit, building, floor, etc.">
    </div>    

    <div class="form-group"> <!-- City-->
        <label for="city_id" class="control-label">City</label>
        <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
    </div>                                    
                            
    
    
    <div class="form-group"> <!-- Zip Code-->
        <label for="zip_id" class="control-label">Zip Code</label>
        <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
    </div>        
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Buy!</button>
    </div>     
    
</form>