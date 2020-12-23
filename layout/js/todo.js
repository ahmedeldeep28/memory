

let btnEdit = document.querySelectorAll(".item .edit");
let edit =  Array.from(btnEdit);
edit.forEach((block) =>{
    block.addEventListener("click", function(){
        var todoCardId = block.parentElement.parentElement.parentElement.children[0].value;
        var todoContent = block.parentElement.parentElement.children[0].children[0].children[1].innerText;
        var todoComment = block.parentElement.parentElement.children[0].children[1].children[0].children[0].innerText;
        var todoTime = block.parentElement.parentElement.children[0].children[1].children[0].children[1].innerText;
       // var linePar = block.parentElement.parentElement.parentElement.children[1].innerText;

//console.log(todoTime);
        document.getElementById("editId").value = todoCardId;
        document.getElementById("edt_todo_content").value = todoContent;
        document.getElementById("edt_todo_comment").value = todoComment;
        document.getElementById("edt_todo_time").value = todoTime;

        var editContent = document.getElementById("popedit");
        editContent.classList.add("active");
    });
      
});

let cancelEdt = document.getElementById("cancel_edt");
cancelEdt.addEventListener("click", function(){
    var editContent = document.getElementById("popedit");
    editContent.classList.remove("active");
});

