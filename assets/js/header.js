function markSelected(select_id, value) {
    select = document.getElementById(select_id);

    for (option of select.options) {
        if (option.text === value) {
            option.selected = true;
            select.title = value;
        }
    }
}

function openModal(modalId, backdropId) {
    var modal = document.getElementById(modalId);
    document.getElementById(backdropId).style.display = "block";
    modal.style.display = "block";
    modal.className += "show";
}

function closeModal(modalId, backdropId) {
    var modal = document.getElementById(modalId);

    document.getElementById(backdropId).style.display = "none";
    modal.style.display = "none";
    modal.className += modal.className.replace("show", "");
}

function setCloseOnClick(modalId, backdropId) {
    var modal = document.getElementById(modalId);

    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal(modalId, backdropId);
        }
    };
}

// Overloads
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
    modal.className += "show";
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
    modal.className += modal.className.replace("show", "");
}

function setCloseOnClick(modalId) {
    var modal = document.getElementById(modalId);

    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal(modalId);
        }
    };
}
// End overloads

function reflect(input) {
    var mirror = document.getElementById(input.id + "_m");
    mirror.innerHTML = input.value;

    input.onchange = () => {
        mirror.innerHTML = input.value;
    };

    input.onkeyup = () => {
        mirror.innerHTML = input.value;
    };
}

function mirror(tags, interests) {
    var inputs = [];

    tags.forEach((tag) => {
        inputs = inputs.concat(Array.from(document.getElementsByTagName(tag)));
    });

    inputs = Array.from(inputs).filter((input) => {
        return interests.includes(input.id);
    });

    inputs.forEach((input) => {
        reflect(input);
    });
}
