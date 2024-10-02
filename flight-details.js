let horizontal = document.getElementsByClassName("destinations-card-container")[0];
horizontal.addEventListener("wheel", (e)=>{
    e.preventDefault();
    horizontal.scrollLeft += e.deltaY * 4;
})