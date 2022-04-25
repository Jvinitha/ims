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
<?php echo form_open_multipart('store/cart_location');?>
<div class="container" style="max-width: 40rem; padding: 10vw 2rem 0;margin: 0 auto;height: 100vh;">
  <h1  style="color:red;">Shipping</h1>
  <h5  style="text-align: center;">Add your shipping details.</h5>
  <hr />
  <div class="form">
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname">First name</span>
      <input class="field__input" type="text"  name ="firstname"  id="firstname"/>
    </label>
    <label class="field">
      <span class="field__label" for="lastname">Last name</span>
      <input class="field__input" type="text" name ="lastname" id="lastname"/>
    </label>
  </div>
  <label class="field">
    <span class="field__label" for="address">Address</span>
    <input class="field__input" type="text" name ="address" id="address" />
  </label>
  <label class="field">
    <span class="field__label" for="phone">Phone number</span>
    <input class="field__input" type="text" name ="phone" id="phone" />
  </label>
  <label class="field">
    <span class="field__label" for="country">Country</span>
    <select class="field__input" id="country" name="country">
      <option value="">select country</option>
      <option value="India">India</option>
    </select>
  </label>
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Zip code</span>
      <input class="field__input" type="text" name ="zipcode" id="zipcode" />
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <input class="field__input" type="text" name ="city" id="city" />
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <select class="field__input" ng-model="state" id="state" name="state" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="" data-parsley-error-message="Pick a valid option" oninvalid="this.setCustomValidity('Please select your state')" oninput="this.setCustomValidity('')" title="Please select your state">
    	 <script type="text/javascript">var sel_state = "";</script>
    	<option value="">select your state</option>
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
		<option value="Arunachal Pradesh">Arunachal Pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chhattisgarh">Chhattisgarh</option>
		<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		<option value="Daman and Diu">Daman and Diu</option>
		<option value="Delhi">Delhi</option>
		<option value="Goa">Goa</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu and Kashmir">Jammu and Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Karnataka">Karnataka</option>
		<option value="Kerala">Kerala</option>
		<option value="Lakshadweep">Lakshadweep</option>
		<option value="Madhya Pradesh">Madhya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamil Nadu">Tamil Nadu</option>
		<option value="Telangana">Telangana</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="Uttar Pradesh">Uttar Pradesh</option>
		<option value="West Bengal">West Bengal</option>
	</select>
    </label>
  </div>
  </div>
  
  <br>
  <button class="button">Continue</button>
  

