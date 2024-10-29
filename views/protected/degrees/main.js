const menu_options = document.getElementById("menu-options");
const selectElement = document.getElementById("select-degree-id");
const render_edit_degree = document.getElementById("render-edit-degree");

const renderCreate = () => {
    const render_create = document.getElementById("render-create");
    render_create.style.display = "block";
}

const renderDelete = () => {
    const render_delete = document.getElementById("render-delete");
    render_delete.style.display = "block";
}

const renderUpdate = () => {
    const render_update = document.getElementById("render-update");
    render_update.style.display = "block";
}

const noRenderCreate = () => {
    const render_create = document.getElementById("render-create");
    render_create.style.display = "none";
}

const noRenderUpdate = () => {
    const render_update = document.getElementById("render-update");
    render_update.style.display = "none";
    render_edit_degree.style.display = "none";
}

const noRenderDelete = () => {
    const render_delete = document.getElementById("render-delete");
    render_delete.style.display = "none";
}

const handleClick = (e) => {
    const item = e.target;
    const chousen_option = item.getAttribute("data-value");
    switch (chousen_option) {
        case "create":
            renderCreate();
            noRenderUpdate();
            noRenderDelete();
            break;
        case "delete":
            renderDelete();
            noRenderCreate();
            noRenderUpdate();
            break;
        case "update":
            renderUpdate();
            noRenderCreate();
            noRenderDelete();
            break;
        default:
            noRenderCreate();
            noRenderUpdate();
            noRenderDelete();
    }
}

Array.from(menu_options.children).map((item)=>{
    item.addEventListener("click", handleClick);
})

selectElement.addEventListener("change", (e) => {
    const degree_id = e.target.value;
    console.log(degree_id)
    if (degree_id) {
        render_edit_degree.style.display = "block";
    } else {
        render_edit_degree.style.display = "none";
    }
})