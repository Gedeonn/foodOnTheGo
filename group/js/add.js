var name = document.getElementById('Name');
var duration = document.getElementById('duration');
var ingredients = document.getElementById('ingredients');
var price = document.getElementById('price');
var description = document.getElementById('description');

function validate()
{
if(title.value == "")
{
  alert("Please enter a product title");
}
else if(ingredients.value == "")
{
  alert("Please choose a product category");
}
else if(duration.value == "")
{
  alert("Please choose a brand");
}
else if(price.value == "")
{
  alert("Please enter the product's price");
}
else if(description.value == "")
{
  alert("Please enter the product description");
}
else
{
	window.location.href = "../admin/functions.php";
}
}
