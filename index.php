<!-- // Assessment 1
// date: 16/4/21
// author: Matthew Beerens
// studentID: 20292515 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="quoteForm.css">
    <script src="quoteValidation.js"></script>
  </head>
  <body>
    <form  name="my-form" action="https://twaaut.cdms.westernsydney.edu.au/twainfo/form.asp" onsubmit='return validateForm()' method="post">


      <fieldset>
        <!-- <legend>Sale made by</legend> -->

        <div class="form-item full-width">
          <label for="dateof">Date of quote<span> *</span></label><br/>
          <input id="dateof" type='text' name="dateof"  >
        </div>
        <div class="form-item half-width">
          <label for="s-fname">Staff name</label><br/>
          <input id="s-fname" type="text" name="s-fname"  >
        </div>
        <div class="form-item half-width">
          <label for="s-number">Staff no.<span>*</span></label><br/>
          <input id="s-number" type="text" name="s-number"  >
        </div>

      </fieldset>

      <fieldset>
        <!-- <legend>Customer details</legend> -->
        <div class="form-item full-width">
          <label for="c-title">Title</label><br/>
          <select id="c-title" name="c-title" >
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Mx">Mx</option>
            <option value="Miss">Miss</option>
            <option value="Rev">Rev</option>
            <option value="Hon">Hon</option>
          </select>
        </div>

        <div class="form-item half-width">
          <label for="c-fname">First name<span> *</span></label><br/>
          <input id="c-fname" type="text" name="c-fname" >
        </div>

        <div class="form-item half-width">
          <label for="c-lname">Last name<span> *</span></label><br/>
          <input id="c-lname" type="text" name="c-lname"  >
        </div>

        <div class="form-item full-width">
          <label for="c-street-address">Address<span> *</span></label><br/>
          <input id="c-street-address" type="text" name="c-street-address"  >
        </div>

        <div class="form-item half-width">
          <label for="c-suburb">Suburb<span> *</span></label><br/>
          <input id="c-suburb" type="text" name="c-suburb" >
        </div>

        <div class="form-item half-width">
          <label for="c-postcode">Postcode</label><br/>
          <input id="c-postcode" type="text" name="c-postcode"  >
        </div>

        <div class="form-item half-width">
          <label for="c-phone">Phone no.</label><br/>
          <input id="c-phone" type="text" name="c-phone"  >
        </div>

        <div class="form-item half-width">
          <label for="c-email">Email</label><br/>
          <input id="c-email" type="email" name="c-email"  >
        </div>

      </fieldset>

      <fieldset>
        <!-- <legend>Product details</legend> -->
        <div class="form-item third-width">
          <label for="p-id">Product ID<span> *</span></label><br/>
          <input id="p-id" type="text" name="p-id"  >
        </div>
        <div class="form-item third-width">
          <label for="p-name">Product name</label><br/>
          <input id="p-name" type="text" name="p-name"  >
        </div>
        <div class="form-item third-width">
          <label for="p-desc">Description</label><br/>
          <input id="p-desc" type="text" name="p-desc"  >
        </div>
        <div class="form-item half-width">
          <label for="p-quantity">Quantity<span> *</span></label><br/>
          <input id="p-quantity" oninput="updateTotal()" type="text" name="p-quantity"  >
        </div>
        <div class="form-item half-width">
          <label for="p-unit-price">Unit Price<span> *</span></label><br/>
          <input id="p-unit-price" oninput="updateTotal()" type="text" name="p-unit-price"  >
        </div>
        <div class="form-item full-width">
          <label for="p-line-total">Total</label><br/>
          <input id="p-line-total" type="text" name="p-line-total" >
        </div>
        <div class="btn-right"><input type="button" onclick="addProduct()" value="add product"></div>
      </fieldset>

      <fieldset>
        <!-- <legend>Installation</legend> -->
        <div class="form-item">
          <label for="inst-notes">Installation notes</label><br/>
          <textarea id="inst-notes"  name="inst-notes" rows="8" cols="89"></textarea>
        </div>
        <div class="form-item">
          <label for="req-date">Requested date</label><br/>
          <input id="req-date" type="text" name="req-date">
        </div>
      </fieldset>

      <fieldset>
        <!-- <legend>Summary</legend> -->
        <div class="form-item third-width">
          <label for="subtotal">Subtotal</label><br/>
          <input id="subtotal" type="text" name="subtotal" >
        </div>
        <div class="form-item third-width">
          <label for="gst">GST</label><br/>
          <input id="gst" type="text" name="gst">
        </div>
        <div class="form-item third-width">
          <label for="total">Total</label><br/>
          <input id="total" type="text" name="total">
        </div>
        <div class="form-item half-width">
          <label for="deposit">Deposit</label><br/>
          <input id="deposit" oninput="updateValue()" type="text" name="deposit">
        </div>
        <div class="form-item half-width">
          <label for="total-due">Total due</label><br/>
          <input id="total-due" type="text" name="total-due">
        </div>
      </fieldset>

      <aside id="error-section">
      </aside>

      <p id="err-msg"></p>
      <div class="btn-right"><input type="submit" name="submit" onclick="return validateForm()" value="submit"></div>
    </form>

    <table id="product-table">
      <tr>
        <th>Product ID</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Line Total</th>
      </tr>
    </table>

  </body>
</html>
