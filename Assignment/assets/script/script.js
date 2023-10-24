const add_task = document.querySelector("#add_todo");
const addBtn = document.querySelector(".add");
const todo = document.querySelector(".todo");


addBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (add_todo.value == "") {
        alert("Please add some task!!!");
    }
    else {
        const task = add_todo.value;

        const todo_list = document.createElement("div");
        todo_list.classList.add("todo_container");
        todo.appendChild(todo_list);
        
        const todo_list_elt = document.createElement("div");
        todo_list_elt.classList.add("todo_list");
        todo_list.appendChild(todo_list_elt);

        const todo_input = document.createElement("input");
        todo_input.classList.add("mytodo");
        todo_input.value = task;
        todo_input.setAttribute("readonly", "readonly")
        todo_list_elt.appendChild(todo_input);

        const actionBtns = document.createElement("div");
        actionBtns.classList.add("action_btns");
        todo_list.appendChild(actionBtns);

        const editBtn = document.createElement("div");
        editBtn.classList.add("edit");
        editBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i>';
        actionBtns.appendChild(editBtn);

        const dltBtn = document.createElement("div");
        dltBtn.classList.add("dlt");
        dltBtn.innerHTML = '<i class="fa-solid fa-trash"></i>';
        actionBtns.appendChild(dltBtn);

        editBtn.addEventListener("click", () => {
            if (editBtn.innerHTML == '<i class="fa-solid fa-pen-to-square"></i>') {
                todo_input.removeAttribute("readonly");
                editBtn.innerHTML = '<i class="fa-solid fa-floppy-disk"></i>';
                todo_input.focus();
            }
            else {
                todo_input.setAttribute("readonly", "readonly");
                editBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i>';
            }
        })


        dltBtn.addEventListener("click", () => {
            todo.removeChild(todo_list);
        })

    }
    add_task.value = " ";
    saveData();

})

function saveData(){
    localStorage.setItem("data", todo_list.innerHTML);
}

function showTask() {
    todo.innerHTML = localStorage.getItem("data");
}
showTask();










