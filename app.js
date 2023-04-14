function redirectNewProduct(){
    window.location.href = "new_product.html"
}
function redirectCancelAdd(){
    window.location.href = "index.php"
}

function prodType(prod){
    var dvdAttributes = document.getElementById("dvd_disc_attributes");
    var bookAttributes = document.getElementById("Book_attributes");
    var furnitureAttributes = document.getElementById("Furniture_attributes");
    
    dvdAttributes.style.display="none";
    bookAttributes.style.display="none";
    furnitureAttributes.style.display="none";
    
    if(prod=="DVD-Disc"){
        dvdAttributes.style.display="block";
    }else if(prod=="Book"){
        bookAttributes.style.display="block";
    }else if(prod=="Furniture"){
        furnitureAttributes.style.display="block";
    }
  }