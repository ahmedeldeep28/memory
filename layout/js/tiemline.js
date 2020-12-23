var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    loop: true,
    autoplay:{
        delay: 4000,
        disableOnInteraction: false,
    },
    spaceBetween: 30,
    mousewheel: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
/*
var titleInput = document.getElementById("title"),
textElement = document.getElementById("text"),
btnAdd = document.getElementById("btn-add"),
aleart = document.getElementById("alert"),
allElument = document.getElementById("main");
let fouc = document.createAttribute('autofocus')
btnAdd.onclick = ()=>{
    if(titleInput.value == "" ){
        aleart.classList.add("active");
        titleInput.classList.add("alertInput");
        titleInput.focus()
    }
    else{
    /*creat element
    titleInput.classList.remove("alertInput")
    let creatItem = document.createElement("div");
    let creatClose = document.createElement("span");
    let creatContent = document.createElement("div");
    let creatH2 = document.createElement("h2");
    let creatText = document.createElement("p");
    /*add class Element*
    if(allElument.lastElementChild.classList.contains("right")){
        creatItem.classList.add("left")
    }else{
        creatItem.classList.add("right")
    }
    creatItem.classList.add("item");
    creatClose.classList.add("close");
    creatContent.classList.add("content")

    /*apend Elamet*
    allElument.append(creatItem);
    creatItem.append(creatContent);
    creatContent.append(creatClose);
    creatContent.append(creatH2);
    creatContent.append(creatText);

    creatH2.textContent = titleInput.value;
    creatText.textContent = textElement.value;
    }
    titleInput.value  = "";
    textElement.value  = "";
    let btnClose = document.querySelectorAll(".all-list .item .content .close");
    let remove =  Array.from(btnClose);

        remove.forEach((block) =>{
            block.addEventListener("click",function(){
                block.parentElement.remove()
            })
          });
}*/

let btnClose = document.querySelectorAll(".all-list .item .content .close");
let remove =  Array.from(btnClose);
    remove.forEach((block) =>{
        block.addEventListener("click",function(){
            block.parentElement.remove()
        })
      });

    //   let h2 = document.querySelectorAll(".all-list .content h2");
    //   let h2h2 = Array.from(h2)

    //   let set = [];
    //     console.log(h2.textContent);

    //   for(let i = 0; i <  h2.length; i ++){

    // set.push(h2[i].textContent);

    //     console.log(set);

    //   }
      
    //   localStorage.setItem("todo", JSON.stringify(set));



    let btnEdit = document.querySelectorAll(".all-list .item .content .edit");
    let edit =  Array.from(btnEdit);
    edit.forEach((block) =>{
        block.addEventListener("click", function(){
            var lineCardId = block.parentElement.parentElement.parentElement.parentElement.children[0].value;
            var lineTitle = block.parentElement.parentElement.parentElement.firstElementChild.children[0].textContent;
            var linePar = block.parentElement.parentElement.parentElement.children[1].textContent;
            document.getElementById("editId").value = lineCardId;
            document.getElementById("editTitle").value = lineTitle;
            document.getElementById("editPar").innerHTML = linePar;

            var editContent = document.getElementById("popedit");
            editContent.classList.add("active");
        });
      
    });

    let cancelEdt = document.getElementById("cancel_edt");
    cancelEdt.addEventListener("click", function(){
        var editContent = document.getElementById("popedit");
        editContent.classList.remove("active");
    });

    console.log(lineTitle)