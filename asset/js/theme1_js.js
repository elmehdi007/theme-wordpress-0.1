 elementHasSubMenu= document.getElementsByClassName("menu-item-has-children");


function toogleSubMenu(){
   // this.addClss
    alert(this.innerHTML);
}
 // elementHasSubMenu[0].onclick=toogleSubMenu;

for(i=0 ;i<elementHasSubMenu.length;i++){
    elementHasSubMenu[i].onclick=toogleSubMenu;
}


