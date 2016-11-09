 
<form class="form-horizontal">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
      <input class="form-control"  id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/>

      <input class="form-control"  id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>

      <input class="form-control"  id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
      
      <input class="form-control"  id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
    
    <div class="card-wrapper"></div>
      <input class="form-control"  id="column-left" type="text" name="first-name" placeholder="First Name"/>
      
      <input class="form-control"  id="column-right" type="text" name="last-name" placeholder="Surname"/>
      
      <input class="form-control"  id="input-field" type="text" name="number" placeholder="Card Number"/>
     
      <input class="form-control"  id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
        
      <input class="form-control"  id="column-right" type="text" name="cvc" placeholder="CCV"/>
      <br>   <br>
      <input class="btn btn-primary col-md-12"  id="input-button" type="submit" value="Submit"/>
    </form>
  </div> <!-- end of form-container -->
 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script>

        <script src="js/index.js"></script>

           <br>   <br>