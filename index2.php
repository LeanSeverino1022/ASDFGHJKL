
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FA</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3-css.css"> 

		<style>
			label {display: inline-block; width: 150px;}
			div { margin-bottom: 10px;}	
		</style>  
    </head>
    <body>
        <form action = "index.html" method = "post">
	
		<fieldset>

			<!--<legend><span class ="number">1</span></legend>      -->
           
		   <!--Primary-->

			<div>   
				<label for ="no">No:</label>
				<input type = "text" id="no" name="no">
			</div>

			<div>
				<label for ="description">Description:</label>
				<input type = "text" id="description" name="description">
			</div>

			<div>
				<label for ="purchase_date">Purchase Date:</label>
				<input type = "text" id="purchase_date" name="purchase_date">
			</div>

			<div>
				<label for ="purchase_cost">puchase Cost:</label>
				<input type = "text" id="purchase_cost" name="purchase_cost">
			</div>

			<div>
				<label for ="category">Category:</label>
				<input type = "text" id="category" name="category">
			</div>

			<div>
				<label for ="location">Location:</label>
				<input type = "text" id="location" name="location">
			</div>

			<!--<div>
				<label for ="inventory_num">Inventory No.:</label>
				<input type = "text" id="inventory_num" name="inventory_num">
			</div>-->

			<div>
				<label for ="model">Model No.:</label>
				<input type = "text" id="model" name="model">
			</div>

			<div>
				<label for ="serial">Serial NO.:</label>
				<input type = "text" id="serial" name="serial">
			</div>

			<div>
				<label for ="re_assigned">Date Re-Assigned:</label>
				<input type = "date" id="re_assigned" name="re_assigned">
			</div>

			<div>
				<label for ="comments">Comments: </label>
				<textarea id="comments" name="comments"> </textarea>
			</div>

			<div>           	
				<label class ="" for="inactive">Inactive: </label>			
				<input type="checkbox" id="inactive" value="is_inactive" name="inactive" checked>
			</div>

			<div>
				<label class ="" for="blocked" >Blocked: </label>
            	<input type="checkbox" id="blocked" value="is_blocked" name="inactive" blocked>				
			</div>           
     
		</fieldset>	

	
			<!--<label for ="job">Job role:</label>
			<select id="job" name ="user_job">
				<optgroup label ="Web">
					<option value ="frontend_developer">Front-End Developer</option>
					<option value ="php">PHP Developer</option>
					<option value ="python">Python Developer</option>
					<option value ="rails">Rails Developer</option>
					<option value ="web_designer">Web Desiigner</option>
				</optgroup>
				<optgroup label ="Mobile">
					<option value ="android">Android Developer</option>
					<option value ="mobile_designer">Mobile Desiigner</option>
				</optgroup>
			</select>-->
            

		<button type ="submit">submit</button>    
        

	</form>

	
        

    </body>       
</html>


