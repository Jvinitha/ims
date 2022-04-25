<style>
    @import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
}

h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}



.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}
</style>
<?php echo form_open_multipart('store/update_cartaddress/'.$notes->id);?>
<div class="container" style="max-width: 40rem; padding: 10vw 2rem 0;margin: 0 auto;height: 100vh;">
  <h1  style="color:red;">Shipping</h1>
  <h5  style="text-align: center;">Edit your shipping details.</h5>
  <hr />
  <div class="form">
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname">First name</span>
      <input class="field__input" type="text"  name ="firstname" value="<?php echo $notes->firstname ?>" id="firstname"/>
    </label>
    <label class="field">
      <span class="field__label" for="lastname">Last name</span>
      <input class="field__input" type="text" name ="lastname" value="<?php echo $notes->lastname ?>" id="lastname"/>
    </label>
  </div>
  <label class="field">
    <span class="field__label" for="address">Address</span>
    <input class="field__input" type="text" name ="address" value="<?php echo $notes->address ?>" id="address" />
  </label>
  <label class="field">
    <span class="field__label" for="phone">Phone number</span>
    <input class="field__input" type="text" name ="phone" value="<?php echo $notes->phone_number ?>" id="phone" />
  </label>
  <label class="field">
    <span class="field__label" for="country">Country</span>
    <select class="field__input" id="country" name="country" value="<?php echo $notes->country ?>">
      <option value="">select country</option>
      <option value="India" <?php  if($notes->country == "India") echo 'selected="selected"';?>>India</option>
    </select>
  </label>
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Zip code</span>
      <input class="field__input" type="text" name ="zipcode" value="<?php echo $notes->pincode ?>" id="zipcode" />
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <input class="field__input" type="text" name ="city" value="<?php echo $notes->city ?>" id="city" />
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <select class="field__input" ng-model="state" id="state" name="state" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="" data-parsley-error-message="Pick a valid option" oninvalid="this.setCustomValidity('Please select your state')" oninput="this.setCustomValidity('')" title="Please select your state">
    	 <script type="text/javascript">var sel_state = "";</script>
    	<option value="">select your state</option>
                    <option value="Andaman and Nicobar Islands" <?php  if($notes->state == "Andaman and Nicobar Islands") echo 'selected="selected"';?>>Andaman and Nicobar Island</option>
                    <option value="Andhra Pradesh" <?php  if($notes->state == "Andhra Pradesh") echo 'selected="selected"';?>>Andhra Pradesh</option>
                    <option value="Arunachal Pradesh" <?php  if($notes->state == "Arunachal Pradesh") echo 'selected="selected"';?>>Arunachal Pradesh</option>
                    <option value="Assam" <?php  if($notes->state == "Assam") echo 'selected="selected"';?>>Assam</option>
                    <option value="Bihar" <?php  if($notes->state == "Bihar") echo 'selected="selected"';?>>Bihar</option>
                    <option value="Chandigarh" <?php  if($notes->state == "Chandigarh") echo 'selected="selected"';?>>Chandigarh</option>
                    <option value="Chhattisgarh" <?php  if($notes->state == "Chhattisgarh") echo 'selected="selected"';?>>Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli" <?php  if($notes->state == "Dadra and Nagar Haveli") echo 'selected="selected"';?>>Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu" <?php  if($notes->state == "Daman and Diu") echo 'selected="selected"';?>>Daman and Diu</option>
                    <option value="Delhi" <?php  if($notes->state == "Delhi") echo 'selected="selected"';?>>Delhi</option>
                    <option value="Goa" <?php  if($notes->state == "Goa") echo 'selected="selected"';?>>Goa</option>
                    <option value="Gujarat" <?php  if($notes->state == "Gujarat") echo 'selected="selected"';?>>Gujarat</option>
                    <option value="Haryana" <?php  if($notes->state == "Haryana") echo 'selected="selected"';?>>Haryana</option>
                    <option value="Himachal Pradesh" <?php  if($notes->state == "Himachal Pradesh") echo 'selected="selected"';?>>Himachal Pradesh</option>
                    <option value="Jammu and Kashmir" <?php  if($notes->state == "Jammu and Kashmir") echo 'selected="selected"';?>>Jammu and Kashmir</option>
                    <option value="Jharkhand" <?php  if($notes->state == "Jharkhand") echo 'selected="selected"';?>>Jharkhand</option>
                    <option value="Karnataka" <?php  if($notes->state == "Karnataka") echo 'selected="selected"';?>>Karnataka</option>
                    <option value="Kerala" <?php  if($notes->state == "Kerala") echo 'selected="selected"';?>>Kerala</option>
                    <option value="Lakshadweep" <?php  if($notes->state == "Lakshadweep") echo 'selected="selected"';?>>Lakshadweep</option>
                    <option value="Madhya Pradesh" <?php  if($notes->state == "Madhya Pradesh") echo 'selected="selected"';?>>Madhya Pradesh</option>
                    <option value="Maharashtra" <?php  if($notes->state == "Maharashtra") echo 'selected="selected"';?>>Maharashtra</option>
                    <option value="Manipur" <?php  if($notes->state == "Manipur") echo 'selected="selected"';?>>Manipur</option>
                    <option value="Meghalaya" <?php  if($notes->state == "Meghalaya") echo 'selected="selected"';?>>Meghalaya</option>
                    <option value="Mizoram" <?php  if($notes->state == "Mizoram") echo 'selected="selected"';?>>Mizoram</option>
                    <option value="Nagaland" <?php  if($notes->state == "Nagaland") echo 'selected="selected"';?>>Nagaland</option>
                    <option value="Orissa" <?php  if($notes->state == "Orissa") echo 'selected="selected"';?>>Orissa</option>
                    <option value="Pondicherry" <?php  if($notes->state == "Pondicherry") echo 'selected="selected"';?>>Pondicherry</option>
                    <option value="Punjab" <?php  if($notes->state == "Punjab") echo 'selected="selected"';?>>Punjab</option>
                    <option value="Rajasthan" <?php  if($notes->state == "Rajasthan") echo 'selected="selected"';?>>Rajasthan</option>
                    <option value="Sikkim" <?php  if($notes->state == "Sikkim") echo 'selected="selected"';?>>Sikkim</option>
                    <option value="Tamil Nadu" <?php  if($notes->state == "Tamil Nadu") echo 'selected="selected"';?>>Tamil Nadu</option>
                    <option value="Telangana" <?php  if($notes->state == "Telangana") echo 'selected="selected"';?>>Telangana</option>
                    <option value="Tripura" <?php  if($notes->state == "Tripura") echo 'selected="selected"';?>>Tripura</option>
                    <option value="Uttaranchal" <?php  if($notes->state == "Uttaranchal") echo 'selected="selected"';?>>Uttaranchal</option>
                    <option value="Uttar Pradesh" <?php  if($notes->state == "Uttar Pradesh") echo 'selected="selected"';?>>Uttar Pradesh</option>
                    <option value="West Bengal" <?php  if($notes->state == "West Bengal") echo 'selected="selected"';?>>West Bengal</option>
   
	</select>
    </label>
  </div>
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary">Update Address</button>

  
  

