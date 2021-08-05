// xem thêm menu

var menus = document.getElementById("menus");
var books = document.querySelector(".book");
var closes = document.getElementById("close");

menus.onclick = function open() 
{
  books.style.display = "block";
  menus.style.display = "none";
}

 // đóng menu
closes.onclick = function close() 
{
  books.style.display = "none";
  menus.style.display = "block";
}
