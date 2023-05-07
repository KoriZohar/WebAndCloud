function validateForm() {
  var phoneInp = document.getElementById("phoneNum")
  
  phoneInp.addEventListener('input', () => {
    phoneInp.setCustomValidity('')
    phoneInp.checkValidity()
  });
}

function createcupcake() {
  var wrapObj = document.createElement("div");
  wrapObj.className = "wrap";
  document.querySelector(".box-canvas").appendChild(wrapObj);

  var toppingObj = document.createElement("div");
  toppingObj.className = "topping";
  document.querySelector(".box-canvas").appendChild(toppingObj);

  var toppingMidObj = document.createElement("div");
  toppingMidObj.className = "topping-middle";
  document.querySelector(".box-canvas").appendChild(toppingMidObj);

  var toppingTopObj = document.createElement("div");
  toppingTopObj.className = "topping-top";
  document.querySelector(".box-canvas").appendChild(toppingTopObj);

  var cherryObj = document.createElement("div");
  cherryObj.className = "cherry";
  document.querySelector(".box-canvas").appendChild(cherryObj);
}