    <script type="text/javascript">
 var countryLists = new Array(4) 
 countryLists["empty"] = ["Select a Country"]; 
 countryLists["North America"] = ["Turnover"]; 
 countryLists["South America"] = ["turn"]; 
 countryLists["Asia"] = ["Turniogr"]; 
 countryLists["State licence"]= ["Britain"]; 
 function countryChange(selectObj) { 
 var idx = selectObj.selectedIndex; 
 var which = selectObj.options[idx].value; 
 cList = countryLists[which]; 
 var cSelect = document.getElementById("country"); 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i];  
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
</script>
</head>
<body>
  <noscript>This page requires JavaScript be available and enabled to function properly</noscript>
  <h1>Dynamic Select Statements</h1>
  <label for="continent">Select Continent</label>
  <select id="continent" onchange="countryChange(this);">
    <option value="empty">Select a Continent</option>
    <option value="North America">North America</option>
    <option value="South America">South America</option>
    <option value="Asia">Asia</option>
    <option value="Europe">Europe</option>
  </select>
  <br/>
  <label for="country">Select a country</label>
  <select id="country">
    <option value="0">Select a country</option>
  </select>


<body>
<select id='purpose'>
<option value="0">Personal use</option>
<option value="1">Business use</option>
<option value="2">Passing on to a client</option>
</select>
<div style='display:none;' id='business'>Business Name<br/>&nbsp;
<br/>&nbsp;
    <input type='file' class='text' name='business' value size='20' />
    <span> Upload your resume</span>
    <br/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>    $(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == '1')
      {
        $("#business").show();
      }
      else
      {
        $("#business").hide();
      }
    });
});
</script>
</div>
</body>








</body>
 </html>