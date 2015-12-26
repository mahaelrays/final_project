function changeColor(){
               
               var xBox=document.getElementById("box");

                xBox.style.backgroundColor=document.getElementById("vColor").value; 
}

  $(".offer_item ").hover(function(){
	  
  $(this).find(".meta-data").show(500);
  $(this).find("img").fadeTo(200,.5);

});
  $(".offer_item").mouseleave(function(){
	  
  $(this).find(".meta-data").hide(500);
  $(this).find("img").fadeTo(50,10);
});

