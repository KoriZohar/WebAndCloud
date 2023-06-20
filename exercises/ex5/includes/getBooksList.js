fetch('data/categories.json')
.then(response => response.json())
.then(data => 
{
    var categ_list = document.getElementById("categ_list");

    data.category.forEach( function(category) {
        var categ = document.createElement("li");
        var link = document.createElement("a");

        link.classList.add("cat_option");
        
        link.href = "#";
        link.textContent = category;
        
        categ.appendChild(link);
        categ_list.appendChild(categ);
    });
})

var main_cards = document.getElementById('cards');

categ_list.addEventListener('click', function(event) {
  if (event.target.tagName === 'A') {
    event.preventDefault();
    
    var selectedCategory = event.target.textContent.trim();
    var bookCards = main_cards.getElementsByClassName('card');

    for (var i = 0; i < bookCards.length; i++) {
      var card = bookCards[i];
      var bookCategory = card.getAttribute('data-category');

      if (selectedCategory === 'General' || bookCategory === selectedCategory) {
        card.classList.remove('hidden');
      } else {
        card.classList.add('hidden');
      }
    }
  }
});

window.addEventListener('load', function() {
  var allCategoryLink = document.querySelector('#categ_list li:first-child a');
  if (allCategoryLink) {
    allCategoryLink.click();
  }
});
