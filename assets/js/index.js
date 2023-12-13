let elements = document.getElementsByClassName("product");
let walls = document.getElementsByClassName("modal");
let closer = document.getElementsByClassName("closeModal");

for (let i = 0; i < elements.length; i += 1) {
    elements[i].addEventListener("click", function(){
        walls[i].classList.add("open")
    })
}


for (let j = 0; j < elements.length; j += 1) {
    closer[j].addEventListener("click", function(){
        walls[j].classList.remove("open")
    })
}
document.getElementById("auth_openup").addEventListener("click", function(){
    document.getElementById("my_modalsa").classList.add("open")
})
document.getElementById("auth_close_btn").addEventListener("click", function(){
    document.getElementById("my_modalsa").classList.remove("open")
})

