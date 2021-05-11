<head>
<script type="text/javascript" src="java.js"></script>
<style type="text/css">
.auto-style1 {
font-size: x-large;
}
.auto-style2 {
font-size: medium;
}
</style>
</head>

<body bgcolor="#FCAA0C">

<form action="" id="shop" onsubmit="return false;">
   <fieldset>
    <legend class="auto-style1"><strong>EUROPA TCD Merchandise!</strong></legend>
    <label ><br><strong>Shoes:</strong><br><br></label>
   
    <input type="radio"  name="selectedMerch" value="T-Shirt"
    onclick="calculateTotal()" />
    Ballet - (15€)
    <br>
   
    <input type="radio"  name="selectedMerch" value="Shorts"
    onclick="calculateTotal()" />
    Salsa - (10€)
    <br>
   
    <input type="radio"  name="selectedMerch" value="Hat"
    onclick="calculateTotal()" />
    Jazz - (8€)
    <br>
   
    <input type="radio"  name="selectedMerch" value="Jumper"
    onclick="calculateTotal()" />
    Tango - (25€)
 
    <label ><br><br>Colour<strong>:</strong></label><br>
 
    <select id="selectedLogo" name='logo'
    onchange="calculateTotal()">
    <option value="None">Select Logo type</option>
    <option value="small">Small(3€)</option>
    <option value="medium">Medium(7€)</option>
    <option value="large">Large(10€)</option>
         </select>
    <br/>
   
   
    <p>
    <label for='includeEmbroidery' class="inlinelabel">
    Ribbon (+5€)</label>
    <input type="checkbox" id="includeEmbroidery" name='includeEmbroidery'
    onclick="calculateTotal()" />
   </p>
 
    <div id="totalPrice" class="auto-style2"><strong>Total Price (€): </strong> </div>
 
    </fieldset>
   
   
</form>

<p><a href="Welcome_page.html">Home</a></p>



