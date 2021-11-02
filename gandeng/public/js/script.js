/* HOME PAGE */
/* carousel items*/
// $('.carousel').carousel({
//         pause: "false"
// });

function switchDepartment(id) {
    var selected = document.getElementById(id)
    var buttonParent = selected.parentElement
    var buttons = buttonParent.children

    var memberParent = document.getElementById('department-container')
    var members = memberParent.children
    var selectedIdx

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('nav-active')
        
        if (buttons[i].id === id) {
            selectedIdx = i
            buttons[i].classList.add('nav-active')
        }
    }

    for (var i = 0; i < members.length; i++) {
        members[i].classList.add('d-none')

        if (selectedIdx === i) {
            members[i].classList.remove('d-none')
        }
    }
}